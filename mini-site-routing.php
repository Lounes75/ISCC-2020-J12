<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>mini-site-routing</title>
</head>
<?php
if ($_GET["page"]=="1")
 {
 echo "<h1> acceuil! </h1>";
}
elseif ($_GET["page"]=="2")
{
    echo "<h1> page 2! </h1>";
}
elseif ($_GET["page"]=="3")
{
    echo "<h1> page 3! </h1>";
}
?>

<header> 
 
<ul id="nav">
<li><a href="http://localhost:8888/ISCC-2020/Jour-08/EX_01/mini-site-routing.php?page=1" > page 1 </a></li>
<li><a href="http://localhost:8888/ISCC-2020/Jour-08/EX_01/mini-site-routing.php?page=2" > page 2 </a></li>
<li><a href="http://localhost:8888/ISCC-2020/Jour-08/EX_01/mini-site-routing.php?page=3" > page 3 </a></li>
 <li><a href="connexion.php">Page connexion</a></li>
 
</header>
 <body>
<?php
if ($_GET["page"]=="connexion")
{
 echo "<nav> page connexion! </nav>";
}
?>
<?php
if (isset($_SESSION["id"])) {
    $lounes = $_SESSION["id"];
    echo "login: $lounes";
}
?>
</body>
</html>
