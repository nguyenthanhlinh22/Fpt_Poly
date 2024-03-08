<?php
session_start();
include '../connect.php';
if($_SESSION['username']==''){
    header("location: login.php");
}
?>
<html>
<head>
<title>ajax example</title>
<link rel="stylesheet" href="../bootstrap.css" crossorigin="anonymous">

<link rel="stylesheet" href="../bootstrap-theme.css" crossorigin="anonymous">
<style>
.container{
    width:50%;
    height:30%;
    padding:20px;
}
</style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Brand</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">About US</a></li>
                 <li><a href="#">Contact US</a></li>
              </ul>
              <form class="navbar-form navbar-left">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
              <ul class="nav navbar-nav navbar-right">
               <a href="logout.php" class="btn btn-danger">Logout</a>
              </ul>
            </div>
          </div>
    </nav>
<br/><br/><br/><br/>
    <h1 align="center"><?php echo $_SESSION['success']; ?></h1>
    <h2 align="center">Welcome to the home page <?php echo $_SESSION['username'];?></h2>
     
<script src="../jquery-3.2.1.min.js"></script>
<script src="../bootstrap.min.js"></script>
</body>
</html>