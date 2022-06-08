<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-3">
    <!-- PO Lines -->
    <h3>Po New</h3>
    <div class="">
        <!-- Button Invoice -->
        <button type="button" class="btn btn-outline-secondary" id="Delete">
            Edit
        </button>
        <!-- Button Invoice -->
        <button type="button" class="btn btn-outline-secondary" id="Delete">
            Save
        </button>
    </div>


    <!-- div section 1 -->
    <div class="row fw-bold  my-3" style="display: flex;">
        <div class="col-sm-4">
            <p>Purchase Order ID :</p>
            <input type="text col-md-6" class="form-control" id="">
            <p class="mt-2">Purchase Order Date :</p>
            <input type="text col-md-6" class="form-control" id="">
            <p class="mt-2">Confirm Date :</p>
            <input type="text col-md-6" class="form-control" id="">
        </div>

        <!-- section 2 -->
        <div class="col-sm-4">

            <p>Vendor :</p>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Gramedia
                    </option>
                    <option value="1">Maxindo</option>
                    <option value="2">Telkomsel</option>
                    <option value="3">Gramedia</option>
                </select>
            </div>

            <p>Vendor Name :</p>
            <input type="text" class="form-control" id="vendor_name">

        </div>

        <!-- section 3 -->
        <div class="col-sm-4">
            <p>Status :</p>
            <input type="text" class="form-control" id="po_status" placeholder="">
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Shipped Date</label>
                <input type="date" class="form-control" id="validationCustom01" value="">
            </div>
            <div class="col-md-6">
                <label for="validationCustom01" class="form-label">Estimated Date</label>
                <input type="date" class="form-control" id="validationCustom01" value="">
            </div>
        </div>
    </div>

    <!-- div section 2 -->
    <div class="row mt-2 fw-bold" style="display: flex;">
        <div class="col-sm-4">
            <label for="inputPassword" class="col-sm-2 col-form-label">Currency</label>
            <div class="btn-group col-sm-2">
                <select class="form-select-sm" aria-label="Default select example">
                    <option selected>IDR</option>
                    <option value="1">USD</option>
                    <option value="2">Euro</option>
                    <option value="3">$SGD</option>
                </select>
            </div>
        </div>

        <!-- section 2 -->
        <div class="col-sm-4">
            <p>Term Of Payment :</p>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>90 Days</option>
                    <option value="1">30 Days</option>
                    <option value="2">60 Days</option>
                    <option value="3">90 Days</option>
                </select>
            </div>
        </div>

        <!-- section 3 -->
        <div class="col-sm-4">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Notes :</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
        </div>

    </div>

    <!-- table -->
    <table class="table caption-top">
        <div class="container row">
            <div class="col-sm-3 d-flex">
                <button type="button" class="btn btn-outline-secondary">
                    <a class="nav-link link-dark active" aria-current="page" href="">Add Line</a>
                </button>
                <button type="button" class="btn btn-outline-secondary">
                    <a class="nav-link link-dark" href="">Delete Line</a>
                </button>
            </div>
            <!-- sub menu detail -->
            <div class="col-sm-3 d-flex">
                <div class="">
                    <!-- Button trigger General modal -->
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="myModal">
                        General
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">General</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- modal content add purchase order -->
                                <div class="modal-body">
                                    <div class="container">

                                        <div class="row ">
                                            <div class="col-md-4">
                                                <label for="exampleFormControlInput1" class="form-label">Line Status</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleFormControlInput1" class="form-label">Confirm Status</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="exampleFormControlInput1" class="form-label">Site</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                            </div>
                                        </div>

                                        <div class="row ">
                                            <div class="col-md-8">
                                                <label for="exampleFormControlTextarea1" class="form-label">Notes :</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="col">
                                                    <label for="exampleFormControlInput1" class="form-label">Warehouse</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                </div>
                                                <div class="col">
                                                    <label for="exampleFormControlInput1" class="form-label">Batch Number</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            </div>
            <thead style="font-size: x-small;">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">No</th>
                    <th scope="col">Item ID</th>
                    <th scope="col">Item Description</th>
                    <th scope="col">Qty</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Price</th>
                    <th scope="col">Bruto</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Netto</th>
                    <th scope="col">Site</th>
                    <th scope="col">Warehouse</th>
                    <th scope="col">Address</th>
                    <th scope="col">QtyShipped</th>
                    <th scope="col">QtyReceived</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </th>
                    <td>1</td>
                    <td>OE001</td>
                    <td>Laptop Kantor</td>
                    <td>5</td>
                    <td>ea</td>
                    <td>8.000.000</td>
                    <td>40.000.000</td>
                    <td>10%</td>
                    <td>36.000.000</td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Site 2</option>
                            <option value="1">Site 1</option>
                            <option value="2">Site 2</option>
                            <option value="3">Site 3</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Warehouse 3</option>
                            <option value="1">Warehouse 1</option>
                            <option value="2">Warehouse 2</option>
                            <option value="3">Warehouse 3</option>
                        </select></td>
                    <td>Rukan Grand Puri</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- row-2 -->
                <tr>
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </th>
                    <td>2</td>
                    <td>OE001</td>
                    <td>Monitor Desktop</td>
                    <td>2</td>
                    <td>el</td>
                    <td>8.000.000</td>
                    <td>40.000.000</td>
                    <td>10%</td>
                    <td>36.000.000</td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Site 3</option>
                            <option value="1">Site 1</option>
                            <option value="2">Site 2</option>
                            <option value="3">Site 3</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Warehouse 3</option>
                            <option value="1">Warehouse 1</option>
                            <option value="2">Warehouse 2</option>
                            <option value="3">Warehouse 3</option>
                        </select></td>
                    <td>Rukan Grand Puri</td>
                    <td></td>
                    <td></td>
                </tr>
                <!-- row-3 -->
                <tr>
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </th>
                    <td>3</td>
                    <td>OE001</td>
                    <td>Mouse Logitech</td>
                    <td>2</td>
                    <td>el</td>
                    <td>8.000.000</td>
                    <td>40.000.000</td>
                    <td>10%</td>
                    <td>36.000.000</td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Site 1</option>
                            <option value="1">Site 1</option>
                            <option value="2">Site 2</option>
                            <option value="3">Site 3</option>
                        </select></td>
                    <td><select class="form-select" aria-label="Default select example">
                            <option selected>Warehouse 2</option>
                            <option value="1">Warehouse 1</option>
                            <option value="2">Warehouse 2</option>
                            <option value="3">Warehouse 3</option>
                        </select></td>
                    <td>Rukan Grand Puri</td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
    </table>

</div>
<?= $this->endSection(); ?>