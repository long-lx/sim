<?php
function getcode($host,$link)
	{	
	 $string= "/".$link;
	  $fp = fsockopen($host,80, $errno, $errstr, 60);
    if (!$fp)
       return;
    else {
        fputs ($fp, "GET ".$string." HTTP/1.0\r\n");
        fputs ($fp, "Host: $host\r\n");
        fputs ($fp, "User-Agent: Mozilla 4.0\r\n\r\n");
        $d = '';
        while (!feof($fp))
            $d .= fgets ($fp,2048);
    fclose ($fp);
    return $d;
    }	
}
echo getcode("http://www.checker.freeproxy.ru","checker/last_checked_proxies.php");
?>