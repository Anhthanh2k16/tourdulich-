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

<?php
if(isset($_POST['ok']))
{
 $id=$_POST['answer'];
 $qid=$_GET['questionid'];
 $sql3="update table_tinnho set acount=acount + 1 where id='".$id."' and com=1";
 mysql_query($sql3);
 transfer("Thông tin bình chọn đã được gửi.<br>Cảm ơn quý khách.", "Lien-he.html");
 exit();
}
?>
<?php
$sql="select * from question order by qid desc";
$query=mysql_query($sql);
if(mysql_num_rows($query) > 0)
{
 $row=mysql_fetch_array($query);
 $qid=$row[qid];
 echo "<form action='poll.php?questionid=$qid' method='post' >";
 $sql2="select * from table_tinnho where com=1 and qid='$qid' and id>30 order by id limit 0,8";
 $query2=mysql_query($sql2);

 if(mysql_num_rows($query2) > 0)
 {
  while($row2=mysql_fetch_array($query2)){
  echo "<input type=radio name=answer value=$row2[id]>$row2[atitle]<br />";
  }
 }
 echo "<input  style='opacity:0' type='submit' name='ok' >";
 echo "</form>";
}
?>

