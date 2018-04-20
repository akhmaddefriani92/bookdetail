<?php
  #$book_id      = $_GET['bookid'];
  $id = $_POST['rowid']; //escape string
     include "DB_Connect.php"      ;
     $Lib = new DB_Connect();
     $db  = $Lib->Connect();
       
         
       
    $sql_edit     = "select * from bookdetail where bookid=$id ";
    $query_edit   =  mysql_query($sql_edit, $db) or die(mysql_error());
    $data         =  mysql_fetch_assoc($query_edit);
echo $sql_edit."<br>";
echo "
     <span class='label label-default'>Departure</span>
     <br>
        <div class='row'>
                  <div class='col-md-8'>
                    <label>Name</label> 
                     <input type='hidden' class='form-control' name='bookid' value='$id'/>
                    <input type='text' class='form-control' name='name1' value='$data[name1]'/>
                   </div>
                 <div class='col-md-4'>
                   <label>FlightNO</label>
                     <input type='text' class='form-control' name='flightno1' value='$data[flightno1]'/>
                  </div>
                </div>  
                <br>    
                
                <div class='row'>
                   <div class='col-md-3'>
                      <label>PNRCODE</label>
                      <input type='text' class='form-control' name='pnrcode1' value='$data[pnrcode1]'/>
                   </div>
                   <div class='col-md-4'>
                       <label>Timelimit1</label>
                       <input type='text' class='form-control' name='timelimit1' value='$data[timelimit1]'/>
                    </div>
                 
                 
                 
                        <div class='col-md-2'>
                          <label>Depart</label>
                          <input type='text' class='form-control' name='depart' value='$data[depart]'/>
                          
                        </div>
                        <div class='col-md-2'>
                          <label>Arrive</label>
                         <input type='text' class='form-control' name='arrive' value='$data[arrive]'/>
                                              
                         </div>               
                   </div>               
                   
                   <br>
                   <div class='row'>
                   
                      <div class='col-md-2'>
                       <label>STD</label> 
                       <input type='text' class='form-control' name='std' value='$data[std]'/>
                      </div>
                    
                    <div class='col-md-2'>
                       <label>STA</label> 
                       <input type='text' class='form-control' name='sta' value='$data[sta]'/>
                     </div>                  
                    
                    <div class='col-md-2'> 
                       <label>CLASS</label> 
                       <input type='text' class='form-control' name='cls1' value='$data[cls]'/>
                       </div>
                     
                    <div class='col-md-5'>
                       <label>TIKETNO </label>
                       <input type='text' class='form-control' name='tiketno1' value='$data[tiketno1]'/>
                                              
                      </div>                  
                     </div>                   ";
                  
                  
       if ($data['flightno2'] !=''){
                    
            echo "        
                        <br>
                        <span class='label label-default'>Return</span>
                          <br>
                          <div class='row'>
                             ";
                             if ($data['name2'] != '')
                             {
                             echo "
                             <div class='col-md-8'>
                              <label>Name2</label> 
                               <input type='text' class='form-control' name='name2' value='$data[name2]'/>
                              </div>";
                             }
          echo "
                             <div class='col-md-4'>
                               <label>FlightNO2</label>
                                 <input type='text' class='form-control' name='flightno2' value='$data[flightno2]'/>
                                </div>
                            </div>
                                  
                             <br>     
                            <div class='row'>
                              <div class='col-md-3'>
                                <label>PNRCODE2</label>
                                 <input type='text' class='form-control' name='pnrcode2' value='$data[pnrcode2]'/>
                                </div>
                              <div class='col-md-4'>
                                <label>Timelimit2</label>
                                  <input type='text' class='form-control' name='timelimit2' value='$data[timelimit2]'/>
                                </div>
                              
                                  <div class='col-md-2'>
                                      <label>DEPART</label>
                                       <input type='text' class='form-control' name='depart2' value='$data[depart2]'/>
                                   </div>
                                   <div class='col-md-2'>
                                     <label>ARRIVE</label> 
                                     <input type='text' class='form-control' name='arrive2' value='$data[arrive2]'/>
                                    </div>
                                  </div>  
                                  <br>
                                   <div class='row'>
                                    <div class='col-md-2'>
                                      <label>STD2</label>
                                       <input type='text' class='form-control' name='std2' value='$data[std2]'/>
                                   </div>
                                   <div class='col-md-2'>
                                     <label>STA2</label> 
                                     <input type='text' class='form-control' name='sta2' value='$data[sta2]'/>
                                    </div>
                                    <div class='col-md-2'>
                                       <label>CLASS2</label>
                                        <input type='text' class='form-control' name='cls2' value=' $data[cls2]'/>
                                     </div>
                                     
                                  <div class='col-md-5'>
                                    <label>TIKETNO2</label>
                                        <input type='text' class='form-control' name='tiketno2' value='$data[tiketno2]'/>
                                     </div>
                                   </div>";  
            
                  }
        ?>

