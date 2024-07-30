<?php 
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:index.php');
}

else{

// For adding post  
if(isset($_POST['submit']))
{
    
    $title = $_POST['title'];
    $qualification = $_POST['qualification'];
    $description =$_POST['description'];
    $job_description = $_POST['postdescription'];
    $postedby=$_SESSION['login'];
    
    $image = $_FILES["image"]["name"];

    // Move uploaded image to a directory
    $target_directory = "postimages/";
    $target_file = $target_directory . basename($image);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    
    $pdf = $_FILES["pdf"]["name"];

// Move uploaded PDF to a directory
$target_directory = "pdf_files/";
$target_file = $target_directory . basename($pdf);
move_uploaded_file($_FILES["pdf"]["tmp_name"], $target_file);



    $status=1;
    // Insert data into the database
    $query = "INSERT INTO seo_pages (title,description,image,pdf,Is_Active) VALUES ('$title', '$description', '$image', '$pdf', '$status' )";
     //echo $query; exit;
    if(mysqli_query($con, $query)) {
        $msg = "Data inserted successfully.";
    } else {
        $msg = "Error inserting data: " . mysqli_error($con);
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


      <!--                  <div class="row">-->
						<!--	<div class="col-xs-12">-->
						<!--		<div class="page-title-box">-->
      <!--                              <h4 class="page-title">Add Post </h4>-->
      <!--                              <ol class="breadcrumb p-0 m-0">-->
      <!--                                  <li>-->
      <!--                                      <a href="#">Post</a>-->
      <!--                                  </li>-->
      <!--                                  <li>-->
      <!--                                      <a href="#">Add Post </a>-->
      <!--                                  </li>-->
      <!--                                  <li class="active">-->
      <!--                                      Add Post-->
      <!--                                  </li>-->
      <!--                              </ol>-->
      <!--                              <div class="clearfix"></div>-->
      <!--                          </div>-->
						<!--	</div>-->
						<!--</div>-->
                        <!-- end row -->

<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>


                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="p-6">
                                    <div class="">
<form name="addpost" method="post" enctype="multipart/form-data">
 
<div class="form-group m-b-20">
<label for="exampleInputEmail1">Title</label>
<input type="text" class="form-control" id="posttitle" name="title" placeholder="Enter designation" required>
</div>






<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Description</b></h4>
<textarea class="summernote" name="description" required></textarea>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
 <div class="card-box">
<h4 class="m-b-30 m-t-0 header-title"><b>Feature Image</b></h4>
<input type="file" class="form-control" id="postimage" name="image"  required>
</div>
</div>
</div>

<div class="form-group m-b-20">
     <div class="card-box">
    <label for="exampleInputFile">Upload PDF</label>
    <input type="file" class="form-control-file" id="exampleInputFile" name="pdf" accept=".pdf" >
    <!-- Accept attribute ensures only PDF files can be selected -->
</div>
</div>


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
