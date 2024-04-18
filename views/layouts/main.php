<main id="site_main">
    <div class="container">
        <div class="row">

            <!-- foreach loop to print infos in page cards -->
            <?php foreach ($productionsList as $production) : ?>

                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $production->title ?></h5>

                            <!-- need to loop here if genre->name is array -->
                            <?php if (is_array($production->genre->name)) : ?>
                                <h6 class="card-subtitle mb-2 text-muted ">
                                    Genres:

                                    <?php foreach ($production->genre->name as $genreName) : ?>
                                        <span><?php echo "$genreName," ?></span>
                                    <?php endforeach; ?>

                                </h6>
                            <?php else : ?>
                                <h6 class="card-subtitle mb-2 text-muted ">
                                    Genres: <span><?php echo $production->genre->name ?></span>
                                </h6>
                            <?php endif; ?>
                            <p class="card-text"><?php echo $production->genre->description ?></p>
                            <p class="card-text"><?php echo $production->rating ?></p>
                            <p class="card-text"><?php echo $production->language ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>