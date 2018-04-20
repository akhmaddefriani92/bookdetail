<?php

error_reporting(E_ALL);

  include"DB_Connect.php"  ;
  $Lib      = new DB_Connect();
  $dbhandle = $Lib->Connect();
 
 
  $id = $_POST['rowid']; //escape string
           

       
    $sql_edit     = "select * from bookdetail where bookid=$id ";
    $query_edit   =  mysql_query($sql_edit, $dbhandle) or die(mysql_error());
    $data         =  mysql_fetch_assoc($query_edit);

    echo "  <div class='row'>
              <div class='col-md-4'>
                <label>Flightno1</label>
                <input type='hidden' class='form-control' name='bookid' value='$id'/>
                <input type='text' class='form-control' name='flightno1' value='$data[flightno1]'/>
              </div>
              <div class='col-md-4'>
                <label>PNRCODE</label>
                <input type='text' class='form-control' name='pnrcode1' value='$data[pnrcode1]'/>
              </div>
              <div class='col-md-4'>
                <label>TimeLimit1</label>
                <input type='text' class='form-control' name='timelimit1' value='$data[flightno1]'/>
              </div>
            </div><br>
            
            <div class='row'>
              <div class='col-md-3'>
                <label>Depart</label>
                <input type='text' class='form-control' name='depart' value='$data[depart]'/>
              </div>
              <div class='col-md-3'>
                <label>STD</label>
                <input type='text' class='form-control' name='std' value='$data[std]'/>
              </div>
              <div class='col-md-3'>
                <label>Arrive</label>
                <input type='text' class='form-control' name='arrive' value='$data[arrive]'/>
              </div>
              <div class='col-md-3'>
                <label>STA</label>
                <input type='text' class='form-control' name='sta' value='$data[sta]'/>
              </div>
            </div><br>
            
                        
         ";


?>
