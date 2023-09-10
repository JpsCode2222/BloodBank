<?php
include("conn.php");
$sql_query = "SELECT * FROM doner_list";
$res = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($res) ) {
	$data[] = $rows;
}	
	$filename = "Current_Doners".date('Ymd') . ".xls";			
	header("Content-Type: .ms-excel");
	header("Content-Disposition: attachment; filename=\"$filename\"");	
	$show_coloumn = false;
	if(!empty($data)) {
	  foreach($data as $record) {
		if(!$show_coloumn) {
		  // display field/column names in first row
		  echo implode("\t", array_keys($record)) . "\n";
		  $show_coloumn = true;
		}
		echo implode("\t", array_values($record)) . "\n";
	  }
	}
	exit;  
?>