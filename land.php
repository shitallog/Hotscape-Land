<?php include ('header.php') ?>

<style>
    .ltn__filter {
    display: flex;
    align-items: center; /* Align items vertically */
}

.filter-select-container {
    margin-right: 10px; /* Adjust margin between select elements */
}
</style>


    <!-- BREADCRUMB AREA START -->
    <div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image "  data-bs-bg="img/bg/14.jpg" style="margin-bottom: 25px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ltn__breadcrumb-inner">
                        <h1 class="page-title">Land</h1>
                        <div class="ltn__breadcrumb-list">
                            <ul>
                                <li><a href="index.html"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                                <li>Land</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    
     <!-- PRODUCT DETAILS AREA START -->
    <div class="ltn__product-area ltn__product-gutter">
        <div class="container">
            <div class="row">
                
                 <div class="col-lg-12 ">
                 <div class="ltn__shop-options">
                
                 

                        <ul class="justify-content-start">
                            <li>
                                <div class="ltn__grid-list-tab-menu ">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                                    </div>
                                </div>
                            </li>
                           
                            <h3 class="mb-10 me-3">Location</h3>
                            
                            <li>
    <div class="short-by text-center">
        <select class="nice-select">
            <option selected disabled>Select State of India</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chhattisgarh</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Odisha</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
            <option>Andaman and Nicobar Islands</option>
            <option>Chandigarh</option>
            <option>Dadra and Nagar Haveli and Daman and Diu</option>
            <option>Delhi</option>
            <option>Lakshadweep</option>
            <option>Puducherry</option>
            <option>Ladakh</option>
            <option>Jammu and Kashmir</option>
        </select>
    </div>
</li>

                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option Selected disabled>Maharashtra</option>
                                        <option>Nagpur</option>
                                        <option>Nashik</option>
                                        <option>Palghar</option>
                                        <option>Pune </option>
                                        <option>Raigad </option>
                                        <option>Thane </option>
                                    </select>
                                </div> 
                            </li>


                            <li>
                               <div class="short-by text-center">
                                    <select class="nice-select">
                                        <option Selected disabled>MMR</option>
                                        <option>Alibag </option>
                                        <option>Ambernath </option>
                                        <option>Bhiwandi</option>
                                        <option>Kalyan </option>
                                        <option>Karjat</option>
                                        <option>Kholapur </option>
                                        <option>Mumbai </option>
                                        <option>Panvel </option>
                                        <option>Pen </option>
                                        <option>Thane </option>
                                        <option>Ulhasnagar </option>
                                        <option>Virar </option>
                                        <option>Vasai </option>
                                    </select>
                                </div> 
                            </li>

                            <li>
                               <div class="short-by text-center">
                               <select name="sort_by" class="nice-select">
                            <option selected disabled>Sort By</option>
                            <option value="price_low_high">Sort by price: low to high</option>
                            <option value="price_high_low">Sort by price: high to low</option>
                        </select>
                                </div> 
                            </li>
                           

                        </ul>
                    </div>
                    </div>
                
                    <div class="col-lg-3  mb-100">
                    <aside class="sidebar ltn__shop-sidebar">
                        <h3 class="mb-10">Filters</h3>
                        <!-- Advance Information widget -->
                        <div class="widget ltn__menu-widget">
                            
                        <h4 class="ltn__widget-title">Catagory</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Residential
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                 </li>
                                 <li>
                                    <label class="checkbox-item">Commercial
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                 </li>
                                 <li>
                                    <label class="checkbox-item">Industrial
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                 </li>
                                 <li>
                                    <label class="checkbox-item">Agriculture
                                        <input type="checkbox" >
                                        <span class="checkmark"></span>
                                    </label>
                                 </li>

                            </ul>
                            
                            <hr>
                            
                            <h4 class="ltn__widget-title">Transaction Type</h4>
                            <ul>
                                <li>
                                    <label class="checkbox-item">Outright 
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                   
                                </li>
                                <li>
                                    <label class="checkbox-item">Lease
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                   
                                </li>
                               
                            
                            </ul>
                            <hr>
                            

                            <h4 class="ltn__widget-title" >Area</h4>
                            <ul style="margin-bottom:50px">
                            <li>

    <input type="number"   class="checkbox-item"  placeholder="Enter Area" >
    <select style="margin-left: 10px;">
        <option value="square_meter">Square Meter</option>
        <option value="acre">Acre</option>
        <option value="hectare">Hectare</option>
    </select>

</li>
                           
                            </ul>
                            <hr>
                            
                            <!-- Price Filter Widget -->
                            <div class="widget--- ltn__price-filter-widget">
                                <h4 class="ltn__widget-title ltn__widget-title-border---">Budget</h4>
                                <div class="price_filter">
                                    <div class="price_slider_amount">
                                        <input type="text" class="amount" name="price"  placeholder="Add Your Price" /> 
                                    </div>
                                    <div class="slider-range"></div>
                                </div>
                            </div>
                            <hr>
                            
                            <button type="submit"  class="theme-btn-1 btn btn-effect-1" >Apply Filters</button>
                        </div>
                      
                 

                    </aside>
                </div>
                
                <div class="col-lg-9 order-lg-2 mb-100">
                   
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="liton_product_grid">
                            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                                <div class="row">
                                  
                            <div class="col-xl-6 col-sm-6 col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="land-detail.php">
                                            <img src="admin/property/3.png" alt="Image"> <br>                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badg">For sale</li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title text-capitalize">
                                            <a href="land-detail.php">
                                                Veenegaon, Khalapur, Raigad Land                                           </a>
                                        </h2>
                                        <div class="product-img-location">
                                            <ul>
                                                <li>
                                                    <a href="land-detail.php">
                                                        <i class="flaticon-pin"></i> Vinegaon, Khalapur, Raigad                                                   </a>
                                                </li>

                                                <li>
                                                    <a href="land-detail.php">
                                                        <i class="fas fa-landmark"></i> Commercial land                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                            <li><span>Area: 4 Acres 6 Gunthas</span></li>
                                            <li><span>Zone: Green zone-I</span></li>
                                        </ul>
                                      
                                    </div>
                                    <a href="land-detail.php">
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>₹- Not Disclosed</span>
                                            </div>
                                            <span class="product-price">View Details</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                               
                               
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            
            </div>
        </div>
    </div>
    <!-- PRODUCT DETAILS AREA END -->
    



<script>
    function filterProducts() {
        var filterPrice = document.getElementById('filterPrice').value;
        var filterSquareFt = document.getElementById('filterSquareFt').value;
        var filterBedrooms = document.getElementById('filterBedrooms').value;
        var filterType = document.getElementById('filterType').value;

        var products = document.querySelectorAll('.ltn__product-item');

        products.forEach(function(product) {
            var price = parseInt(product.querySelector('.product-price span').textContent.replace(/\D/g,''));
            var squareFt = parseInt(product.querySelector('.ltn__plot-brief li:nth-child(3) span').textContent.replace(/\D/g,''));
            var bedrooms = parseInt(product.querySelector('.ltn__plot-brief li:first-child span').textContent.replace(/\D/g,''));
            var type = product.querySelector('.ltn__product-badge .sale-badg').textContent.toLowerCase();

            var showProduct = true;

            if (filterPrice !== 'all' && price !== parseInt(filterPrice)) {
                showProduct = false;
            }
            if (filterSquareFt !== 'all' && squareFt !== parseInt(filterSquareFt)) {
                showProduct = false;
            }
            if (filterBedrooms !== 'all' && bedrooms !== parseInt(filterBedrooms)) {
                showProduct = false;
            }
            if (filterType !== 'all' && type !== filterType) {
                showProduct = false;
            }

            if (showProduct) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    }
</script>
<?php include ('footer.php') ?>