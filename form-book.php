<?php
include "Bookdetail.php";
$Lib = new Bookdetail();


?>
<html>
<body>
<form method="POST" action=''>
<table border=0>
<tr>
    <td>Tanggal 1</td>
    <td><input type="text" name="date1" value="2015-01-07" /></td>
</tr>
<tr>
    <td>Tanggal 2</td>
    <td><input type="text" name="date2" value="2015-02-01"/></td>
</tr>
<tr>
    
    <td><input type="submit" name="submit"  value="submit"/></td>
</tr>
</table>
</form>
<?php
if (isset($_POST['submit'])){
    $date1  = $_POST['date1'];
    $date2  = $_POST['date2'];
    $hasil = $Lib->CekBook($date1, $date2);
    #print_r($hasil);
    ?>
    
    <table border=0>
        <tr>
            <td>BookDate</td>
            <td>FlightNo</td>
            <td>PNR1</td>
            <td>TMLMT1</td>
            <td>ROUTE</td>
            <td>STD</td>
            <td>STA</td>
            <td>PASSENGER</td>
        </tr>
    <?php
        

    foreach($hasil as $row){
        
        
        echo "<tr>";
            echo "<td>$row[bookdate]</td>";
            echo "<td>$row[flightno1]</td>";
            echo "<td>$row[pnrcode1]</td>";
            echo "<td>$row[timelimit1]</td>";
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
            echo "<td>$row[name1]</td>";
            
        echo "</tr>";
    }
    
    echo '</table>';
    
}




?>


</body>
</html>