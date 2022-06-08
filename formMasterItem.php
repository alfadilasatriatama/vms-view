 <!-- button from master item -->
 <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="myModal">
     Po New
 </button>

 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Form Master Item</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <!-- modal content add purchase order -->
             <div class="modal-body d-flex">
                 <div class="col-md-5">
                     <label for="itemId">Item ID :</label>
                     <select class=" form-select mb-2" aria-label="Default select example" id="itemId">
                         <option selected></option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                     </select>

                     <label for="productName">Product Name :</label>
                     <input class="form-control mb-2" type="text" id="productName">

                     <label for="productType">Product Type :</label>
                     <select class="form-select mb-2" aria-label="Default select example" id="productType">
                         <option selected></option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                     </select>

                     <label for="storageDimension">Storage Dimension Group :</label>
                     <select class="form-select mb-2" aria-label="Default select example" id="storageDimension">
                         <option selected></option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                     </select>

                     <label for="trackingDimension">Tracking Dimension Group :</label>
                     <select class="form-select mb-2" aria-label="Default select example" id="trackingDimension">
                         <option selected></option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                     </select>

                     <label for="unit">Unit :</label>
                     <select class="form-select mb-5" aria-label="Default select example" id="unit">
                         <option selected></option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                     </select>

                     <label for="unitInput">Unit :</label>
                     <input class="form-control mb-2" type="text" id="unitInput">

                     <label for="unitDescription">Description :</label>
                     <textarea class="form-control mb-4" type="text" id="unitDescription"></textarea>

                 </div>

                 <!-- list Right -->
                 <div class="col-md-6 ms-3">
                     <label for="productType">Product Type :</label>
                     <input class="form-control mb-2" type="text" id="productType">

                     <label for="descriptionProductType">Description :</label>
                     <textarea class="form-control mb-5" type="text" id="descriptionProductType"></textarea>

                     <label for="storageDimension">Storage Dimension :</label>
                     <input class="form-control mb-2" type="text" id="storageDimension">

                     <label for="descriptionStorage">Description :</label>
                     <textarea class="form-control mb-5" type="text" id="descriptionStorage"></textarea>

                     <label for="trackingDimension">Tracking Dimension :</label>
                     <input class="form-control mb-2" type="text" id="trackingDimension">

                     <label for="descriptionTracking">Description :</label>
                     <textarea class="form-control mb-2" type="text" id="descriptionTracking"></textarea>
                 </div>


             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
             </div>
         </div>
     </div>
 </div>