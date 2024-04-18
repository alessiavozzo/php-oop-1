<main id="site_main">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3">

            <!-- foreach loop to print infos in page cards -->
            <?php foreach ($productionsList as $production) : ?>

                <div class="col gy-3">
                    <div class="card bg-dark">
                        <div class="card-body text-light">
                            <h5 class="card-title text-center"><?php echo $production->title ?></h5>

                            <!-- need to loop here if genre->name is array -->
                            <?php if (is_array($production->genre->name)) : ?>
                                <h6 class="card-subtitle mb-2 text-secondary">
                                    Genres:

                                    <?php foreach ($production->genre->name as $genreName) : ?>
                                        <span><?php echo "$genreName," ?></span>
                                    <?php endforeach; ?>

                                </h6>
                            <?php else : ?>
                                <h6 class="card-subtitle mb-2 text-secondary ">
                                    Genres: <span><?php echo $production->genre->name ?></span>
                                </h6>
                            <?php endif; ?>
                            <p class="card-text"><strong>Genre description: </strong><?php echo $production->genre->description ?></p>
                            <p class="card-text"><strong>Rating: </strong><?php echo $production->rating ?>/10</p>
                            <p class="card-text"><strong>Language: </strong><?php echo $production->language ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</main>