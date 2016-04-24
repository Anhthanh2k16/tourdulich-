<?
/* ********** ********** ********** ********** ********** ********** ********** ********** ********** **********
submit login facebook
********** ********** ********** ********** ********** ********** ********** ********** ********** ********** */
// Mảng chứa thông tin facebook
$temp = array() ;


if($_POST['id']){
	
	// $temp['id'] = $_POST['id'] ;
	// $temp['name'] =  $_POST['name'] ;
	// $temp['location'] = $_POST['location'] ;
	// $temp['gender'] = $_POST['gender'] ;
	// $temp['email'] = $_POST['email'] ;
	$_SESSION['facebook'] = $_POST ; 
	echo 1; exit ;

}


?>