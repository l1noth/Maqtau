<?php

function saveSession(){

	foreach ($_POST as $val=>$key){
		//$key = htmlspecialchars($_POST[$val]);
		$_SESSION[$val]=$key;
		
	}
	header('Location: index.php');
}


function writeFile($filename='stat11.txt'){

	while (true) {
		if($f=fopen($filename,'r')){
			$count=fgets($f);
			$count=$count+1;
			fclose($f);
			$f=fopen($filename,'w');
			fwrite($f, $count);
			fclose($f);
			break;
		}
	}
	//$_COOKIE['print']=$count;
	setcookie('printmaq',$count,time()+3600, "/");
}
function checkCookie($filename='stat11.txt'){
	if(!isset($_COOKIE['printmaq'])){
		while(true){
			if($f=fopen($filename,'r')){
				$count=fgets($f);
				$count=$count+1;
				fclose($f);	
				break;
			}
		}
		setcookie('printmaq',$count,time()+3600, "/");
	}
}


function getTextX(){
	
	if($_SESSION['osxy']=='Координаталарды пайдалану')
		return 'X осі бойынша жылжыту';
	
	return 'Оңға солға жылжыту';
}

function getTextY(){
	if($_SESSION['osxy']=='Координаталарды пайдалану')
		return 'Y осі бойынша жылжыту';
	
	return 'Жоғары төмен жылжыту';
}

function getValue($param){
	//if (isset($_SESSION[$param])){
	return $_SESSION[$param];
	//} else
		//return "";
	
}

function setNumber($param,$key)
{
	if(!isset($_SESSION[$param])&& $_SESSION[$param]!=$param){ 
	$_SESSION[$param]=$key;}
}
function getNumber($param,$val){
	
	if (isset($_SESSION[$param]) && $_SESSION[$param]!='') {
		return $_SESSION[$param];
	}
	else return $val;
	
}

function require_param($param){
	
	$mass=["school_name","month","date"];
	foreach ($mass as $val)
	{
		if ($val==$param){
			return false;
		}
		
	}
	return true;
	
}

//

function getBaga($baga,$lang){
	
	switch($lang){
		
		case "kz": {
			switch($baga){
			case 5: {
				if(!$_SESSION['bestik'])
					{ return "5 (өте жақсы)";break;} 
				return "5 (".$_SESSION['bestik'].")";break;}
			case 4: {return "4 (жақсы)";break;}
			case 3: {return "3 (қанағаттанарлық)";break;}
			case 2: {return "2 (қанағаттанарлықсыз)";break;}
			}
			break;
			}	
		case "ru": {
			switch($baga){
			case 5: {return "5 (отлично)";break;}
			case 4: {return "4 (хорошо)";break;}
			case 3: {return "3 (удовлетворительно)";break;}
			case 2: {return "2 (не удовлетворительно)";break;}
			}
			break;}
	}
}
//var_dump(getBaga(5,"kz"));
function getInput($pan,$name,$pos){
	$value=getNumber($name,5);
	$name_number=$name."_number";
	$param=getNumber($name_number,$pos);
	$name_numberY=$name."_numberY";
	$paramY=getNumber($name_numberY,0);
	echo '<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
			<label for="exampleInputEmail1">'.$pan.'</label>
			<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
			placeholder="'.$pan.'" step="1" min="-100" max="5" name="'.$name.'" 
			 value="'.$value.'">
			
		</div>
		<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
			<label for="exampleInputEmail1"> '.getTextX().'</label>
			<input type="number" name="'.$name_number.'" id="'.$name_number.'" class="form-control" 
			placeholder="" step="0.1" min="-200" max="200" title="Номер образца" required="required" value="'.$param.'">
			
		</div>
		<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
			<label for="exampleInputEmail1"> '.getTextY().'</label>
			<input type="number" name="'.$name_numberY.'" id="'.$name_numberY.'" class="form-control" 
			placeholder="" step="0.1" min="-100" max="200" title="Номер образца" required="required" value="'.$paramY.'">
			
		</div>';
}



//функция html select option қайтарады
function getSelect($pan){

			$options=[];
			for($day=1; $day<=5;$day++) {
				$opt='<option'; 

				if(getValue($pan)==$day) {
				$opt.=" selected";
				}

				$opt.=' value='.$day.'>'.$day.'</option>';
			$options[$day]=$opt;
			}
		
		return $options;
			
}

//функция html select қайтарады
function getInputSelect($pan,$name,$pos){
	$value=getNumber($name,5);
	$name_number=$name."_number";
	$param=getNumber($name_number,$pos);
	$name_numberY=$name."_numberY";
	$paramY=getNumber($name_numberY,0);
	$options=getSelect($name);
echo '
<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
	<label for="inputGroupSelect02">'.$pan.'</label>
	<div class="input-group mb-3">
		  <select name="'.$name.'" class="custom-select" id="'.$name.'">
		  <option value="ОЖ">'.$_SESSION['oqilmagan_pan'].'</option>
		  <option value="ЕСП">'.$_SESSION['esp_pan'].'</option>
		  <option value="Б">босатылған</option>
			'.implode($options).'
			
		  </select>
	</div>
	</div>

	<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
	<label for="exampleInputEmail1"> '.getTextX().'</label>
	<input type="number" name="'.$name_number.'" id="'.$name_number.'" class="form-control" placeholder="Номер" step="0.1" min="0" max="200" 
	title="Номер образца" required="required" value="'.$param.'">
	</div>
	<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
	<label for="exampleInputEmail1"> '.getTextY().'</label>
	<input type="number" name="'.$name_numberY.'" id="'.$name_numberY.'" class="form-control" placeholder="Номер" step="0.1" min="-100" max="200" 
	title="Номер образца" required="required" value="'.$paramY.'">
</div>';
}








function getInputType($pan,$name,$pos,$required=""){
	$value=getNumber($name,5);
	$name_number=$name."_number";
	$param=getNumber($name_number,$pos);
	echo '<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
				<label for="exampleInputEmail1">'.$pan.'</label>
				<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
				placeholder="'.$pan.'"  name="'.$name.'" 
					value="'.$value.'">
				
			</div>
			<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
				<label for="exampleInputEmail1"> '.getTextX().'</label>
				<input type="number" name="'.$name_number.'" id="'.$name_number.'" class="form-control" 
				placeholder="" step="0.1" min="-200" max="200" title="Номер образца" required="required" value="'.$param.'">
				
			</div>';
}
function getInputTypeText($pan,$name,$pos,$posY=0,$required=""){

	$value=getValue($name);
	$name_number=$name."_number";
	$name_numberY=$name."_numberY";
	$param=getNumber($name_number,$pos);
	$paramY=getNumber($name_numberY,$posY);
	if($required=='') {$r="required='$required'";}
	echo '<div class="col-sm-6 col-md-6 col-xs-6 no-padding">
		<label for="exampleInputEmail1">'.$pan.'</label>
		<input type="text" class="form-control" id="'.$name.'" aria-describedby="emailHelp"
		placeholder="'.$pan.'"  
		name="'.$name.'" 
		value="'.$_SESSION[$name].'">
		
	</div>
	<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
		<label for="exampleInputEmail1">'.getTextX().'</label>
		<input type="number" name="'.$name_number.'" id="'.$name_number.'" 
		class="form-control" placeholder="Номер" step="0.1" min="-200" max="300" 
		title="Номер образца" required="required" value="'.$param.'">
	</div>
	<div class="col-sm-3 col-md-3 col-xs-3 no-padding">
		<label for="exampleInputEmail1"> '.getTextY().'</label>
		<input type="number" name="'.$name_numberY.'" id="'.$name_numberY.'" 
		class="form-control" placeholder="Номер" step="0.1" min="-200" max="300" 
		title="Номер образца" required="required" value="'.$paramY.'">
	</div>';
}

function lang_pan_select($pan){
	switch($pan){
		case "ағылшын": {return "английский"; break;}
		case "неміс": {return "немецкий"; break;}
	}
	
	
}


function anatili($pan,$lang="kz"){
	if($pan=="ОЖ" && $lang=="kz") {return $_SESSION['oqilmagan_pan'];}
	elseif ($pan=="ОЖ" && $lang=="ru") {return "не изучался";}

	elseif($pan=="Б" && $lang=="kz") {return "босатылған";}
	elseif ($pan=="Б" && $lang=="ru") {return "освобожден";}
	//elseif($pan=="ЕСП" && $lang=="kz") {return "есептелді";}
	elseif($pan=="ЕСП" && $lang=="kz") {return $_SESSION['esp_pan'];}
	elseif ($pan=="ЕСП" && $lang=="ru") {return "зачтено";}
	elseif ($pan=="сыналды" && $lang=="kz") {return $pan;}
	elseif ($pan=="сыналды" && $lang=="ru") {return "зачтено";}
	else return getBaga($pan,$lang);
		
}

function anatili2($pan,$lang="kz"){
	if($pan=="ОЖ" && $lang=="kz") {return $_SESSION['oqilmagan_pan'];}
	elseif ($pan=="ОЖ" && $lang=="ru") {return "не изучалась";}
	
	elseif($pan=="Б" && $lang=="kz") {return "босатылған";}
	elseif ($pan=="Б" && $lang=="ru") {return "освобождена";}
	//elseif($pan=="ЕСП" && $lang=="kz") {return "есептелді";}
	elseif($pan=="ЕСП" && $lang=="kz") {return $_SESSION['esp_pan'];}
	elseif ($pan=="ЕСП" && $lang=="ru") {return "зачтено";}
	elseif ($pan=="сыналды" && $lang=="kz") {return $pan;}
	elseif ($pan=="сыналды" && $lang=="ru") {return "зачтено";}
	else return getBaga($pan,$lang);
		
}

function translit($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = strip_tags($s); // убираем HTML-теги
  $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
  $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
  $s = trim($s); // убираем пробелы в начале и конце строки
  //$s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array('а'=>'a','ә'=>'a','б'=>'b','в'=>'v','г'=>'g','ғ'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','і'=>'i','и'=>'i','й'=>'y','к'=>'k','қ'=>'q','л'=>'l','м'=>'m','н'=>'n','ң'=>'n','о'=>'o','ө'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ү'=>'u','ұ'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
  //$s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
  $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
  return $s; // возвращаем результат
}



$fonts=["segoe","robota","times new roman","tahoma"];

$bestik_baga=['өте жақсы', 'үздік'];
$osxy_mes=['Координаталарды пайдалану', 'Жоғары-төмен, оңға-солға'];
$oqilmagan_pan=['оқыған жоқ','оқылған жоқ','оқытылмады','оқылмады'];
$esp=['есептелді', 'есептелінді'];

//echo $bestik_baga[0];
///var_dump($bestik_baga);








?>