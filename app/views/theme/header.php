<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
    <link href="<?php echo URLROOT;?>/public/css/dash.css" rel="stylesheet">
    <link href="<?php echo URLROOT;?>/public/css/css-circular-prog-bar.css" rel="stylesheet">
 </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo URLROOT;?>/dashboards"><?php echo SITENAME;?></a>
      <ul class="navbar-nav float-left px-2">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT; ?>/dashboards">Home <span class="sr-only"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav float-left px-2">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT; ?>/settings">Settings <span class="sr-only"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto px-2">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT; ?>/settings/planSets">Nutrition plan settings <span class="sr-only"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav px-1">
      <?php if(isset($_SESSION['user_id'])) : ?>

        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#!">Hello <?php echo $_SESSION['user_name'];?></a>
        </li>
        </ul>
     <?php if($_SESSION['user_rights'] == 1): ?>
     <ul class="navbar-nav px-1">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT;?>/admins/manageMeals">Admin panel</a>
        </li>
      </ul>
      <?php endif; ?>
        <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT;?>/users/logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>
 <main role="main" class="col-md-9 mx-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
             </div>
