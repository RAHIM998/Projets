<?php
    if(isset($_POST['valider'])){
        extract($_POST);
        $statut = isset($_POST['statut']) && $_POST['statut']==='on'? 1 : 0;
        $ajout = addprojet ($nom, $description, $budget, $date_debut, $date_fin, $statut);
        if ($ajout == 1) {
            echo "<div class='alert alert-success'>Insertion réussie !</div>";
        }else {
            echo "<div class='alert alert-danger'>Insertion échouée !</div>";
        }
    }
?>
<div class="container mt-5 offset">
    <div class="card" >
        <div class="card-header bg-dark">
           <h4 style="color: white;" class="text-center" >Ajout de projet </h4> 
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label" >Nom du projet</label>
                    <input type="text" class="form-control" id="" name="nom" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Budget d'exécution</label>
                    <input type="number" class="form-control" name="budget" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Début du projet</label>
                    <input type="date" class="form-control" name="date_debut" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fin du projet</label>
                    <input type="date" class="form-control" name="date_fin" required>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="statut" >
                    <label class="form-check-label" for="flexSwitchCheckDefault">Statut du projet</label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Déscription du projet</label>
                    <textarea class="form-control" name ='description' rows="3"></textarea>
                </div>
                <input class="btn btn-secondary" type="submit" name="valider" value="Enregistrer">
            </form>
        </div>
        
    </div>
   
</div>

