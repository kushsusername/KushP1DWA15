<!DOCTYPE html>
<html lang="en">
<head>
  <title>Project1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/customcss.css" rel="stylesheet">
  <script src="js/jquery-1.12.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.js"></script>
</head>

<body>
  <div class="container">

    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li class="active">
          <a href="#home" role="tab" data-toggle="tab">
              <icon class="glyphicon glyphicon-home"></icon>
          </a>
      </li>
      <li><a href="#profile" role="tab" data-toggle="tab">
          <i class="fa fa-user"></i> Profile
          </a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade active in" id="home">
        <h1>Project 1</h1>
        <p>The server you have reached is:
          <?php
          echo $_SERVER['SERVER_NAME'];
          ?>
        </p>
        <h4><b><u>Appendix:</u></b></h4>
        <ul class="list-group">
          <li class="list-group-item">Project 2</li>
          <li class="list-group-item">Project 3</li>
          <li class="list-group-item">Project 4</li>
        </ul>
      </div>
      <div class="tab-pane fade" id="profile">
          <h2>Profile</h2>
          <div class="row">
            <div class="col-md-6">
              <img src='images/profile_pic.jpg' height="400" width="400">
            </div>
            <div class="col-md-6">
              <h4><b><u>BIO:</u></b></h4>
              <p><b>Location:</b></p>
              <p>Waltham, MA</p>
              <p><b>Education:</b></p>
              <p>Bachelor of Science in Robotics Engineering from Worcester Polytechnic Institute</p>
              <p><b>Work Experiance:</b></p>
              <p>Currently Software Developer at Vantiv</p>
              <p><b></b></p>
            </div>
          </div>

      </div>
    </div>
  </div>
</body>
</html>
