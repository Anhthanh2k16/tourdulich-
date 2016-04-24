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
	
	
	
	
	

?>

<?php  if(!defined('_source')) die("Error");

		@$idc = intval(trim($_REQUEST['id']));
		
		
		$d->reset();		
				$sql = "select id,ten,gia,giacu,thumb,photo,noidung from #_product where hienthi=1 and id_cat='$idc' ";	
	$d->query($sql);
	$product3=$d->result_array();
	
	$d->reset();
$sql = "select id,ten from #_product_cat where com='cat' and id='".$_GET['idc']."' order by stt asc,id desc";
$d->query($sql);
$tenidc = $d->result_array();

$sql = "select title,keywords,description,ten from #_product_cat where hienthi=1 and com='cat' and id='$idc'";
				$d->query($sql);
				$cat_ttt = $d->fetch_array();
	
		?>




<div class="title_dm"> <?php if($_GET['idc']!='') { ?>
					  <?=$tenidc[0]['ten']?>
					
					
					  <?php }?> </div>
                      
                      
                      <div class="title_icon"> <img src="images/title_icon.gif"/> </div>
            <div class="ten_chitiet"> <?=$cat_ttt['ten']?></div>
                        <div class="clear">  </div>

                      
                      
                      
                      
            <?php foreach($product3 as $v){?>

       <div class="product"> 
           <div class="hinh_product"><a href="index.php?com=san-pham&id=<?=$v['id']?>.html">  <img  alt="<?=$v['ten']?>" title="<?=$v['ten']?>" src="<?=_upload_sanpham_l.$v['thumb']?>" /></a> </div>
           <div class="ten_product"> <a href="index.php?com=san-pham&id=<?=$v['id']?>.html"> 
           	Frequency Inverter</a> </div>
    
           
        </div><!--product-->
        
                      <?php }?>
                      
                      
                      
     