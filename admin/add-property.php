<?php
session_start();
include('includes/config.php');
error_reporting(0);

if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['submit'])) {
        $posttitle = $_POST['posttitle'];
        $location = $_POST['location'];
        $area = $_POST['area'];
        $keyhighlight = $_POST['keyhighlight'];
        $suitability = $_POST['suitability'];
        $transaction = $_POST['transaction'];
        $zone = $_POST['zone'];
        $authority = $_POST['authority'];
        $approach_road = $_POST['approach_road'];
        $price = $_POST['price'];
        $land_type = $_POST['land_type']; // New field

        $catid = $_POST['category'];
        $postdetails = $_POST['postdescription'];
        $postedby = $_SESSION['login'];

        // Prepare URL slug
        $arr = explode(" ", $posttitle);
        $url = implode("-", $arr);

        // Process feature images
        $imageFiles = $_FILES["postimage"];
        $imagePaths = [];

        foreach ($imageFiles['name'] as $key => $image) {
            if ($image) { // Check if there is an actual file uploaded
                $imgfile = $image;
                $extension = substr($imgfile, strlen($imgfile) - 4, strlen($imgfile));
                $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");

                if (!in_array($extension, $allowed_extensions)) {
                    echo "<script>alert('Invalid format. Only jpg / jpeg / png / gif format allowed');</script>";
                } else {
                    $imgnewfile = $imgfile . $extension;
                    move_uploaded_file($imageFiles["tmp_name"][$key], "property/" . $imgnewfile);
                    $imagePaths[] = $imgnewfile;
                }
            }
        }

        // Convert arrays to JSON
        $locationJson = json_encode($location);
        $areaJson = json_encode($area);
        $keyhighlightJson = json_encode($keyhighlight);
        $suitabilityJson = json_encode($suitability);
        $imagesJson = json_encode($imagePaths);

        $status = 1;
        $query = mysqli_prepare($con, "INSERT INTO tblposts (PostTitle, CategoryId, PostDetails, PostUrl, Is_Active, PostImage, postedBy, Location, Area, KeyHighlight, Suitability, transaction, zone, authority, approach_road, Price, land_type) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if ($query) {
            // Bind parameters
            mysqli_stmt_bind_param($query, "sissssssssssssssss", $posttitle, $catid, $postdetails, $url, $status, $imagesJson, $postedby, $locationJson, $areaJson, $keyhighlightJson, $suitabilityJson, $transaction, $zone, $authority, $approach_road, $price, $land_type);

            // Execute query
            if (mysqli_stmt_execute($query)) {
                $msg = "Post successfully added";
            } else {
                $error = "Something went wrong: " . mysqli_error($con);
            }
            mysqli_stmt_close($query);
        } else {
            $error = "Prepare statement failed: " . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Hotscape Land | Add Post</title>

        <!-- Summernote css -->
        <link href="plugins/summernote/summernote.css" rel="stylesheet" />

        <!-- Select2 -->
        <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

        <!-- Jquery filer css -->
        <link href="plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
 <script>
function getSubCat(val) {
  $.ajax({
  type: "POST",
  url: "get_subcategory.php",
  data:'catid='+val,
  success: function(data){
    $("#subcategory").html(data);
  }
  });
  }
  </script>
    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>
            <!-- ========== Left Sidebar Start ========== -->
             <?php include('includes/leftsidebar.php');?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Add Property </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Property</a>
                                        </li>
                                        <li>
                                            <a href="#">Add Property </a>
                                        </li>
                                        <li class="active">
                                            Add Property
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
 <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
                      <form name="addpost" method="post" enctype="multipart/form-data">
    <div class="form-group m-b-20">
        <label for="posttitle">Post Title</label>
        <input type="text" class="form-control" id="posttitle" name="posttitle" placeholder="Enter Title" required>
    </div>

    <div class="form-group m-b-20">
        <label for="category">Select Property Type</label>
        <select class="form-control" name="category" id="category" required>
            <option value="">Select Property Type</option>
            <?php
            $ret = mysqli_query($con, "SELECT id, CategoryName FROM tblcategory WHERE Is_Active=1");
            while ($result = mysqli_fetch_array($ret)) {
                echo '<option value="'.htmlentities($result['id']).'">'.htmlentities($result['CategoryName']).'</option>';
            }
            ?>
        </select>
    </div>

    <div class="form-group m-b-20">
        <label for="location">Location</label>
        <input type="text" class="form-control" id="location" name="location[]" placeholder="Enter Location" required>
    </div>

    <div class="form-group m-b-20">
        <label for="area">Area</label>
        <input type="text" class="form-control" id="area" name="area[]" placeholder="Enter Area" required>
    </div>

    <div class="form-group m-b-20">
        <label for="area">Land Type</label>
        <input type="text" class="form-control" id="land_type" name="land_type" placeholder="Enter Land Type" required>
    </div>
  

    <div class="form-group m-b-20">
        <label for="transaction">Transaction Type</label>
        <input type="text" class="form-control" id="transaction" name="transaction" placeholder="Enter Sale, Rent or Other" required>
    </div>

    <div class="form-group m-b-20">
        <label for="zone">Zone</label>
        <input type="text" class="form-control" id="zone" name="zone" placeholder="Enter Zone" required>
    </div>

    <div class="form-group m-b-20">
        <label for="authority">Authority</label>
        <input type="text" class="form-control" id="authority" name="authority" placeholder="Enter Authority" required>
    </div>

    <div class="form-group m-b-20">
        <label for="approach_road">Approach Road</label>
        <input type="text" class="form-control" id="approach_road" name="approach_road" placeholder="Enter Approach Road" required>
    </div>

    <div class="form-group m-b-20">
        <label for="keyhighlight">Key Highlight</label>
        <input type="text" class="form-control" id="keyhighlight" name="keyhighlight[]" placeholder="Enter Key Highlight" required>
    </div>

    <div class="form-group m-b-20">
        <label for="suitability">Suitability</label>
        <input type="text" class="form-control" id="suitability" name="suitability[]" placeholder="Enter Suitability" required>
    </div>

    <div class="form-group m-b-20">
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Enter Price" required>
</div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b></h4>
                <textarea class="summernote" name="postdescription" required></textarea>
            </div>
        </div>
    </div>

    <div class="form-group m-b-20">
        <label for="postimage">Feature Images</label>
        <input type="file" class="form-control" id="postimage" name="postimage[]" multiple required>
        <p>Please upload images in only one format at a time (jpg, jpeg, png, gif).</p>
    </div>
    
    <!-- <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <h4 class="m-b-30 m-t-0 header-title"><b>Feature Video</b></h4>
                <input type="file" class="form-control" id="postvideo" name="postvideo" accept="video/*" required>
            </div>
        </div>
    </div> -->

    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light">Save and Post</button>
    <button type="button" class="btn btn-danger waves-effect waves-light">Discard</button>
</form>
                                    </div>
                                </div> <!-- end p-20 -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

           <?php include('includes/footer.php');?>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="plugins/summernote/summernote.min.js"></script>

    


    </body>
</html>
