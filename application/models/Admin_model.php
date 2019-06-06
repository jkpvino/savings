<?php 
class Admin_model extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function isexists($username, $password){
        $limit = 1;
        $query = $this->db->get_where('SHOP_ADMIN', array('username' => $username,'password' => md5($password), 'status' => 1 ), $limit);
        if($query->num_rows() == 1)
            return $query->result();
        else
            return false;
    }

    public function getadmininfobyId($id){
        $limit = 1;
        $query = $this->db->get_where('SHOP_ADMIN', array('id' => $id, 'status' => 1 ), $limit);
        if($query->num_rows() == 1)
            return $query->result();
        else
            return false;
    }
    public function saveAdmin($records){
        $query = $this->db->insert('SHOP_ADMIN',$records);
        return $this->db->insert_id();
    }
    public function deleteAdmin($id){
        $this->db->where('id',$id);
        $this->db->delete('SHOP_ADMIN');
        return true;
    }

    public function isadminuserexists($username){
        $limit = 1;
        $query = $this->db->get_where('SHOP_ADMIN', array('username' => $username), $limit);
        if($query->num_rows() == 1)
            return $query->result();
        else
            return false;
    }

    public function getUsersCount(){
        return $this->db->count_all('T_APP_USERS');
    }

    public function getadminlist() {
        $aColumns = array(
            'id',
            'profileimage',
            'username',
            'roles',
            'status',
            'created_at'
        );
        $sIndexColumn = "id";

        /* Total data set length */
        $sQuery = "SELECT COUNT('".$sIndexColumn."') AS row_count FROM SHOP_ADMIN";
        $rResultTotal = $this->db->query($sQuery);
        $aResultTotal = $rResultTotal->row();
        $iTotal = $aResultTotal->row_count;

        /*
         * Paging
         */
        $sLimit = "";
        $iDisplayStart = $this->input->get_post('start', true);
        $iDisplayLength = $this->input->get_post('length', true);
        if (isset($iDisplayStart) && $iDisplayLength != '-1') {
            $sLimit = "LIMIT " . intval($iDisplayStart) . ", " .
            intval($iDisplayLength);
        }

        $uri_string = $_SERVER['QUERY_STRING'];
        $uri_string = preg_replace("/\%5B/", '[', $uri_string);
        $uri_string = preg_replace("/\%5D/", ']', $uri_string);

        $get_param_array = explode("&", $uri_string);
        $arr = array();
        foreach ($get_param_array as $value) {
            $v = $value;
            $explode = explode("=", $v);
            $arr[$explode[0]] = $explode[1];
        }

        $index_of_columns = strpos($uri_string, "columns", 1);
        $index_of_start = strpos($uri_string, "start");
        $uri_columns = substr($uri_string, 7, ($index_of_start - $index_of_columns - 1));
        $columns_array = explode("&", $uri_columns);
        $arr_columns = array();
        foreach ($columns_array as $value) {
            $v = $value;
            $explode = explode("=", $v);
            if (count($explode) == 2) {
                $arr_columns[$explode[0]] = $explode[1];
            } else {
                $arr_columns[$explode[0]] = '';
            }
        }

        /*
         * Ordering
         */
        $sOrder = "ORDER BY ";
        $sOrderIndex = $arr['order[0][column]'];
        $sOrderDir = $arr['order[0][dir]'];
        $bSortable_ = $arr_columns['columns[' . $sOrderIndex . '][orderable]'];
        if ($bSortable_ == "true") {
            $sOrder .= $aColumns[$sOrderIndex] .
                    ($sOrderDir === 'asc' ? ' asc' : ' desc');
        }

        /*
         * Filtering
         */
        $sWhere = "";
        $sSearchVal = $arr['search[value]'];
        if (isset($sSearchVal) && $sSearchVal != '') {
            $sWhere = "WHERE (";
            for ($i = 0; $i < count($aColumns); $i++) {
                $sWhere .= $aColumns[$i] . " LIKE '%" . $this->db->escape_like_str($sSearchVal) . "%' OR ";
            }
            $sWhere = substr_replace($sWhere, "", -3);
            $sWhere .= ')';
        }

        /* Individual column filtering */
        $sSearchReg = $arr['search[regex]'];
        for ($i = 0; $i < count($aColumns); $i++) {
            $bSearchable_ = $arr['columns[' . $i . '][searchable]'];
            if (isset($bSearchable_) && $bSearchable_ == "true" && $sSearchReg != 'false') {
                $search_val = $arr['columns[' . $i . '][search][value]'];
                if ($sWhere == "") {
                    $sWhere = "WHERE ";
                } else {
                    $sWhere .= " AND ";
                }
                $sWhere .= $aColumns[$i] . " LIKE '%" . $this->db->escape_like_str($search_val) . "%' ";
            }
        }

        /*
         * SQL queries
         * Get data to display
         */
        $sQuery = "SELECT SQL_CALC_FOUND_ROWS " . str_replace(" , ", " ", implode(", ", $aColumns)) . "
        FROM SHOP_ADMIN
        $sWhere
        $sOrder
        $sLimit
        ";
        $rResult = $this->db->query($sQuery);

        /* Data set length after filtering */
        $sQuery = "SELECT FOUND_ROWS() AS length_count";
        $rResultFilterTotal = $this->db->query($sQuery);
        $aResultFilterTotal = $rResultFilterTotal->row();
        $iFilteredTotal = $aResultFilterTotal->length_count;

        /*
         * Output
         */
        $sEcho = $this->input->get_post('draw', true);
        $output = array(
            "draw" => intval($sEcho),
            "recordsTotal" => $iTotal,
            "recordsFiltered" => $iFilteredTotal,
            "data" => array()
        );
        foreach ($rResult->result_array() as $aRow) {
            $row = array();
            foreach ($aColumns as $col) {
                $row[] = $aRow[$col];                
            }

            if($row[1]){
                $row[1] = '<img class="profileimg img-circle img-sm" src="'.base_url().'assests/admin/assets/uploads/users/'.$row[1].'">';    
            }else{
                $row[1] = '<img class="profileimg img-circle img-sm" src="'.base_url().'assests/admin/assets/images/placeholder.jpg">';
            }

            if($row[4] == 1)
                $row[4] = '<span class="label label-success"> Active </span>';
            else
                $row[4] = '<span class="label label-danger"> InActive </span>';


            $e_href=""; $d_href="";
            $row[6] = '<ul class="icons-list">
                            <li class="dropdown">
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
                                    <i class="icon-menu9"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href='.$e_href.'><i class="icon-file-excel"></i> View / Edit </a></li>
                                    <li><a href='.$d_href.'><i class="icon-file-excel"></i> Delete </a></li>
                                </ul>
                            </li>
                        </ul>';


            $output['data'][] = $row;
        }
        return $output;
    }
}