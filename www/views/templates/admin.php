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
                <th scope="col" style="width: 200px">
                    <div class="sortSection title" >
                        <span>Titre</span>
                        <div class="icons">
                            <div class="icon">
                                <a href="index.php?action=sort&sort=ascending&data=title">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
                                </a>
                            </div>
                            <div class="icon">
                                <a href="index.php?action=sort&sort=descending&data=title">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="col" style="width: 600px" >Article</th>
                <th scope="col" style="width: 80px">
                    <div class="sortSection views">
                        <span>Vues</span>
                        <div class="icons">
                            <div class="icon">
                                <a href="index.php?action=sort&sort=ascending&data=nbViews">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
                                </a>
                            </div>
                            <div class="icon">
                                <a href="index.php?action=sort&sort=descending&data=nbViews">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="col" style="width: 145px">
                    <div class="sortSection adminComments">
                        <span>Commentaires</span>
                        <div class="icons">
                            <div class="icon">
                                <a href="index.php?action=sort&sort=ascending&data=nbComments">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
                                </a>
                            </div>
                            <div class="icon">
                                <a href="index.php?action=sort&sort=descending&data=nbComments">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="col" style="width: 175px">
                    <div class="sortSection creation">
                        <span>Date de création</span>
                        <div class="icons">
                            <div class="icon">
                                <a href="index.php?action=sort&sort=ascending&data=dateCreation">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M182.6 137.4c-12.5-12.5-32.8-12.5-45.3 0l-128 128c-9.2 9.2-11.9 22.9-6.9 34.9s16.6 19.8 29.6 19.8H288c12.9 0 24.6-7.8 29.6-19.8s2.2-25.7-6.9-34.9l-128-128z"/></svg>
                                </a>
                            </div>
                            <div class="icon">
                                <a href="index.php?action=sort&sort=descending&data=dateCreation">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"/></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </th>
                <th scope="row" colspan="2" style="width: 185px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article) {?>
                <tr>
                    <td scope="row"><div class="title"><?= $article['title'] ?></div></td>
                    <td><div class="content"><?= $article['content'] ?></div></td>
                    <td><div class="viewsNumber"><?= $article['views'] ?></div></td>
                    <td><div class="commentNumber"><a href="index.php?action=comments&key=<?= $article['idArticle']?>"><?= $article['commentsQty'] ?></a></div></td>
                    <td><div class="date"><?= $article["dateCreation"]?></div></td>
                    <td><div><a class="submit" href="index.php?action=showUpdateArticleForm&id=<?= $article['idArticle']?>">Modifier</a></div></td>
                    <td><div><a class="submit delete" href="index.php?action=deleteArticle&id=<?= $article['idArticle']?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?> >Supprimer</a></div></td>
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


