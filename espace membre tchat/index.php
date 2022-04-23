<?php
    include 'functions/main-functions.php';

    $pages = scandir('pages/');

    if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php',$pages)){
        $page = $_GET['page'];
    }else{
        $page = 'home';
    }

    $pages_functions = scandir('functions/');

    if(in_array($page.'.func.php',$pages_functions)){
        include 'functions/'.$page.'.func.php';
    }

?>


<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Espace tchat des membres du Kristal Service</title>
        <link rel="icon" type="image/png" href="logo.png" />
        <link rel="stylesheet" href="css/style.css"/>
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,700,400' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <?php
            include 'body/topbar.php';
        ?>
        <div class="container">
            <?php
                include 'pages/'.$page.'.php';
            ?>
        </div>
        <script src="js/jquery.js"></script>
        <?php
            $pages_js = scandir('js/');
            if(in_array($page.'.func.js',$pages_js)){
                ?>
                    <script src="js/<?= $page ?>.func.js"></script>
                <?php
            }

        ?>
<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="R462CP6KK3L3J">
<table>
<tr><td><input type="hidden" name="on0" value="Utile">Utile</td></tr><tr><td><select name="os0">
	<option value="Cours">Cours €150,00 EUR</option>
	<option value="Conception site web classique">Conception site web classique €150,00 EUR</option>
	<option value="conception d'application">conception d'application €3 500,00 EUR</option>
	<option value="conception site webdesign">conception site webdesign €300,00 EUR</option>
	<option value="Conception site web e-commerce">Conception site web e-commerce €2 200,00 EUR</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="EUR">
<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
<img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
</form>

    </body>
</html>