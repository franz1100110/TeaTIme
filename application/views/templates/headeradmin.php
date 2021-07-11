<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tea Time</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="<?php echo base_url()."index.php/Article/index" ?>">Tea Time</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url()."index.php/Article/index" ?>">Article <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url()."index.php/User/index" ?>">User</a>
      </li>
      <?php
        if($this->session->userdata('status')=='logged in'):?>
      <li class="nav-item">
        <a class="nav-link"href="#">Welcome <?php echo $this->session->userdata('nama')?> !</a>
      </li>
      <?php endif?>
    </ul>
    <ul class="navbar-nav">
    
    </ul>
  </div>
  </div>
  <style>
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
  }
  </style>
  <script>
  </script>
    <?php
    if($this->session->userdata('status')=='logged in'):?>

    <div class="pull-right">
	  <a href="<?php echo base_url()."index.php/Pages/logout"; ?>" class="btn btn-success">Logout</a> 
    </div>
    <?php else :?>
    <div class="pull-right">
	  <a href="<?php echo base_url()."index.php/Pages/login"; ?>" class="btn btn-success">Login/Signup</a> 
    </div>
  <?php endif?>
</nav>

