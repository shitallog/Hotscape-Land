<?php 
include('admin/includes/config.php');
error_reporting(0);
?>

<?php include ('header.php') ?>


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

    <?php
// Database connection (Ensure $con is properly initialized before this)
// Example: $con = mysqli_connect('localhost', 'username', 'password', 'database');

// Check if 'pid' is set and is a numeric value
if (isset($_GET['pid']) && is_numeric($_GET['pid'])) {
    $pid = intval($_GET['pid']);
} else {
    echo "<div>Invalid property ID.</div>";
    exit();
}

// Prepare and execute the query using prepared statements
$stmt = $con->prepare("
    SELECT tblposts.id as postid, tblposts.PostTitle as title, tblposts.price as price,
        tblcategory.CategoryName as category, tblsubcategory.Subcategory as subcategory,
        tblposts.PostImage as PostImage, tblposts.PostDetails as PostDetails, 
        tblposts.Location as Location, tblposts.Area as Area, tblposts.KeyHighlight as KeyHighlight,
        tblposts.Suitability as Suitability, tblposts.transaction as transaction, tblposts.zone as zone,
        tblposts.authority as authority, tblposts.approach_road as approach_road, tblposts.PostUrl as PostUrl,
        tblposts.PostingDate as PostingDate
    FROM tblposts 
    LEFT JOIN tblcategory ON tblcategory.id = tblposts.CategoryId 
    LEFT JOIN tblsubcategory ON tblsubcategory.SubCategoryId = tblposts.SubCategoryId 
    WHERE tblposts.id = ?
");
$stmt->bind_param("i", $pid);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch and display the property details
    while ($row = $result->fetch_assoc()) {
    
        // Check if PostImage is stored as a JSON array or comma-separated string
        $images = json_decode($row['PostImage'], true);
        if (!is_array($images)) {
            $images = explode(',', $row['PostImage']);
        }

        // Display each image
        if (!empty($images)) {
            echo '<!-- IMAGE SLIDER AREA START (img-slider-3) -->
                  <div class="ltn__img-slider-area mb-5">
                      <div class="container-fluid">
                          <div class="row ltn__image-slider-5-active slick-arrow-1 slick-arrow-1-inner ltn__no-gutter-all">';

            foreach ($images as $image) {
                echo '<div class="col-lg-12">
                        <div class="ltn__img-slide-item-4">
                            <a href="admin/property/' . htmlentities(trim($image)) . '" data-rel="lightcase:myCollection">
                                <img src="admin/property/' . htmlentities(trim($image)) . '" alt="Image">
                            </a>
                        </div>
                      </div>';
            }

            echo '      </div>
                      </div>
                  </div>
                  <!-- IMAGE SLIDER AREA END -->';
        }

        // Decode and handle arrays for Location, Area, KeyHighlight, and Suitability
        $location = json_decode($row['Location'], true);
        $area = json_decode($row['Area'], true);
        $keyhighlight = json_decode($row['KeyHighlight'], true);
        $suitability = json_decode($row['Suitability'], true);

        // Check for empty arrays and set default value if empty
        $locationText = !empty($location) ? implode(', ', $location) : 'N/A';
        $areaText = !empty($area) ? implode(', ', $area) : 'N/A';
        $keyhighlightText = !empty($keyhighlight) ? implode(', ', $keyhighlight) : 'N/A';
        $suitabilityText = !empty($suitability) ? implode(', ', $suitability) : 'N/A';

        // Property Details
        echo '<!-- SHOP DETAILS AREA START -->
                <div class="ltn__shop-details-area pb-10">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="ltn__shop-details-inner ltn__page-details-inner mb-60">
                                    <div class="ltn__blog-meta">
                                        <ul>
                                         
                                            <li class="ltn__blog-category">
                                                <a class="bg-orange" href="#">For ' . htmlentities($row['transaction']) . '</a>
                                            </li>
                                            
                                            <li class="ltn__blog-date">
                                                <i class="far fa-calendar-alt"></i> ' . date('jS F Y', strtotime($row['PostingDate'])) . '
                                            </li>

                                            <li class="ltn__blog-category">
                                         <h4 class="title-2">₹'  . htmlentities($row['price']) .  '</h4>
                                    
                                </li>
                                            
                                        </ul>
                                    </div>
                                    <h1 class="text-capitalize">' . htmlentities($row['title']) . ' </h1>
                                   
                                    <label><span class="ltn__secondary-color"><i class="flaticon-pin"></i></span> Veenegaon, Khalapur, Raigad</label>
                                    <h4 class="title-2">Description</h4>
                                    <p>' . htmlentities(strip_tags($row['PostDetails'])) . '</p>
                                    <h4 class="title-2">Key Highlight:</h4>  
                                    <div class="property-detail-info-list section-bg-1 clearfix mb-60">                          
                                        <ul>
                                            <li><label>Key Highlight:</label> <span>' . htmlentities($keyhighlightText) . '</span></li>
                                            <li><label>Suitability:</label> <span>' . htmlentities($suitabilityText) . '</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="title-2 mb-10">Property Details:</h4>
                                    <div class="property-details-amenities mb-60">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="ltn__menu-widget">
                                                    <ul>
                                                        <li>
                                                            <label class="checkbox-item">Area: ' . htmlentities($areaText) . '
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="checkbox-item">Location: ' . htmlentities($locationText) . '
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="checkbox-item">Zone: ' . htmlentities($row['zone']) . '
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="checkbox-item">Authority: ' . htmlentities($row['authority']) . '
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <label class="checkbox-item">Approach Road: ' . htmlentities($row['approach_road']) . '
                                                                <input type="checkbox" checked="checked">
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SHOP DETAILS AREA END -->';
    }
} else {
    echo "<div>No Property found.</div>";
}

// Close the database connection
$con->close();
?>
    <!-- SHOP DETAILS AREA END -->
     

 
    
<?php include ('footer.php') ?>