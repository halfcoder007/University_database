
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="university movie database">
    <meta name="author" content="manish">

    <title>University Movie Database</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrapintheatre.min.css" rel="stylesheet">
     <link href="css/movietheatre.css" rel="stylesheet">
      <link href="css/reform.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/thumbnail-gallery.css" rel="stylesheet">
    <style >
    body{background-color: lightgray
;}

    </style>

  
</head>

<body style="background-color:lightgray">

    <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="umd.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University Database</a></li>
      <li ><a href="home.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home<span class="sr-only">(current)</span></a></li>
        <li class="active" ><a href="Intheatre.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IN Library</a></li>
        <li><a href="coming.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Video Tutorials</a></li>
        <li><a href="trailer.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trailers</a></li>
        <li><a href="about.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
       
        
       
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search for movies...">
        </div>
        <button type="submit" class="btn btn-info">Go!</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['Firstname'] 
              
                ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Settings</a></li>
            <li><a href="index.php">Logout</a></li>
           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

   
    <div class="container">

        <div class="row">
 <!-- User Profile -->

         <div class="col-md-3">
                <p class="lead"><?php echo $_SESSION['Firstname'] 
              
                ?></p>
                <div class="fileinput fileinput-new" data-provides="fileinput">
  <div class="fileinput-new thumbnail" style="width: 200px; height: 228px;">
    <img src="profilepic/i.jpg"  alt="...">
  </div>
  <form action="saveimage.php" enctype="multipart/form-data" method="post">
  
  <input class="btn btn-primary btn-sm" style="width:200px;" name="uploadedimage" type="file">
  <button class="btn btn-success" style="width:200px;" name="Upload Now" type="submit">Change ur dp</button>
  </form>
  
    </div>
    <div>
         <button class="btn btn-warning" style="width:200px;" data-target="#add"
      data-toggle="modal" data-backdrop="false">Add Muvi</button>
    </div>

     <div>
         <button class="btn btn-danger" style="width:200px;" data-target="#req"
      data-toggle="modal" data-backdrop="false">Req a Muvi</button>
    </div>

      <div>
         <button class="btn btn-primary" style="width:200px;" data-target="#addbook"
      data-toggle="modal" data-backdrop="false">Add a Book</button>
    </div>

     
</div>


      <div class="modal fade" id="add" tabindex="-1">
         <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">×</button>

              <h4 class="modal-title" id="myModalLabel">Add Ur Movie</h4>
            </div>
                <form action="add.php" method="post">
            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="muviname" placeholder="Movie Name" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="muviquality" placeholder="Movie Quality" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" type="submit">Update</button> 
          </div>
          </form>
          </div>
          
      </div>
      </div>

      <!--Req movie modal-->  

      <div class="modal fade" id="req" tabindex="-1">
         <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button"></button>

              <h4 class="modal-title" id="myModalLabel">Request a Movie</h4>
            </div>
                <form action="req.php" method="post">
            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="muviname" placeholder="Movie Name" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                 
              </div>

          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" type="submit">Update</button> 
          </div>
          </form>
          </div>
          
      </div>
      </div>

          <div class="modal fade" id="addbook" tabindex="-1">
         <div class="modal-dialog">
         
          <div class="modal-content">
            <div class="modal-header">
              <button class="close" data-dismiss="modal" type="button">×</button>

              <h4 class="modal-title" id="myModalLabel">Add Ur Book</h4>
            </div>
                <form action="addbook.php" method="post">
            <div class="modal-body">

               <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="bookname" placeholder="Title" type="text">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="rows">
                      <div class="col-md-11.5">
                        <div class="col-lg-11.5">
                          <input class="form-control input-lg" name="bookauthor" placeholder="Author" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

          <div class="modal-footer">
            <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
            <button class="btn btn-success" type="submit">Update</button> 
          </div>
          </form>
          </div>
          
      </div>
      </div>

       <!-- User Profile -->

 <!-- In theatre Movies -->

  <div class="col-md-9">

              <div class="row carousel-holder">

              <div class="col-md-12">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            

              </ol>
              <div class="carousel-inner">
              <div class="item active">
              <img class="slide-image" src="http://iasaglobal.org/wp-content/uploads/2015/02/Education770.jpg" alt="">
              </div>
              <div class="item">
              <img class="slide-image" src="img\y.jpg" alt="">
              </div>
              <div class="item">
              <img class="slide-image" src="img\x.jpg" alt="">
              </div>
              
              </div>
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
              </div>
 </div>
 </div>
   <div class="row">
            <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\1.jpg" alt="">
                </a>
            </div>
           
            <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\2.jpg" alt="">
                </a>
            </div>
             <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\a.jpg" alt="">
                </a>
            </div>
           
            <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\c.jpg"  alt="">
                </a>
            </div> <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\c.jpg" alt="">
                </a>
            </div>
           
            <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\1.jpg" alt="">
                </a>
            </div>
           
            <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\2.jpg" alt="">
                </a>
            </div>
             <div class="col-md-3">
                <a href="#">
                    <img class="img-responsive" style="height:260px;" src="img\a.jpg" alt="">
                </a>
            </div>
           
           
           
           
        </div>
        



        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                <center>
                    <p class="page-footer">Copyright &copy; MY Website 2014</p></center>
                </div>
            </div>
        </footer>

    </div>
   

    <script src="js/jquery.js"></script>

  
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $('.mvlst1 img').css({"width":"211px","height":"266px"});</script>

</body>

</html>
