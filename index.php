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
<?php include 'header.php'; ?>  

<section class="bannersec">
<div class="container">
<div class="row bnr_row">
<div class="col-xl-5 col-lg-6 col-md-9">
<div class="bnr_cont">
<h3>Moulding Tomorrow’s Leaders Today </h3>
<ul>
<li>
<div >
<h5>Ranking</h5>
<h6>5<sup>th</sup> Best B-Schools in Kerala</h6>    
</div>
</li>    
<li class="bnr_ngilogo">
<div class=""><img src="images/ngi.svg"></div>    
</li>    
</ul>
</div>
</div>
</div>
</div>
<div class="news_scrol_outer">
<div class="container">
<div class="news_wraper">
<div class="newsscr_title">Whats New</div>
<div class="n_scr_div">

<?php
include 'configuration/dbconnect.php';
$findsql = mysqli_query($connect, 'SELECT * FROM `scrolnews`');
$rowsno = mysqli_fetch_array($findsql);
if ($rowsno == 0) {
    ?>


<div class="news-scrollbar">
                            <ul>
 <li><a target="_blank" href="http://jawaharlalcolleges.com/blog/?p=1003"><span class="newsblink">New</span>STUDENTS (2021 passing out batch) PLACED IN CHEGG # JCET</a>  </li>
 <li> <a target="_blank" href="http://jawaharlalcolleges.com/blog/?p=995">Extension of last date for AICTEs Pragati and Saksham Scholarship Scheme</a>
                                </li>
<li><a target="_blank" href="http://jawaharlalcolleges.com/blog/?p=979">EXTENSION ON ONLINE APPLICATION OF PG SCHOLARSHIP SCHEMES SUBMISSION</a>
                                </li>
<li> <a target="_blank" href="http://jawaharlalcolleges.com/blog/?p=1003"><span class="newsblink">New</span>STUDENTS (2021 passing out batch) PLACED IN CHEGG # JCET</a>  </li>
<li> <a target="_blank" href="http://jawaharlalcolleges.com/blog/?p=995">Extension of last date for AICTEs Pragati and Saksham Scholarship Scheme</a>
  </li>
<li> <a target="_blank" href="http://jawaharlalcolleges.com/blog/?p=979">EXTENSION ON ONLINE APPLICATION OF PG SCHOLARSHIP SCHEMES SUBMISSION</a>
</li>

                            </ul>
                        </div>


<?php
} else {
        $datasql = mysqli_query($connect, 'SELECT * FROM `scrolnews` ORDER BY `scrolnews_id` DESC LIMIT 10'); ?>


<div class="news-scrollbar">
<ul>

<?php
$i = 1;
        while ($row = mysqli_fetch_array($datasql)) {
            ?>
<li>
<a href="<?php echo $row['scrolnews_url']; ?>" target="_blank"><?php if ($i == '1') {?> <span class="newsblink">New</span> <?php } ?> <?php echo $row['scrolnews_name']; ?></a>
</li>
<?php
++$i;
        } ?>

</ul>
</div>


<?php
    }
?>

</div>
</div>  
</div>    
</div>
</section>
    
<section class="home_introsec">
<div class="container">
<h1 class="com_title">Welcome to Nehru B-Schools</h1>
<div class="row">
<div class="col-lg-4">
<div class="intro_box">
<h4>Why NBS</h4> 
<p>Nehru B-Schools is a unique and special institution filled with vibrant, dynamic and energetic individuals who are focused to succeed and grow in their endeavours.</p>
</div>    
</div>
<div class="col-lg-4">
<div class="intro_box">
<h4>Vision & Mission </h4> 
<p>To inculcate the right attitude, managerial, entrepreneurial skills and knowledge in our students through quality and excellence in teaching and through innovative management practices. </p>
</div>    
</div>
<div class="col-lg-4">
<div class="intro_box campus_view_box">
<div >
<div class="cview_icon fem"></div> 
<h5>Virtual <br>
campus tour</h5>
</div>
<a data-fancybox="" href="https://youtu.be/Eaxcr_L6FAQ">view</a>
</div>    
</div>
</div>
<div class="intro_more"><a class="theme_btn" href="about-nbs.php">Know More</a></div>
</div> 
</section>
    
<section class="hm_programme">
<div class="container">
<div class="row m-0">
<div class="col-lg-8 p-0">
<div class="pgm_left">
<div class="pgm_title">
<h3 class="com_title">THE PROGRAMME</h3>
<span>MBA</span>
</div>
<div class="hm_course_cate">
<h5>Aspirants Can Specialize In Areas Such As :</h5>    
<div class="row">
<div class="col-lg-3 col-sm-6">
<div class="hm_course_box">
<div >
<div class="hm_pm_icon pgm_marketing"></div>
<h4>MARKETING</h4>    
</div>
<a href="marketing.php">more</a>
</div>    
</div>
    
    <div class="col-lg-3 col-sm-6">
<div class="hm_course_box">
<div >
<div class="hm_pm_icon pgm_hr"></div>
<h4>HR</h4>    
</div>
<a href="hr.php">more</a>
</div>    
</div>
    
    <div class="col-lg-3 col-sm-6">
<div class="hm_course_box">
<div >
<div class="hm_pm_icon pgm_operations"></div>
<h4>OPERATIONS</h4>    
</div>
<a href="operations.php">more</a>
</div>    
</div>
    
    <div class="col-lg-3 col-sm-6">
<div class="hm_course_box">
<div >
<div class="hm_pm_icon pgm_finance"></div>
<h4>FINANCE</h4>    
</div>
<a href="finance.php">more</a>
</div>    
</div>
    
    <div class="col-lg-3 col-sm-6">
<div class="hm_course_box">
<div >
<div class="hm_pm_icon pgm_info_system"></div>
<h4>INFORMATION SYSTEMS</h4>    
</div>
<a href="it.php">more</a>
</div>    
</div>
    
    <div class="col-lg-3 col-sm-6">
<div class="hm_course_box pgm_apply">
<div >
<h4>Apply <br>Online</h4>    
</div>
<a href="apply-online.php">more</a>
</div>    
</div>
    
</div>
</div>
<a href="programms.php" class="pgm_morelink">View More <i class="fas fa-caret-right"></i></a>
</div>
</div> 
<div class="col-lg-4 p-0">
<div class="pgm_right_img">
<div class="comn_img_block">
<img src="images/mgt.jpg">    
</div>
</div>    
</div>
</div>   
</div>    
</section>

    
<section class="home_testimonials">
<div class="container">
<h3 class="com_title">What Our Students Say</h3>
<div class="row">
<div class="col-lg-6">
<div class="tes_slider">
<div class="slick_customstyle" >
<div class="" id="testimonial-slider">

<div class="item ">
<div class="tes_box_outer ">
<div class="tes_box ">
<div class="tes_auther_imgblock">
<div class="" ><img src="images/user.png"></div>
</div>
<div class="qute_icon"></div>
<p>Experience at NSM-Campus is good. Many programmes held at NSM had helped to develop the personality which had helped in professional life. NSMs had allowed attending a lot of management meet outside which had helped them to face the world outside. Faculty were good </p>
    
<div class="tes_auther"> 
<div class="tes_auther_title">
<h5>Mr. Mohammed Shajeeh K P</h5>
<span>Batch 2014-16  </span>
</div>    
</div>  
    
</div>            
</div>            
</div>
    
<div class="item ">
<div class="tes_box_outer ">
<div class="tes_box ">
<div class="tes_auther_imgblock">
<div class="" ><img src="images/user.png"></div>
</div>
<div class="qute_icon"></div>
<p>Got campus placement in TVS. At present working in Construction Company as Relationship Manager Experience at NSM-Campus is good. Faculty are supportive.Teamwork was learnt from NSM which helped professionally to work in team </p>
<div class="tes_auther"> 
<div class="tes_auther_title">
<h5>Mr. Abhinav Anand</h5>
<span>Batch 2014-16  </span>
</div>    
</div>   
    
</div>            
</div>            
</div>
    
</div>
</div> 
</div>
</div>   
<div class="col-lg-6">
<div class="tes_right_sec">
<div class="slick_customstyle" >
<div class="" id="tes-video-slider">
<div class="item ">
<div class="tes_item">
<a data-fancybox="images" href="https://youtu.be/Eaxcr_L6FAQ"><i class="fas fa-play"></i></a>
<div class="comn_img_block">
<img src="images/tes-video/1.jpg"> 
</div> 
</div>      
</div>
 <div class="item ">
<div class="tes_item">
<a data-fancybox="images" href="https://youtu.be/Eaxcr_L6FAQ" class=" "><i class="fas fa-play"></i></a>
<div class="comn_img_block">
<img src="images/tes-video/1.jpg"> 
</div> 
</div>      
</div>
         
</div>
</div>
<div class="custom_nav  navid1 ">
<i class="icofont-thin-left prev slick-arrow" style=""></i>
<i class="icofont-thin-right next slick-arrow" style=""></i>
</div>
</div>
</div>
</div>
</div>
</section>
    
    
<section class="hm_recrutersec">
<div class="container">
<h3 class="com_title">Our Recruiters</h3>
<div class="hm_re_row">
<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/1.png">
</div>
</div> 
<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/2.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/3.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/4.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/5.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/6.png">
</div>
</div>  

<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/7.png">
</div>
</div> 
<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/8.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/9.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/10.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/11.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/12.png">
</div>
</div>  

<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/13.png">
</div>
</div> 
<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/14.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/15.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/16.png">
</div>
</div> 
    <div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/17.png">
</div>
</div> 
<div class="rec_col">
<div class="mr_logos">
<img src="images/recruiters/18.png">
</div>
</div> 
    
</div> 
</div>    
</section>


<?php
include 'configuration/dbconnect.php';
$findsql = mysqli_query($connect, 'SELECT * FROM `news`');
$rowsno = mysqli_num_rows($findsql);
if ($rowsno == 0) {
    ?>
    

<section class="hm_news">
<div class="container">
<div class="row">
<div class="col-12"><h3 class="com_title">News & Events</h3></div>
<div class="col-lg-6">
<div class="hm_newsbox">
<div class="hm_news_cont">
<div class="news_date">JANUARY 16, 2021</div>
<h4><a href="news.php" target="_blank">Lorem Ipsum is simply dummy text of 
the printing.</a> </h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
</div>
</div>
</div>
<div class="col-lg-6">
<div class="hm_newsbox">
<div class="hm_news_cont">
<div class="news_date">JANUARY 9, 2021</div>
<h4 class=""><a href="news.php" target="_blank">Lorem Ipsum is simply dummy text.</a> </h4>
</div>
</div>
<div class="hm_newsbox">
<div class="hm_news_cont">
<div class="news_date">DECEMBER 12, 2020</div>
<h4><a href="news.php" target="_blank">Lorem Ipsum is simply dummy text.</a> </h4>
</div>
</div>
</div>
</div>
</div>
</section>



<?php
} else {
        ?>


<section class="hm_news">
<div class="container">
<div class="row">
<div class="col-12"><h3 class="com_title">News & Events</h3></div>
<div class="col-lg-6">
<?php
$datasql = mysqli_query($connect, 'SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 1');
        while ($row = mysqli_fetch_array($datasql)) {
            ?>
<?php
$newdate = $row['news_date'];
            $month = date('F', strtotime($newdate));
            $day = date('d', strtotime($newdate));
            $year = date('Y', strtotime($newdate)); ?>
<div class="hm_newsbox">
<div class="hm_news_cont">
<div class="news_date"><?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?></div>
<h4><a href="news/<?php echo $row['news_id']; ?>" target="_blank"><?php echo $row['news_title']; ?></a> </h4>
<p><?php echo $row['news_description']; ?></p>
</div>
</div>
<?php
        } ?>
</div>
<div class="col-lg-6">
<?php
$datasql = mysqli_query($connect, 'SELECT * FROM `news` ORDER BY `news_id` DESC LIMIT 1, 2');
        while ($row = mysqli_fetch_array($datasql)) {
            ?>
<?php
$newdate = $row['news_date'];
            $month = date('F', strtotime($newdate));
            $day = date('d', strtotime($newdate));
            $year = date('Y', strtotime($newdate)); ?>
<div class="hm_newsbox">
<div class="hm_news_cont">
<div class="news_date"><?php echo $month; ?> <?php echo $day; ?>, <?php echo $year; ?></div>
<h4 class=""><a href="news/<?php echo $row['news_id']; ?>" target="_blank"><?php echo $row['news_title']; ?></a> </h4>
</div>
</div>
<?php
        } ?>
</div>
</div>
</div>
</section>



<?php
    }
?>


    

<?php include 'footer-contact-links.php'; ?>  
    
<?php include 'footer.php'; ?>  
    
 
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