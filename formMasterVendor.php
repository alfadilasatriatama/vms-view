
    <!-- button from master Vendor -->
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="myModal">
        Master Vendor
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Master Vendor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- modal content add purchase order -->
                <div class="modal-body d-flex">
                    <div class="col-md-5">
                        <label for="vendorId">Vendor ID :</label>
                        <select class=" form-select mb-2" aria-label="Default select example" id="vendorId">
                        <option selected></option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                        </select>

                        <label for="productName">Vendor Name :</label>
                        <input class="form-control mb-2" type="text" id="productName">

                        <label for="productType">Vendor Type :</label>
                        <select class="form-select mb-2" aria-label="Default select example" id="productType">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <label for="address">Address :</label>
                        <textarea class="form-control mb-4" type="text" id="address"></textarea>

                        <label for="contactInformation">Contact Information :</label>
                        <input class="form-control mb-2" type="text" id="contactInformation">

                        <label for="contactName">Contact Name :</label>
                        <input class="form-control mb-2" type="text" id="contactName">

                        <label for="contactNumber">Contact Number :</label>
                        <input class="form-control mb-2" type="number" id="contactNumber">

                        <label for="termOfPayment">Term Of Payment :</label>
                        <select class="form-select mb-2" aria-label="Default select example" id="termOfPayment">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <label for="currency">Currency :</label>
                        <select class="form-select mb-2 " aria-label="Default select example" id="currency">
                            <option selected></option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                    </div>

                    <!-- list Right -->
                    <div class="col-md-6 ms-3">
                        <label for="vendorType">Vendor Type :</label>
                        <input class="form-control mb-2" type="text" id="vendorType">

                        <label for="Description">Description :</label>
                        <textarea class="form-control mb-5" type="text" id="Description"></textarea>

                        <label for="inputTermOfPayment">Term Of Payement :</label>
                        <input class="form-control mb-2" type="text" id="inputTermOfPayment">

                        <label for="descriptionTermOfPayment">Description :</label>
                        <textarea class="form-control mb-5" type="text" id="descriptionTermOfPayment"></textarea>

                        <label for="currencyCode" >Currency Code :</label>
                        <input class="form-control mb-2" type="text" id="currencyCode">

                        <label for="DescriptionCurrency">Description :</label>
                        <textarea class="form-control mb-2" type="text" id="DescriptionCurrency"></textarea>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>