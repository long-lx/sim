<?php
$stv=new Smarty();
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
$urls=urldecode("http://sodep.vn/index.php?act=tim&sosim=".$_GET['sosims']."&gia=0.1-9999&kieutim=all&mang=all");
$curl = new curl();
$views=$curl->makeRequest('post',$urls,'');
if (count(explode('<span class="sosim">&nbsp;',$views))==2)
{
	$spot=strpos($views,'<span class="sosim">');
	$so=substr($views,$spot,200);
	$so2=explode('&nbsp; ',$so);
	$sosim=split('<',$so2[1]);
	$giatien=split('<',$so2['2']);
	$stv->assign("sosim",$sosim[0]);
	$stv->assign("giatien",$giatien[0]);
	$sosim2=preg_replace('/[^0-9]/','',$sosim[0]);
	$giatien2=preg_replace('/[^0-9]/','',$giatien[0]);
	$stv->assign("mang",checkmang($sosim2,$mang['s']));
	$stv->assign("sosim2",$sosim2);
	$stv->assign("stt",1);
	$p['simdl']=8579;
	$p['sim1']=$sosim[0];
	$p['sim2']=$sosim2;
	$p['gianhap']=$giatien2;
	$p['giaban']=$giatien2;
	$p['ngaynhap']=date('d/m/Y');
	$p['usernhap']="Gest";
	insert($p,"simso");
	$stv->display("sodepvn.htm");
}

?>