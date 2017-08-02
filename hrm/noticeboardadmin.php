<?php
session_start();
include('common/db.php');
include('common/logedin.php');

if (isset($_POST['username']) && isset($_POST['password'])){
        $notice = $_POST['notice']; 
        $noticedate = $_POST['noticedate']; 
        $noticesubject = $_POST['noticesubject'];              
        $query = "INSERT INTO `noticeboard` (noticedate,notice,noticesubject) VALUES ('$noticedate',$notice','$noticesubject')";                 
        $result = mysqli_query($connect, $query);
       
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notice Board</title>    
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'>
    <link rel="shortcut icon" href="img/xlogo2.ico.pagespeed.ic.qmwUApvH50.html"/>
    <!--start global css-->
    <link type="text/css" rel="stylesheet" href="css/A.app.css%2bcustom.css%2bpages%2c%2c_light_sidebar.css%2cMcc.lp_uw3dA9e.css.pagespeed.cf.-QxG9heMNB.css"/>
    <!-- end of global css -->   
    
</head>

<body>
<div class="preloader">
    <div class="preloader_img">
        <img src="img/loader.gif.pagespeed.ce.hzUa_66CCA.gif" class="pre_img" alt="loading...">
    </div>
</div>
<?php include('common/header.php'); ?>

<?php include('common/navbar.php'); ?>
    <div class="right-aside view-port-height">
    

    <!-- Main content -->
    <form name="reg_form" id="" class="notice_form" action="noticeboardadmin.php" method="post" autocomplete="off"> 
    <div class="content">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-block">
                        <h5 class="heading" > Notice Board</h5>
                        <?php
                             if(isset($result))
                                    {
                                       echo '<div id="text" class="alert alert-success">You  Successfully 
                                       Add Notice!!</div>';
                                    }
                        ?>
                        <div class="m-t-35">  
                         <div class="form-group row">
                                <label for="con_password3" class="col-form-label col-sm-3 text-danger">
                                   Date 
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-calendar text-info"></i>
                                                        </span>
                                        <input type="date" style="width: 100%;" id="date" name="noticedate" placeholder="">
                                    </div>
                                </div>
                            </div>                      
                             <div class="form-group row">
                                <label for="first_name3"  style=" font-size: 15px;" class="col-form-label col-sm-3 text-success">
                                    Notice Subject
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-pencil text-success"></i>
                                                       </span>
                                      <input type="text" class="form-control " id="noticesubject" name="noticesubject" placeholder="Write your Notice Subject"> 
                                    </div>
                                </div>
                            </div> 
                             <div class="form-group row">
                                <label for="first_name3" style="color:#0083FE; font-size: 20px;" class="col-form-label col-sm-3">
                                    Write Your Notice
                                </label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                            <i class="ti-blackboard text-primary"></i>
                                                        </span>
                                                        <textarea placeholder="Write Your Notice Here" class="form-control" rows="5" id="textarea" name="notice" ></textarea>
                                      
                                    </div>
                                </div>
                            </div>                                                               
                            <div class="form-group row">
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary layout_btn_prevent"> Submit</button>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         
          

    </div>    
</div>
</div>
</form>
      
    </div>
</div>
<footer>
    <div class="bg-white container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer_content"> Copyright ©2017 made by <span class="text text-info">Sohidul Islam</span></div>
            </div>
        </div>
    </div>

</footer>
<script type="text/javascript" src="js/app.js.pagespeed.jm.PVZQb7x2om.js"></script>
<!--end global js -->
<script type="text/javascript" src="js/custom.js.pagespeed.jm.d52yjq59xU.js"></script>



</body>
</html>

