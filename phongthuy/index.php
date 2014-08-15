<?php

include_once("curlclass.php") ;

//
// Create a new instance of the curl class and point it
// at the page to be fetched.
//

$c = new curl("http://phongthuy.vietaa.com/tools/xemsodep_request.asp?q1=$_GET[q1]&q2=$_GET[q2]&q3=$_GET[q3]&q4=$_GET[q4]&q5=$_GET[q5]&q6=$_GET[q6]&q7=$_GET[q7]&q8=$_GET[q8]&q9=$_GET[q9]") ;

//
// By default, curl doesn't follow redirections and this
// page may or may not be available via redirection.
//

$c->setopt(CURLOPT_FOLLOWLOCATION, false) ;

//
// By default, the curl class expects to return data to
// the caller.
//

$html=$c->exec() ;
$html=explode("<b>Số cần xem:</b>",$html);
$html=explode("<iframe",$html[1]);
$html=explode('<link rel="stylesheet" type="text/css" href="../js/style.css" />',$html[0]);

$vhtml='<table border="0" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#F3EBE2" bgcolor="" width="95%">
     <tr>
       <td width="100%"><b>Số cần xem:</b>';
$vhtml.=$html[0];
$vhtml.='   </td>
     </tr>
   </table>';
$vhtml.='<p><a href="http://nganhangsimsodep.com">
<span style="color: #FFFFFF;">sim so dep</span></a></p>';
echo str_replace(array("images/",'Images/'),'http://phongthuy.vietaa.com/images/',$vhtml);

//
// Check to see if there was an error and, if so, print
// the associated error message.
//

if ($theError = $c->hasError())
{
  echo $theError ;
}
//
// Done with the cURL, so get rid of the cURL related resources.
//
$c->close() ;
?>