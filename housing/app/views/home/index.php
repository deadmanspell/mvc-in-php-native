<div class="row flex-lg-row-reverse align-items-center g-5 py-5 my-5">
    <div class="col-10 col-sm-8 col-lg-6">
        <img class="d-block mx-lg-auto img-fluid shadow-lg" src="<?= BASEURL; ?>/img/minimalist-house-idea-5.jpeg" alt="House" width="700">
    </div>
    <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Welcome to the brand new housing solution</h1>
        <p class="lead">Your housing solution in one click.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            
            <a type="button" class="btn btn-outline-success btn-lg px-4" onclick="window.location.href=' <?= BASEURL; ?>/about'">
            Start Now</a>
        </div>
    </div>
</div>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

            <?php foreach ($data['house'] as $house) : ?>
                <div class="col">
                    <a href="<?= BASEURL; ?>/catalogue/detail/<?= $house['id']; ?>">
                        <div class="card shadow-sm">
                            <img src="<?= BASEURL; ?>/img/home.png" class="card-img-top" alt="...">
                            <div class="card-body">
                            </a>
                                <h5 class="card-title"><?= $house['name']; ?></h5>
                                <h6 class="card-text">Price: $<?= $house['price']; ?>K</h6>

                </div>
        </div>
    </div>
<?php endforeach; ?>
</div>
</div>
</div>

<div class="row mt-5">
    <div class="col">
        <div class="ratio ratio-16x9 shadow-sm">
            <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=antapani&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed">
            </iframe>
        </div>
    </div>
    <div class="col">
        <h2>Find Us</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Maecenas sit amet pretium urna. Vivamus venenatis velit nec neque ultricies,
            eget elementum magna tristique. Quisque vehicula, risus eget aliquam placerat, purus leo tincidunt eros,
            eget luctus quam orci in velit.
            Praesent scelerisque tortor sed accumsan convallis.
        </p>
    </div>
</div>