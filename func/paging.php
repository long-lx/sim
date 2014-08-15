<?php
/*
paging.php
chứa hàm trả về chuỗi phân trang
*/

/*
tham số của hàm paging
/*
$totalRow: tổng số dòng
$curPage: vị trí trang hiện tại đang xem
$maxPage: = Số lượng record trong mỗi trang
$maxRow=5
*/

/*
$totalRow: tong so dong
$curPage: vi tri hien tai dang xem
$maxPage: =5 so luong trang ham paging tra ve
EX:
Current Page : 5   Total pages : 10
Go to page :  1  2  3  4  5  Next  
MAX : SỐ LƯỢNG RECOD TRẢ VỀ
*/
//echo paging($totalRow,$curPage,$maxPage,$maxRow);
//	echo paging($maxRow,$curPage,5,MAX); 

function paging($totalRows,$curPg,$pg,$re)	  
{			 				
	$paging="<div id='page'>";	        		 
	$mxR = $re;
	$mxP = $pg;
	if($totalRows%$mxR==0)  
		$totalPages = (int)($totalRows/$mxR);
	else 
		$totalPages = (int)($totalRows/$mxR+1);

				
	$curRow = ($curPg-1)*$mxR+1;

	if($totalRows>$mxR)
	{
	 	$start=1;
	 	$end=1;
	 	$paging1 ="";				 	 
		for($i=1;$i<=$totalPages;$i++)
		{	if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))
			{
				if($start==1) $start=$i;
					if($i==$curPg)      
					  	$paging1 .=  '<a class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only">'.$i.'</a>';
							else    
							{
							  	$paging1 .= '<a href="javascript:GotoPage('.$i.')">'.$i.'</a>';
							}
							$end=$i;	
						}
					}

					if($curPg>$mxP)
						{
					 	$paging .='<a href="javascript:GotoPage('.($start-1).')">Pre</a>';
						}
					$paging.=$paging1;
					if($curPg < $totalPages)
						{
						$paging .= '<a href="javascript:GotoPage('.($end+1).')">Next</a>';
						}
					}
					$paging .="</div>";
				 return $paging;
			}
			
			
function strang($totalRows,$curPg,$pg,$re,$xurl,$xindex=".html")	  
{			 				
	$paging="<div id='page'>";	         		 
	$mxR = $re;
	$mxP = $pg;
	if(($totalRows%$mxR)==0)  
		$totalPages = ($totalRows/$mxR);
	else 
		$totalPages = ($totalRows/$mxR+1);

				
	$curRow = ($curPg-1)*$mxR+1;
	if($totalRows>$mxR)
	{
	 	$start=1;
	 	$end=1;
	 	$paging1 ="";				 	 
		for($i=1;$i<=$totalPages;$i++)
		{	if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))
			{
				if($start==1) $start=$i;
					if($i==$curPg)      
					  	$paging1 .= '<a class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only">'.$i.'</a>';
							else    
							{
							  	$paging1 .= '<a href="'.$xurl.$i.$xindex.'">'.$i.'</a>';
									
							}
							$end=$i;	
						}
					}

					if($curPg>$mxP)
						{
						$paging .='<a href="'.$xurl.($start-1).$xindex.'">Pre</a>';
						}
					$paging.=$paging1;
					if($curPg < $totalPages)
						{
						$paging .= '<a href="'.$xurl.($end+1).$xindex.'">Next</a>';
						}
					}
				$paging.="</div>";
				 return $paging;
			}
			
function xstrang($totalRows,$curPg,$pg,$re,$xurl)	  
{			 				
	$paging="<div id='page'>";	         		 
	$mxR = $re;
	$mxP = $pg;
	if($totalRows%$mxR==0)  
		$totalPages = (int)($totalRows/$mxR);
	else 
		$totalPages = (int)($totalRows/$mxR+1);

				
	$curRow = ($curPg-1)*$mxR+1;

	if($totalRows>$mxR)
	{
	 	$start=1;
	 	$end=1;
	 	$paging1 ="";				 	 
		for($i=1;$i<=$totalPages;$i++)
		{	if(($i>((int)(($curPg-1)/$mxP))* $mxP) && ($i<=((int)(($curPg-1)/$mxP+1))* $mxP))
			{
				if($start==1) $start=$i;
					if($i==$curPg)      
					  	$paging1 .=  '<a class="ui-state-active ui-button ui-widget ui-state-default ui-button-text-only">'.$i.'</a>';
							else    
							{
							  	$paging1 .= '<a  href="'.$xurl.$i.'">'.$i.'</a>';

							}
							$end=$i;	
						}
					}

					if($curPg>$mxP)
						{
					 	$paging .='<a href="'.$xurl.($start-1).'">Pre</a>';
						}
					$paging.=$paging1;
					if($curPg < $totalPages)
						{
						$paging .= '<a  href="'.$xurl.($end+1).'">Next</a>';
						}
					}
				$paging.="</div>";
				 return $paging;
			}
?>