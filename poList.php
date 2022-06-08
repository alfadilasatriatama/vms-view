<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>
<div class="container my-3 border">

    <!-- Po Header -->

    <table class="table caption-top">
        <h3>PO Header</h3>
        <div class="btn-group btn-group-sm" role="group" aria-label="Basic outlined example">
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="myModal">
                    Po New
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Purchase Order</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- modal content add purchase order -->
                            <div class="modal-body">
                                <div class="container">

                                    <h5>Vendor</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Vendor Account</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Company">
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <h5>Address</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Delivery Name</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <h5>General</h5>

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Purchase Order</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Purchase Type</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button delete -->
                <button type="button" class="btn btn-secondary" id="Delete">
                    Delete
                </button>
                
                <!-- Button trigger modal Purchase Order -->
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="PurchaseOrder">
                    Purchase Order
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Create Purchase Order</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <!-- modal content add purchase order -->
                            <div class="modal-body">
                                <div class="container">

                                    <h5>Vendor</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Vendor Account</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Your Company">
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <h5>Address</h5>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Delivery Name</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Contact</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6"></div>
                                    </div>

                                    <h5>General</h5>

                                    <div class="row ">
                                        <div class="col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Purchase Order</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleFormControlInput1" class="form-label">Purchase Type</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                 <!-- Button Shipment -->
                 <button type="button" class="btn btn-secondary" id="Delete">
                    Shipment
                </button>

                 <!-- Button Received -->
                 <button type="button" class="btn btn-secondary" id="Delete">
                    Receive
                </button>

                 <!-- Button Invoice -->
                 <button type="button" class="btn btn-secondary" id="Delete">
                    Invoice
                </button>
                
            </div>
        </div>
        <!--  -->


        <!-- table -->
        <div class="container">
            <h1 class="fs-6 my-3">All Purchase Orders</h1>

            <!-- button searching -->
            <div class="row justify-content-end">
                <div class="col-md-3">
                    <form action="/posts">
                        <input type="hidden" name="category" value="{{  request('category') }}">
                        <input type="hidden" name="category" value="{{  request('author') }}">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control">
                            <button class="btn btn-outline-info" type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- table head -->
            <thead style="font-size: x-small;">
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col">Vendor Account</th>
                    <th scope="col">Invoice Account</th>
                    <th scope="col">Vendor Name</th>
                    <th scope="col">Purchase Type</th>
                    <th scope="col">Approval Status</th>
                    <th scope="col">Purchase Order Status</th>
                    <th scope="col">Currency</th>
                </tr>
            </thead>
            <!-- table body -->
            <tbody>
                <!-- row 1 -->
                <tr>
                    <th scope="row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        </div>
                    </th>
                    <td>PO/21/00017</td>
                    <td>104</td>
                    <td>104</td>
                    <td>Best Supplier - Europe</td>
                    <td>Purchase Order</td>
                    <td>Confirmed</td>
                    <td>Invoice</td>
                    <td>USD</td>
                </tr>
            </tbody>
        </div>
    </table>
</div>

<!-- line Detail -->
<!-- <div class="" style="display: flex;">
        <div class="col-sm-3">
            <p>Item ID :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Item Description :</p>
            <input type="text" class="form-control-sm" id="">
        </div>
        <div class="col-sm-3">
            <p class="">Qty :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Price :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Bruto :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Discount :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Netto :</p>
            <input type="text" class="form-control-sm" id="">
        </div>
        <div class="col-sm-3">
            <p>Site :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Warehouse :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Address :</p>
            <input type="text" class="form-control-sm" id="">
        </div>
        <div class="col-sm-3">
            <p>Overdelivery :</p>
            <input type="text" class="form-control-sm" id="">
            <p class="mt-2">Underdelivery :</p>
            <input type="text" class="form-control-sm" id="">
        </div>
        </span>
    </div> -->

</div>
<?= $this->endSection(); ?>