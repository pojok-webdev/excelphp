<?php
	error_reporting(E_ALL ^ E_NOTICE);
	$local = false;$nolocal = !$local;
	if($nolocal){
		require_once 'excel_reader2.php';
		$data = new Spreadsheet_Excel_Reader("example.xls");
	}
	if($local){
		require_once("padi.lib.php");
		$data = new Spreadsheet_Excel_Reader("pelanggan.2021.11.xls");
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="index.css" />
	</head>
	<body>
		<?php 
			if($nolocal){
				echo $data->dump(false,false); 
			}
		?>
		<?php 
			if($local){
				$data->import(false,false,3,'excel');
			}
		?>
	</body>
</html>
