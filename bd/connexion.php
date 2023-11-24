<?php
    //Appel de la page config
    require_once 'config.php';
    try {
        $db = new PDO('mysql:host'.HOST.'dbname='.DATABASE, USER, PASSWORD);
        $db->exec('USE mes_projets');
    } catch (PDOException $e) {
        die('Erreur de connexion à la base de données');
    }