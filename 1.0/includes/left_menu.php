<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
	<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?=	$langData['left_menu_general_information'] ?></a>
	<!--<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Оқушы мәліметтері</a>-->
		
	<div id="accordion">
		<div class="card">
			<a class="nav-link" id="help" data-toggle="collapse"  data-target="#collapseOne" href="#v-pills-collapseOne" >
				<?=	$langData['left_menu_actions']['actions'] ?>
			</a>

			<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					
					
					<!--HEAD-->
					
					<label for="inputGroupSelect02"><?=	$langData['left_menu_actions']['font_select'] ?></label>
					
										<div class="input-group mb-3">
										
											  <select name="fontselect" class="custom-select" id="fontselect">
												
											  <?
												/*if (!isset($_SESSION['fontname'])){
													$_SESSION['fontname']='matilda';
													
												}*/
												foreach($fonts as $value){
													?><option value="<?=$value?>" <?if($value==$_SESSION['fontselect']){echo "selected";}?> >
													<?=$value?></option>
											<?	}
												?>
												
											  </select>
										
										</div>
					<!--END-->	
					<!--HEAD-->							
					<label for="inputGroupSelect02"><?=	$langData['left_menu_actions']['font_size_select'] ?></label>
				
										<div class="input-group mb-3">
											  <select name="fontsizeselect" class="custom-select" id="fontsizeselect">
												
												<?/*
												if (!isset($_SESSION['fontsize'])){
													$_SESSION['fontsize']=strval(11);
													
												}*/
												//$_SESSION['fontsize']=(double)$_SESSION['fontsize'];
												for($size=8.0;$size<14.0; $size=$size+0.2){
													$size=strval($size);
													?><option value=<?=$size?> <?if(($size)==$_SESSION['fontsizeselect']){echo "selected";}?>>
													<?=$size?></option>
											    <?	}
												?>
												
											  </select>
											  </div>									
						<!--END-->	
						<div class="form-check">							
							<input class="form-check-input" name="italic" type="checkbox" value="" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
								<?= $langData['left_menu_actions']['italic']?>
							</label>	
						</div>	
						<div class="form-check">							
							<input class="form-check-input" name="bold" type="checkbox" value="" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
								<?= $langData['left_menu_actions']['bold']?>
							</label>	
						</div>						
						<div class="form-check">							
							<input class="form-check-input" name="view" type="radio" value="maqtau.jpg" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
								<?= $langData['left_menu_actions']['template_1']?>
							</label>	
						</div>
					<div class="form-check">							
							<input class="form-check-input" name="view" type="radio" value="maqtau1.jpg" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
								<?= $langData['left_menu_actions']['template_2']?>
							</label>	
						</div>
					<div class="form-check">							
							<input class="form-check-input" name="view" type="radio" value="" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
								<?= $langData ['left_menu_actions']['hide_background']?>
							</label>	
						</div>		
					<input type="submit" class="btn btn-success btn-lg btn-block"  name="print"value="<?=$langData['left_menu_actions']['print'] ?>"> 

						<!--HEAD-->
						<hr>
						<h6><?= $langData['left_menu_actions']['save_coords']?></h6>
										<div id="generateButton" style="cursor:pointer;" class="btn btn-success btn-lg btn-block"><?=$langData['left_menu_actions']['save'] ?></div>
										<br>
									<h6><?= $langData['left_menu_actions']['import_coords']?></h6>
						<input type="file" class="btn btn-success btn-lg btn-block" name="fileInput" id="fileInput">
						<!--END-->	
				</div>
			</div>
		</div>


		<div class="card">
			<a class="nav-link" id="help" data-toggle="collapse"  data-target="#collapseTwo" href="#v-pills-collapseOne" >
				<?= $langData['left_menu_files_loading']['working_with_files']?>
			</a>

			<div id="collapseTwo" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
							    
				<input type="file" class="btn btn-success btn-sm"  style="width: 100px;" id="fileUpload" />
				<input type="button" id="upload" class="btn btn-success " value="<?=$langData['left_menu_files_loading']['load_file'] ?>" onclick="UploadProcess()" />
				<input type="button" class="btn btn-danger " id="qazb" value="<?=$langData['left_menu_files_loading']['clear_loaded_file']?>" onclick="ClearLS()" />
				<a href="Maqtau_qagazi.xlsx"  class="btn btn-success btn-sm" download="Maqtau_qagazi.xlsx"><?= $langData['left_menu_files_loading']['download_example_xls_file']?></a>
				<div class="article" id="article">
       
    			</div>
				</div>
			</div>
		</div>
		
		
			<!-- <div class="card">
			<a class="nav-link" id="help" data-toggle="collapse"  data-target="#collapseThree" href="#v-pills-collapseOne" >
				Нұсқаулық
			</a>

			<div id="collapseThree" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
				<div class="card-body">
					<a href="https://youtu.be/uvrwrSBscSA">Видео нұсқаулық</a>			    
				<br/>Егер, осы сервистің қызметі ұнаса, мына реквизит арқылы қолдау білдіре аласыз.
				Kaspi Gold(тел:87751971324 Ержан Д.)
<a href="https://t.me/joinchat/77yC-22yIHMyOTFi">telegram топ(сұрақтар үшін)</a>
       
    			</div>
				</div>
			</div> -->
		
		</div>

	</div>
			
			
