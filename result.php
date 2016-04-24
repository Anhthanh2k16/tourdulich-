<?php
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	error_reporting(E_ALL & ~E_NOTICE & ~8192);
	//error_reporting(0);
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."q_functions.php";	//Các hàm bổ sung
	include_once _lib."functions_giohang.php";		
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _lib."new.php";
	
	
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	$pid=$_REQUEST['productid'];
	$nid=($_REQUEST['productnum'])?$_REQUEST['productnum']:1;
		addtocart($pid,$nid);
		redirect("gio-hang.html");}	
?>


<?
	$qid=$_GET['questionid'];
	$sql="select * from question ";
	$query=mysql_query($sql);
	$row=mysql_fetch_array($query);
	echo "<h2>Kết quả $row[qtitle]</h2>";
	$sql2="select  SUM(acount) as total from table_tinnho";
	$query2=mysql_query($sql2);
	$row2=mysql_fetch_array($query2);
	$total=$row2[total];
	$sql3="select * from table_tinnho where hienthi=1 and com=1 order by id";
	$query3=mysql_query($sql3);
	if(mysql_num_rows($query3) > 0)
	{
		while($row3=mysql_fetch_array($query3))
		{
			$percent=round(($row3[acount]/$total)*100,2);
			echo "<h4 style=\"color:red; font:12px verdana; margin-top:10px \"> $row3[ten] bình chọn  ($percent %)</h4>";
		}
	}

?>