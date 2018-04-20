<?php
    /*
     * Script:    DataTables server-side script for PHP and MySQL
     * Copyright: 2010 - Allan Jardine, 2012 - Chris Wright
     * License:   GPL v2 or BSD (3-point)
     */
     
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
     * Easy set variables
     */
     
    /* Array of database columns which should be read and sent back to DataTables. Use a space where
     * you want to insert a non-database field (for example a counter or static image)
     */
    $aColumns = array('bookid',
                      'bookdate',
                       'flightno1',
                       'pnrcode1',
                       'timelimit1',
                       'depart',
                       'std',
                       'arrive',
                       'sta',
                       'name1'
                       );
     
    /* Indexed column (used for fast and accurate table cardinality) */
    $sIndexColumn = "bookid";
     
    /* DB table to use */
    #bookdetail = "ajax";
     
    include "DB_Connect.php";
    
    $connect = new DB_Connect();
    $dbhandle = $connect->Connect();
    
    $date1 = $_POST["date1"];
    $date2 = $_POST["date2"];
     
    /*
     * Paging
     */
    $sLimit = "";
    if ( isset( $_POST['iDisplayStart'] ) && $_POST['iDisplayLength'] != '-1' )
    {
        $sLimit = "LIMIT ".intval( $_POST['iDisplayStart'] ).", ".
            intval( $_POST['iDisplayLength'] );
    }
     
     
    /*
     * Ordering
     */
    $sOrder = "";
    if ( isset( $_POST['iSortCol_0'] ) )
    {
        $sOrder = "ORDER BY  ";
        for ( $i=0 ; $i<intval( $_POST['iSortingCols'] ) ; $i++ )
        {
            if ( $_POST[ 'bSortable_'.intval($_POST['iSortCol_'.$i]) ] == "true" )
            {
                $sOrder .= $aColumns[ intval( $_POST['iSortCol_'.$i] ) ]."
                    ".($_POST['sSortDir_'.$i]==='asc' ? 'asc' : 'desc') .", ";
            }
        }
         
        $sOrder = substr_replace( $sOrder, "", -2 );
        if ( $sOrder == "ORDER BY" )
        {
            $sOrder = "";
        }
    }
     
     
    /*
     * Filtering
     * NOTE this does not match the built-in DataTables filtering which does it
     * word by word on any field. It's possible to do here, but concerned about efficiency
     * on very large tables, and MySQL's regex functionality is very limited
     */
    $sWhere = "where bookdate between '$date1' and '$date2'";
    if ( isset($_POST['sSearch']) && $_POST['sSearch'] != "" )
    {
        $sWhere .= "AND (";
        for ( $i=0 ; $i<count($aColumns) ; $i++ )
        {
            if ( isset($_POST['bSearchable_'.$i]) && $_POST['bSearchable_'.$i] == "true" )
            {
                $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string( $_POST['sSearch'] )."%' OR ";
            }
        }
        $sWhere = substr_replace( $sWhere, "", -3 );
        $sWhere .= ')';
    }
     
    /* Individual column filtering */
    for ( $i=0 ; $i<count($aColumns) ; $i++ )
    {
        if ( isset($_POST['bSearchable_'.$i]) && $_POST['bSearchable_'.$i] == "true" && $_POST['sSearch_'.$i] != '' )
        {
            if ( $sWhere == "" )
            {
                $sWhere = "WHERE ";
            }
            else
            {
                $sWhere .= " AND ";
            }
            $sWhere .= $aColumns[$i]." LIKE '%".mysql_real_escape_string($_POST['sSearch_'.$i])."%' ";
        }
    }
     
     
    /*
     * SQL queries
     * Get data to display
     */
    $sQuery = "
        SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumns))."
        FROM   bookdetail
        $sWhere
        $sOrder
        $sLimit
    ";
    $rResult = mysql_query( $sQuery, $dbhandle ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
     
    /* Data set length after filtering */
    $sQuery = "
        SELECT FOUND_ROWS()
    ";
    $rResultFilterTotal = mysql_query( $sQuery, $dbhandle ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
    $aResultFilterTotal = mysql_fetch_array($rResultFilterTotal);
    $iFilteredTotal = $aResultFilterTotal[0];
     
    /* Total data set length */
    $sQuery = "
        SELECT COUNT(".$sIndexColumn.")
        FROM   bookdetail where bookdate between '$date1' and '$date2'
    ";
    $rResultTotal = mysql_query( $sQuery, $dbhandle ) or fatal_error( 'MySQL Error: ' . mysql_errno() );
    $aResultTotal = mysql_fetch_array($rResultTotal);
    $iTotal = $aResultTotal[0];
     
     
    /*
     * Output
     */
    
     $row = array();
    while ( $aRow = mysql_fetch_array( $rResult ) )
    {
        $nestedData = array();	
		$nestedData["bookdate"]  = $aRow["bookdate"];
		$nestedData["flightno1"] = $aRow["flightno1"];
        $nestedData["pnrcode1"]  = $aRow["pnrcode1"];
        $nestedData["timelimit1"] = $aRow["timelimit1"];
		$nestedData["depart"]   = $aRow["depart"];
		$nestedData["std"]      = $aRow["std"];
		$nestedData["arrive"]   = $aRow["arrive"];
		$nestedData["sta"]      = $aRow["sta"];
		$nestedData["name1"]    = "<a href='#myModal2' id='custId' data-toggle='modal' data-id='$aRow[bookid]'>$aRow[name1]</a>";
		$nestedData["aksi"]     ="<a class='btn btn-primary btn-xs'href='#myModal' id='custId' data-toggle='modal' data-id='$aRow[bookid]'><i class='glyphicon glyphicon-pencil'></i></a>
                                  <a class='btn btn-danger btn-xs confirmation'  href='delete-bagtag.php?id=$aRow[bookid]'  ><i class='glyphicon glyphicon-trash'></i></a>";
        $row[]=$nestedData;
  
        
        
    }
    #$output['aaData'][] = $row;
     
    $output = array(
        "sEcho" => intval($_POST['sEcho']),
        "iTotalRecords" => $iTotal,
        "iTotalDisplayRecords" => $iFilteredTotal,
        "aaData" =>$row
    );
    
    echo json_encode( $output );
?>