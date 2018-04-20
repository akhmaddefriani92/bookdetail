<?php
class Bookdetail {
    
    private $db;
    
    function __construct(){
        require "DB_Connect.php";
        $this->db = new DB_Connect();
        
    }
    
    public function CekBook(){
        $this->db->Connect();
        $sql   = "select * from bookdetail";
        $query = mysql_query($sql);   
        if ($query){
            while ($row=mysql_fetch_assoc($query)){
                    $array_result[] = $row;
                
            }
        }
        
       return $array_result; 
    }
    
    
    
    
    
}
?>