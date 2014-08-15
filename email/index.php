<?php
require("../conf.php");
require("../func/mysql.php");
require('../SMTP.class.php');
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= "From:Ngân Hàng Sim Số Đẹp<sale@nganhangsimsodep.com>\r\n";
$headers .= "Reply-To: Ngân Hàng Sim Số Đẹp<sale@nganhangsimsodep.com>\r\n"; 		
$smtp = new SMTP("sharefpt4.nhanhoa.com", 25, true);
$smtp->auth("admin@cp.stv.vn", "@anhyeuem123");
$smtp->mail_from("nganhangsimsodep.com@gmail.com");	
$smtp->set_html(true);
$email_file=file_get_contents("http://nganhangsimsodep.com/email/email.html");
$thoigian=60*24*60*60;
$sql=mysql_query("SELECT * FROM emails WHERE  stime < ".time()."- ".$thoigian." OR stime='' order by id asc limit 100");
while ($row=mysql_fetch_array($sql))
{
	$m_to[]=$row[email];
	mysql_query("UPDATE emails SET stime='".time()."' where email='".$row['email']."'");
}
$send_m=$smtp->send($m_to, "Ngân Hàng Sim Số Đẹp - nganhangsimsodep.com",$email_file, $headers);
?>
