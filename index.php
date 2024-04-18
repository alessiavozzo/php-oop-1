<?php

/* //importo la classe Production
require_once __DIR__ . "/models/Production.php";

//istanzio 2 oggetti
$production1 = new Production("Avatar", "english", "10");
$production2 = new Production("Titanic", "english", "8");
$production3 = new Production("Titanic", "english", "12");
var_dump($production1, $production2, $production3); */
include_once __DIR__ . "/db.php";
include_once __DIR__ . "/views/head.php";
?>



<header id="site_header">
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                LOGO
            </a>
        </div>
    </nav>
</header>

<main id="site_main">
    <div class="container">
        <div class="row">

            <!-- foreach loop to print infos in page cards -->
            <?php foreach ($productionsList as $production) : ?>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $production->title ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted "><?php echo $production->language ?></h6>
                            <p class="card-text"><?php echo $production->rating ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>



<!-- scripts -->
<!-- bs -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>