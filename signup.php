<html>
<head>
<style type="text/css">
body
{
	background-image:URL("img2.jpg");
}
#dd
{
		
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
		color:white;
}
</style>
</head>
<body>
<form action="data.php" method="POST">
<table border="5" align="center" id="kk">
<tr>
<td colspan="4"><img src="img3.jpg" style="width:850px;height:400px;"></td>\
</tr>
<div id="ss">
<tr>
<td align="center"><a href="Index.php">HOME</a></td>
<td align="center"><a href="signup.php">Sign Up</a></td>
<td align="center"><a href="login.php">Log in</a></td>
<td colspan=2 align="center"><a href="c.php">CONTACTS</a></td>
</tr>
<tr>
<td colspan="4">
<div style="height:100%;width:100%;background-color:#3366ff;">
<span>
<table align="center" style="border-color:#66ff99;border-style:solid;border-width:5px;">
<tr>
<td>USERNAME</td><td><input type="text" name="usr"></td>
</tr>
<tr>
<td>PASSWORD</td><td><input type="password" name="pwd"></td>
</tr>
<tr>
<td>CONFiRM PASSWORD</td><td><input type="password"></td>
</tr>
<tr>
<td>IMAGE</td><td><input type="file"></td>
</tr>
<tr>
<td>
BRANCH
</td>
<td>
	<select style="width:100%;">
	<option value="CSE">CSE</option>
	<option value="mech">MECH</option>
	<option value="elc">ELEC</option>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" value="SUBMIT!" style="width:100%;">
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