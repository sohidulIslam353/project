<?php
session_start();
include('common/db.php');
include('common/logedin.php');

$count=count($_POST);
    if($count>0)
    {       
        $email = $_POST['email'];
        $password =$_POST['password'];
        // $password =MD5( $_POST['password']);
        $query = "SELECT * FROM employee WHERE email = '$email' and password = '$password' and active ='1'";
        $result = mysqli_query($connect,$query);        
         $num=mysqli_num_rows($result);
             if ($num==0) {
                  $result = mysqli_query($connect, $query);
                
                 }
                   else {
                    
                    while ($row=mysqli_fetch_assoc($result)) {
                            $_SESSION['username']=$row['username'];
                            $_SESSION['email']=$row['email'];
                            $_SESSION['fathersname']=$row['fathersname'];
                            $_SESSION['mothersname']=$row['mothersname'];
                            $_SESSION['phone']=$row['phone'];
                            $_SESSION['dob']=$row['dob'];
                            $_SESSION['localaddress']=$row['localaddress'];
                            $_SESSION['permanentaddress']=$row['permanentaddress'];
                            $_SESSION['gender']=$row['gender'];
                            $_SESSION['department']=$row['department'];
                          
                            
                    }
                             
                    }
         
    }
?>
                            
<!DOCTYPE html>
<html lang="en">
<head>
    <title>All Employee</title>
    
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
    
<div class="content-header container-fluid bg-white">
    <div class="row">
        <div class="col-sm-4">
            <h4><i class='ti-user'> </i> 
                 <?php 
                    echo ucfirst($_SESSION['username']);
                  ?> </h4>
        </div>
        <div class="col-6 col-sm-4 offset-md-2 col-md-3 offset-xl-4 col-xl-2 header_left_xs_up pt-2">
            <div class="row">
                <div class="col-6">
                    <span>Users</span><br/>
                    <span>250 <i class="ti-angle-up text-primary"> </i></span>
                </div>
                <div class="col-6">
                    <div class="sparkline_users"></div>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 col-md-3 col-xl-2 header_left pt-2">
            <div class="row">
                <div class="col-6">
                    <span>Sales</span><br/>
                    <span>150 <i class="ti-angle-up text-danger"> </i></span>
                </div>
                <div class="col-6">
                    <div class="sparkline_sales"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Main content -->
       
    <!-- Main content -->
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="cover_photo">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="row justify-content-center m-t-30">
                                    <div class="col-lg-3 text-center">
                                        <img src="img/sdsd.jpg" class="img-fluid rounded-circle" alt="admin"/>
                                        <h4 class="text-purple m-t-10"> <?php 
                                                       echo ucfirst($_SESSION['username']);
                                                      ?>                                         
                                     </h4>
                                        <div class="justify-content-center social_icons d-inline-flex">
                                            <div>
                                                <a class="hvr-shutter-out-horizontal facebook" href="#"><i class="ti-facebook" aria-hidden="true"></i></a>
                                            </div>
                                            <div>
                                                <a class="hvr-shutter-out-horizontal facebook" href="#"><i class="ti-linkedin" aria-hidden="true"></i></a>
                                            </div>
                                            <div>
                                                <a class="hvr-shutter-out-horizontal linkedin" href="#"><i class=" ti-google" aria-hidden="true"></i></a>
                                            </div>
                                            <div>
                                                <a class="hvr-shutter-out-horizontal linkedin" href="#"><i class="ti-twitter" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-success br_0 m-0">
                        <div class="card-block p-1">
                            <div class="row">
                                <div class="col-12">
                                    <span class="user_status text-white">
                                    <?php 
                                     echo ucfirst($_SESSION['username']);
                                     ?>

                
                
                                        Well come .
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
               sdsadasdsds
                
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="card">
                    <div class="card-block">
                        <div class="tabs tabs-bordered tabs-icons">
                            <ul class="nav nav-tabs">
                                <li class="nav-item " id="primary2">
                                    <a href="#user_profile" class="nav-link " data-toggle="tab" aria-expanded="true">Profile</a>
                                </li>

                                <li class="nav-item " id="user_activities2">
                                    <a href="#user_activities" class="nav-link active" data-toggle="tab" aria-expanded="false">Activities</a>
                                </li>
                                <li class="nav-item " id="promotions2">
                                    <a href="#user_friends" class="nav-link" data-toggle="tab" aria-expanded="false">Friends</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane reset padding-all fade" id="user_profile">
                                    <div class="row border_bottom">
                                        <div class="col-12 m-t-30">
                                            <h4>Basic Information</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="m-t-30">
                                                <tbody>
                                                <tr>
                                                    <th>User Name </th>
                                                    <td><?php   echo ucfirst($_SESSION['username']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Father's Name </th>
                                                    <td> <?php 
                                                         echo ucfirst($_SESSION['fathersname']);
                                                         ?>                                         
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Mother's Name </th>
                                                    <td><?php   echo ucfirst($_SESSION['mothersname']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Date of Birth </th>
                                                    <td><?php   echo ucfirst($_SESSION['dob']); ?></td>

                                                </tr>
                                                <tr>
                                                    <th>Gender</th>
                                                    <td><?php   echo ($_SESSION['gender'] == 1) ? 'Male' : 'Female' ; ?></td>

                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row border_bottom">
                                        <div class="col-12 m-t-30">
                                            <h4>Contact Information</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <table class="m-t-30">
                                                <tbody>
                                                <tr>
                                                    <th>Email </th>
                                                    <td><?php   echo ucfirst($_SESSION['email']); ?></td>
                                                </tr>
                                                <tr>
                                                    <th>Facebook</th>
                                                    <td>facebook.johndeo</td>
                                                </tr>
                                                <tr>
                                                    <th>Twitter</th>
                                                    <td>twitter.johndeo</td>
                                                </tr>
                                                <tr>
                                                    <th>Linkedin</th>
                                                    <td>linkedin.johndeo</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone Number</th>
                                                    <td>(999)999-9999</td>
                                                </tr>
                                                <tr>
                                                    <th>City </th>
                                                    <td>Sidney</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>Canada</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane reset padding-all fade active show" id="user_activities">
                                    

                                </div>
                                <div class="tab-pane  reset  fade" id="user_friends">
                                    <div class="row m-t-10">
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Sandy Chris</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople4.png.pagespeed.ic.j5XEVD0PAw.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">  Adela</h5>
                                                    <p class="m-0">Web Designer</p>
                                                    <span class="userfrd_offline"> </span> &nbsp;Offline
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople5.png.pagespeed.ic.Ff0Fmpp446.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Symons</h5>
                                                    <p class="m-0">Web Developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople2.png.pagespeed.ic.GEQOLGMLGN.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Benjamin</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Timmothy</h5>
                                                    <p class="m-0">PHP developer</p>
                                                    <span class="userfrd_offline"> </span> &nbsp;Offline
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Sandy Chris</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople4.png.pagespeed.ic.j5XEVD0PAw.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">  Adela</h5>
                                                    <p class="m-0">Web Designer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople5.png.pagespeed.ic.Ff0Fmpp446.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Symons</h5>
                                                    <p class="m-0">Web Developer</p>
                                                    <span class="userfrd_offline"> </span> &nbsp;Offline
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople2.png.pagespeed.ic.GEQOLGMLGN.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Benjamin</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Timmothy</h5>
                                                    <p class="m-0">PHP developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 m-t-20">
                                            <div class="media">
                                                <img class="d-flex mr-3" src="img/xpeople3.png.pagespeed.ic.4A81ySgKZB.jpg" alt="user_frd">
                                                <div class="media-body">
                                                    <h5 class="m-0">Sandy Chris</h5>
                                                    <p class="m-0">Software developer</p>
                                                    <span class="userfrd_online"> </span> &nbsp;Online
                                                </div>
                                            </div>
                                        </div>
                                
                                 
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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

