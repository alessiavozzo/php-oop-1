<main id="site_main">
    <div class="container">
        <div class="row">

            <!-- foreach loop to print infos in page cards -->
            <?php foreach ($productionsList as $production) : ?>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $production->title ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted "><?php echo $production->genre->name ?></h6>
                            <p class="card-text"><?php echo $production->rating ?></p>
                            <p class="card-text"><?php echo $production->language ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>