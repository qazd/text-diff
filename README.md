TextDiff for PHP
=======

TextDiff is a simple library for text differences visualization. Based on Wordpress's Compare Revisions.

![DiffText Example](https://cloud.githubusercontent.com/assets/8868268/20669056/a098cd54-b57a-11e6-8501-b6a1834c9f76.png)

Installation
------------

- via Composer `composer require qazd/text-diff`
- via Git `git clone https://github.com/qazd/text-diff.git`
- or [download zip](https://github.com/qazd/text-diff/zipball/master)

Usage
------------

```php
<?php
  require 'vendor/autoload.php';

  $table = Qazd\TextDiff::render('String one', 'String two');
?>

<html>
<head>
	<title>TextDiff</title>
	<link rel="stylesheet" type="text/css" href="vendor/qazd/text-diff/css/style.css">
</head>
<body>

	<?= $table ?>

</body>
</html>
```

`TextDiff::render()` is the only available method. With the third argument set to `false` you can disable split view.

If you won't use Composer - just require `src/TextDiff.php`

Integrate `css/style.css` into your page to style the comparison table.

#### More
- [example #1](examples/example1.php)
- [example #2](examples/example2.php)
