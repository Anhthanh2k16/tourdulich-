<?php

	session_start();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	
	
$d->reset();		
	$sql = "select * FROM #_product_cat where hienthi=1 and com='cat1' and id_cat='".$_REQUEST['id']."' order by stt asc";
	$d->query($sql);
	$rs_c2=$d->result_array();
	
	//echo  $loaitin; exit();
	

?>
      <option value="0">Select Countries</option>
<?php foreach ($rs_c2 as $v) {?>
	<option  value="<?=$v['id']?>"><?=$v['ten'];?> 
	</option>
<?php } ?>
