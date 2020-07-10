<?php
include_once("singleton.php");
$pdo= connect_to_database();
 session_start();
var_dump($_POST);

echo $_POST["password"];
if(isset($_POST["password"])&&isset($_POST["name"])) {
    $louu=$_POST["name"];
    $sql= "SELECT * FROM utilisateur WHERE login='louu'";
    $lou= $pdo->query($sql);
    $users= $lou->fetch();
    var_dump($users);
    $_SESSION ["id"] = $_POST ["name"];
    header('Location: mini-site-routing.php');

}
else {
    echo "Mauvais couple identifiant / mot de passe";
}

?>

<ul id="nav">
<li><a href="connexion.php"> Page connexion </a></li>
<li><a href="mini-site-routing.php"> Page Acceuil</a></li>
</ul>