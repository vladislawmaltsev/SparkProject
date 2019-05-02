<?php
class Member_Model extends CI_Model {
    public function __construct() {
       // parent::__construct();
	   $this->load->database();
    }
    
	public function add_member($data){
  
            $return = $this->db->insert('member', $data);
            if ((bool) $return === TRUE) {
                return $this->db->insert_id();
            } else {
                return $return;
            }       
			
	}	
	
	public function update_member($id,$data){
		$this->db->where('id', $id);
		$return=$this->db->update('member', $data);
		return $return;
		
	}
	
	public function authenticate_member($user_name, $password) {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('username', $user_name);
		$this->db->where('password', $password);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function authenticate_by_verification_code($vcode) {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('verification_code', $vcode);
		$this->db->where('sts =', 'inactive');
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
    
    public function authenticate_by_verification_code2($vcode) {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('verification_code', $vcode);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_member_details_by_id($id){
		/*$this->db->select('member.*, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge');
        $this->db->from('member');
		$this->db->where("id", $id);
        $Q = $this->db->get();*/
		
		$Q = $this->db->query("SELECT *, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge
							   FROM member
							   WHERE id = '".mysqli_real_escape_string($id)."'");
		
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	public function record_count($tablename,$where=''){
	
		if($where!='')
			$this->db->where($where);
		$this->db->from($tablename);
		return $this->db->count_all_results();
	}
	
	public function record_count_new($tablename,$where=''){
		$sql = "SELECT COUNT(*) AS totalrec FROM $tablename $where";
		$Q = $this->db->query($sql);
        return $Q->row('totalrec');

	}
	
	public function get_all_member($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('member');
		$this->db->order_by("id", 'DESC');
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_all_member_front($limit, $start){
		$this->db->limit($limit, $start);
		$this->db->select('*');
		$this->db->from('member');
		$this->db->where('sts','active');
		$this->db->order_by("photo", 'DESC');
		$this->db->order_by("id", 'DESC');
		
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	
	public function is_username_already_exists($username){
		$this->db->select('member.username');
        $this->db->from('member');
		$this->db->where("username", $username);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function authenticate_member_by($field, $user_name) {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where($field, $user_name);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
    }
	
	public function get_member_by_username($username){
		/*$this->db->select('*, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge');
		$this->db->from('member');
		$this->db->where("username", $username);
        $Q = $this->db->get();*/
		
		$Q = $this->db->query("SELECT *, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge
							   FROM member
							   WHERE username = '".$username."'");
		
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_member_id_by_username($username){
		$this->db->select('id');
		$this->db->from('member');
		$this->db->where("username", $username);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	
	public function get_member_details_by_ids_array($idArray){
		
		$ids = '';
		foreach($idArray as $id) {
			
			$ids .= $id.",";
			
		}
		
		$ids = rtrim(trim($ids),',');
		
		$Q = $this->db->query("SELECT name, gender, city, dob, photo, username, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge
							   FROM member
							   WHERE id IN (".$ids.")
							   ORDER BY name ASC");
        
		if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function search_member($search) {
		//$this->db->limit($limit, $start);
		
		$Q = $this->db->query("SELECT *, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge FROM `member` WHERE TRIM(CONCAT(`name`,' ',username,' ',city,country)) LIKE '%".$search."%'");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function search_member_advance($lookingFor, $age_frm, $age_to, $name, $email, $martial_status, $smoking, $country, $city) {
		//$this->db->limit($limit, $start);
		$where = '';
		$final_where='';
		if($lookingFor)
			$where.=" gender = '".$lookingFor."' AND";
		if($age_frm && $age_to)
			$where.=" FLOOR(DATEDIFF (NOW(), dob)/365) between '".$age_frm."' AND '".$age_to."' AND";
		if($name)
			$where.=" name LIKE '%".$name."%' AND";
		if($email)
			$where.=" email LIKE '%".$email."%' AND";
		if($martial_status)
			$where.=" marital_status = '".$martial_status."' AND";
		if($smoking)
			$where.=" smoking = '".$smoking."' AND";
		if($city)
			$where.=" city = '".$city."'";
		
		$where = rtrim($where, ' AND');
		if($where!='')
			$final_where = "WHERE sts='Active' AND ".$where;
		$Q = $this->db->query("SELECT *, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge  FROM `member` ".$final_where);

        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_member_username_by_id($id){
		$this->db->select('username');
		$this->db->from('member');
		$this->db->where("id", $id);
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_all_profiles(){
		$this->db->select('*');
		$this->db->from('member');
		$this->db->order_by("dated", 'DESC');
        $Q = $this->db->get();
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function delete_member($id){
		$Q = $this->db->query("Delete FROM `member` WHERE id = '".$id."'");
        $return = 1;
        return $return;
		
	}
	
	public function search_member_name($search) {
		//$this->db->limit($limit, $start);
		
		$Q = $this->db->query("SELECT * FROM `member` WHERE name LIKE '%".$search."%'");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function search_member_email($search) {
		//$this->db->limit($limit, $start);
		
		$Q = $this->db->query("SELECT * FROM `member` WHERE email LIKE '%".$search."%'");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function search_member_location($search) {
		//$this->db->limit($limit, $start);
		
		$Q = $this->db->query("SELECT * FROM `member` WHERE TRIM(CONCAT(country,' ',city)) LIKE '%".$search."%'");
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function get_member_name_by_id($id){
		$Q = $this->db->query("SELECT name
							   FROM member
							   WHERE id = '".$id."'");
		
        if ($Q->num_rows > 0) {
            $row = $Q->row();
			$return = $row->name;
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	public function update_member_privacy($id,$data){
		$this->db->where('mem_id', $id);
		$return=$this->db->update('privacy_settings', $data);
		return $return;
		
	}
	
	public function add_member_privacy($data) {
		
		$return = $this->db->insert('privacy_settings', $data);
		if ((bool) $return === TRUE) {
			return $this->db->insert_id();
		} else {
			return $return;
		}  
		
	}
	
	public function delete_member_privacy($id){
		$Q = $this->db->query("Delete FROM `privacy_settings` WHERE mem_id = '".$id."'");
        $return = 1;
        return $return;
		
	}
	
	public function get_member_privacy_by_mem_id($id){
		
		$Q = $this->db->query("SELECT *
							   FROM privacy_settings
							   WHERE mem_id = '".$id."'");
		
        if ($Q->num_rows > 0) {
            $return = $Q->row();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	
	}
	
	public function get_near_located_member($city){
		/*$this->db->select('*, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge');
		$this->db->from('member');
		$this->db->where("username", $username);
        $Q = $this->db->get();*/
		
		$Q = $this->db->query("SELECT *, FLOOR(DATEDIFF (NOW(), dob)/365) AS mAge
							   FROM member
							   WHERE LOWER(city) = '".strtolower($city)."'");
		
        if ($Q->num_rows > 0) {
            $return = $Q->result();
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
	
	public function get_member_by_email($email){
		$Q = $this->db->query("SELECT verification_code FROM member WHERE email = '".$email."'");
		
        if ($Q->num_rows > 0) {
            $return = $Q->row('verification_code');
        } else {
            $return = 0;
        }
        $Q->free_result();
        return $return;
	}
	
}
?>