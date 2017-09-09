<html> 
<head> 
<title><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width; initial-scale=1.0"/>
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
	<link href="bootstrap/css/custom.css" rel="stylesheet" type="text/css" />

	<script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
<title>Hello World App </title>
</head> 

<body>
<div class="container-fluid">
<div class="row">
<?php
 for($num=1;$num<=5;$num++){
	 echo "<h$num> Hello World </h>";
 }
?>
</div>
</div>
</body>

</html>