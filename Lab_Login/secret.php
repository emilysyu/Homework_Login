<?php 

if (!isset($_COOKIE["userName"]))
{
	setcookie("lastPage", "secret.php");
	header("Location: login.php");
	exit();
	
}

?>
<style type="text/css">
.mytable { background-color:#FFFFE0;border-collapse:collapse;color:#010101;font-size:35px; }
.mytable th { background-color:#BDB76B ;color:red ;width:50%; }

.mytable th { padding:50px;border:0; }
.mytable td { border-bottom:5px dotted #BDB76B;color:brown }
</style>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
</head>
<body>

<table class = mytable align="center">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 － 會員專用</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline">This page for member only.</td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC"><a href="index.php">回首頁</a></td>
  </tr>
</table>


</body>
</html>