<?php
//http://yourdomain.com/?mobilenumber=84903123123&service=8x27&msg=your+0914.77.999.Nguyen Van A.23 Doi Can. Ha Noi.0913880000
//ini_set(0);
require("../conf.php");
require("../func/mysql.php");
@query("DELETE FROM yeucausim WHERE ngayketthuc <= (".time()."- ngaybatdau)");
$q=query("SELECT * FROM yeucausim WHERE send < 3");
while ($r=fecth($q))
{
$where="";
$txtsim=$r['sosim'];
$txtsim=str_replace(array('.',' '),array('',''),$txtsim);
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
	$q2=mysql_query("SELECT * FROM simso $where limit 8");
	$nums=mysql_num_rows($q2);
	if ($nums > 0 and $nums < 9)
	{
	$str="";
	while ($r2=fecth($q2))
	{		
		if (mysql_num_rows($q2)  < 2)
		$str="Yeu Cau sim ( ".$r['sosim']." ) cua ban da tim thay, Lien he voi chung toi de dat mua! \n ".$r2['sim2']." Gia:".$r2['giaban']."tr \n";
		else 
		$str.=$r2['sim2']."-".$r2['giaban']."tr \n";
	}
	
	if ($str!="")
	{
	$testso=preg_replace('/[^0-9]/','',$r['mobile']);
	if ((strlen($testso) > 9 && strlen($testso) < 12) && (substr($testso,0,2)=='01' || substr($testso,0,2)=='09'))
	{
	
	$sms_staus=0;
	$sms['s']['sto']=$r['mobile'];
	$sms['s']['ssend']="0937666886";
	$sms['s']['scontent']=$str;
	$sms['s']['sdate']=date('h:i:s d/m/Y');
	$sms['s']['staus']=$sms_staus;
	$cr=@mysql_query("SELECT * FROM mysms WHERE scontent='".$_POST['txt']."' AND sto='".$_POST['mobile']."'");
	if (@mysql_num_rows($cr) < 1)
	{
	insert($sms['s'],"mysms");
	mysql_query("UPDATE yeucausim Set send='".($r['send']+1)."' WHERE mobile='".$r['mobile']."'");
	}
	else 
	update($sms['s'],"mysms","scontent='".$_POST['txt']."' AND sto='".$_POST['mobile']."'");
	}	
	}}}
?>