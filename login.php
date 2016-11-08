<html>
<head>
<style type="text/css">
body
{
	background-image:URL("img2.jpg");
}
#kk
{
		border-style:solid;
		border-color:red;
		border-width:10px;
}
a
{
		text-decoration:none;
		font-family:Papyrus;
		font-style:bold;
		align:center;
}
td
{
		background-color:yellow;
		line-height:50px;
		font-weight:bold;
		
}
#ss:hover
{
		background-color:green;
		
}
a:hover
{
		color:green;
		font-style:bold;
}
marquee
{
	color:white;
}
#mm
{
	color:red;
	font-style:bold;
}
</style>
<body>
<form action="loggedin.php">
<table border="5" align="center" id="kk">
<tr>
<td colspan="4" background="img4.jpg" height="500" width=5000><marquee behavior="alternate" scrollamount="5">PROCEED <span id="mm">TO<span>LOG IN!!</td>
</tr>
<div id="ss">
<tr>
<td align="center"><a href="Index.php">HOME</a></td>
<td align="center"><a href="signup.php">SiGN UP</a></td>
<td align="center"><a href="login.php">LOGiN</a></td>
<td colspan=2 align="center"><a href="c.php">CONTACTS</a></td>
</tr>
<tr>
<td colspan="4">
<div style="height:100%;width:100%;background-color:#3366ff;">
<span>
<table align="center">
<tr>
<td>LOGiN</td>
<td><input type="text"></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password"></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="LOGIN!" style="width:100%;">
</td>
</tr>
</table>
</span>
</div>
</td>
</tr>
<tr>
<td colspan="4" align="center" style="color:green;font-size:30px;font-family:Papyrus;">&copy;DK@UPTEC</td>
</tr>
</table>
</form>
</body>
</html>