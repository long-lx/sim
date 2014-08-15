<?php
if ($_GET['keyword'])
{
$where="";
$txtsim=$_GET['keyword'];
$txtsim=str_replace(array('.',' '),array('',''),$txtsim);
if ($txtsim!="")
$spot=strpos($txtsim,"*");
$slen=strlen($txtsim);
if (stristr($txtsim,"*")=== false)
{
$txtsim=str_replace(array('x','X','*'),array('[0-9]','[0-9]','.*'),$txtsim);
$where="WHERE sim2 rlike'.*".$txtsim.".*'";
}
else 
{
$txtsim=str_replace(array('x','X','*'),array('[0-9]','[0-9]','.*'),$txtsim);
if ($spot == 0)
$where="WHERE sim2 rlike '".$txtsim."$'";
elseif ($spot == ($slen -1))
$where="WHERE sim2 rlike '^".$txtsim."'";
else 
$where="WHERE sim2 rlike '^".$txtsim."$'";
}
$sql=query("SELECT simid FROM simso $where");
echo mysql_num_rows($sql)." Sim"; 
}
?>