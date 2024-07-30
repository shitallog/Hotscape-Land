<?php 
include('admin/includes/config.php');
error_reporting(0);
?>
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
<div class="ltn__breadcrumb-area text-left bg-overlay-white-30 bg-image" data-bs-bg="img/bg/14.jpg" style="margin-bottom: 25px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner">
                    <h1 class="page-title">Plot</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="#"><span class="ltn__secondary-color"><i class="fas fa-home"></i></span> Home</a></li>
                            <li>Plot</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<div class="ltn__product-area ltn__product-gutter">
        <div class="container">
            <div class="row">
            <form method="GET" action="">
            <form method="GET" action="">
    <div class="col-lg-12">
        <div class="ltn__shop-options">
            <ul class="justify-content-start">
                <li>
                    <div class="ltn__grid-list-tab-menu">
                        <div class="nav">
                            <a class="active show" data-bs-toggle="tab" href="#liton_product_grid"><i class="fas fa-th-large"></i></a>
                            <a data-bs-toggle="tab" href="#liton_product_list"><i class="fas fa-list"></i></a>
                        </div>
                    </div>
                </li>
                <li class="d-none">
                    <div class="showing-product-number text-right">
                        <span>Showing 1–12 of 18 results</span>
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

                <?php
                // Query to fetch unique areas
                $query = mysqli_query($con, "
                    SELECT DISTINCT Area
                    FROM tblposts
                    WHERE Area IS NOT NULL AND Area != '' AND CategoryId = 10
                ");

                if (!$query) {
                    die('Query failed: ' . mysqli_error($con));
                }

                // Fetch areas and prepare options
                $areaOptions = [];
                while ($row = mysqli_fetch_assoc($query)) {
                    $areas = json_decode($row['Area'], true);
                    if (is_array($areas)) {
                        foreach ($areas as $area) {
                            if (!in_array($area, $areaOptions)) {
                                $areaOptions[] = $area;
                            }
                        }
                    } else {
                        $areaOptions[] = $row['Area'];
                    }
                }

                // Sort options (optional)
                sort($areaOptions);
                ?>

                <li>
                    <div class="short-by text-center">
                        <select name="area_filter" class="nice-select">
                            <option selected disabled>Area</option>
                            <?php foreach ($areaOptions as $area): ?>
                                <option value="<?php echo htmlentities($area); ?>"><?php echo htmlentities($area); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>

                <?php
                // Query to fetch unique locations
                $query = mysqli_query($con, "
                    SELECT DISTINCT Location
                    FROM tblposts
                    WHERE Location IS NOT NULL AND Location != '' AND CategoryId = 10
                ");

                if (!$query) {
                    die('Query failed: ' . mysqli_error($con));
                }

                // Fetch locations and prepare options
                $locationOptions = [];
                while ($row = mysqli_fetch_assoc($query)) {
                    $locations = json_decode($row['Location'], true);
                    if (is_array($locations)) {
                        foreach ($locations as $location) {
                            if (!in_array($location, $locationOptions)) {
                                $locationOptions[] = $location;
                            }
                        }
                    } else {
                        if (!in_array($row['Location'], $locationOptions)) {
                            $locationOptions[] = $row['Location'];
                        }
                    }
                }

                // Sort options (optional)
                sort($locationOptions);
                ?>

                <li>
                    <div class="short-by text-center">
                        <select name="location_filter" class="nice-select">
                            <option selected disabled>Location</option>
                            <?php foreach ($locationOptions as $location): ?>
                                <option value="<?php echo htmlentities($location); ?>"><?php echo htmlentities($location); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>

                <?php
                // Query to fetch unique land types
                $landTypeQuery = mysqli_query($con, "
                    SELECT DISTINCT land_type
                    FROM tblposts
                    WHERE land_type IS NOT NULL AND land_type != ''
                ");

                if (!$landTypeQuery) {
                    die('Land type query failed: ' . mysqli_error($con));
                }

                // Fetch land types and prepare options
                $landTypeOptions = [];
                while ($row = mysqli_fetch_assoc($landTypeQuery)) {
                    if (!in_array($row['land_type'], $landTypeOptions)) {
                        $landTypeOptions[] = $row['land_type'];
                    }
                }

                // Sort options (optional)
                sort($landTypeOptions);
                ?>

                <li>
                    <div class="short-by text-center">
                        <select name="land_type" class="nice-select">
                            <option selected disabled>Land Type</option>
                            <?php foreach ($landTypeOptions as $landType): ?>
                                <option value="<?php echo htmlentities($landType); ?>"><?php echo htmlentities($landType); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </li>

                <li>
              
                    <button type="submit"  class="theme-btn-1 btn btn-effect-1" style="padding: 11px 25px;">Apply Filters</button>
                </li>
            </ul>
        </div>
    </div>
</form>

<div class="col-lg-12 order-lg-2 mb-100">
    <div class="tab-content">
        <div class="tab-pane fade active show" id="liton_product_grid">
            <div class="ltn__product-tab-content-inner ltn__product-grid-view">
                <div class="row">
                    <!-- ltn__product-item -->
                    <?php
                    // Get filter values from URL
                    $sort_by = isset($_GET['sort_by']) ? $_GET['sort_by'] : '';
                    $area_filter = isset($_GET['area_filter']) ? $_GET['area_filter'] : '';
                    $location_filter = isset($_GET['location_filter']) ? $_GET['location_filter'] : '';
                    $land_type = isset($_GET['land_type']) ? $_GET['land_type'] : '';

                    // Base query
                    $query = "SELECT 
                                tblposts.id as postid, 
                                tblposts.PostTitle as title, 
                                tblposts.price as price,
                                tblposts.land_type as land_type,
                                tblcategory.CategoryName as category, 
                                tblsubcategory.Subcategory as subcategory,
                                tblposts.PostImage as PostImage, 
                                tblposts.PostDetails as PostDetails, 
                                tblposts.Location as Location, 
                                tblposts.Area as Area, 
                                tblposts.KeyHighlight as KeyHighlight,
                                tblposts.Suitability as Suitability, 
                                tblposts.transaction as transaction, 
                                tblposts.zone as zone,
                                tblposts.authority as authority, 
                                tblposts.approach_road as approach_road, 
                                tblposts.PostUrl as PostUrl 
                              FROM 
                                tblposts 
                              LEFT JOIN 
                                tblcategory ON tblcategory.id = tblposts.CategoryId 
                              LEFT JOIN 
                                tblsubcategory ON tblsubcategory.SubCategoryId = tblposts.SubCategoryId 
                              WHERE 
                                tblposts.CategoryId = 10 AND tblposts.Is_Active = 1";

                    // Apply filters
                    if ($area_filter) {
                        $query .= " AND JSON_CONTAINS(tblposts.Area, '\"$area_filter\"')";
                    }
                    if ($location_filter) {
                        $query .= " AND JSON_CONTAINS(tblposts.Location, '\"$location_filter\"')";
                    }
                    if ($land_type) {
                        $query .= " AND tblposts.land_type = '$land_type'";
                    }

                    // Apply sorting
                    if ($sort_by == 'price_low_high') {
                        $query .= " ORDER BY tblposts.price ASC";
                    } elseif ($sort_by == 'price_high_low') {
                        $query .= " ORDER BY tblposts.price DESC";
                    }

                    $result = mysqli_query($con, $query);

                    if (!$result) {
                        die('Query failed: ' . mysqli_error($con));
                    }

                    if (mysqli_num_rows($result) == 0) {
                        echo "<h3>No record found</h3>";
                    } else {
                        while ($row = mysqli_fetch_array($result)) {
                            // Decode JSON fields
                            $location = json_decode($row['Location'], true);
                            $area = json_decode($row['Area'], true);
                            $keyhighlight = json_decode($row['KeyHighlight'], true);
                            $suitability = json_decode($row['Suitability'], true);

                            // Check for empty arrays and set default value if empty
                            $locationText = !empty($location) ? implode(', ', $location) : 'N/A';
                            $areaText = !empty($area) ? implode(', ', $area) : 'N/A';
                            $keyhighlightText = !empty($keyhighlight) ? implode(', ', $keyhighlight) : 'N/A';
                            $suitabilityText = !empty($suitability) ? implode(', ', $suitability) : 'N/A';
                            ?>

                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="ltn__product-item ltn__product-item-4 ltn__product-item-5 text-center---">
                                    <div class="product-img">
                                        <a href="plot-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                                            <?php 
                                            // Check if PostImage is stored as a JSON array or comma-separated string
                                            $images = json_decode($row['PostImage'], true);
                                            if (is_array($images) && count($images) > 0) {
                                                // Print the first image from the array
                                                echo '<img src="admin/property/' . htmlentities($images[0]) . '" alt="Image"> <br>';
                                            } else {
                                                // Fallback if images are stored as a single string
                                                $imageArray = explode(',', $row['PostImage']);
                                                if (count($imageArray) > 0) {
                                                    // Print the first image from the string
                                                    echo '<img src="admin/property/' . htmlentities(trim($imageArray[0])) . '" alt="Image">';
                                                }
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-badge">
                                            <ul>
                                                <li class="sale-badg">For <?php echo htmlentities($row['transaction']); ?></li>
                                            </ul>
                                        </div>
                                        <h2 class="product-title text-capitalize">
                                            <a href="plot-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                                                <?php echo htmlentities($row['title']); ?>
                                            </a>
                                        </h2>
                                        <div class="product-img-location">
                                            <ul>
                                                <li>
                                                    <a href="plot-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                                                        <i class="flaticon-pin"></i> <?php echo htmlentities($locationText); ?>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="plot-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                                                        <i class="fas fa-landmark"></i> <?php echo htmlentities($row['land_type']); ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="ltn__list-item-2--- ltn__list-item-2-before--- ltn__plot-brief">
                                            <li><span>Area: <?php echo htmlentities($areaText); ?> </span></li>
                                            <li><span>Zone: <?php echo htmlentities($row['zone']); ?></span></li>
                                        </ul>
                                        <div class="product-hover-action">
                                            <ul>
                                                <li>
                                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                                        <i class="flaticon-expand"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="plot-detail.php?pid=<?php echo htmlentities($row['postid']); ?>" title="Product Details">
                                                        <i class="flaticon-add"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a href="plot-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                                        <div class="product-info-bottom">
                                            <div class="product-price">
                                                <span>₹<?php echo htmlentities($row['price']); ?></span>
                                            </div>
                                            <span class="product-price">View Details</span>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <?php 
                        }
                    }

                    // Close the database connection
                    $con->close();
                    ?>     
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    </div>
</div>

<?php include('footer.php'); ?>

