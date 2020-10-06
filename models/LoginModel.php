<?php 
class TaskModel extends CI_Model{
    
    
   
    public function checkUsers() 
    {
        $check_query = "select username,email from user";
        $query = $this->db->query($check_query);
        return $query->result_array();
    }
   

}
?>