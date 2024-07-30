<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}
else{

if($_GET['action']='del')
{
$postid=intval($_GET['pid']);
$query=mysqli_query($con,"update tblposts set Is_Active=0 where id='$postid'");
if($query)
{
$msg="Post deleted ";
}
else{
$error="Something went wrong . Please try again.";    
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
        <title>Hotscape Land | Manage Property</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="../plugins/morris/morris.css">

        <!-- jvectormap -->
        <link href="../plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="../plugins/switchery/switchery.min.css">

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        <style>
  
  .col1 {
            width: 30%;
        }
        .col2 {
            width: 50%;
        }
        .col3 {
            width: 20%;
        }

        </style>
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include('includes/topheader.php');?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>


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
                                    <h4 class="page-title">Manage Posts </h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Posts</a>
                                        </li>
                                        <li class="active">
                                            Manage Post  
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->


                        <div class="m-b-30">
<a href="add-property.php">
<button id="addToTable" class="btn btn-success waves-effect waves-light">Add <i class="mdi mdi-plus-circle-outline" ></i></button>
</a>
 </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                         

                                    <div class="table-responsive">
 
                                    
<table class="table  m-0" border="1">
<thead>
<tr>
    <th>Title</th>
    <th>Category</th>
    <th>Location</th>
    <th>Area</th>
    <th>Key Highlights</th>
    <th>Suitability</th>
    <th>Transaction</th>
    <th>Zone</th>
    <th>Authority</th>
    <th>Approach Road</th>
    <th>Image</th>
    <th>Description</th>
    <th>Action</th>
</tr>
</thead>
<tbody>

<?php
$query=mysqli_query($con,"select tblposts.id as postid, tblposts.PostTitle as title, tblcategory.CategoryName as category, tblsubcategory.Subcategory as subcategory, tblposts.PostImage as PostImage, tblposts.PostDetails as PostDetails, tblposts.Location as Location, tblposts.Area as Area, tblposts.KeyHighlight as KeyHighlight, tblposts.Suitability as Suitability, tblposts.transaction as transaction, tblposts.zone as zone, tblposts.authority as authority, tblposts.approach_road as approach_road from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join tblsubcategory on tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
?>
<tr>
    <td colspan="13" align="center"><h3 style="color:red">No record found</h3></td>
</tr>
<?php 
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

<tr>
    <td><b><?php echo htmlentities($row['title']); ?></b></td>
    <td><?php echo htmlentities($row['category']); ?></td>
    <td><?php echo htmlentities($locationText); ?></td>
    <td><?php echo htmlentities($areaText); ?></td>
    <td><?php echo htmlentities($keyhighlightText); ?></td>
    <td><?php echo htmlentities($suitabilityText); ?></td>
    <td><?php echo htmlentities($row['transaction']); ?></td>
    <td><?php echo htmlentities($row['zone']); ?></td>
    <td><?php echo htmlentities($row['authority']); ?></td>
    <td><?php echo htmlentities($row['approach_road']); ?></td>
    <td>
        <?php 
        // Check if PostImage is stored as a JSON array or comma-separated string
        $images = json_decode($row['PostImage'], true);
        if (is_array($images)) {
            foreach ($images as $image) {
                echo '<img src="property/' . htmlentities($image) . '" alt="Image" width="100" height="80" style="margin-right: 5px;"> <br>';
            }
        } else {
            // Fallback if images are stored as a single string
            $imageArray = explode(',', $row['PostImage']);
            foreach ($imageArray as $image) {
                echo '<img src="property/' . htmlentities(trim($image)) . '" alt="Image" width="100" height="80" style="margin-right: 5px;">';
            }
        }
        ?>
    </td>
    <td><div class="text"><?php echo $row['PostDetails']; ?></div></td>
    <td>
        <a href="edit-post.php?pid=<?php echo htmlentities($row['postid']); ?>"><i class="fa fa-pencil" style="color: #29b6f6;"></i></a> 
        &nbsp;<a href="manage-property.php?pid=<?php echo htmlentities($row['postid']); ?>&&action=del" onclick="return confirm('Do you really want to delete ?')"> <i class="fa fa-trash-o" style="color: #f05050"></i></a>
    </td>
</tr>
<?php 
    }
}
?>
</tbody>
</table>

<?php } ?>
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



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
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- CounterUp  -->
        <script src="../plugins/waypoints/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>

        <!--Morris Chart-->
		<script src="../plugins/morris/morris.min.js"></script>
		<script src="../plugins/raphael/raphael-min.js"></script>

        <!-- Load page level scripts-->
        <script src="../plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../plugins/jvectormap/gdp-data.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-us-aea-en.js"></script>


        <!-- Dashboard Init js -->
		<script src="assets/pages/jquery.blog-dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
