<?php
    $id = $_GET['idprojet'];
    deleteprojet($id);
    header("Location:?page=ListesProjets");