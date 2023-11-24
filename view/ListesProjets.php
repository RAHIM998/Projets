<?php
    $projet = getProjet ();
?>

<div class="container-fluid spacer" style ="text-align: center;">
    <div class="card mt-3">
        <div class="card-header bg-dark h4">
            <div style="text-align: center; color: white">Liste des projets </div> 
        </div>
        <div class="card-body ">
            <table class="center table table-bordered table-striped">
                <tr class ="bg-success">
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Déscription</th>
                    <th>Budget</th>
                    <th>Début du projet</th>
                    <th>Fin du projet</th>
                    <th>Statut</th>
                    <th colspan="3">Action</th>
                </tr>
                <?php foreach($projet as $p){ ?>
                <tr>
                    <td><?= strtoupper($p['code']) ?></td>
                    <td><?= ucwords($p['nom'] )?></td>
                    <td><?= $p['description'] ?></td>
                    <td><?= $p['budget'] ?></td>
                    <td><?= $p['date_debut'] ?></td>
                    <td><?= $p['date_fin'] ?></td>
                    <td><?= $p['statut'] ?></td>
                    <td>
                        <a href="?page=editprojet&idprojet=<?= $p['id'] ?>" class="btn btn-outline-primary btn-sm">Modifier</a>
                        <a href="?page=deleteprojet&idprojet=<?= $p['id']?>" class="btn btn-outline-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div><br>
</div><br>
<a href="?page=addprojet" class="btn btn-success">Ajouter</a>