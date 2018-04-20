<?php
class DB_Connect{
    
    public function Connect(){
        $dbhandle = mysql_connect("localhost", "root", "mcojaya") or die (mysql_error());
                    mysql_select_db("jualt", $dbhandle) or die (mysql_error());      
        
        return $dbhandle;
    }
    
    public function Close(){
        mysql_close();
        
    }
    
    
    
    
}

?>