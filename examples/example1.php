<?php
require '../src/TextDiff.php';

$text1 = 'Lorem ipsum dolor set, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';
$text2 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
?>

<html>
<head>
	<title>TextDiff</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div style="width:800px;margin:auto;">
		<?= Qazd\TextDiff::render($text1, $text2) ?>
	</div>

</body>
</html>
