<?php
	$x=$_POST["usr"];
	$y=$_POST["pwd"];
	$c=mysql_connect("localhost","root","");
	mysql_select_db("Registration",$c);
	$query=mysql_query("SELECT usr FROM college WHERE usr='".$x."'");
	if(mysql_num_rows($query)!=0)
	{
		echo "already registered!!";
	}
	else
	{
		
	$sql="insert into college values ('".$x."','".$y."')";
	if(mysql_query($sql))
	{
		echo "registered!!";
	}

	}
	?>