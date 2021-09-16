<div class="container pt-5">
    <h1 class="fw-bold">House for Sale</h1>
</div>

<div class="row flex-row-reverse row-cols-0 row-cols-md-1 row-cols-lg-2 g-2">

    <div class="col">
        <div class="card" style="width: 20rem;">
            <h3 class="text-center pt-4"><?= $data['house']['name_tenant']; ?></h3>
            <img src="<?= BASEURL; ?>/img/home.png" class="card-img-top" alt="...">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-auto text-center">

                    <div class="col">
                        <h5><i class="fab fa-whatsapp"></i></h5>
                        <h6 class="fw-bold">Whatsapp</h6>
                    </div>

                    <div class="col">
                        <h5><i class="far fa-envelope"></i></h5>
                        <h6 class="fw-bold">E Mail</h6>
                    </div>

                    <div class="col">
                        <h5><i class="fas fa-phone-alt"></i></h5>
                        <h6 class="fw-bold">Phone</h6>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <img src="<?= BASEURL; ?>/img/home.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title fw-bold"><?= $data['house']['name']; ?></h2>
                <p>
                    <i class="fas fa-bed"></i> <?= $data['house']['bedroom']; ?>
                    <i class="fas fa-shower"></i> <?= $data['house']['bathroom']; ?>
                    <i class="fas fa-car"></i> <?= $data['house']['garage']; ?>
                </p>
                <h4 class="card-text"> $<?= $data['house']['price']; ?>K</h4>
                <h6 class="card-text">Type: <?= $data['house']['type']; ?></h6>
                <h6 class="card-text">ID: <?= $data['house']['id']; ?></h6>

                <div class="accordion py-3" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h4>Details for <?= $data['house']['name']; ?></h4>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?= BASEURL; ?>/" class="card-link">Back</a>
            </div>
        </div>
    </div>

</div>