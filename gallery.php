<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<title>Nehru B-Schools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/linea-arrows.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/animate.css">
    <link href="css/panelmenu.css" rel="stylesheet">
    <link rel="stylesheet" href="css/slick.css">
    <link href="css/newsscroll.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet"> 
</head>

<body> 

<div class="body_wraper">
<?php include 'header.php'?>  
    
<section class="inbnr comn_inbnr" style="background:url(images/inbnr.jpg) no-repeat center; background-size:cover">
<div class="container">
<div class="row">
<div class="col-lg-6">
<div class="inbnr_box">
<h2>Gallery </h2>
</div>
</div> 
</div>
</div>
</section>
    

<section class="gallery_landing bg_light">
<div class="container">
<div class="row">

<?php
include("configuration/dbconnect.php");
$findsql = mysqli_query($connect, "SELECT * FROM `gallery`");
while($row = mysqli_fetch_array($findsql)){
?>
<div class="col-lg-4 col-md-6">
<div class="image-hover effect-1">
<figure>
<img alt="" src="globalpannel/public/images/<?php echo $row['gallery_cover'];?>">
<figcaption>
<div>
<h3><?php echo $row['gallery_name'];?></h3>
<h5>Explore</h5>
</div>
<?php
$gallery_id = $row['gallery_id'];
$datasql = mysqli_query($connect, "SELECT * FROM `gallery_album` WHERE `gallery_id` = '$gallery_id'");
$nofrows = mysqli_num_rows($datasql);
if($nofrows==0){
?>
<a href="#">View more</a>
<?php
} else {
?>
<a href="gallerydetails/<?php echo $gallery_id;?>">View more</a>
<?php
}
?>
</figcaption>
</figure>
</div>
</div>
<?php
}
?>

      
</div>
</div>
</section>
<?php include 'footer.php'?>  
    
 
</div> <!-- bodywrapper -->
    


    <script src="js/jquery-1.12.4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/stickynew.js"></script>
    <script src="js/panelmenu.js"></script>
    <script src="js/panel-custom.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/totop.js"></script>
    <script src="js/slick.min.js"></script>	
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/newsscroll.js"></script>
    <script>
        $(function () {
            $('.news-scrollbar').jConveyorTicker({
                reverse_elm: true
            });
        });
    </script>
    <script src="js/custom.js"></script>

    
</body>

</html>