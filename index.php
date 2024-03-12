<!doctype html>
<html lang="fr">

<?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>

    <?php include 'oeuvres.php'; ?>


    <main>
        <div id="liste-oeuvres">


            <!-- Mise en place de la boucle de la page d'acceuil-->

            <?php foreach ($tableau_des_œuvres as $oeuvre) : ?>

                <article class="oeuvre">

                    <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?> ">

                        <img src="<?php echo $oeuvre['image']; ?>" alt="<?php echo $oeuvre['alt']; ?>">

                        <h2><?php echo $oeuvre['h1']; ?> </h2>

                        <p class="description"><?php echo $oeuvre['description']; ?> </p>

                    </a>

                </article>
            <?php endforeach; ?>
        </div>
    </main>

    <?php
    include 'footer.php';
    ?>


</body>

</html>