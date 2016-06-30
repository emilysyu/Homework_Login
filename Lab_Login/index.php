<?php 

if (isset($_COOKIE["userName"]))
  $sUserName = $_COOKIE["userName"];
else 
  $sUserName = "Guest";

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
<title>Lab - index</title>
</head>
<body>

<table class = mytable align="center">
  <tr>
    <td align="center" bgcolor="#00005F"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
  
  <?php if ($sUserName == "Guest"): ?>
    <td align="center" valign="baseline"><a href="login.php">登入</a> 
  <?php else: ?>
    <td align="center" valign="baseline"><a href="login.php?logout=1">登出</a>
  <?php endif; ?>
    
    | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC"><?php echo "Welcome! " . $sUserName ?> </td>
  </tr>
</table>


</body>
</html>