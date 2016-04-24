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
		
	if($_REQUEST['soluong']<=1) $q=1;
	else $q=$_REQUEST['soluong'];

	
		addtocart($pid,$q);
		redirect("http://$config_url/thanh-toan-g.html");}	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<base href="http://<?=$config_url?>/"  />

<meta name="keywords" content="<?=$keywords?>" />
<meta name="description" content="<?=$description?>" />
<meta name="author" content="Đặng Văn Thanh" />
<meta name="copyright" content="Đặng Văn Thanh [dangthanh.vietit@gmail.com]" />
<title><?=$title_bar?> </title>

<meta name="viewport" content="width=device-width, initial-scale=1">  
	
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="renderer" content="webkit|ie-comp|ie-stand">


<link rel="stylesheet" type="text/css" href="css/common.css?v=20150520" />
<link rel="icon" href="favicon.ico?v=20150505" type="image/x-icon" />
 <link rel="shortcut icon" href="favicon.ico?v=20150505" type="image/x-icon" />
	

<link rel="stylesheet" type="text/css" href="css/inthome.css?v=20150630" />
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css"/>

<link href="css/animate.css" rel="stylesheet" type="text/css">
 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link href='http://fonts.googleapis.com/css?family=Tinos:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    
    <link rel="stylesheet" href="css/font-awesome.min.css">   <script src="js/angular.js"></script>

<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery-ui.js"></script>
<script src="js/jquery.stellar.min.js"></script>

<script type="text/javascript" src="js/wow.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>


   <script src="js/angular.js"></script>
      <script src="js/app.js"></script>

</head>
<style>
#CDSWIDSSP{width:280px!important;}
#CDSWIDSSP .widSSPData .widSSPInformation{ padding:8px 0 10px!important;}
.TA_selfserveprop{margin-top:0!important;}
.bigpicshow1{background-image:url(images/home1.jpg);}
.bigpicshow2{background-image:url(images/home2.jpg);}
.bigpicshow3{background-image:url(images/home3.jpg);}
.bigpicshow4{background-image:url(images/home4.jpg);}
.bigpicshow5{background-image:url(images/home5.jpg);}
	body{height:auto!important;}
	.graybg-home{background-color: #f7f7f7; padding-bottom:2em;}
	.peoplesay{margin:1em 0 0;}
</style>
<body ng-app="myApp">


{{1+2}}       

 
    <div id="main">

    
      
               	          
					 <?php include _template."layout/menu_top.php"; ?>
            
                      
                
                     <?php  include _template.$template."_tpl.php"; ?>
                     	
                 
            
        <?php include _template."layout/footer.php"; ?>
         
    
    </div>
    
 
</body>
</html>
