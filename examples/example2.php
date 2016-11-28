<?php
require '../src/TextDiff.php';

$text1 = <<<'EOT'
Lorem ipsum dolor sit amet. Nulla tincidunt faucibus enim, a iaculis nisl venenatis a. Scelerisque erat quis massa facilisis vulputate. Morbi quis magna eget elit lobortis aliquet ut sit amet nulla. Morbi fermentum aliquam ex ac tempus.
Integer scelerisque, magna ut commodo vulputate, diam neque sodales nisl.
nulla tincidunt faucibus enim, a iaculis nisl venenatis a.
EOT;

$text2 = <<<'EOT'
Lorem ipsum dolor sit amet. Scelerisque erat quis massa facilisis vulputate. Morbi quis magna eget elit lobortis aliquet ut sit amet nulla. Morbi fermentum aliquam ex ac tempus. Donec lectus eros, egestas sed est eget, pharetra gravida mauris.
Integer scelerisque, magna ut commodo vulputate, diam neque sodales nisl.
Duis vitae mollis felis. Phasellus porttitor lorem vel nisi elementum, ac molestie nibh suscipit.
Nulla tincidunt faucibus enim, a iaculis nisl venenatis.
EOT;

$table = Qazd\TextDiff::render($text1, $text2);

$html = <<<EOT
<!DOCTYPE html>
<html>
<head>
	<title>TextDiff</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

	<div style="width:888px;margin:auto;">
		$table
	</div>

</body>
</html>
EOT;

file_put_contents('example2.html', $html);
