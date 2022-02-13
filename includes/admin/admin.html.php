<h1>Page administrateur</h1>
<section class="admin-panel bg-dark text-white w-50 rounded">
    <div>
        <h2>Statistiques</h2>
        <ol class="list-group list-group-numbered bg-dark text-white">
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nombre d'articles publiés sur le site</div>

                </div>
                <span class="badge bg-primary rounded-pill"><?= $dataNumbers['nb_articles']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nombre total d'utilisateurs du site</div>

                </div>
                <span class="badge bg-primary rounded-pill"><?= $dataNumbers['nb_utilisateurs']; ?></span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold">Nombre total de commentaires publiés sur le site</div>

                </div>
                <span class="badge bg-primary rounded-pill"><?= $dataNumbers['nb_total_commentaires']; ?></span>
            </li>
        </ol>
    </div>
    <div>
        <h2>Listings</h2>
        <div class="list-group">
            <a href="index.php?action=admin.articles" class="list-group-item list-group-item-action">Liste des articles</a>
            <a href="index.php?action=admin.profils" class="list-group-item list-group-item-action">Liste des bloggers</a>
        </div>
    </div>


</section>