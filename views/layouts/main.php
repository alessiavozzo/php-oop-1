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

                                <h6 class="card-subtitle mb-2 text-secondary">
                                    Genres:
                                    <?php foreach ($production->genre as $genre) : ?>
                                        <div class="genre">
                                            <span><?php echo "$genre->name : " ?></span>
                                            <span><?php echo $genre->description ?></span>
                                        </div>
                                    <?php endforeach; ?>

                                </h6>
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

                                <h6 class="card-subtitle mb-2 text-secondary">
                                    Genres:
                                    <?php foreach ($movie->genre as $genre) : ?>
                                        <div class="genre">
                                            <span><?php echo "$genre->name : " ?></span>
                                            <span><?php echo $genre->description ?></span>
                                        </div>
                                    <?php endforeach; ?>

                                </h6>
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

                                <h6 class="card-subtitle mb-2 text-secondary">
                                    Genres:
                                    <?php foreach ($serie->genre as $genre) : ?>
                                        <div class="genre">
                                            <span><?php echo "$genre->name : " ?></span>
                                            <span><?php echo $genre->description ?></span>
                                        </div>
                                    <?php endforeach; ?>

                                </h6>
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