<?php 
    //Affichage des données venant de la base de données
    function getProjet (){
        global $db;
        $sql = "SELECT * FROM projets ";
        return $db->query($sql)->fetchAll(2);
    }

    //Générer le code du projet 
    function generecode(){
        return 'PROJET@'.date('Ymdhis'.'#');
    }

    //Insertion des données dans la base
    function addprojet ($nom, $description, $budget, $date_debut, $date_fin, $statut){
        global $db;
        $code = generecode();
        $sql = "INSERT INTO projets VALUES (null, '$code', '$nom', '$description', $budget, '$date_debut', '$date_fin', $statut)";
        return $db->exec($sql);   
    }

    //recupération des données du project dans la base 
    function getProjetById($id){
        global $db;
        $sql = "SELECT * FROM projets where id = $id";
        return $db -> query($sql) -> fetch(2);
    }

    //Sauvegarde des modification
    function updateProjet ($nom, $description, $budget, $date_debut, $date_fin, $statut){
        global $db;
        $id = $_GET['idprojet'];
        $sql = "UPDATE projets SET nom = '$nom', 
            description ='$description',
            budget = $budget,
            date_debut ='$date_debut',
            date_fin = '$date_fin',
            statut = $statut
            WHERE id = $id
        ";
        return $db->exec($sql);   
    }

    //Suppression d'un projet
    function deleteProjet ($id){
        global $db;
        $sql = "DELETE FROM projets WHERE id = $id";
        return $db -> exec($sql);   
    }
