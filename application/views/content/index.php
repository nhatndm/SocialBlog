<!DOCTYPE HTML>
<html>
<head>
    <title>AIWA BLOG</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/content/css/custom.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="<?php echo base_url();?>/content/js/customscript.js"></script>
</head>

<body>
    <!-- Containner header website -->
    <div class="container header">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center">
                WELCOME TO MY BLOG !!!!!
            </div>
        </div>
    </div>
    <hr>
    <!-- End Containner header website -->
    <!-- Containner body website -->
    <div id="widget">
        <ul>
            <li><a class="fa fa-user"></a></li>
        </ul>
    </div>
    <div class="container">
        <!-- Title website -->
        <div class="row">
            <!-- Title Blog website -->
            <div id="blog" class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <!-- Main Blog -->
                <?php
                foreach ($blog_result as $key => $val) {
                ?>                   
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 tltblog">
                        <span><p class="fa fa-bookmark-o"></p> <?php echo $val['tieude'];?></span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 calendar">
                        <span><p class="glyphicon glyphicon-calendar"></p> <?php echo 'Posted on '.date('jS M Y', strtotime($val['ngay'])).'';?></span>                   
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 main">
                        <?php echo $val['tomtat'];?>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                        <?php echo'<a href="'.base_url().'main/getblog?id='.$val['id'].'" type="button" class="btn btn-info">Read More</a>'?>            
                    </div>
                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 commend">
                        <span><p class="fa fa-bullseye"></p>  Commend: 5 | Views: 10</span>                      
                    </div>
                </div>
                <?php
                }
                ?>                
                <!-- End Main Blog -->                            
            </div>
            <!-- End Title Blog website -->
        </div>
        <!-- Pagination -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center">
                <nav>
                    <ul class="pagination">
                        <li>
                            <a href="" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">4</a></li>
                        <li>
                            <a href="" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>              
        <!-- End Pagination -->
        <!-- End Title website -->
        <!-- Profile website -->
            <div id="profile" class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
                <!-- Main Profile -->                              
                <div class="row inner">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 title">
                        <span class="title"><i class="glyphicon glyphicon-user"></i>  My Profile</span> 
                    </div>                  
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-envelope"></p>  Full Name: Nhat Nguyen</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-plus"></p>  Nich Name: Nhat Dev</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="fa fa-facebook-official"></p>  Nhat Nguyen</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-calendar"></p>  DOB: 01/01/2016</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-home"></p>  Adds: Binh An, Quan 2</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-list"></p>  JOB: Developer</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-headphones"></p>  Hobbies: Badminton, Music</span>
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 mainprofile">
                        <span><p class="glyphicon glyphicon-edit"></p>  Notes: Im professional dota 2 player and experience developer about coding website</span>
                    </div> 
                    <a class="close">x</a>                  
                </div>
                <!-- End Main Profile -->
            </div>            
            <!-- End Profile website -->
    </div>
    <!-- End body website -->
    <!-- Footer-->
    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 author text-center"">
                <span><p class="fa fa-copyright"></p><b> 2016 | Powered by Bot-Blog - Nn Corporation</b></span>           
            </div>
        </div>    
    </div>
    <!-- End footer-->
</body>
    
</html>