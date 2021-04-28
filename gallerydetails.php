<!doctype html>
<html>

<head>
    <meta charset="utf-8">
<title>Nehru B-Schools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../images/fav.png">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/fontawesome-all.css">
    <link rel="stylesheet" href="../css/icofont.css">
    <link rel="stylesheet" href="../css/linea-arrows.css">
    <link rel="stylesheet" href="../css/custom.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link href="../css/panelmenu.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/slick.css">
    <link href="../css/newsscroll.css" rel="stylesheet">
    <link href="../css/jquery.fancybox.css" rel="stylesheet"> 
</head>

<body> 

<div class="body_wraper">
<?php include 'header1.php'?>  
    

<section class="ga_details bg_light">
<div class="container">
<div class="row">
<div class="col-12">
<div class="albam_backlink"><a href="../gallery.php"><i class="fas fa-long-arrow-alt-left"></i> Gallery</a> </div>   
</div>

<?php
include("configuration/dbconnect.php");
$id=mysqli_real_escape_string($connect, $_GET['id']);
$datasql = mysqli_query($connect, "SELECT * FROM `gallery_album` WHERE `gallery_id` = '$id'");
while($row =mysqli_fetch_array($datasql)){
?>

<div class="col-lg-4 col-6">
<div class="img_albumbox">
<a class="comn_img_block" data-fancybox="images" href="../globalpannel/public/images/<?php echo $row['album_image'];?>">
<img src="../globalpannel/public/images/<?php echo $row['album_image'];?>"> </a>
</div>
</div>

<?php
}
?>
 

</div>
</div>
</section> 
    
<?php include 'footer1.php'?>  
    
 
</div> <!-- bodywrapper -->
    


    <script src="../js/jquery-1.12.4.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/stickynew.js"></script>
    <script src="../js/panelmenu.js"></script>
    <script src="../js/panel-custom.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/totop.js"></script>
    <script src="../js/slick.min.js"></script>	
    <script src="../js/jquery.fancybox.js"></script>
    <script src="../js/newsscroll.js"></script>
    <script>
        $(function () {
            $('.news-scrollbar').jConveyorTicker({
                reverse_elm: true
            });
        });
    </script>
    <script src="../js/custom.js"></script>

    
</body>

</html>