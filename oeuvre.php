<!doctype html>
<html lang="fr">

<?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <?php include 'oeuvres.php'; ?>

    <main>

        <article id="detail-oeuvre">

            <?php

            // Vérification de l'identifiant de l'œuvre dans l'url //

            if (isset($_GET['id']) && ctype_digit($_GET['id'])) {

                $id = (int)$_GET['id'];

                // Recherche de l'œuvre par son identifiant dans le tableau des œuvres //

                $Oeuvre_trouve = null;

                foreach ($tableau_des_œuvres as $oeuvre) {

                    if ($oeuvre['id'] == $id) {

                        $Oeuvre_trouve = $oeuvre;

                        break;
                    }
                }

                // Si l'oeuvre est trouvée sa affiche l'html //

                if ($Oeuvre_trouve) :

            ?>

                    <div id="img-oeuvre">

                        <img src="<?php echo $Oeuvre_trouve['image']; ?>" alt="<?php echo $Oeuvre_trouve['alt']; ?>">

                    </div>

                    <div id="contenu-oeuvre">

                        <h1><?php echo $Oeuvre_trouve['h1']; ?></h1>

                        <p class="description"><?php echo $Oeuvre_trouve['description']; ?></p>

                        <p class="description-complete"><?php echo $Oeuvre_trouve['description-complete']; ?></p>

                    </div>

            <?php

                // Les messages d'erreurs //
                else :

                    echo 'Œuvre inexistante.';

                endif;
            } else {

                echo 'Veuillez renseigner un identifiant.';
            }

            ?>

        </article>

    </main>

    <?php include 'footer.php'; ?>

</body>

</html>