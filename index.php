<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <title>project</title>
  <meta name="description" content="welcome to my website" />
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/yamm.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:bold|Roboto" rel="stylesheet">  google font -->
</head>

<body>

  <!-- navigation -->
  <div class="navbar navbar-default navbar-fixed-top yamm">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project</a>
      </div>
      
      <div id="navbar-collapse-grid" class="navbar-collapse collapse">
        <div class="mainMenu">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Aside<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li class="megaMenuGrid">
                  <div class="row">
                  <div class="col-sm-3"><br>
                    <h3>3</h3><br>
                  </div>
                  <div class="col-sm-9"><br>
                    <h3>9</h3><br>
                  </div>
                  </div>
                </li>
              </ul>
            </li>
            <li><a href="#">SampleA</a></li>
            <li><a href="#">SampleB</a></li>
            <li><a href="#">SampleC</a></li>
          </ul>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">SampleA</a></li>
          <li><a href="#">SampleB</a></li>
          <li><a href="#">SampleC</a></li>
        </ul>
      </div>

    </div>
  </div>
  
  <div class="footer">
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/viewportchecker.js"></script><!-- viewport checker for triggerAnimation.js -->
  <script src="js/animationTrigger.js"></script><!-- controls/triggers the animation.css on scroll -->
  <script src="js/respond.min.js"></script><!-- fix ie 6, 7 and 8 -->
</body>

</html>