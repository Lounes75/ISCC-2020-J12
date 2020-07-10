<?php

function connect_to_database() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=livecoding' , "matt" , "matt");
        echo "Connexion réussie";
        return $pdo;
    } catch(PDOException $e) {
        echo "ERREUR<br/> $e";
        return False;
}
