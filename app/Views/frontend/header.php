<?php
$session = session();
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Estate Agent a Real Estate Category Bootstrap Responsive Website Template | Home :: W3layouts</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('static/frontend/')?>assets/css/style-starter.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js">
    </script>


    <style>
    .error {
        color: red !important;
    }

    .images .card {
        background-color: ##f3faefd6;
        border: 1px solid gray;
    }



    .card .list-group-item {
        background-color: ##f3faefd6;
        font-weight: bold;
    }

    .card-body img:hover {
        -ms-transform: scale(1.2);
        /* IE 9 */
        -webkit-transform: scale(1.2);
        /* Safari 3-8 */
        transform: scale(1.2);
    }
    </style>

</head>

<body>


    <!-- Top Menu 1 -->
    <section class="w3l-top-menu-1">
        <div class="top-hd">
            <div class="container">
                <header class="row">
                    <div class="social-top col-lg-3 col-6">
                        <li>Follow Us</li>
                        <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                        <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
                        <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                        <li><a href="#"><span class="fa fa-vimeo"></span></a> </li>

                    </div>
                    <div class="accounts col-lg-9 col-6 text-white">
                        

                        <?php  if ( $session->get('user_id') !='') { ?>
                        Welcome, 
                        <li class='top_li2 dropdown'>
                            <h5><?= $session->get('fullname'); ?></h5>
                        </li>

                        <li class='top_li1'><a class="btn btn-info  btn-sm"
                                href="<?= base_url('welcome');?>">My Enquires</a>
                        </li>
                        <li class='top_li1'><a class="btn btn-danger btn-sm"
                                href="<?= base_url('logout');?>"><strong>Logout</strong></a>
                        </li>
                        <?php }
                          
                           else { ?>
                        <li class='top_li1'><a href='<?= base_url('login');?> '>Login</a></li>
                        <li class='top_li2'><a href='<?= base_url('register');?>'>Register</a></li>
                        <?php }?>



                    </div>

                </header>
            </div>
        </div>
    </section>
    <!-- //Top Menu 1 -->
    <section class="w3l-bootstrap-header">
        <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
            <div class="container">
                <a class="navbar-brand" href="<?= base_url('index')?>"><span class="fa fa-home"></span> Estate Agent</a>
                <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('index')?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=<?= base_url('about')?>>About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('services')?>">Services</a>
                        </li>

                        <li class="nav-item mr-0">
                            <a class="nav-link" href="<?= base_url('contact')?>">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>