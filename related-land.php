
<?php

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $pid = $_GET['id'];
} else {
    $pid = 0; // Default value or handle error
}

$query = mysqli_query($con, "SELECT tblposts.id as postid, tblposts.PostTitle as title,
 tblcategory.CategoryName as category, tblsubcategory.Subcategory as subcategory,
  tblposts.PostImage as PostImage, tblposts.PostDetails as PostDetails, 
  tblposts.Location as Location, tblposts.Area as Area, tblposts.KeyHighlight as KeyHighlight,
   tblposts.Suitability as Suitability, tblposts.transaction as transaction, tblposts.zone as zone,
    tblposts.authority as authority, tblposts.approach_road as approach_road, tblposts.PostUrl as PostUrl 
    FROM tblposts LEFT JOIN tblcategory ON tblcategory.id=tblposts.CategoryId LEFT JOIN tblsubcategory
     ON tblsubcategory.SubCategoryId=tblposts.SubCategoryId WHERE tblposts.CategoryId=9 AND tblposts.Is_Active=1");

if (!$query) {
    die('Query failed: ' . mysqli_error($con));
}

$rowcount = mysqli_num_rows($query);
if ($rowcount == 0) {
    echo "<h3>No record found</h3>";
} else {
    while ($row = mysqli_fetch_array($query)) {
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
                    <a href="land-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                    <?php 
// Check if PostImage is stored as a JSON array or comma-separated string
$images = json_decode($row['PostImage'], true);
if (is_array($images) && count($images) > 0) {
    // Print the first image from the array
    echo '<img src="admin/property/' . htmlentities($images[0]) . '" alt="Image" > <br>';
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
                        <a href="land-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                            <?php echo htmlentities($row['title']); ?>
                        </a>
                    </h2>
                    <div class="product-img-location">
                        <ul>
                            <li>
                                <a href="land-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                                   
                                    <i class="flaticon-pin"></i> <?php echo htmlentities($locationText); ?>
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
                                <a href="land-detail.php?pid=<?php echo htmlentities($row['postid']); ?>" title="Product Details">
                                    <i class="flaticon-add"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                 


                </div>
                <a href="land-detail.php?pid=<?php echo htmlentities($row['postid']); ?>">
                <div class="product-info-bottom">
                                                <div class="product-price">
                                                    <span>$34,900</span>
                                                </div>
                                                <span  class="product-price">View Details</span>
                                            </div>
</a>
            </div>
        </div>

        <?php 
    }
}
?>