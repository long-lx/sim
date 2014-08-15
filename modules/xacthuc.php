<?php
if (md5($_GET['code1'])==$_GET['code2'])
{
	@mysql_query("UPDATE dondathang SET xn=1 WHERE cidmd5='".$_GET['dhmd5']."'");
	echo 1;
	
}
else 
{
	echo 0;
}
?>