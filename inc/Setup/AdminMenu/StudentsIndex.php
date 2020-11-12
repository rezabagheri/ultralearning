<div id="content-wrapper" class="d-flex flex-column">
    <!-- Main Content -->
    <div id="content">
        <?php 
        require_once(__DIR__."/templates-parts/navbar-top.php");
        ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Students Manager</h1>
            </div> -->
            <div class="card shadow h-100 py-2 mb-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="h2 font-weight-bold text-primary text-uppercase mb-1">Students Manager</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">Total Count: 12</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <button type="button" class="btn btn-primary">
                                All <span class="badge badge-light">12</span>
                                <span class="sr-only">All</span>
                            </button>
                            <button type="button" class="btn btn-success">
                                Published <span class="badge badge-light">10</span>
                                <span class="sr-only">Published</span>
                            </button>
                            <button type="button" class="btn btn-secondary">
                                Draft <span class="badge badge-light">1</span>
                                <span class="sr-only">Draft</span>
                            </button>
                            <button type="button" class="btn btn-warning">
                                Trash <span class="badge badge-light">1</span>
                                <span class="sr-only">Trash</span>
                            </button>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <div id="filers" class="mt-2">
                        <div class="row">
                            <div class="col mr-2">
                                <form>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Bulk Actions</option>
                                        <option>Edit</option>
                                        <option>Delete</option>
                                        <option>Active</option>
                                        <option>Deactive</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-auto">
                                10 Items
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Tags</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Active Classes</th>
                                    <th scope="col">Finished Classes</th>
                                    <th scope="col">Published Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1"></label>
                                        </div>
                                    </th>
                                    <td colspan="7">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>