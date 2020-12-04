<?php
$ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="">

	<title>PURGY DOS</title>
</head>
<!-- PHP DOS, coded by EXE -->
<style type="text/css">
<!--
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	font-style: normal;
	line-height: normal;
	color: #FFFFFF;
	background-color: #000000;
}



-->
</style>
<!-- PHP DOS, coded by EXE -->
<body>
<center><br><br>
<img src="main3.png"><br>
<form name="input" action="function.php" method="post">
IP:
<input type="text" name="ip" size="15" maxlength="15" class="main" value = "0.0.0.0" onblur = "if ( this.value=='' ) this.value = '0.0.0.0';" onfocus = " if ( this.value == '0.0.0.0' ) this.value = '';">
&nbsp;&nbsp;&nbsp;&nbsp;Time:
<input type="text" name="time" size="14" maxlength="20" class="main" value = "time (in seconds)" onblur = "if ( this.value=='' ) this.value = 'time (in seconds)';" onfocus = " if ( this.value == 'time (in seconds)' ) this.value = '';">
&nbsp;&nbsp;&nbsp;&nbsp;Port:
<input type="text" name="port" size="5" maxlength="5" class="main" value = "port" onblur = "if ( this.value=='' ) this.value = 'port';" onfocus = " if ( this.value == 'port' ) this.value = '';">
<br><br>
<input type="submit" value="    Start Attack--->    ">
<br><br>
<center>
After you have pressed "START ATTACK" another page comes up, please wait as long as you have entered your attack time
</center>

</form>
</center>
<!-- PHP DOS, coded by EXE -->
</body>
</html>