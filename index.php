<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Verification palindrome</title>
	<meta charset="utf-8">
</head>
<body>
<form method="POST" action="index.php">
<input type="text" name="nom" placeholder="votre nom" size="45">
<input type="submit" name="valider">
</form>

<?php
if(isset($_POST['nom']))
{
    /* on verifie l'état des magic_quotes */
    if(get_magic_quotes_runtime()==1)
    {
        $nom = stripslashes($_POST['nom']);
    }
    else
    {
        $nom = $_POST['nom'];
    }
	/* on inverse le sens du mot avec strrev */
    $inverse = strrev($nom);
    
    echo '<p style="color:#ff0000;font-size:18px;"><strong>"'.$_POST['nom'].'"</strong> ';
    if($nom==$inverse)
    {
     echo 'est un palindrome';
     }
     else echo 'n\'est pas un palindrome';
    echo '</p>';
}
?>

</body>
</html>