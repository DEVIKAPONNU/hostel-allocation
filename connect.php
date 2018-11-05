<html>
<body>
<?php

$username="root";
$password="root";
$server="localhost";
$database="mysql";
$regno=$_post('regno');
$dbhandle=mysql_connect($server,$username,$password);
if(!$dbhandle)
{
	die('Could not connect:'.mysql_error());
}
echo 'Connected Successfully';
$dbfound=mysql_select_db($database,$_db_handle);
if($dbfound){
	$sql="select *from marks where regno='".$regno."'";
	$result_set=mysql_query($sql);
	$record=mysql_fetch_array($result_set);
	echo"<br>MARKLIST";
	echo"<br> Regno:".$record('regno');
	echo"<br>NAme:".$record('sname');
	echo"<br>Group:".$record ('sgroup');
	echo"<br>Mark 1:".$record('m1');
	echo"<br>MArk 2:".$record('m2');
	echo"<br>Result:".compute_result($record('m1'),$record('m2'));
	$
}
else
	{echo"DB not found";}
mysql_close($dbhandle);
function compute_result($m1+$m2)
{
	$tmark=$m1+$m2;
	return $result;
}
?>
</body>
</html>
