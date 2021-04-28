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
    

<section>
<div class="news_detailpage ">
<div class="container">
<div class="row">

<?php
include("configuration/dbconnect.php");
$id=mysqli_real_escape_string($connect, $_GET['id']);
$datasql = mysqli_query($connect, "SELECT * FROM `news` WHERE `news_id` = '$id'");
while($row = mysqli_fetch_array($datasql)){
?>

<div class="col-lg-8">                               
<div class="news_detailbox">
<div class="news_detai_img">
<img src="../globalpannel/public/images/<?php echo $row['news_image'];?>">
</div>
<?php
$newdate = $row['news_date'];
$month = date("F",strtotime($newdate));
$day = date("d",strtotime($newdate));
$year = date("Y",strtotime($newdate));
?>
 <div class="news_detail_content">
<h4><span><?php echo $month;?> <?php echo $day;?>, <?php echo $year;?></span> <?php echo $row['news_title'];?></h4>
 <p><?php echo $row['news_description'];?> </p>

<?php
if(!empty($row['news_uploadpdf'])){
?>
 <p>Please go through the PDF,</p> 
<a class="link_to_pdf" href="../globalpannel/public/images/<?php echo $row['news_uploadpdf'];?>" target="_blank"><?php echo $row['news_uploadpdf'];?></a>

<?php
}
?>

<?php
if(!empty($row['news_url'])){
?>
 <p>To know more please click below link,</p> 
<a class="link_to_pdf" href="<?php echo $row['news_url'];?>" target="_blank"><?php echo $row['news_url'];?></a>

<?php
}
?>                           

                                    </div>
                                </div>


                            </div>
<?php
}
?>

<div class="col-lg-4 ">
<?php include 'news-sidebar1.php'?>  

</div>       
    
    <div class="col-12"><div class="allnews_btn">
<a href="../news.php">All News & Events</a>
</div> </div>
</div>
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