<div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="form-group field-middle_name row">	
							<?=getInputTypeText('Аттестат номері','att_number',32);?>						
								
								<?=getInputTypeText('Тегі','lastname_baga',40,"required");?>
								<?//getInputTypeText('Аты','name_baga',40,"required");?>
								<div class="col-sm-12 col-md-12 col-xs-12 no-padding">
									<label for="exampleInputEmail1">Аты</label>
									<input type="text" class="form-control" id="name_baga" aria-describedby="emailHelp"
									placeholder="Аты" name="name_baga"  value="<?=getValue('name_baga');?>">
									
								</div>
								
								<?=getInputTypeText('Әкесінің аты','surname_baga',40,"");?>
								<?=getInputTypeText('Тегі(орысша)','lastname_baga_ru',40,"required");?>
								<div class="col-sm-12 col-md-12 col-xs-12 no-padding">
									<label for="exampleInputEmail1">Аты(орысша)</label>
									<input type="text" class="form-control" id="name_baga_ru" aria-describedby="emailHelp"
									placeholder="Аты(орысша)"  name="name_baga_ru"  
									value="<?=getValue('name_baga_ru');?>">
									
								</div>
								
								<?=getInputTypeText('Әкесінің аты(орысша)','surname_baga_ru',40,"");?>
								<?=getInputTypeText('Мектеп аты','scholl_baga',40,"required");?>
								<?=getInputTypeText('Мектеп аты жалғасы','scholl_baga1',40);?>
								<?=getInputTypeText('Мектеп аты жалғасы2','scholl_baga2',40);?>
								<?=getInputTypeText('Мектеп аты(орысша)','scholl_baga_ru',40,"required");?>
								<?=getInputTypeText('Мектеп аты(орысша) жалғасы','scholl_baga_ru1',40);?>
								<?=getInputTypeText('Мектеп аты(орысша) жалғасы2','scholl_baga_ru2',40);?>
								<?//=getInput("Қазақ Тілі","qazaqtili",50);?>
								<?=getInputSelect("Қазақ Тілі","qazaqtili",50);?>
								<!--
								<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
										<label for="inputGroupSelect02">Қазақ тілі</label>
										<div class="input-group mb-3">
											  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
											  placeholder="және әдебиеті" name="qazaqtili_name" value="<?=getValue('qazaqtili_name');?>">
										</div>
								</div>	
								<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
                                    <label for="inputGroupSelect02">Қазақ тілі(орысша)</label>
                                    <div class="input-group mb-3">
                                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                            placeholder="и литература" name="qazaqtili_name_ru" value="<?=getValue('qazaqtili_name_ru');?>">
                                    </div>
								</div>	
									<div class="col-sm-2 col-md-2 col-xs-2 no-padding">
										<label for="inputGroupSelect02">бағасы</label>
										<div class="input-group mb-3">
											  <select name="qazaqtili" class="custom-select" id="inputGroupSelect02">
                                              <option><?=$_SESSION['oqilmagan_pan']?></option>
												<?
												for($day=1; $day<=5;$day++) {?>
												<option <?if(getValue('qazaqtili')==$day){echo "selected";}
												?> value="<?=$day?>"><?=$day?></option>
												<?}?>
												
											  </select>
										</div>
								    </div>
								<div class="col-sm-2 col-md-2 col-xs-2 no-padding">
									<label for="exampleInputEmail1"> <?=getTextX()?></label>
									<input type="number" name="qazaqtili_number" id="sample_number" class="form-control" placeholder="Номер" step="0.1" min="0" max="200"
									title="Номер образца" required="required" value="<?=getNumber('qazaqtili_number',50);?>">
								</div>
								<div class="col-sm-2 col-md-2 col-xs-2 no-padding">
											<label for="exampleInputEmail1"> <?=getTextY()?></label>
											<input type="number" name="qazaqtili_numberY" id="sample_number" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('qazaqtili_numberY',0);?>">
										</div>
								
								-->
								<?//=getInput("Қазақ әдебиеті","qazaq_ad",50);?>
								<?=getInputSelect("Қазақ әдебиеті","qazaq_ad",50);?>
								<?=getInputSelect("Қазақ тілі мен әдебиеті","qazaq_tili_and_ad",50);?>
								<?//=getInput("Орыс Тілі","orystili",50);?>
								<?=getInputSelect("Орыс Тілі","orystili",50);?>
								<?//=getInput("Орыс Әдебиеті","orys_ad",50);?>
								<?=getInputSelect("Орыс Әдебиеті","orys_ad",50);?>
								<?=getInputSelect("Орыс тілі мен әдебиеті","orystil_and_ad",53);?>
								
								<?=getInputSelect("Ана тілі","anatili",50);?>	
                                                   
									<div class="col-sm-2 col-md-2 col-xs-2 no-padding">
										<label for="inputGroupSelect02">( )әдебиеті</label>
										<div class="input-group mb-3">
											  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
											  placeholder="мысалы Әлем әдебиеті" name="alem_name" value="<?=getValue('alem_name');?>">
										</div>
								    </div>	
									<div class="col-sm-2 col-md-2 col-xs-2 no-padding">
										<label for="inputGroupSelect02">(орысша)</label>
										<div class="input-group mb-3">
											  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
											  placeholder="" name="alem_name_ru" value="<?=getValue('alem_name_ru');?>">
										</div>
								    </div>	
									<div class="col-sm-2 col-md-2 col-xs-2 no-padding">
										<label for="inputGroupSelect02"> бағасы</label>
										<div class="input-group mb-3">
											  <select name="alem" class="custom-select" id="alem">
                                              <option value="ОЖ"><?=$_SESSION['oqilmagan_pan']?></option> 
											  <option value="ЕСП">есептелді</option>
											<option value="ЕСП">есептелінді</option>	  
		  									<option value="Б">босатылған</option>
												<?
												for($day=1; $day<=5;$day++) {?>
												<option <?if(getValue('alem')==$day){echo "selected";}
												?> value="<?=$day?>"><?=$day?></option>
												<?}?>
												
											  </select>
										</div>
								    </div>
								<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
									<label for="exampleInputEmail1"> <?=getTextX()?></label>
									<input type="number" name="alem_number" id="alem_number" class="form-control" placeholder="Номер" step="0.1" min="0" max="200"
									title="Номер образца" required="required" value="<?=getNumber('alem_number',50);?>">
								</div>
								<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1"> <?=getTextY()?></label>
											<input type="number" name="alem_numberY" id="alem_numberY" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('alem_numberY',0);?>">
										</div>
								
									
										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="inputGroupSelect02">Шет тілі</label>
											<div class="input-group mb-3">
												  <select name="shettili_sel" class="custom-select" id="inputGroupSelect02">
													<option  selected>ағылшын</option>
													<option>неміс</option>
												  </select>
											</div>
									    </div>
										
										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1"> Х осі(ор)</label>
											<input type="number" name="shettili_sel_number" id="shettili_sel_number" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('shettili_sel_number',50);?>">
										</div>	
										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1"> Y осі(ор) </label>
											<input type="number" name="shettili_sel_numberY" id="shettili_sel_numberY" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('shettili_sel_numberY',0);?>">
										</div>


										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1">Шет Тілі бағасы</label>
											<select name="shettili" class="custom-select" id="shettili">
                                              <option value="ОЖ"><?=$_SESSION['oqilmagan_pan']?></option>
											  <option value="ЕСП">есептелді</option>
												<option value="ЕСП">есептелінді</option>
		  									  <option value="Б">босатылған</option>
												<?
												for($day=1; $day<=5;$day++) {?>
												<option <?if(getValue('technoloia')==$day){echo "selected";}
												?> value="<?=$day?>"><?=$day?></option>
												<?}?>
												
											  </select>
											</div>
										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1"> Х осі(ор)</label>
											<input type="number" name="shettili_number_ru" id="shettili_number_ru" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('shettili_number_ru',50);?>">
										</div>	
										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1">  Y осі(ор)</label>
											<input type="number" name="shettili_number_ruY" id="shettili_number_ruY" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('shettili_number_ruY',0);?>">
										</div>

										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1"> <?=getTextX()?></label>
											<input type="number" name="shettili_number" id="shettili_number" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('shettili_number',50);?>">
										</div>	
										<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1">  <?=getTextY()?></label>
											<input type="number" name="shettili_numberY" id="shettili_numberY" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('shettili_numberY',0);?>">
										</div>

											
																
										
								
								
								
								<?//=getInput("Алгебра және анализ бастамалары","algebra",70);?>
                                <?=getInputSelect("Алгебра және анализ бастамалары","algebra",70);?>

								<?//=getInput("Геометрия","geometri",50);?>
                                <?=getInputSelect("Геометрия","geometri",50);?>
								
                                <?//=getInput("Информатика","informatica",50);?>
                                <?=getInputSelect("Информатика","informatica",50);?>

								<?//=getInput("География","geographi",50);?>
								<?=getInputSelect("География","geographi",50);?>
								<?//=getInput("Биология","biologia",50);?>
								<?=getInputSelect("Биология","biologia",50);?>
								<?//=getInput("Физика","phizica",50);?>
								<?=getInputSelect("Физика","phizica",50);?>
								<?//=getInput("Химия","chimia",50);?>
								<?=getInputSelect("Химия","chimia",50);?>
								<?//=getInput("Дүние жүзі тарихы","dtarih",155);?>
                                <?=getInputSelect("Дүние жүзі тарихы","dtarih",155);?>

								<?//=getInput("Қазақстан тарихы","qtarih",155);?>
                                <?=getInputSelect("Қазақстан тарихы","qtarih",155);?>
								<?//=getInput("Құқық негіздері","kbilim",155);?>
								<?=getInputSelect("Құқық негіздері","kbilim",155);?>
								<?=getInputSelect("Өзін-өзі тану","tanu",155);?>
								<?//=getInput("Құқық негіздері","adam",155);?>
								
								<?//=getInput("Технология","technoloia",155);?>
								 <?//=getInputSelect("Технология","technoloia",155);?>
								
								<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
										<label for="inputGroupSelect02">Көркем еңбек</label>
										<div class="input-group mb-3">
											  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
											  placeholder="технология" name="technoloia_name" value="<?=getValue('technoloia_name');?>">
										</div>
								    </div>	
										
									<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
										<label for="inputGroupSelect02">бағасы</label>
										<div class="input-group mb-3">
											  <select name="technoloia" class="custom-select" id="technoloia">
                                              <option value="ОЖ"><?=$_SESSION['oqilmagan_pan']?></option>
											  <option value="ЕСП"><?=$_SESSION['esp_pan']?></option>
										     
		  									  <option value="Б">босатылған</option>
												<?
												for($day=1; $day<=5;$day++) {?>
												<option <?if(getValue('technoloia')==$day){echo "selected";}
												?> value="<?=$day?>"><?=$day?></option>
												<?}?>
												
											  </select>
										</div>
								    </div>
								<div class="col-sm-3 col-md-3 col-xs-2 no-padding">
									<label for="exampleInputEmail1"> <?=getTextX()?></label>
									<input type="number" name="technoloia_number" id="technoloia_number" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200"
									title="Номер образца" required="required" value="<?=getNumber('technoloia_number',155);?>">
								</div>
								<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
											<label for="exampleInputEmail1"> <?=getTextY()?></label>
											<input type="number" name="technoloia_numberY" id="technoloia_numberY" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
											title="Номер образца" required="required" value="<?=getNumber('technoloia_numberY',0);?>">
										</div>
								
								
								 <?=getInputSelect("Дене шынықтыру","fizra",155);?>
								<?//=getInput("Алғашқы әскери дайындық","asker",155);?>
								<?=getInputSelect("Алғашқы әскери және технологиялық дайындық","asker",155);?>
								<?=getInputSelect("Графика және жобалау","grafica",155);?>
								<?=getInputSelect("Кәсіпкерлік және бизнес негіздері","biznes",155);?>
								
								<?=getInputTypeText('Қолданбалы курстар','qoldanbali',155,"");?>
								<?=getInputTypeText('Таңдауы бойынша курстар','tanday',155,"");?>
								<?=getInputTypeText('Таңдауы бойынша курстар жалғасы','tanday2',155,"");?>
								<?=getInputTypeText('Қолданбалы курстар орысша','qoldanbali_ru',155,"");?>
								<?=getInputTypeText('Таңдауы бойынша курстар орысша','tanday_ru',155,"");?>
								<?=getInputTypeText('Таңдауы бойынша курстар орысша жалғасы','tanday2_ru',155,"");?>
								<?=getInputTypeText('Директор','director_name_baga',140,"required");?>
								<?=getInputTypeText('Орынбасар','orinbasar_name_baga',150,"required");?>
								<?=getInputTypeText('Сынып жетекшісі','kurator_name_baga',140,"required");?>
								<?=getInputTypeText('Директор(орысша)','director_name_baga_ru',140,"required");?>
								<?=getInputTypeText('Орынбасар(орысша)','orinbasar_name_baga_ru',150,"required");?>
								<?=getInputTypeText('Сынып жетекшісі(орысша)','kurator_name_baga_ru',140,"required");?>
							
							</div>	
					  </div>