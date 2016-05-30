<!DOCTYPE HTML>
<html>
<head>
    <title>AIWA BLOG</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>content/css/content.css">
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="<?php echo base_url();?>content/js/customscript.js"></script>
</head>

<body>
    <!-- Containner header website -->
    <div class="container header">
        <?php
            foreach ($idblog as $key => $val) {
        ?>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 text-center">
                <?php  echo $val['tieude'] ?>
            </div>
        </div>
    </div>
    <hr>
    <!-- End Containner header website -->
    <!-- Containner body website -->
    <div class="container">
        <!-- Title website -->
        <div class="row">
            <!-- Title Blog website -->
            <div id="blog" class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                <!-- Main Blog -->              
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 calendar">
                        <span><p class="glyphicon glyphicon-calendar"></p> <?php echo 'Posted on '.date('jS M Y', strtotime($val['ngay'])).'';?></span>                   
                    </div>
                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 main">
                        <?php echo $val['noidung']?>
                    </div>
                     <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 commend">
                        <span><p class="fa fa-bullseye"></p>  Commend: 5 | Views: 10</span>                      
                    </div>
                </div>
                <?php 
                    }
                ?>
                <!-- End Main Blog -->
                <!-- Main Blog -->
                <!-- End Main Blog -->
                <!-- Main Blog -->                
                <!-- End Main Blog -->                
            </div>
            <!-- End Title Blog website -->
        </div>
        <!-- Pagination -->                 
        <!-- End Pagination -->
        <!-- End Title website -->       
    </div>
    <div id ="comment" class="container">
       <div class="row">
          <div class="col-md-7 col-lg-7 col-xs-12 col-sm-12">
                  <h4>Leave a Comment:</h4>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ten" placeholder="Tên" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name ="noidung" placeholder="Nội Dung" required></textarea>
                        </div>
                        <button class="btn btn-info">Comment</button>
                    </form>   
          </div>   
       </div>
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