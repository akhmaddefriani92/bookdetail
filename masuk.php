<?php
session_start();
if (empty($_SESSION['namaadmin'])) // Jika Session kosong maka tidak bisa Akses Halaman Ini alias kembali
{
 header('location:index.php');
}
else
{
 ?> 
	
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DEMO SERVERSIDE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables/jquery.dataTables.css">

  
  <!--jquery datepicker-->
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="jquery-ui/jquery-ui.theme.css">
                
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/select2.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>CO</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b> MCOJAYA</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $_SESSION['namaadmin']?></span><span class="caret"></span>
                
            </a>
             <ul class="dropdown-menu">
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-primary btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">ADMINER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
        <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        BookDetail
        <small>Custom Defri</small>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <form action="" method="post">
            <div class="box-body">
              
              <div class="form-group">
                <label>Date 1:</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" name="date1" id="datepicker">
                </div>
                
              </div>
              

              
              <div class="form-group">
                <label>Date 2:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" name="date2" id="reservation">
                </div>
              
              </div>
              

              
              <div class="form-group">
                
                <button type="submit" class="btn btn-primary btn-lg" name="cari">Submit</button>
                
              </div>
              
          </form>
            </div>
            
          </div>
          
      
      <?php
        if (isset($_POST['cari'])){     
        
            $date1 = $_POST['date1'];
            $date2 = $_POST['date2'];
        }else{
            $date1 = date("Y-m-d", strtotime("2014-01-05"));
            $date2 = date("Y-m-d", strtotime("2016-04-01"));
        }    
      ?> 
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Keseluruhan</h3>
            </div>
            <div class="box-body">
             
      <table class="table table-hover" id="view_table">
        <thead style="background: #CCC;">
        <tr>
            <th>BookDate</th>
            <th>FlightNo</th>
            <th>PNR1</th>
            <th>TMLMT1</th>
            <th>DEP</th>
            <th>STD</th>
            <th>ARR</th>
            <th>STA</th>
            <th>PASSENGER</th>
            <th>aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
       
     
  
         /*
          $j_data = array();
        foreach($data as $row){
        echo "<tr>";
            echo "<td>$row[bookdate]</td>";
            if ($row['flightno2']!=''){
              echo "<td>$row[flightno1] <br>  $row[flightno2]</td>";
            }
            else{
            echo "<td>$row[flightno1]</td>";
            }
            if ($row['pnrcode2']!=''){
              echo "<td>$row[pnrcode1] <br>  $row[pnrcode2]</td>";
            }
            else{
            echo "<td>$row[pnrcode1]</td>";
            }
            if ($row['timelimit2']!='0000-00-00 00:00:00'){
            echo "<td>$row[timelimit1] <br>  $row[timelimit2]</td>";
            }
            else{
              echo "<td>$row[timelimit1]</td>";
            }
            if ($row['depart2']!=''){
            echo "<td>$row[depart]  $row[arrive] <br>  $row[depart2]  $row[arrive2]</td>";
            }else{
            echo "<td>$row[depart]  $row[arrive]</td>";
            }
            if ($row['std2']!=''){
            echo "<td>$row[std] <br> $row[std2]</td>";
            }else{
            echo "<td>$row[std]</td>";
            }
            if ($row['sta2']!=''){
            echo "<td>$row[sta] <br> $row[sta2]</td>";
            }else{
            echo "<td>$row[sta]</td>";
            }
            echo "<td>
            <a href='#myModal2' id='custId' data-toggle='modal' data-id='$row[bookid]'>$row[name1]</a>
            </td>";
            
        echo "</tr>";
        $temp = array();
        $temp["depart"] = $row["depart"];
        $temp["depart2"] = $row["depart2"];
        $temp["arrive"] = $row["arrive"];
        $temp["arrive2"] = $row["arrive2"];
        $temp["std"] = $row["std"];
        $temp["sta"] = $row["sta"];
        $temp["flightno1"] = $row["flightno1"];
        
        array_push($j_data, $temp);
        
    }
        /*
        foreach($j_data as $num){
          echo $num["flightno1"];
          echo $num["depart"];
          echo $num["arrive"];
          echo $num["depart2"];
          echo $num["arrive2"];
          echo $num["std"];
          echo $num["sta"]."<br>";
          
        }
        */
          ?>
        </tbody>
 
              
      </table>        
              
<!--modal -->
<div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Passenger Details</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data">
                    <!--Here Will show the Data-->
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog" role="document">
      <form action="#" id="form" class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Passenger</h4>
            </div>
            <div class="modal-body">
                <div class="fetched-data">
                    <!--Here Will show the Data-->
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="update"name='update'>Save</button>
            </div>
        </div>
      </form>
    </div>
</div>


            </div><!-- /.box-body -->
      </div><!-- /.box -->
     
      <!-- Your Page Content Here -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2015 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.0 -->
<script src="plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!--<script type="text/javascript" src="jquery-ui/jquery.js"></script>-->
<script type="text/javascript" src="jquery-ui/jquery-ui.js"></script>
<!-- Select2 -->
<script src="plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<!--<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>-->



<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>


<!-- Page script -->
<script>
  $(document).ready(function () {
       
  $(function() {
   $("#datepicker, #reservation").datepicker({
       defaultDate:'2015-01-01',
      // changeMonth:true,
       //changeYear:true,
       dateFormat:"yy-mm-dd",
       numberOfMonths:2
          });
        });
 
      /*$("#view_table").DataTable();*/
      var date1 = "<?php echo $date1; ?>";
      var date2 = "<?php echo $date2; ?>";


       var dataTable = $('#view_table').DataTable({
          "bProcessing": true,
          "bServerSide": true,
          "language": {
            "processing": "BENTARAN YA"
            },
          "sAjaxSource": "getserverside.php",
          
          "fnServerData": function ( sSource, aoData, fnCallback, oSettings ){
            aoData.push( { "name": "date1", "value":date1  } );
            aoData.push( { "name": "date2", "value":date2 } );
            oSettings.jqXHR = $.ajax( {
                  "dataType": 'json',
                  "type": "POST",
                  "url": sSource,
                  "data": aoData,
                  "success": fnCallback
            } );
          },
          
          "columns": [
                        { "data": "bookdate"},                        
                        { "data": "flightno1" },
                        { "data": "pnrcode1" },
                        { "data": "timelimit1" },
                        { "data": "depart" },
                        { "data": "std" },
                        { "data": "arrive" },
                        { "data": "sta" },
                        { "data": "name1" },
                        { "data": "aksi" }
          
                    ]   
          
      });

    $('#myModal').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : 'edit-passenger.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });  
    
    $('#myModal2').on('show.bs.modal', function (e) {
        var rowid = $(e.relatedTarget).data('id');
        $.ajax({
            type : 'POST',
            url : 'fetch_passenger.php', //Here you will fetch records 
            data :  'rowid='+ rowid, //Pass $id
            success : function(data){
            $('.fetched-data').html(data);//Show fetched data from database
            }
        });
     });  
      
    
    // ketika tombol simpan ditekan
		$("#update").on("click", function (e) {
			var url = "update-passenger.php";

			// mengambil nilai dari inputbox, textbox dan select
			var v_bookid    = $('input:text[name=bookid]').val();
			var v_flightno1 = $('input:text[name=flightno1]').val();
			var v_pnrcode1  = $('input:text[name=pnrcode1]').val();
			var v_timelimit1   = $('input:text[name=timelimit1]').val();
			var v_depart  = $('input:text[name=depart]').val();
            var v_std  = $('input:text[name=std]').val();
            var v_arrive  = $('input:text[name=arrive]').val();
            var v_sta  = $('input:text[name=sta]').val();

            $.ajax({
              url : "update-passenger.php",
              type: "POST",
              data : {
                      flightno1:v_flightno1                      
              },
              success: function (msg){
                  alert(msg);
              }
            });
            
            
            
		
		});
    
    
  });
</script>

<?php
}//session admin

?>


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
