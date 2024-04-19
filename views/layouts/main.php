<main id="site_main">
    <!-- section general -->
    <section id="general-productions">
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
    </section>

    <section id="movies">
        <div class="container">
            <h1>FILM:</h1>
            <div class="row row-cols-1 row-cols-md-3">

                <!-- foreach loop to print infos in page cards -->
                <?php foreach ($moviesList as $movie) : ?>

                    <div class="col gy-3">
                        <div class="card bg-dark">
                            <div class="card-body text-light">
                                <h5 class="card-title text-center"><?php echo $movie->title ?></h5>

                                <!-- need to loop here if genre->name is array -->
                                <?php if (is_array($movie->genre->name)) : ?>
                                    <h6 class="card-subtitle mb-2 text-secondary">
                                        Genres:

                                        <?php foreach ($movie->genre->name as $genreName) : ?>
                                            <span><?php echo "$genreName," ?></span>
                                        <?php endforeach; ?>

                                    </h6>
                                <?php else : ?>
                                    <h6 class="card-subtitle mb-2 text-secondary ">
                                        Genres: <span><?php echo $movie->genre->name ?></span>
                                    </h6>
                                <?php endif; ?>
                                <p class="card-text"><strong>Genre description: </strong><?php echo $movie->genre->description ?></p>
                                <p class="card-text"><strong>Rating: </strong><?php echo $movie->rating ?>/10</p>
                                <p class="card-text"><strong>Language: </strong><?php echo $movie->language ?></p>
                                <p class="card-text"><strong>Profit: </strong><?php echo $movie->getProfit() ?></p>
                                <p class="card-text"><strong>Durata: </strong><?php echo $movie->getLength() ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>

    <section id="series">
        <div class="container">
            <h1>SERIE:</h1>
            <div class="row row-cols-1 row-cols-md-3">

                <!-- foreach loop to print infos in page cards -->
                <?php foreach ($seriesList as $serie) : ?>

                    <div class="col gy-3">
                        <div class="card bg-dark">
                            <div class="card-body text-light">
                                <h5 class="card-title text-center"><?php echo $serie->title ?></h5>

                                <!-- need to loop here if genre->name is array -->
                                <?php if (is_array($serie->genre->name)) : ?>
                                    <h6 class="card-subtitle mb-2 text-secondary">
                                        Genres:

                                        <?php foreach ($serie->genre->name as $genreName) : ?>
                                            <span><?php echo "$genreName," ?></span>
                                        <?php endforeach; ?>

                                    </h6>
                                <?php else : ?>
                                    <h6 class="card-subtitle mb-2 text-secondary ">
                                        Genres: <span><?php echo $serie->genre->name ?></span>
                                    </h6>
                                <?php endif; ?>
                                <p class="card-text"><strong>Genre description: </strong><?php echo $serie->genre->description ?></p>
                                <p class="card-text"><strong>Rating: </strong><?php echo $serie->rating ?>/10</p>
                                <p class="card-text"><strong>Language: </strong><?php echo $serie->language ?></p>
                                <p class="card-text"><strong>Stagioni: </strong><?php echo $serie->seasons ?></p>
                                <p class="card-text"><strong>Episodi: </strong><?php echo $serie->episodes ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </section>
</main>