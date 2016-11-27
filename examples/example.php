<?php
	require '../src/TextDiff.php';

	$text1 = <<<'EOT'
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt faucibus enim, a iaculis nisl venenatis a. Quisque vulputate nibh non dui sollicitudin, et tincidunt felis hendrerit. Donec scelerisque erat quis massa facilisis vulputate. Vestibulum non justo id ante condimentum pulvinar. Morbi quis magna eget elit lobortis aliquet ut sit amet nulla. Praesent ultrices placerat lectus sed faucibus. Morbi fermentum aliquam ex ac tempus.
Integer scelerisque, magna ut commodo vulputate, diam neque sodales nisl, sed condimentum neque lorem vitae lacus.
EOT;
	$text2 = <<<'EOT'
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec scelerisque erat quis massa facilisis vulputate. Vestibulum non justo id ante condimentum pulvinar. Morbi quis magna eget elit lobortis aliquet ut sit amet nulla. Praesent ultrices placerat lectus sed faucibus. Morbi fermentum aliquam ex ac tempus. Fusce eleifend accumsan orci, quis ultrices nulla porttitor nec. Phasellus arcu orci, finibus at justo sed, pretium dignissim libero. Donec lectus eros, egestas sed est eget, pharetra gravida mauris.
Integer scelerisque, magna ut commodo vulputate, diam neque sodales nisl, sed condimentum neque lorem vitae lacus.
Proin vehicula neque ligula, id eleifend nibh tristique quis. Duis vitae mollis felis. Phasellus porttitor lorem vel nisi elementum, ac molestie nibh suscipit.
EOT;
?>

<!DOCTYPE html>
<html>
<head>
	<title>TextDiff</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

<?= Qazd\TextDiff::render($text1, $text2) ?>

</body>
</html>