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
    

<section>
<div class="news_events_page ">
<div class="container">
<h3 class="com_title ">News & Events </h3>
<div class="row " >


<?php
include("configuration/dbconnect.php");
$findsql = mysqli_query($connect, "SELECT * FROM `news` WHERE `news_category` != '1' AND `news_category` != '2' AND `news_category` != '3' AND `news_category` != '4'");
$rowsno = mysqli_num_rows($findsql);
if($rowsno == 0){
?>


    <div class="col-lg-4 col-sm-6" >
<div class="innews_box">
 <div class="news_imagerow">
 <div class="news_imagebox"> 
<a href="news1.php"><img src="images/news/1.jpg"></a></div>
</div>
<div class="news_titlerow">
<span>JANUARY 16, 2021 </span>
<h5><a href="news1.php" tabindex="0">STUDENTS (2021 passing out batch) PLACED IN CHEGG # JCET</a></h5>
</div>
</div>   
</div> 
    
  <div class="col-lg-4 col-sm-6" >
<div class="innews_box">
 <div class="news_imagerow">
 <div class="news_imagebox"> <a href="news2.php"><img src="images/news/2.jpg"></a></div>
</div>
<div class="news_titlerow">
<span>JANUARY 9, 2021 </span>
<h5><a href="news2.php" tabindex="0">Outstanding IEEE Society SB Chapter Office Bearer Award IEEE Malabar Subsection- Mr. Madhu Krishnan A P</a></h5>
</div>
</div>   
</div> 
    
  <div class="col-lg-4 col-sm-6" >
<div class="innews_box">
 <div class="news_imagerow">
 <div class="news_imagebox"> <a href="news3.php"><img src="images/news/3.jpg"></a></div>
</div>
<div class="news_titlerow">
<span>DECEMBER 12, 2020 </span>
<h5><a href="news3.php" tabindex="0">EXTENSION ON ONLINE APPLICATION OF PG SCHOLARSHIP SCHEMES SUBMISSION</a></h5>
</div>
</div>   
</div>


<?php
} else {
$datasql = mysqli_query($connect, "SELECT * FROM `news` WHERE `news_category` != '1' AND `news_category` != '2' AND `news_category` != '3' AND `news_category` != '4' ORDER BY `news_id` DESC LIMIT 30");
?>
<?php
while($row = mysqli_fetch_array($datasql)){
?>
<?php
$newdate = $row['news_date'];
$month = date("F",strtotime($newdate));
$day = date("d",strtotime($newdate));
$year = date("Y",strtotime($newdate));
?>

<div class="col-lg-4 col-sm-6" >
<div class="innews_box">
<div class="news_imagerow">
<div class="news_imagebox"> <a href="newsdetail/<?php echo $row['news_id'];?>"><img src="globalpannel/public/images/<?php echo $row['news_image'];?>"></a></div>
</div>
<div class="news_titlerow">
<span><?php echo $month;?> <?php echo $day;?>, <?php echo $year;?> </span>
<h5><a href="newsdetail/<?php echo $row['news_id'];?>" tabindex="0"><?php echo $row['news_title'];?></a></h5>
</div>
</div>   
</div>

<?php
}}
?>

     
</div>
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