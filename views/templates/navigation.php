<?php defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--header start-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    @media (max-width: 1200px) {
        #img_logo {
            display: none;
        }
        #gcul{
            font-size: 20px;
            float: left;
        }

    }
    @media (max-width: 470px) {

        #gcul{
            font-size: 20px;
            float: left;
        }
    }
    .navbar-fixed {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

</style>
<style>
           @font-face {
    font-family: 'square721_btroman';
    src: url('../../../css/font/sqr721n-webfont.eot');
    src: url('../../../css/font/sqr721n-webfont.eot?#iefix') format('embedded-opentype'),
         url('../../../css/font/sqr721n-webfont.woff') format('woff'),
         url('../../../css/font/sqr721n-webfont.ttf') format('truetype'),
         url('../../../css/font/sqr721n-webfont.svg#square721_btroman') format('svg');
    font-weight: normal;
    font-style: normal;

}
         </style>
<header class="head-section" style="margin-bottom: 100px;">

    <div  class="navbar navbar-default navbar-fixed-top col-md-12 float-right navbar-fixed" id="Nav">

        <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div style="padding: 10px; margin-left:10px">

                <div class="row">
                    <img src="<?php echo base_url('img/logo1.png'); ?>" width="70px;" id="img_logo" >
                    <a class="navbar-brand pull-right" style="top:-6px; font-family: Square721 Cn BT; font-size: 32px;" href="<?php echo base_url('Home'); ?>"><span id="gcul">Department of Computer Science</span></a>
                </div>
            </div>
        </div>
        <div class="navbar-collapse collapse float-right">
            <ul class="nav navbar-nav" style="font-family:Square721 Cn BT; font-size: 18px !important;">
                <li><a style=" font-size: 18px !important;" href="<?php echo base_url('Home'); ?>" >Home</a></li>
                <li><a style=" font-size: 18px !important;" href="<?php echo base_url('Home'); ?>#home-news" >News</a></li>
               <!-- <li><a style=" font-size: 18px !important;" href="<?php //echo base_url('Login');                                                                         ?>" >Admission</a></li> -->
                <li class="file_menu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"  style=" font-size: 18px !important;">Admission <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('Login'); ?>"  style=" font-size: 18px !important;">BS Computer Science</a></li>
                        <li><a href="<?php echo base_url('msacademic'); ?>"  style=" font-size: 18px !important;">MS Computer Science</a></li>
                        <li><a href="<?php echo base_url('phdacademic'); ?>"  style=" font-size: 18px !important;">PhD Computer Science</a></li>
                    </ul>
                </li>
                <li class="file_menu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"  style=" font-size: 18px !important;">Academics <b class="caret"></b></a>
                    <ul class="dropdown-menu ">
                        <li><a href="<?php echo base_url('admissions'); ?>"  style=" font-size: 18px !important;">BS Program</a></li>
                        <li><a href="<?php echo base_url('msacademic'); ?>"  style=" font-size: 18px !important;">MS Program</a></li>
                        <li><a href="<?php echo base_url('phdacademic'); ?>"  style=" font-size: 18px !important;">PhD Program</a></li>
                       <!-- <li><a href="<?php echo base_url('feestructure'); ?>"  style=" font-size: 18px !important;">Fee Structure</a></li>
                        <li><a href="<?php echo base_url('criteria'); ?>"  style=" font-size: 18px !important;">Admission Criteria</a></li> -->
                    </ul>
                </li>
                <li><a style=" font-size: 18px !important;" href="<?php echo base_url('faculty'); ?>">Faculty</a></li>

                <li class="file_menu">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle"  style=" font-size: 18px !important;">Road map <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('roadmap'); ?>"  style=" font-size: 18px !important;">BS Road Map</a></li>
                        <li><a href="<?php echo base_url('msroadmap'); ?>"  style=" font-size: 18px !important;">MS Road Map</a></li>
                    </ul>
                </li>
                <li><a style=" font-size: 18px !important;" href="<?php echo base_url('Contact'); ?>">Contact</a></li>
                <li><input class="form-control search" placeholder=" Search" type="text"></li>
            </ul>
        </div>

    </div>
</header>
<!--header end-->
