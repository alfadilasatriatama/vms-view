<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-3">
    <!-- PO Lines -->
    <h3>Po New</h3>
    <div class="">
        <!-- Button Invoice -->
        <button type="button" class="btn btn-outline-secondary" id="edit">
            Edit
        </button>
        <!-- Button Invoice -->
        <button type="button" class="btn btn-outline-secondary" id="delete">
            Save
        </button>
    </div>


    <!-- div section 1 -->
    <div class="row fw-bold  my-4" style="display: flex;">
        <div class="col-sm-4">
            <p>Purchase Order ID :</p>
            <input type="text col-md-6" class="form-control" id="poId">

            <p class="mt-2">Purchase Order Date :</p>
            <input type="text col-md-6" class="form-control" id="poDate">

            <label for="validationCustom01" class="form-label">Shipped Date</label>
            <input type="date" class="form-control" id="validationCustom01" value="shippedDate">

            <p class="mt-2">Confirm Date :</p>
            <input type="text col-md-6" class="form-control" id="ConfirmDate">

            <p class="mt-2">Tax_ID:</p>
            <select class="form-select" aria-label="Default select example" id="taxId">
                <option selected></option>
                <option value="1"></option>
                <option value="2"></option>
                <option value="3"></option>
            </select>
        </div>

        <!-- section 2 -->
        <div class="col-sm-4">

            <p>Vendor :</p>
            <div class="input-group mb-3">
                <select class="form-select" aria-label="Default select example" id="vendor">
                    <option selected>
                    </option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
            </div>

            <p>Vendor Name :</p>
            <input type="text" class="form-control" id="vendorName">

            <p>Term Of Payment :</p>
            <select class="form-select" aria-label="Default select example">
                <option selected>90 Days</option>
                <option value="1">30 Days</option>
                <option value="2">60 Days</option>
                <option value="3">90 Days</option>
            </select>

            <label for="inputPassword" class="col-sm-2 col-form-label mt-4">Currency</label>
            <select class="form-select-sm" aria-label="Default select example" id="currency">
                <option selected>IDR</option>
                <option value="1">USD</option>
                <option value="2">Euro</option>
                <option value="3">$SGD</option>
            </select>

        </div>

        <!-- section 3 -->
        <div class="col-sm-4">
            <p>Approval Status :</p>
            <input type="text" class="form-control" id="po_status" placeholder="" id="approvalStatus">

            <p>Vendor Confirmation Status :</p>
            <input type="text" class="form-control" id="po_status" placeholder="" id="vendorConfirmation">

            <p>Purchase Order Status :</p>
            <input type="text" class="form-control" id="po_status" placeholder="purchaseOrderStatus">

            <label for="validationCustom01" class="form-label">Shipped Date</label>
            <input type="date" class="form-control" id="validationCustom01" value="shippedDate">

            <label for="exampleFormControlTextarea1" class="form-label">Notes :</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" id="notes"></textarea>

        </div>
    </div>

    <!-- menu table -->
    <table class="table caption-top">
        <div class="container row">
            <div class="col-md-5 d-flex">
                <button type="button" class="btn btn-outline-secondary">
                    <a class="nav-link link-dark active" aria-current="page" href="" id="addLine">Add Line</a>
                </button>
                <button type="button" class="btn btn-outline-secondary">
                    <a class="nav-link link-dark" href="" id="deleteLine">Delete Line</a>
                </button>

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
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" id="lineStatus">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleFormControlInput1" class="form-label">Confirm Status</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" id="confirmStatus">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="exampleFormControlInput1" class="form-label">Site</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" id="site">
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-md-8">
                                            <label for="exampleFormControlTextarea1" class="form-label">Notes :</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" id="notes"></textarea>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="col">
                                                <label for="exampleFormControlInput1" class="form-label">Warehouse</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" id="warehouse">
                                            </div>
                                            <div class="col">
                                                <label for="exampleFormControlInput1" class="form-label">Batch Number</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" id="batchNumber">
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

                <!-- Button trigger Delivery -->
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deliveryModal" id="myModal">
                    Delivery
                </button>
                <!-- Modal -->
                <div class="modal fade" id="deliveryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Delivery</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- modal content Delivery -->
                            <div class="modal-body">
                                <div class="container">
                                    <label for="validationCustom01" class="form-label">Request Delivery Date :</label>
                                    <input type="date" class="form-control" id="validationCustom01" value="" id="requestDelivery">

                                    <p class="mt-2">Vendor Confirmation Status :</p>
                                    <input type="text" class="form-control" id="po_status" placeholder="" id="vendorConfirmation">
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
        <!-- table -->
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
                <th scope="col">Delivery Reminder</th>
                <th scope="col">Tax ID</th>
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
                <td>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Site 2</option>
                        <option value="1">Site 1</option>
                        <option value="2">Site 2</option>
                        <option value="3">Site 3</option>
                    </select>
                </td>
                <td>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Warehouse 3</option>
                        <option value="1">Warehouse 1</option>
                        <option value="2">Warehouse 2</option>
                        <option value="3">Warehouse 3</option>
                    </select>
                </td>
                <td>Rukan Grand Puri</td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <select class="form-select" aria-label="Default select example">
                        <option selected></option>
                        <option value="1">...</option>
                        <option value="2">...</option>
                        <option value="3">...</option>
                    </select>
                </td>
            </tr>

        </tbody>
    </table>

</div>
<?= $this->endSection(); ?>