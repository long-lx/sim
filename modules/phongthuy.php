<?php
$stv=new Smarty();
if (isset($_POST['submit']))
{
include_once("curlclass.php") ;

//
// Create a new instance of the curl class and point it
// at the page to be fetched.
//

$c = new xcurl("http://nganhangsimsodep.com/phongthuy/index.php?q1=$_POST[q1]&q2=$_POST[q2]&q3=$_POST[q3]&q4=$_POST[q4]&q5=$_POST[q5]&q6=$_POST[q6]&q7=$_POST[q7]&q8=$_POST[q8]&q9=$_POST[q9]") ;

//
// By default, curl doesn't follow redirections and this
// page may or may not be available via redirection.
//

$c->setopt(CURLOPT_FOLLOWLOCATION, false) ;

//
// By default, the curl class expects to return data to
// the caller.
//

echo $c->exec() ;

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
}

$stv->display("phongthuy.htm");
?>