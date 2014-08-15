<?php
class curl
{
    var $channel ;
    
    function curl(  )
    {
        $this->channel = curl_init( );
        // you might want the headers for http codes
        curl_setopt( $this->channel, CURLOPT_HEADER, true );
        // you may need to set the http useragent for curl to operate as
        curl_setopt( $this->channel, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        // you wanna follow stuff like meta and location headers
        curl_setopt( $this->channel, CURLOPT_FOLLOWLOCATION, true );
        // you want all the data back to test it for errors
        curl_setopt( $this->channel, CURLOPT_RETURNTRANSFER, true );
        // probably unecessary, but cookies may be needed to
        curl_setopt( $this->channel, CURLOPT_COOKIEJAR, 'cookie.txt');
        // as above
        curl_setopt( $this->channel, CURLOPT_COOKIEFILE, 'cookie.txt');    
    }
    function makeRequest( $method, $url, $vars )
    {
        // if the $vars are in an array then turn them into a usable string
        if( is_array( $vars ) ):
            $vars = implode( '&', $vars );
        endif;
        
        // setup the url to post / get from / to
        curl_setopt( $this->channel, CURLOPT_URL, $url );
        // the actual post bit
        if ( strtolower( $method ) == 'post' ) :
            curl_setopt( $this->channel, CURLOPT_POST, true );
            curl_setopt( $this->channel, CURLOPT_POSTFIELDS, $vars );
        endif;
        // return data
        return curl_exec( $this->channel );
    }
}
$stv=new Smarty();
$urls[0]=urldecode("http://sodep.vn/index.php?act=tim&sosim=".$_GET['sosim']."&gia=0.1-9999&kieutim=all&mang=all");
$urls[1]=urldecode("http://www.sodepabc.com/?do=search&network=&sim=".$_GET['sosim']."&x=18&y=11");
$v=0;
$curl = new curl();
$k[0]=2;
$k[1]=7;
for ($i=0;$i<=count($urls)-1;$i++)
{
$my[$i]=$curl->makeRequest( 'post',$urls[$i],'');
$xdata[$i]=str_replace('.','',$my[$i]);
$vdata[$i]=explode($_GET['sosim'],$xdata[$i]);
if (count($vdata[$i])-$k[$i] > 1)
{
	$v++;

	$rows['stt']=$v;
	$rows['sosim']=$_GET['sosim'];
	$rows['gia']="Call";
	$rows['kho']="XM - ".$i;
	$data[]=$rows;
}
}


if ($v > 0)
$bao="Lien he: 0937666886 De biet chi tiet va gia tien sim ".$_GET['sosim'];
else 
$bao="Tat ca cac kho deu ko co sim ".$_GET['sosim'];
$stv->assign("bao",$bao);
$stv->assign("data",$data);
$stv->display("allsearch.htm");
?>