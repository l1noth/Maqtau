<div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?= $langData['left_menu_general_information'] ?></a>
        </div>
    </nav>
	
    
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <!--Қазақша-->
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['region_district'], 'region', 43, 63, "required"); ?>
            </div>
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['school_name'], 'school_name', 25, 73, "required"); ?>
            </div>
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['school_name_continued'], 'school_name1', 58, 82.7); ?>
            </div>
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['student_last_name'], 'fio', 20, 92, "required"); ?>
            </div>
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['director'], 'director', 20, 151, "required"); ?>
            </div>
            <div class="card">
                <h6><?= $langData['main_detail']['font_size'] ?></h6>
                <div class="input-group mb-3">
                    <select name="fontsizeselectteacher" class="custom-select" id="fontsizeselectteacher">
                        <?php
                        for ($size = 8.0; $size < 14.0; $size = $size + 0.2) {
                            $size = strval($size);
                            ?>
                            <option value="<?= $size ?>" <?= (($size) == $_SESSION['fontsizeselectteacher']) ? "selected" : "" ?>>
                                <?= $size ?>
                            </option>
                        <?php }
                        ?>
                    </select>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group field-middle_name row">
                    <?= getInputTypeText($langData['main_detail']['teachers'], 'teacher1', 80, 150, "required"); ?>
                </div>
                <div class="form-group field-middle_name row">
                    <?= getInputTypeText($langData['main_detail']['teachers'], 'teacher2', 80, 155.6, "required"); ?>
                </div>
                <div class="form-group field-middle_name row">
                    <?= getInputTypeText($langData['main_detail']['teachers'], 'teacher3', 80, 157.6, "required"); ?>
                </div>
            </div>
            
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['locality'], 'city', 80, 155.7, "required"); ?>
            </div>
            
            <div class="form-group field-middle_name row">
                <div class="col-sm-6 col-md-6 col-xs-6 no-padding">
                    <label for="inputGroupSelect02"><?= $langData['main_detail']['given_day'] ?></label>
                    <div class="input-group mb-3">
                        <select name="date" class="custom-select" id="date">
                            <?php
                            $cday = date('j');
                            for ($day = 1; $day <= 31; $day++) { ?>
                                <option <?= (getValue('date') == $day) ? "selected" : "" ?>
                                        <?= ($cday == $day && getValue('date') == '') ? "selected" : "" ?>
                                        value="<?= $day ?>"><?= $day ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3 no-padding">
                    <label for="exampleInputEmail1"><?= $langData['main_detail']['shift_x'] ?></label>
                    <input type="number" name="date_number" id="date_number" class="form-control" placeholder="Номер" step="0.1"
                           min="-100" max="300" title="Номер образца" required="required" value="<?= getNumber('date_number', 69); ?>">
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3 no-padding">
                    <label for="exampleInputEmail1"><?= $langData['main_detail']['shift_y'] ?></label>
                    <input type="number" name="date_numberY" id="date_numberY" class="form-control" placeholder="Номер" step="0.1"
                           min="-100" max="300" title="Номер образца" required="required" value="<?= getNumber('date_numberY', 171.5); ?>">
                </div>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['given_month_year'], 'month', 85, 171.5, "required"); ?>
            </div>
            <!--Орысша-->
           <!-- <h2><?= $langData['main_detail']['russian_language'] ?></h2>
            <hr><br/>
            
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['awarded'], 'letter_a', 195, 63.6, "required"); ?>
            </div>
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['student_gendered'], 'letter_ca', 214, 63.6, "required"); ?>
            </div>
            
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['school_name'], 'school_name_ru', 221, 63.6, "required"); ?>
            </div>
            
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['school_name_continued'], 'school_name1_ru', 187, 74); ?>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['region_district'], 'region_ru', 185, 83, "required"); ?>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['student_last_name'], 'fio_ru', 187, 94, "required"); ?>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['director'], 'director_ru', 170, 152, "required"); ?>
            </div>
            
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['teachers'], 'teacher1_ru', 230, 151, "required"); ?>
            </div>
            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['teachers'], 'teacher2_ru', 230, 154, "required"); ?>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['teachers'], 'teacher3_ru', 230, 152.6, "required"); ?>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['locality'], 'city_ru', 235, 156.8, "required"); ?>
            </div>

            <div class="form-group field-middle_name row">
                <div class="col-sm-6 col-md-6 col-xs-6 no-padding">
                    <label for="inputGroupSelect02"><?= $langData['main_detail']['given_day'] ?></label>
                    <div class="input-group mb-3">
                        <select name="date_ru" class="custom-select" id="date_ru">
                            <?php
                            for ($day = 1; $day <= 31; $day++) { ?>
                                <option <?= (getValue('date_ru') == $day) ? "selected" : "" ?>
                                        value="<?= $day ?>"><?= $day ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3 no-padding">
                    <label for="exampleInputEmail1"><?= getTextX() ?></label>
                    <input type="number" name="date_ru_number" id="date_ru_number" class="form-control" placeholder="Номер" step="0.1"
                           min="0" max="300" title="Номер образца" required="required" value="<?= getNumber('date_ru_number', 220); ?>">
                </div>
                <div class="col-sm-3 col-md-3 col-xs-3 no-padding">
                    <label for="exampleInputEmail1"><?= getTextY() ?></label>
                    <input type="number" name="date_ru_numberY" id="date_ru_numberY" class="form-control" placeholder="Номер" step="0.1"
                           min="-100" max="300" title="Номер образца" required="required" value="<?= getNumber('date_ru_numberY', 172.5); ?>">
                </div>
            </div>

            <div class="form-group field-middle_name row">
                <?= getInputTypeText($langData['main_detail']['given_month_year'], 'month_ru', 235, 172.5, "required"); ?>
            </div>
        </div>-->
    </div>
</div>
