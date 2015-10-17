<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> <?= $this->title; ?> </title>

    <!-- Bootstrap Core CSS -->
     <link href="<?= base_url('assets/default/css/bootstrap.css');?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/default/css/custom.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/default/css/modern-business.css');?>" rel="stylesheet">
    <link href="<?= base_url('assets/default/css/datatable.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url('assets/default/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url();?>">COMPANY</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <?php if($this->aauth->is_loggedin()){?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <?= $this->aauth->get_user()->name;?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                        <li><a href="<?= base_url('user/profile');?>">View Account</a></li>
                        <li><a href="<?= base_url('user/modify');?>">Edit Account</a></li>
                        <li><a href="<?= base_url('user/change-password');?>">Change Password</a></li>
                        <li><a href="<?= base_url('user/upload');?>">Upload Profile Picture</a></li>
                        <li><a href="<?= base_url('user/logout');?>">Logout</a></li>
                        </ul>
                    </li>
                <?php }?>
                    <li>
                        <a href="<?= base_url('pages/about');?>">About Us</a>
                    </li>
                    <li>
                        <a href="<?= base_url('pages/contact');?>">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
         
         <?php 
  
     if($this->session->flashdata('msg') != ''){
        echo '
        <div class="grid grid-1"> 
            <div class="alert alert-danger">'.$this->session->flashdata('msg').'</div>
        </div>';
    }
    if($this->session->flashdata('success') != ''){
        echo '
        <div class="grid grid-1">
            <div class="alert alert-success">'.$this->session->flashdata('success').'</div>
        </div>';

    } 
    
        ?>