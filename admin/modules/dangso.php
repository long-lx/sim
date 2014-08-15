<?php
#set_time_limit(300*60);
$stv=new Smarty();

function extractZip( $zipFile = '', $dirFromZip = '' )
{    
    define(DIRECTORY_SEPARATOR, '/');

    $zipDir = getcwd() . DIRECTORY_SEPARATOR;
    $zip = zip_open($zipDir.$zipFile);

    if ($zip)
    {
        while ($zip_entry = zip_read($zip))
        {
            $completePath = $zipDir . dirname(zip_entry_name($zip_entry));
            $completeName = $zipDir . zip_entry_name($zip_entry);
            
            // Walk through path to create non existing directories
            // This won't apply to empty directories ! They are created further below
            if(!file_exists($completePath) && preg_match( '#^' . $dirFromZip .'.*#', dirname(zip_entry_name($zip_entry)) ) )
            {
                $tmp = '';
                foreach(explode('/',$completePath) AS $k)
                {
                    $tmp .= $k.'/';
                    if(!file_exists($tmp) )
                    {
                        @mkdir($tmp, 0777);
                    }
                }
            }
            
            if (zip_entry_open($zip, $zip_entry, "r"))
            {
                if( preg_match( '#^' . $dirFromZip .'.*#', dirname(zip_entry_name($zip_entry)) ) )
                {
                    if ($fd = @fopen($completeName, 'w+'))
                    {
                        fwrite($fd, zip_entry_read($zip_entry, zip_entry_filesize($zip_entry)));
                        fclose($fd);
                    }
                    else
                    {
                        // We think this was an empty directory
                        mkdir($completeName, 0777);
                    }
                    zip_entry_close($zip_entry);
                }
            }
        }
        zip_close($zip);
    }
    return true;
}
if ($_POST['submit'])
{
if ($_POST['textsim']=="")
{
	//copy($_FILES['file']['tmp_name'],$_FILES['file']['name']);
	//chmod($_FILES['file']['name'],0755);
	//extractZip($_FILES['file']['name'],'' );
	$handle = @fopen("data.txt", "r");
	$p['p']['simdl']=$_POST['select'];
	$p['p']['ngaynhap']=ngay();
	$p['p']['usernhap']=$_SESSION['username'];
	$j=0;
if ($handle) {
    while (!feof($handle)) {
        $lineso = fgets($handle, 4096);
       
        list($sosim,$giaban,$gianhap)=split("	",$lineso);
			if ($_POST['donvi']==1)
			{
				$giaban=soreplace($giaban)*1000;
				$gianhap=soreplace($gianhap)*1000;
			}
			if ($_POST['donvi']==2)
			{
				$giaban=soreplace($giaban)*1000000;
				$gianhap=soreplace($gianhap)*1000000;
			}
			
		if (checkso($sosim,$giaban))
		{

			$giaban=replace($giaban);
			if ($gianhap=="")$p['p']['gianhap']=$giaban;
			else $p['p']['gianhap']=replace($gianhap);
			if ($_SESSION['pt']==1)$giaban=tangpt($giaban,$_POST['select']);
			$p['p']['sim1']=soreplace($sosim);
			$p['p']['sim2']=replace($sosim);
			$p['p']['giaban']=$giaban;
			$test=query("SELECT sim2 FROM simso WHERE sim2='".replace($sosim)."'");
			if (@mysql_num_rows($test) > 0)
			{
			update($p['p'],"simso","sim2=".replace($sosim));
			}
			else 
			{
			insert($p['p'],"simso");
			$j++;
			}		
			
				
			
        
        
        }
       
    }
     echo thongbao("Bạn đã đăng thành công ".$j." số !");
    fclose($handle);

}
}
else 
{
dangsotutext($_POST['textsim']);	
}
}




function dangsotufile()
{
	
}
function dangsotutext($data)
{
			if ($_POST['c']=="Y")
			{
			mysql_query("DELETE FROM simso WHERE simdl='".$_POST['select']."'");
			}
	$e=explode("
",$data);
	$p['p']['simdl']=$_POST['select'];
	$j=0;
	for ($i=0;$i<count($e)-1;$i++)
	{
		list($sosim,$giaban,$gianhap)=split("	",$e[$i]);
			if ($_POST['donvi']==1)
			{
				$giaban=replace($giaban)*1000;
				$gianhap=replace($gianhap)*1000;
			}
			if ($_POST['donvi']==2)
			{
				$giaban=soreplace($giaban)*1000000;
				$gianhap=soreplace($gianhap)*1000000;
			}
			else 
			{
				$giaban=replace($giaban);
				$gianhap=replace($gianhap);	
			}
		$sim1x=preg_replace('/[^0-9.]/','',$sosim);
		
		$sim2x=replace($sosim);
		if ((strlen($sim2x)==10 and substr($sim2x,0,1)==1) OR (strlen($sim2x)==9 and substr($sim2x,0,1)==9))
		{
		$sim2x="0".$sim2x;
		$sim1x="0".$sim1x;
		}
		$dlid=$_POST['select'];
		if (checkso($sim2x,$giaban))
		{

			$datapost['s'][$sim2x]=$sim1x."-".$giaban."-".$gianhap;	
		}
		
		/**
		if (checkso($sim2x,$giaban))
		{
			if ($gianhap=="")$p['p']['gianhap']=$giaban;
			else $p['p']['gianhap']=$gianhap;
			if ($_SESSION['pt']==1)$giaban=tangpt($giaban,$_POST['select']);
			
			$p['p']['sim1']=$sim1x;
			$p['p']['sim2']=$sim2x;
			$p['p']['giaban']=$giaban;
			if ($_POST['c']=="Y")
			{
			$test=query("SELECT sim2 FROM simso WHERE sim2='".$sim2x."'");
			if (@mysql_num_rows($test) > 0)
			{
			query("DELETE FROM simso WHERE sim2='".$sim2x."'");
			}
			}
		
			insert($p['p'],"simso");
			$j++;	
		}
		
		**/
	}
	$m=0;
	foreach ($datapost['s'] AS &$sg)
	{
		$m++;
	list($sim1x,$giaban,$gianhap)=split("-",$sg);
	if ($gianhap > 100000)$p['p']['gianhap']=$gianhap/1000000;
	else $p['p']['gianhap']=$giaban/1000000;
			if ($_SESSION['pt']==1)$giaban=tangpt($giaban,$_POST['select']);
			$giaban=$giaban/1000000;
			$p['p']['sim1']=$sim1x;
			$p['p']['sim2']=replace($sim1x);
			$p['p']['giaban']=$giaban;

			$valuesx[]="('".$p['p']['sim1']."', '".$p['p']['sim2']."','".$p['p']['gianhap']."', '".$p['p']['giaban']."', '".$_POST['select']."')";
			$j++;	
		if ($m==5000)
		{
			mysql_query("INSERT INTO `simso` (`sim1`, `sim2`, `gianhap`, `giaban`, `simdl`) VALUES ".join(",",$valuesx).";");
			$m=0;
			unset($valuesx);
		}
		
	}
	if ($m > 0 and $m < 5000)
	{
	mysql_query("INSERT INTO `simso` (`sim1`, `sim2`, `gianhap`, `giaban`, `simdl`) VALUES ".join(",",$valuesx).";");
	unset($valuesx);
	}
	
	echo thongbao("Bạn đã đăng thành công ".$j." số !");
}
$q=query("SELECT * FROM thanhvien WHERE live='1' ORDER BY hovaten ASC");
while ($r=fecth($q))
{
	$oid[]=$r['id'];
	$dems=mysql_query("SELECT count(simid) AS tongsim FROM simso WHERE simdl='".$r['id']."'");
	$dems=mysql_fetch_array($dems);
	$oname[]=$r['hovaten']." -> ".number_format($dems['tongsim'],0,".",".");
	
}
$stv->assign("oid",$oid);
$stv->assign("oname",$oname);
mysql_close();
$stv->display("dangso.htm");
?>