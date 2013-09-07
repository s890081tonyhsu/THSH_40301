<?php 
	//This is a main page to control all the web status.
?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Language" content="zh-TW">
	<title>航向四處的氣球--大二誠班</title>
	<?php
		function Import_Plugin($Path,$ext){
			$link_file=glob($Path."*".$ext);
			return $link_file;
		}
		$js=Import_Plugin("./data/javascript/",".js");
		foreach($js as $value){
			echo "<script language=JavaScript src=\"".$value."\"></script>";
		}
		$css=Import_Plugin("./data/css/",".css");
		foreach($css as $value){
			echo "<link rel=stylesheet type=\"text/css\" href=\"".$value."\">";
		}
	?>
</head>
<body>
	<?php
		include './view/header.php';
		include './view/left_col.php';
		include './view/main.php';
		include './view/right_col.php';
		include './view/footer.php';
	?>
</body>
</html>
