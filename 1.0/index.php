<?php
session_start();
include_once('lib.php');
checkCookie();
$defaultLang = 'kz';

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $lang = in_array($browserLang, ['kz', 'ru', 'en']) ? $browserLang : $defaultLang;
    $_SESSION['lang'] = $lang;
}
$langPath = __DIR__ . "/key_lists/{$lang}.json";
$langData = file_exists($langPath) ? json_decode(file_get_contents($langPath), true) : [];
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
	<script src="bootstrap/js/tab.js"></script>
	<script src="https://yandex.st/jquery/cookie/1.0/jquery.cookie.min.js"></script>
	<link rel="shortcut icon" href="images/favicon.gif" type="image/gif">
	<meta name="keywords" content="<?= $langData['topic_of_site'] ?? 'Мақтау қағазын шығару' ?>, <?=' '.date('Y')?>">
	<meta name="description" content="<?= $langData['topic_of_site'] ?? 'Мақтау қағазын шығару' ?>, <?=' '.date('Y')?>">
    <title><?= $langData['topic_of_site'] ?? 'Мақтау қағазын шығару' ?> <?= date('Y') ?></title>	

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
	<script type="text/javascript" src="includes/lib.js"></script>
</head>
<body>
<script>
    const langData = <?= json_encode($langData) ?>;
</script>

<script>
	function getCookie(name) {
		let matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
		));
		return matches ? decodeURIComponent(matches[1]) : 0;
	}
	function printstats() {
		let stats = 0;
		let timerId = setInterval(function () {
			stats = getCookie('printmaq');
			document.getElementById("printmaq").innerHTML = "<?= $langData['logs_number_of_grammats_first'] ?? 'Шамамен' ?> " + stats + " <?= $langData['logs_number_of_grammats_second'] ?? 'мақтау қағазы шығарылды' ?>";
		}, 1000);
	}
	printstats();
</script>	 

<div style="position: absolute; top: 10px; right: 10px; z-index: 1000;">
    <form method="get" onchange="this.submit()" class="mb-3">
        <select name="lang" class="form-control" style="width: auto; display: inline-block;">
            <option value="kz" <?= $lang == 'kz' ? 'selected' : '' ?>>Қазақша</option>
            <option value="ru" <?= $lang == 'ru' ? 'selected' : '' ?>>Русский</option>
            <option value="en" <?= $lang == 'en' ? 'selected' : '' ?>>English</option>
        </select>
    </form>
</div>

	<h1>
		<?= $langData['topic_of_site'] ?? 'Мақтау қағазын шығару' ?>
		<a class="btn btn-success" id="printmaq" href="#" role="button"></a>
	</h1>

	<form target="_blank" action="att.php" method="POST">
		<div class="row">
			<div class="col-3">
				<? include_once('includes/left_menu.php'); ?>
			</div>
			<div class="col-9">
				<div class="tab-content" id="v-pills-tabContent">	
					<? include('includes/student_page.php'); ?>
					<!--
					<? // include_once('includes/baga_page.php'); ?>
					<? // include_once('includes/answers_page.php'); ?>
					-->
					<div class="tab-panel fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">						
						<div class="alert alert-success" role="alert">
							<button type="submit" name="view" class="btn btn-primary"><?= $loadData['exit_the_browser']?></button>
							<button type="submit" name="download" class="btn btn-primary"><?= $loadData['left_menu_files_loading']['load_file']?></button>
							<button type="submit" name="print" class="btn btn-primary"><?= $loadData['view']?></button>
						</div>
					</div>
					<? include_once('includes/config_page.php'); ?>
				</div>
			</div>			
		</div>
	</form>
</div>

<script type="text/javascript" src="includes/lib_config.js"></script>
<script>
	function changeValueInput(a, b) {
		$(a).blur(function () {
			$(b).val($(a).val());
		});
	}

	$(document).ready(function () {
		changeValueInput("#fio", "#fio_ru");
		changeValueInput("#director", "#director_ru");
		changeValueInput("#teacher1", "#teacher1_ru");
		changeValueInput("#teacher2", "#teacher2_ru");
		changeValueInput("#teacher3", "#teacher3_ru");
		changeValueInput("#date", "#date_ru");
	});
</script>

</body>
</html>
