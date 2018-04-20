<?php

error_reporting(E_ALL);

  include"DB_Connect.php"  ;
  $Lib      = new DB_Connect();
  $dbhandle = $Lib->Connect();
 
 
  $id = $_POST['rowid']; //escape string
           

       
    $sql_edit     = "select * from bookdetail where bookid=$id ";
    $query_edit   =  mysql_query($sql_edit, $dbhandle) or die(mysql_error());
    $data         =  mysql_fetch_assoc($query_edit);
#echo $sql_edit."<br>";
echo " <table class='table'>
          <tr><td>1.</td><td>$data[name1]</td><td>$data[bday1]</td></tr>";
                  if ($data["name2"]!='') { 
                     echo "<tr><td>2.</td><td>$data[name2]</td><td>$data[bday2]</td></tr>";
                   }
                   if ($data["name3"]!='') { 
                  echo"<tr><td>3.</td><td>$data[name3]</td><td>$data[bday3]</td></tr>";                     
                    }
                    if ($data["name4"]!='') { 
                  echo"<tr><td>4.</td><td>$data[name4]</td><td>$data[bday4]</td></tr>";                     
                    }
                    if ($data["name5"]!='') { 
                  echo"<tr><td>5.</td><td>$data[name5]</td><td>$data[bday5]</td></tr>";                     
                    }
               if ($data["name6"]!='') { 
                  echo"<tr><td>6.</td><td>$data[name6]</td><td>$data[bday6]</td></tr>";                     
                   }
                   if ($data["name7"]!='') { 
                  echo"<tr><td>7.</td><td>$data[name7]</td><td>$data[bday7]</td></tr>";                     
                   }
          
     echo "
          <tr>
              <td colspan='3'><b>TIKETNO</b></td>
          </tr>
          <tr>
               <td>Tiket No 1</td>
               
               <td colspan=2>: $data[tiketno1]</td> 
          </tr>";
          if ($data["tiketno2"]!=''){
               echo "
                 <tr>
                    <td>Tiket No 2</td>
                    <td colspan=2>: $data[tiketno2]</td> 
               </tr>";
               
          }
          
        echo "
          <tr>
              <td colspan='3'><b>NTA</b></td>
          </tr>
          <tr>
               <td>NTA1</td>
               
               <td colspan=2>: $data[nta]</td> 
          </tr>";
          if ($data["nta2"]!=''){
               echo "
                 <tr>
                    <td>NTA2</td>
                    <td colspan=2>: $data[nta2]</td> 
               </tr>";
               
          }  
      echo "
      <tr>
      <td>Adult Fare 1</td>
      <td colspan=2>: $data[hrg1]</td>
      </tr>
      
      <tr>
      <td>Adult Fare 2</td>
      <td colspan=2>: $data[hrg2]</td>
      </tr>
      
      <tr>
      <td>Child Fare 1</td>
      <td colspan=2>: $data[hrgchd]</td>
      </tr>
      
      <tr>
      <td>Child Fare 2</td>
      <td colspan=2>: $data[hrgchd2]</td>
      </tr>
      
      <tr>
      <td>Infant Fare 1</td>
      <td colspan=2>: $data[hrginf]</td>
      </tr>
      
      <tr>
      <td>Infant Fare 2</td>
      <td colspan=2>: $data[hrginf2]</td>
      </tr>
      
      <tr>
      <td><b>TOTAL</b></td>
      
      <td colspan=2>: <b>$data[total]</b></td>
      </tr>
      
      
     </table>
         ";
                  
                  
   
        ?>
