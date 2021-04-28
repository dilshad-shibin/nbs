<div class="news_sidebar">
<h5 class="news_sidbar_title">Recent Post</h5>
<ul>

<?php
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
   
<li>
<div class="news_sidbar_image">
<a href="../newsdetail/<?php echo $row['news_id'];?>">
<img src="../globalpannel/public/images/<?php echo $row['news_image'];?>">    
</a>
</div>
<div class="ns_info">
<span><?php echo $month;?> <?php echo $day;?>, <?php echo $year;?></span>
<div class="news_sidebar_text">
<a href="../newsdetail/<?php echo $row['news_id'];?>"><?php echo $row['news_title'];?></a>
</div>
</div>
</li>

<?php
}
?>  


</ul>  
</div>     