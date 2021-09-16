<div class="row mt-4">
    <div class="col-6">
        <h3 class="fw-bold">House List</h3>

        <ul class="list-group">
            <?php foreach ($data['house'] as $house) : ?>
                <li class="list-group-item"><?= $house['name'];  ?>
                    <a href="<?= BASEURL; ?>/catalogue/delete/<?= $house['id']; ?>" class="btn btn-outline-danger btn-sm float-end ms-2" onclick="return confirm('Are you sure? This operation cannot be undone');">Delete</a>
                    <a href="<?= BASEURL; ?>/catalogue/ubah/<?= $house['id']; ?>" class="btn btn-outline-success btn-sm float-end ms-2 showEditModal" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $house['id']; ?>">Edit</a>
                    <a href="<?= BASEURL; ?>/catalogue/detail/<?= $house['id']; ?>" class="btn btn-outline-primary btn-sm float-end ms-2">Detail</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-outline-primary mt-2 addButton" data-bs-toggle="modal" data-bs-target="#formModal">
                    Add
                </button>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>/catalogue/search" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search house" name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-outline-secondary" type="submit" id="searchButton">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

    </div>
</div>

<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="ModalTitle" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalTitle">Add New House</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/catalogue/add" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group mt-2">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group mt-2">
                        <label for="type">Type</label>
                        <select class="form-select" id="type" name="type">
                            <option selected value="24">24</option>
                            <option value="36">36</option>
                            <option value="45">45</option>
                            <option value="60">60</option>
                            <option value="70">70</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" name="price">
                    </div>
                    <div class="form-group mt-2">
                        <label for="bedroom">Bedroom</label>
                        <input type="number" class="form-control" id="bedroom" name="bedroom">
                    </div>
                    <div class="form-group mt-2">
                        <label for="bathroom">Bathroom</label>
                        <input type="number" class="form-control" id="bathroom" name="bathroom">
                    </div>
                    <div class="form-group mt-2">
                        <label for="garage">Garage</label>
                        <input type="number" class="form-control" id="garage" name="garage">
                    </div>
                    <div class="form-group mt-2">
                        <label for="id_tenant">Tenant</label>
                        <select class="form-select" id="id_tenant" name="id_tenant">
                            <option selected value="1">#AGENT001</option>
                            <option value="2">#AGENT002</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
            </div>
        </div>
    </div>
</div>