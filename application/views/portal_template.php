<!DOCTYPE html>
<!--
	                 λλλλλ
	            λλλλλλλλλλλλλλλ
	         λλλλλλλλλ  λλλλλλλλλλ
	        λλλλλλ            λλλλλλ
	      λλλλλ                  λλλλ
	     λλλλ      λλλλλλ         λλλλ
	    λλλλ         λλλλλ         λλλλ
	   λλλλ           λλλλ          λλλλ
	   λλλλ           λλλλλ          λλλλ
	  λλλλ           λλλλλλ          λλλλ
	  λλλλ          λλλλλλλ          λλλλ
	  λλλλ         λλλλ λλλλ         λλλλ
	   λλλ        λλλλλ  λλλλ        λλλλ
	   λλλλ      λλλλλ    λλλλ       λλλλ
	   λλλλ     λλλλ      λλλλλλλ   λλλλ
	    λλλλ   λλλλλ       λλλλλλλ λλλλ
	     λλλλ                     λλλλ
	      λλλλλ                  λλλλ
	       λλλλλλ             λλλλλλ
	         λλλλλλλλλ    λλλλλλλλ
	            λλλλλλλλλλλλλλλλ
	                λλλλλλλλ
	-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= isset($title) ? $title : '' ?></title>
        <link href='https://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
        <?= link_tag('css/style.css') ?>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
              crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
              integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r"
              crossorigin="anonymous">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!--<?= link_tag('css/star-rating.min.css') ?>-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!--<script id="rating" src="<?= base_url() ?>js/star-rating.min.js" type="text/javascript"></script>-->
    </head>
    <body>
        <header>
            <?= anchor('/portal/index', img(array('src' => 'images/logo.png',
                                                  'alt' => 'logo',
                                                  'class' => 'logo'))) ?>
            <a href="/portal/index">
                <div>
                    <h1>ADVENTURE WORLDS</h1>
                    <h2>Crea tu propia aventura</h2>
                </div>
            </a>
            <?= login() ?>
        </header>
        <?= mensajes() ?>
        <?= contenido($contents) ?>
        <footer>
            <?= anchor('/portal/sobre', 'Sobre nosotros') ?>
            <?= anchor('/portal/contacta', 'Contacta') ?>
        </footer>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
                integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
                crossorigin="anonymous"></script>
    </body>
</html>
