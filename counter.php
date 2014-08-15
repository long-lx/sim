<?

/*

Counter Information



Anbieter: http://www.vonderborn.com

Autor: Philipp von der Born

You are not allowed to remove the link

*/



// ip-sperre in sekunden

$expire = 600;

$filename = "counter.txt";



if (file_exists($filename)) 

{

   $ignore = false;

   $current_agent = (isset($_SERVER['HTTP_USER_AGENT'])) ? addslashes(trim($_SERVER['HTTP_USER_AGENT'])) : "no agent";

   $current_time = time();

   $current_ip = $_SERVER['REMOTE_ADDR']; 

      

   // daten einlesen

   $c_file = array();

   $handle = fopen($filename, "r");

   

   if ($handle)

   {

      while (!feof($handle)) 

      {

         $line = trim(fgets($handle, 4096)); 

		 if ($line != "")

		    $c_file[] = $line;		  

      }

      fclose ($handle);

   }

   else

      $ignore = true;

   

   // bots ignorieren   

   if (substr_count($current_agent, "bot") > 0)

      $ignore = true;

	  

   

   // hat diese ip einen eintrag in den letzten expire sec gehabt, dann igornieren?

   for ($i = 1; $i < sizeof($c_file); $i++)

   {

      list($counter_ip, $counter_time) = explode("||", $c_file[$i]);

	  $counter_time = trim($counter_time);

	  

	  if ($counter_ip == $current_ip && $current_time-$expire < $counter_time)

	  {

	     // besucher wurde bereits gez�hlt, daher hier abbruch

		 $ignore = true;

		 break;

	  }

   }

   

   // counter hochz�hlen

   if ($ignore == false)

   {

      if (sizeof($c_file) == 0)

      {

	     // wenn counter leer, dann f�llen      

		 $add_line1 = date("z") . ":1||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time . "\n";

		 $add_line2 = $current_ip . "||" . $current_time . "\n";

		 

		 // daten schreiben

		 $fp = fopen($filename,"w+");

		 if ($fp)

         {

		    flock($fp, LOCK_EX);

			fwrite($fp, $add_line1);

		    fwrite($fp, $add_line2);

			flock($fp, LOCK_UN);

		    fclose($fp);

		 }

		 

		 // werte zur verf�gung stellen

		 $day = $week = $month = $year = $all = $record = 1;

		 $record_time = $current_time;

		 $online = 1;

	  }

      else

	  {

	     // counter hochz�hlen

		 list($day_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);

		 

		 // day

		 $day_data = explode(":", $day_arr);

		 $day = $day_data[1];

		 if ($day_data[0] == date("z")) $day++; else $day = 1;

		 

		 // week

		 $week_data = explode(":", $week_arr);

		 $week = $week_data[1];

		 if ($week_data[0] == date("W")) $week++; else $week = 1;

		 

		 // month

		 $month_data = explode(":", $month_arr);

		 $month = $month_data[1];

		 if ($month_data[0] == date("n")) $month++; else $month = 1;

		 

		 // year

		 $year_data = explode(":", $year_arr);

		 $year = $year_data[1];

		 if ($year_data[0] == date("Y")) $year++; else $year = 1;

		  

		 // all

		 $all++;

		 

		 // neuer record?

		 $record_time = trim($record_time);

		 if ($day > $record)

		 {

		    $record = $day;

			$record_time = $current_time;

		 }

		 

		 // speichern und aufr�umen und anzahl der online leute bestimmten

		 

		 $online = 1;

		 

		 // daten schreiben

		 $fp = fopen($filename,"w+");

		 if ($fp)

         {

		    flock($fp, LOCK_EX);

			$add_line1 = date("z") . ":" . $day . "||" . date("W") . ":" . $week . "||" . date("n") . ":" . $month . "||" . date("Y") . ":" . $year . "||" . $all . "||" . $record . "||" . $record_time . "\n";		 

		    fwrite($fp, $add_line1);

		 

		    for ($i = 1; $i < sizeof($c_file); $i++)

            {

               list($counter_ip, $counter_time) = explode("||", $c_file[$i]);

	  

	           // �bernehmen

		   	   if ($current_time-$expire < $counter_time)

	           {

	              $counter_time = trim($counter_time);

				  $add_line = $counter_ip . "||" . $counter_time . "\n";

			      fwrite($fp, $add_line);

			      $online++;

	           }

            }

		    $add_line = $current_ip . "||" . $current_time . "\n";

		    fwrite($fp, $add_line);

		    flock($fp, LOCK_UN);

		    fclose($fp);

	     }

	  }

   }

   else

   {

      // nur zum anzeigen lesen

	  if (sizeof($c_file) > 0)

	     list($day_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", $c_file[0]);

	  else

		 list($day_arr, $week_arr, $month_arr, $year_arr, $all, $record, $record_time) = explode("||", date("z") . ":1||" . date("W") . ":1||" . date("n") . ":1||" . date("Y") . ":1||1||1||" . $current_time);

	  

	  // day

	  $day_data = explode(":", $day_arr);

      $day = $day_data[1];

	  

	  // week

	  $week_data = explode(":", $week_arr);

	  $week = $week_data[1];

	

	  // month

	  $month_data = explode(":", $month_arr);

	  $month = $month_data[1];

	  

	  // year

	  $year_data = explode(":", $year_arr);

	  $year = $year_data[1];

	  

	  $record_time = trim($record_time);

	  

	  $online = sizeof($c_file) - 1;

   }

?>

<br>

<table cellspacing="0" style="border-style: none; border-width: 1px; ww; width: 100%;">

  <tr> 

    <td width="100%" style="height: 22px"><b><font face="Arial, Helvetica, sans-serif" size="2"><img src="counter.gif" width="16" height="16" border="0" />Khách truy cập</font></b>    </td>

  </tr>

  <tr> 

    <td style="border-top:1px solid; text-align: left;"> 

      <div style="text-align: left">

      <p style="margin-left: 10px">

	<span style="font-size:12px">
        <table>
        <tr><td>Đang online</td><td style="color:#FF0000; font-weight:bold;"><? echo $online; ?></td></tr>
        <tr><td>Hôm nay</td><td style="color:#FF0000; font-weight:bold;"><? echo $day; ?></td></tr>
        <tr><td>Tuần này </td><td style="color:#FF0000; font-weight:bold;"><? echo $week; ?></td></tr>
        <tr><td>Tháng này</td><td style="color:#FF0000; font-weight:bold;"><? echo $month; ?></td></tr>
        <tr><td>Năm nay</td><td style="color:#FF0000; font-weight:bold;"><? echo $year; ?></td></tr>
        <tr><td>Tổng cộng</td><td style="color:#FF0000; font-weight:bold;"><? echo $all; ?></td></tr>
        </table>
	</span></p>

        </div>
        <span style="font-size: x-small">
        </div></span></td>

  </tr>

</table>

<?

}

?>