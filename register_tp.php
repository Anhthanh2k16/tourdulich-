<!DOCTYPE html>
<html lang="vi">
<head>
	
	[_head_]
	<title>Đăng ký</title>
	<meta name="description" content="<?=$_SESSION['websiteconfig']['description']?>"> 
	<meta name="keywords" content="<?=$_SESSION['websiteconfig']['keywords']?>">
	
</head>
	
<body>
	
	[_facebook_sdk_]
	
	[_navbar_]
	
	<div class="wrapper">
		<div class="container-fluid">
		    <div class="row">
			    
				[_logo_]
		        <div class="col-sm-4 col-md-3 hidden-xs" id="sidebar_wrapper">
			       [_sidebar_]
			       	
		        </div>
				<div class="col-sm-8 col-md-9" id="main" >
				<?if(isset($errors['main'])):?>
					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?=$errors['main']?>
					</div>
				<?elseif(isset($success['main'])):?>
					<div class="alert alert-success" role="alert">
						<?=$success['main']?>
					</div>
				<?endif?>

				<?if(!isset($success['main'])):?>
				<form method="post" action="" class="input-group">
					<div class="row"> 
						<div class="col-lg-6 col-xs-12" id="login_order">
							<div class="col-lg-12" id ="title-regis">ĐĂNG KÝ</div>
							<div class="col-lg-12 <?if(isset($errors['User_Name'])):?> has-error<?endif?>">
							<?if(isset($errors['User_Name'])):?><span class="text-danger"><?=$errors['User_Name']?></span><?endif?>
								<div>Họ tên *</div>
								<div class="input-group " style="margin-bottom:20px">
								  
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-color:#CCCCCC; color:#7f8c8d;height:34px	"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></button>
								  </span>
								  
								  <input type="text" name="User_Name" class="form-control" placeholder="Họ tên" value="<?=htmlspecialchars($post['User_Name'])?>">
								</div><!-- /input-group -->
							</div> 
							<div class="col-lg-12 <?if(isset($errors['User_Email'])):?> has-error<?endif?>">
							<?if(isset($errors['User_Email'])):?><span class="text-danger"><?=$errors['User_Email']?></span><?endif?>
								<div>Email <span class="text-danger">*</span></div>
								<div class="input-group " style="margin-bottom:20px">
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-color:#CCCCCC; color:#7f8c8d;height:34px"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></button>
								  </span>
								  
								  <input type="text" name="User_Email" class="form-control" placeholder="Email" value="<?=htmlspecialchars($post['User_Email'])?>">
								</div><!-- /input-group -->
							</div>
							<div class="col-lg-6 <?if(isset($errors['User_Password'])):?> has-error<?endif?>">
							<?if(isset($errors['User_Password'])):?><span class="text-danger"><?=$errors['User_Password']?></span><?endif?>
								<div>Password <span class="text-danger">*</span></div>
								<div class="input-group " style="margin-bottom:20px">
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-color:#CCCCCC; color:#7f8c8d;height:34px"><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></button>
								  </span>
								  
								  <input type="password" name="User_Password" class="form-control" placeholder="Password" value="<?=htmlspecialchars($post['User_Password'])?>">
								</div><!-- /input-group -->
							</div>
							<div class="col-lg-6 <?if(isset($errors['re_User_Password'])):?> has-error<?endif?>">
							<?if(isset($errors['re_User_Password'])):?>
									<span class="text-danger"><?=$errors['re_User_Password']?></span>
								  <?endif?>
								<div>Nhập lại Password <span class="text-danger">*</span></div>
								<div class="input-group " style="margin-bottom:20px">
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-color:#CCCCCC; color:#7f8c8d;height:34px"><span class="glyphicon glyphicon glyphicon-ok" aria-hidden="true"></span></button>
								  </span>
								  
								  <input type="password" name="re_User_Password" class="form-control" placeholder="Nhập lại Password" value="<?=htmlspecialchars($post['re_User_Password'])?>">
								</div><!-- /input-group -->
							
							</div> 
								<div class="clearfix"></div>
							<div class="col-lg-6 <?if(isset($errors['User_Gender'])):?> has-error<?endif?>">
							<?if(isset($errors['User_Gender'])):?><span class="text-danger"><?=$errors['User_Gender']?></span><?endif?>
								<div>Giới tính <span class="text-danger">*</span></div>              
							<?foreach($genders as $k=>$v):?>
								<div class="radio-inline">
								  <label>
									<input type="radio" name="User_Gender"  value="<?=$k?>" <?if($k==$post['User_Gender']):?> checked<?endif?>>
								
									<?=$v?>
								  </label>
								</div>
							<?endforeach?>
							</div>
							<div class="col-lg-6 <?if(isset($errors['User_Mobile'])):?> has-error<?endif?>">
							<?if(isset($errors['User_Mobile'])):?><span class="text-danger"><?=$errors['User_Mobile']?></span>
								  <?endif?>
								<div>Điện thoại <span class="text-danger">*</span></div>
								<div class="input-group " style="margin-bottom:20px">
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-color:#CCCCCC; color:#7f8c8d;height:34px"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></button>
								  </span>
								  
								  <input type="text" name="User_Mobile" class="form-control" placeholder="Số điện thoại" value="<?=htmlspecialchars($post['User_Mobile'])?>">
								</div><!-- /input-group -->
							</div>
							
							<div class="col-lg-12 <?if(isset($errors['User_Address'])):?> has-error<?endif?>">
							<?if(isset($errors['User_Address'])):?>
									<span class="text-danger"><?=$errors['User_Address']?></span>
								  <?endif?>
								<div>Địa chỉ <span class="text-danger">*</span></div>							
								<div class="input-group " style="margin-bottom:20px">
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" style="border-color:#CCCCCC; color:#7f8c8d;;height:34px"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></button>
								  </span>
								  
								  <input type="text" name="User_Address" class="form-control" placeholder="Địa chỉ" <?=htmlspecialchars($post['User_Address'])?>>
								</div><!-- /input-group -->
							</div>
							<div class="col-lg-12"> 
								<div class="form-selector" style="margin-top:20px; width:100%">
									<button id="btn-send-contact" class="btn btn-gui" style="width:100%	">ĐĂNG KÝ</button>
								</div>
							</div> 
						</div>
					
							<div class="col-lg-6 col-xs-12" >
								<div class="col-lg-12" id ="title-regis">ĐĂNG NHẬP BẰNG TÀI KHOẢN:</div>
									<div class="col-lg-12">
										<div class="btn-group" style="margin-top:20px; width:100%">
											<a class='btn btn-danger disabled' style="width:10%; height:37px"><i class="fa fa-google-plus" style="line-height:25px"></i></a>
											<a class='btn btn-danger' href='' style="width:90%;height:37px"> Đăng nhập bằng Google</a>
										</div>
											<br /><br /> 
									</div>
							
									<div class="col-lg-12">
										<div class="btn-group" style="width:100%">
											<a class='btn btn-primary disabled'style="width:10%; height:37px"><i class="fa fa-facebook" style="line-height:25px"> </i></a>
											<a class='btn btn-primary ' href='' style="width:90%;height:37px"> Đăng nhập bằng Facebook</a>
										</div>	
										<br /><br />
									</div>
								
							</div>
					 
					</div>
				</form>
				<?endif?>
				</div>
				
			        <!--/right-->
		        <!--/right-->
		    </div>
		    <!--/row-->
		</div>
		<!--/container-->
	</div>

	[_js_]
	
</body>
</html>