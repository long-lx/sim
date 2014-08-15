<?php

require_once 'rss_generator.inc.php';
require("conf.php");
require("func/mysql.php");

$rss_channel = new rssGenerator_channel();
$rss_channel->atomLinkHref = '';
$rss_channel->title = 'Sim Số Đẹp';
$rss_channel->link = 'http://nganhangsimsodep.com';
$rss_channel->description = 'The latest news about web-development.';
$rss_channel->language = 'vi';
$rss_channel->generator = 'PHP RSS Feed Generator';
$rss_channel->managingEditor = 'editor@mysite.com (Alex Jefferson)';
$rss_channel->webMaster = 'webmaster@mysite.com (Vagharshak Tozalakyan)';
/**
$item = new rssGenerator_item();
$item->title = 'New website launched';
$item->description = 'Today I finaly launch a new website.';
$item->link = 'http://newsite.com';
$item->guid = 'http://newsite.com';
$item->pubDate = 'Tue, 07 Mar 2006 00:00:01 GMT';
$rss_channel->items[] = $item;

$item = new rssGenerator_item();
$item->title = 'Another website launched';
$item->description = 'Just another website launched.';
$item->link = 'http://anothersite.com';
$item->guid = 'http://anothersite.com';
$item->pubDate = 'Wed, 08 Mar 2006 00:00:01 GMT';
$rss_channel->items[] = $item;
**/
$sql=mysql_query("SELECT * FROM simso limit 20");
while ($row=mysql_fetch_array($sql))
{
$item = new rssGenerator_item();
$item->title = $row['sim1'];
$item->description = number_format($row['giaban']*1000000,0,".",".")." VNĐ";
$item->link = 'dat-mua-sim-so-dep-'.$row['sim2'].'.html';
$item->guid = 'http://nganhangsimsodep.com/dat-mua-sim-so-dep-'.$row['sim2'].'.html';
$item->pubDate = 'Wed, 08 Mar 2006 00:00:01 GMT';
$rss_channel->items[] = $item;
}

$rss_feed = new rssGenerator_rss();
$rss_feed->encoding = 'UTF-8';
$rss_feed->version = '2.0';
header('Content-Type: text/xml');
echo $rss_feed->createFeed($rss_channel);

?>