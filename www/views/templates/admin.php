<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<div id="containerAdmin">
    <h2>Edition des articles</h2>
    <table>
        <thead>
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Article</th>
            <th scope="col">Vues</th>
            <th scope="col">Nombre de commentaires</th>
            <th scope="col">Date de création</th>
            <th scope="row" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article) {?>
            <tr>
                <td scope="row"><div class="title"><?= $article->getTitle() ?></div></td>
                <td><div class="content"><?= $article->getContent(200) ?></div></td>
                <td><div class="viewsNumber"><?= $article->getViewsArticle() ?></div></td>

                <?php foreach ($articlesInfo as $articleInfo){?>
                    <?php if ($articleInfo['idArticle'] === $article->getId()){?>
                        <td><div class="commentNumber"><?= $articleInfo['commentsQty'] ?></div></td>
                    <?php }
                } ?>

                <td><div class="date"><?= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?></div></td>
                <td><div><a class="submit" href="index.php?action=showUpdateArticleForm&id=<?= $article->getId() ?>">Modifier</a></div></td>
                <td><div><a class="submit" href="index.php?action=deleteArticle&id=<?= $article->getId() ?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?> >Supprimer</a></div></td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th scope="row" colspan="7"><a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a></th>
            </tr>
        </tfoot>
    </table>

</div>


<!--    --><?php //foreach ($articles as $article) {?>
<!---->
<!--        <div class="articleLine">-->
<!--            <div class="title">--><?php //= $article->getTitle() ?><!--</div>-->
<!--            <div class="content">--><?php //= $article->getContent(200) ?><!--</div>-->
<!--            <div class="viewsNumber">--><?php //= $article->getViewsArticle() ?><!--</div>-->
<!---->
<!--            --><?php //foreach ($articlesInfo as $articleInfo){?>
<!--                --><?php //if ($articleInfo['idArticle'] === $article->getId()){?>
<!--                    <div class="commentNumber">--><?php //= $articleInfo['commentsQty'] ?><!--</div>-->
<!--                --><?php //}
//            } ?>
<!---->
<!--            <div class="date">--><?php //= Utils::convertDateToFrenchFormat($article->getDateCreation()) ?><!--</div>-->
<!--            <div><a class="submit" href="index.php?action=showUpdateArticleForm&id=--><?php //= $article->getId() ?><!--">Modifier</a></div>-->
<!--            <div><a class="submit" href="index.php?action=deleteArticle&id=--><?php //= $article->getId() ?><!--" --><?php //= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?><!-- >Supprimer</a></div>-->
<!--        </div>-->
<!---->
<!--    --><?php //} ?>


