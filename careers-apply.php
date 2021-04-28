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
<h2>Careers</h2>
</div>
</div> 
</div>
</div>
</section>
    

<section>
        <div class="careers_apply">
            <div class="container">
                <div class="row">
                    <div class=" col-lg-8">
                        <div class=" career_left">
                            <div class="career_left_title">

                                <h1>Lab Instructor</h1>
                                <p>Urgently Required!!! Workshop / Lab Instructor Dept: MECHANICAL/ ELECTRICAL / MECHATRONICS/ CIVIL QUALIFICATION</p>
                                <ul class="exp_location">
                                    <li><i class="fas fa-briefcase"></i> 5+ Years </li>
                                    <li><i class="fas fa-map-marker-alt"></i> Calicut </li>
                                </ul>
                                <div class="requirement_bult">
                                    <h4>Requirements </h4>
                                    <p>MECHANICAL</p>
                                    <p>ELECTRICAL</p>
                                    <p>MECHATRONICS</p>
                                </div>


                            </div>

                            <div class="career_form ">
                                <form class="form_sec" name="form1" method="post" action="#">
                                    <div class="row">
                                            <div class="col-md-12">
                                                    <h1>Apply Now</h1>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input_row">
                                                        <p>Name</p>
                                                        <input type="text" placeholder="" type="text" name="name" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input_row">
                                                        <p>Phone</p>
                                                        <input type="text" placeholder="" type="number" name="phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="input_row">
                                                        <p>Email ID</p>
                                                        <input type="text" placeholder="" type="email" name="email" required>
                                                    </div>
                                                </div>
            
                                                <div class="col-md-6">
                                                    <div class="input_row">
                                                        <p>Resume</p>
                                                        <input type="file" id="real-file" hidden="hidden" name="cv" required />
                                                        <button type="button" id="custom-button">CHOOSE A FILE</button>
                                                        <span id="custom-text">No file chosen, yet.</span>
                                                    </div>
                                                </div>
                                                      
                                                <div class="col-md-12">
                                                    <div class="input_row"><input class="submit_" type="submit" value="Submit" name="submit">
                                                    </div>
                                                </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    
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

    <script>
        const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");
    
    customBtn.addEventListener("click", function() {
      realFileBtn.click();
    });
    
    realFileBtn.addEventListener("change", function() {
      if (realFileBtn.value) {
        customTxt.innerHTML = realFileBtn.value.match(
          /[\/\\]([\w\d\s\.\-\(\)]+)$/
        )[1];
      } else {
        customTxt.innerHTML = "No file chosen, yet.";
      }
    });
    
        </script>

    
</body>

</html>