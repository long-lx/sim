<?php

$dbhost="localhost";
$dbuser="sim468_simsimsim"; 
$dbpass="vertrigo";
$dbname="sim468_simsimsim";

$mang['s']['Viettel'] = array('097', '098', '096','0161','0162','0163', '0164','0165','0166','0167','0168','0169');
$mang['s']['VinaPhone'] = array('091', '094', '0123', '0125', '0127', '0129');
$mang['s']['MobiFone'] = array('090', '093', '0120','0124', '0121', '0122', '0126', '0128');

$mang['s']['VietNamobile'] = array('092','0188');
$mang['s']['Gmobile'] = array('0199','099');
/*$mang['s']['Sfone'] = array('095');*/

/*$mang['s']['EVNTelecom']= array('096');*/

// cấu hình thể loại sim
//$loai['s']['sim-that-quy']="Sim Thất Quý";
$loai['s']['sim-luc-quy']="Sim Lục Quý";
$loai['s']['sim-ngu-quy']="Sim Ngũ Quý";
$loai['s']['sim-tu-quy']="Sim Tứ Quý";
$loai['s']['sim-tam-hoa']="Sim Tam Hoa";
$loai['s']['sim-taxi']="Sim Taxi";
$loai['s']['sim-so-tien']="Sim Số Tiến";
$loai['s']['sim-loc-phat']="Sim Lộc Phát";
$loai['s']['sim-than-tai']="Sim Thần Tài";
$loai['s']['sim-tien-sim-sanh']="Sim Tiến";
$loai['s']['sim-kep']="Sim Kép";
$loai['s']['sim-nam-sinh']="Sim Năm Sinh";
$loai['s']['sim-ganh-dao']="Sim Gánh Đảo";
$loai['s']['sim-lap']="Sim Lặp";
$loai['s']['sim-dep']="Sim đẹp tự nhiên";

// thuật toán sử lý chuỗi số để lọc kết quả trong cơ sở dữ liệu
$sub="SUBSTRING(sim2";
//$kieu['sim-that-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) != ".$sub.",-5,1)", $sub.",-5,1) != ".$sub.",-6,1)", $sub.",-6,1) != ".$sub.",-7,1)");
$kieu['sim-tu-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) != ".$sub.",-5,1)");
$kieu['sim-ngu-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) = ".$sub.",-5,1)", $sub.",-5,1) != ".$sub.",-6,1)");
$kieu['sim-luc-quy']=array($sub.",-1,1) = ".$sub.",-2,1)", $sub.",-3,1) =".$sub.",-4,1)", $sub.",-2,1) = ".$sub.",-3,1)", $sub.",-4,1) = ".$sub.",-5,1)", $sub.",-5,1) = ".$sub.",-6,1)");
$kieu['sim-taxi']=array($sub.",-2,2) = ".$sub.",-4,2)", $sub.",-4,2) = ".$sub.",-6,2)", $sub.",-1, 1)!= ".$sub.",-2,1) || (".$sub.",-6,3) = ".$sub.",-3,3) AND ".$sub.",-6,2)", $sub.",-1, 1)!= ".$sub.",-2,1))");
$kieu['sim-so-tien']=array($sub.",-2,2) = 11+".$sub.",-4,2)", $sub.",-4,2) = 11+".$sub.",-6,2) || ".$sub.",-2,2) = 10+".$sub.",-4,2)", $sub.",-4,2) = 10+".$sub.",-6,2) || ".$sub.",-1,1) = 1+".$sub.",-2,1)",$sub.",-2,1) = 1+".$sub.",-3,1) || ".$sub.",-1,1) = 2+".$sub.",-2,1)",$sub.",-2,1) = 2+".$sub.",-3,1)");
$kieu['sim-nam-sinh']=array($sub.",-4,4) > ".(date('Y')-50),$sub.",-4,4) < ".date('Y'));
$kieu['sim-loc-phat']=array($sub.",-2,2) = 68 OR ".$sub.",-2,2 = 86)");
$kieu['sim-than-tai']=array($sub.",-2,2) = 39 OR ".$sub.",-2,2) = 79 OR ".$sub.",-2,2) = 38 OR ".$sub.",-2,2) = 78");
$kieu['sim-kep']=array($sub.",-1,1) = ".$sub.",-2,1)",$sub.",-3,1) = ".$sub.",-4,1)",$sub.",-2,1) != ".$sub.",-3,1)");
$kieu['sim-tien']=array();
$kieu['sim-lap']=array($sub.",-1,1) = ".$sub.",-3,1)",$sub.",-2,1) = ".$sub.",-4,1)",$sub.",-1,1)!=".$sub.",-2,1)",$sub.",-4,2) != ".$sub.",-6,2)");
$kieu['sim-ganh-dao']=array($sub.",-1,1) = ".$sub.",-4,1)",$sub.",-2,1) = ".$sub.",-3,1)",$sub.",-2,2) !=".$sub.",-4,2)");
$kieu['sim-tien-sim-sanh']=array($sub.",-2,2) = 11+".$sub.",-4,2)", $sub.",-4,2) = 11+".$sub.",-6,2) || ".$sub.",-2,2) = 10+".$sub.",-4,2)", $sub.",-4,2) = 10+".$sub.",-6,2) || ".$sub.",-1,1) = 1+".$sub.",-2,1)",$sub.",-2,1) = 1+".$sub.",-3,1) || ".$sub.",-1,1) = 2+".$sub.",-2,1)",$sub.",-2,1) = 2+".$sub.",-3,1)");
$kieu['sim-tam-hoa']=array($sub.",-1,1) = ".$sub.",-2,1)",$sub.",-2,1) = ".$sub.",-3,1)",$sub.",-3,1) !=".$sub.",-4,1)");
$kieu['dau-so-co']=array($sub.",1,3) = '091'|| ".$sub.",1,3) = '098' || ".$sub.",1,3) ='097' || ".$sub.",1,3) ='090'");
$kieu['sim-dep']=array("giaban >= 0.2", "giaban <= 10");
// danh sách tỉnh thành
$city['s']=array(
'Hà Nội', 
'Hồ Chí Minh', 
'Hải Phòng', 
'Hải Dương', 
'Hưng Yên', 
'Hòa Bình', 
'Vĩnh Phúc', 
'ĐắkLăk', 
'ĐắkNông', 
'Đồng Nai', 
'Đồng Tháp', 
'Đà Nẵng', 
'Điện Biên', 
'An Giang', 
'Bạc Liêu', 
'Bắc Giang', 

'Bắc Kạn', 
'Bắc Ninh', 
'Bến Tre', 
'Bà Rịa-Vũng Tàu', 
'Bình Định', 
'Bình Dương', 
'Bình Phước', 
'Bình Thuận', 
'Cần Thơ', 
'Cà Mau', 
'Cao Bằng', 
'Gia Lai', 
'Hậu Giang', 
'Hà Giang', 
'Hà Nam', 
'Hà Tĩnh', 
'Hà Tây', 
'Khánh Hòa', 
'Kiên Giang', 
'Kon Tum', 
'Lạng Sơn', 
'Lâm Đồng', 
'Lào Cai', 
'Lai Châu', 
'Long An', 
'Nam Định', 
'Nghệ An', 
'Ninh Bình', 
'Ninh Thuận', 
'Phú Thọ', 
'Phú Yên', 
'Quảng Bình', 
'Quảng Nam', 
'Quảng Ngãi', 
'Quảng Ninh', 
'Quảng Trị', 
'Sơn La', 
'Sóc Trăng', 
'Tây Ninh', 
'Thừa Thiên - Huế', 
'Thái Bình', 
'Thái Nguyên', 
'Thanh Hóa', 
'Tiền Giang', 
'Trà Vinh', 
'Tuyên Quang', 
'Vĩnh Long', 
'Yên Bái'
);
$c_url=$_SERVER['QUERY_STRING'];
$ntime=time();
$adminpass2="77e2edcc9b40441200e31dc57dbb8829"; // mật khẩu quản lý thêm số menu ,
$myinfo=array("my_hl1" => "0989.468.468",
"my_hl2" => "0966.468.468",
"my_hl3" => "",
"my_email" =>"linhbvh@gmail.com",
"my_domain"=>"http://".$_SERVER['HTTP_HOST']."", // đường dẫn website
"my_add"=>"TP. Hà Nội",
"my_yahoo" => "linhbvh",
"my_yahoo2" => "linhbvh",
"my_name" =>"",
"title" =>"Sim Số Đẹp - Sim Tứ Quý - Sim Vip", // Tiêu đề trang chủ
"my_add_web" =>str_replace("www.","",$_SERVER['HTTP_HOST']),
"my_sms_by"=> "",  // Chữ ký tin nhắn
"my_sms_number" =>"", //// số điện thoại sử dụng nhắn tin( Số mobifone đã dk tài khoản trên mobi web)
"my_sms_pass" =>"", /// Mật khẩu tại website mobifone
"my_keyword"=>"Mua Ban Sim Dep",// Từ khóa iu tiên
"my_url_query" =>"index.php?".$_SERVER['QUERY_STRING'],
"my_slo"=>"Mua - Bán Sim Số Đẹp Trên Toàn Quốc", //
"my_logo" =>"Rao Bán Sim", ///

"dathang_sms" =>"true", // nhận tin nhắn khi có đặt hàng ( tắt cho giá trị bàng false
"dathang_sms_to"=>"0966468468",// số điện thoại nhận tin đặt hàng
"dathang_email"=>"true",
"dathang_email_to"=>"linhbvh@gmail.com",// email nhận thông tin đặt hàng
"smtp"=>"true", // Bật/ tắt chức năng gửi email smtp
"smtp_server"=>"",
"smtp_user"=>"",
"smtp_pass"=>"",
"smtp_port"=>25,
"cache"=>1*60*60 // Tăng tốc độ website// Lưa cache 1 tiếng. 
 // nhận email khi có đơn đặt hàng
);



/**
 * *
 * 
 * 
 * Thiết lập chức năng gửi lại tin nhắn khi nhắn lỗi
 * Tạo crom thời gian 1 phút tới link func/resend_sms.php
 * (Chú ý để sử dụng được chức năng nhắn tin trên website máy chủ của bạn phải hỗ trợ curl)
 * 
 * 
 * Thiết lập tính năng nhắn tin tự động
 * tạo crom thời gian 2 phút tới linnk adminpc/cron_open.php
 * 
 */
function xds($str)
{
$coDau=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
"ằ","ắ","ặ","ẳ","ẵ",
"è","é","ẹ","ẻ","ẽ","ê","ề" ,"ế","ệ","ể","ễ",
"ì","í","ị","ỉ","ĩ",
"ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ"
,"ờ","ớ","ợ","ở","ỡ",
"ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
"ỳ","ý","ỵ","ỷ","ỹ",
"đ",
"À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă"
,"Ằ","Ắ","Ặ","Ẳ","Ẵ",
"È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
"Ì","Í","Ị","Ỉ","Ĩ",
"Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ"
,"Ờ","Ớ","Ợ","Ở","Ỡ",
"Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
"Ỳ","Ý","Ỵ","Ỷ","Ỹ",
"Đ","ê","ù","à");

$khongDau=array("a","a","a","a","a","a","a","a","a","a","a"
,"a","a","a","a","a","a",
"e","e","e","e","e","e","e","e","e","e","e",
"i","i","i","i","i",
"o","o","o","o","o","o","o","o","o","o","o","o"
,"o","o","o","o","o",
"u","u","u","u","u","u","u","u","u","u","u",
"y","y","y","y","y",
"d",
"A","A","A","A","A","A","A","A","A","A","A","A"
,"A","A","A","A","A",
"E","E","E","E","E","E","E","E","E","E","E",
"I","I","I","I","I",
"O","O","O","O","O","O","O","O","O","O","O","O"
,"O","O","O","O","O",
"U","U","U","U","U","U","U","U","U","U","U",
"Y","Y","Y","Y","Y",
"D","e","u","a");
return str_replace($coDau,$khongDau,$str);
}
?>