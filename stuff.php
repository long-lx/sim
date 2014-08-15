<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$ccom=mysql_connect("localhost","nganhangsimsodep","123456") or die("No host connect");
mysql_selectdb("nganhangsimsodep",$ccom) or die("No database select");
$allrows=mysql_num_rows(mysql_query("SELECT * FROM listurl"));
$bg=rand(0,$allrows-1);
$sql=mysql_query("SELECT * FROM listurl limit $bg,1");
$row=mysql_fetch_array($sql);
mysql_query("UPDATE listurl SET hit='".($row['hit']+1)."' WHERE url='".$row['url']."'");
?>
<title>Stuff page <?echo $bg?></title>

<script language="javascript" type="text/javascript">
setTimeout("windowRefresh()",20000);
function windowRefresh()
{
window.location.href='http://<?=$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']?>?urlid=<?=$row['id'].time()?>';
}
</script>
</head>
<frameset rows="*">
	<frame name="main" scrolling="no" noresize="noresize" target="main" src="<?=$row['url']?>" />
	<noframes>
	<body>
	</body>
	</noframes>
</frameset>
</html>
