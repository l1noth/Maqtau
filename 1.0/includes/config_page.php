
<div class="tab-panel fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							 <?
                                    if (isset($_POST['save'])){
                                        echo "test";
                                    }
                                    ?>
                                    <div class="alert alert-success" role="alert">
                                
								<div class="form-group field-middle_name row">
								
								<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
                               
										<label for="inputGroupSelect02"><?= $landData['left_menu_actions']['font_select']?></label>
										<div class="input-group mb-3">
											  <select name="fontname" class="custom-select" id="fontname">
												
												<?
												if (!isset($_SESSION['fontname'])){
													$_SESSION['fontname']='times new roman';
													
												}
												foreach($fonts as $value){
													?><option <?if($value==$_SESSION['fontname']){echo "selected";}?>>
													<?=$value?></option>
											<?	}
												?>
												
											  </select>
										
										</div>
									</div>
									<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
									
										<label for="inputGroupSelect02"><?= $landData['left_menu_actions']['font_size_select']?></label>
										<div class="input-group mb-3">
											  <select name="fontsize" class="custom-select" id="fontsize">
												
												<?
												if (!isset($_SESSION['fontsize'])){
													$_SESSION['fontsize']=strval(11);
												}
												//$_SESSION['fontsize']=(double)$_SESSION['fontsize'];
												for($size=8.0;$size<14.0; $size=$size+0.2){
													$size=strval($size);
													?><option <?if(($size)==$_SESSION['fontsize']){echo "selected";}?>>
													<?=$size?></option>
											    <?	}
												?>
												
											  </select>
											  </div>
										</div>
									<!---->
										<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
									
										<label for="inputGroupSelect02"><?=$landData['five_point_scale']?></label>
										<div class="input-group mb-3">
											  <select name="bestik" class="custom-select" id="bestik">
												
													<?
												if (!isset($_SESSION['bestik'])){
													$_SESSION['bestik']=$bestik_baga[0];
													
												}
												foreach($bestik_baga as $value){
													?><option <?if($value==$_SESSION['bestik']){echo "selected";}?>>
													<?=$value?></option>
											<?	}
												?>
												
											  </select>
											  </div>
										</div>
									
									<!--Жылжыту үшін пайдалану-->
											<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
									
										<label for="inputGroupSelect02"><?= $landData['use_to_move']?></label>
										<div class="input-group mb-3">
											  <select name="osxy" class="custom-select" id="osxy">
												
													<?
												if (!isset($_SESSION['osxy'])){
													$_SESSION['osxy']=$osxy_mes[0];
													
												}
												foreach($osxy_mes as $value){
													?><option <?if($value==$_SESSION['osxy']){echo "selected";}?>>
													<?=$value?></option>
											<?	}
												?>
												
											  </select>
											  </div>
										</div>
										<!---->
										<div class="col-sm-12 col-md-12 col-xs-12 no-padding">
									
										<label for="inputGroupSelect02"><?= $landData ['mark_unread_topic']?></label>
										<div class="input-group mb-3">
											  <select name="oqilmagan_pan" class="custom-select" id="oqilmagan_pan">
												
													<?
												if (!isset($_SESSION['oqilmagan_pan'])){
													$_SESSION['oqilmagan_pan']=$oqilmagan_pan[0];
													
												}
												foreach($oqilmagan_pan as $value){
													?><option <?if($value==$_SESSION['oqilmagan_pan']){echo "selected";}?>>
													<?=$value?></option>
											<?	}
												?>
												
											  </select>
											  </div>
										</div>
                                        
										<div class="col-sm-12 col-md-12 col-xs-12 no-padding">
									
										<label for="inputGroupSelect02"><?= $landData ['calculated_item']?></label>
										<div class="input-group mb-3">
											  <select name="esp_pan" class="custom-select" id="esp_pan">
												
													<?
												if (!isset($_SESSION['esp_pan'])){
													$_SESSION['esp_pan']=$esp_pan[0];
													
												}
												foreach($esp as $value){
													?><option <?if($value==$_SESSION['esp_pan']){echo "selected";}?>>
													<?=$value?></option>
											<?	}
												?>
												
											  </select>
											  </div>
										</div>
											
										<!--Y-->
										<div class="col-sm-4 col-md-4 col-xs-4 no-padding">
									
										
										<label for="exampleInputEmail1"><?= $landData['move_y_axis']?></label>
									<input type="number" name="osy" id="osy" class="form-control" placeholder="Номер" step="0.1" min="-100" max="100" 
									title="Номер образца"  value="<?if(getValue('osy')=='') {echo '0';}else {echo getValue('osy');};?>">
		
										</div>
										<div class="col-sm-4 col-md-4 col-xs-4 no-padding">
										<label for="exampleInputEmail1"> <?= $landData['move_y_axis']?></label>
									<input type="number" name="osy1" id="osy1" class="form-control" placeholder="Номер" step="0.1" min="-100" max="100" 
									title="Номер образца"  value="<?if(getValue('osy1')=='') {echo '0';}else {echo getValue('osy1');};?>">
										</div>
										
										<div class="col-sm-4 col-md-4 col-xs-4 no-padding">
										<label for="exampleInputEmail1"> <?= $landData['move_y_axis']?></label>
									<input type="number" name="osy2" id="osy2" class="form-control" placeholder="Номер" step="0.1" min="-100" max="100" 
									title="Номер образца"  value="<?if(getValue('osy2')=='') {echo '0';}else {echo getValue('osy2');};?>">
										</div>
										<!--Y-->
										<!--9-11
										<div class="col-sm-12 col-md-12 col-xs-12 no-padding">
										<? echo $_POST['class']."sdd";?>
										<label for="exampleInputEmail1"> Сыныпты таңдау</label>
											<div class="input-group mb-3">
											<form action="index.php"  method="POST" target="_self">
											  <select name="class" class="custom-select" id="class">
												
												<option value="11">11 сынып</option>
												<option value="9">9 сынып</option>
											  </select>
											  </div>
												<button name="class_button" class="btn btn-primary">Орнату</button>
												</form>
										</div>
										9-11-->
									</div>
                                    <button type="submit" name="save" class="btn btn-success btn-lg btn-block"><?= $landData['left_menu_actions']['save']?></button>
										<hr>
										<div id="generateButton" style="cursor:pointer;" class="btn btn-success btn-lg btn-block"><?= $landData['left_menu_actions']['save_coords']?></div>
										<br>
									<h5><?= $landData['left_menu_actions']['import_coords']?></h5>
						<input type="file" class="btn btn-success btn-lg btn-block" name="fileInput" id="fileInput">
									
									</div>
							
							<div class="alert alert-success" role="alert">
							  <h4 class="alert-heading"><?= $landData['config_page']['1_comment']?></h4>
							  <p><?= $landData['config_page']['2_comment']?></p>
								<p><?= $landData['config_page']['3_comment']?> </p>	  
							   <p><?= $landData['youtube_php']['2_comment']?></p>
							   <p><?= $landData['youtube_php']['3_comment']?></p>
							   <p><?= $landData['youtube_php']['4_comment']?></p>
							   <p><a href="https://www.youtube.com/watch?v=DFWbzVj_CW4" target="_blank"><?= $landData['config_page']['4_comment']?></a></p>
							 
							   <p><a href="https://www.youtube.com/watch?v=1Uf1WRiK-BY" target="_blank"><?= $landData['youtube_php']['7_comment']?></a></p>
							  <hr>
							  <p class="mb-0"><?= $landData['config_page']['5_comment']?></p>
							  <p><?= $landData['config_page']['6_comment']?></p>
							   <hr>
							  
							  <p class="mb-0"><?= $landData['config_page']['7_comment']?> <a href="mailto:domaqov@gmail.com">domaqov@gmail.com</a></p>
							  
								<hr>
								
							
								  
						