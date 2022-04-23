<?php 

function bdd(){
     try
{
	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=sql205.epizy.com;dbname=epiz_22726529_forum', 'epiz_22726529', 'et7nEi2Kz', $pdo_options);
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
return $bdd;
}

?>
