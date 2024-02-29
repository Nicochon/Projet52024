<?php
/**
 * Affichage de la partie Commentadmin : liste des commentaire d'un articles donné avec un bouton "supprimer" pour chacun.
 */
?>
<?php if(empty($comments)) {?>
    <h3>Vous n'avez aucun commentaire pour cet article</h3>
<?php } else {?>
    <div id="containerAdmin">
        <h2>Commentaires</h2>
        <table>
            <thead>
            <tr>
                <th scope="col" style="width: 200px">Pseudo</th>
                <th scope="col" style="width: 600px" >Commentaires</th>
                <th scope="col" style="width: 175px">Date de création</th>
                <th scope="row" style="width: 185px">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($comments as $comment) {?>
                <tr>
                    <td scope="row"><div class="pseudo"><?= $comment['pseudo'] ?></div></td>
                    <td><div class="content"><?= $comment['content'] ?></div></td>
                    <td><div class="date"><?= $comment["dateCreation"]?></div></td>
                    <td><div><a class="submit delete" href="index.php?action=deleteComment&id=<?= $comment['idComment']?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?> >Supprimer</a></div></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
<?php }?>


