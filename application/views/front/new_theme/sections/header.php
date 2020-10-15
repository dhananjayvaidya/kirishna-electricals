<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $page_title;?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- MeanMenu CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/meanmenu.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontawesome-all.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
    <!-- FlatIcon CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/font/flaticon.css">
    <!-- Nivo Slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/slider/css/nivo-slider.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Select 2 CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.min.css">
    <!-- Datetime Picker CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.datetimepicker.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/style.css">
   
    
    <!-- Modernize js -->
    <script src="<?php echo base_url();?>assets/js/modernizr-3.7.1.min.js"></script>
    <script>
        var base_url = "<?php echo base_url();?>";
    </script>
</head>
<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
   
    <div id="wrapper" class="wrapper overflow-hidden">
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <header class="header">
            
            <div id="header-middlebar" class="header-middlebar-layout1">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-3">
                            <div class="logo-area">
                                <a href="<?php echo base_url();?>" class="temp-logo">
                                    <img src="<?php echo base_url();?>assets/img/logo-sm.png" alt="logo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 d-flex justify-content-end">
                            <div class="middlebar-content">
                                <ul>
                                    <li>
                                        <div class="item-icon">
                                            <i class="far fa-clock"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-title">Opening Hours</div>
                                            <div class="item-subtitle">Mon - Fri: 09.00am - 10.00pm</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-icon">
                                            <i class="flaticon-message"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-title">E-mail Us</div>
                                            <div class="item-subtitle"><a style="color:black;" href="mailto:<?php echo $this->settings_model->get_email_address();?>"><?php echo $this->settings_model->get_email_address();?></a></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="item-icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-title">Quick Contact</div>
                                            <div class="item-subtitle"><a style="color:black;" href="tel:<?php echo $this->settings_model->get_phone_number();?>"><?php echo $this->settings_model->get_phone_number();?></a></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout3">
                <div class="container">
                    <div class="bg-Primary border-radius-4 pl-4">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-9 d-flex justify-content-start position-static">
                                <nav id="dropdown" class="template-main-menu">
                                    <ul>
                                        <li>
                                            <a href="<?php echo base_url();?>">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>about-us">About Us</a>
                                        </li>
                                        
                                        <li>
                                            <a href="<?php echo base_url();?>services">Services</a>
                                            <ul class="dropdown-menu-col-1">
                                                <li>
                                                    <a href="<?php echo base_url();?>services/washing-machine-repair">Washing machine repair</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/microwave-repair">Microwave repair</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/ac-repair">AC repair</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/refrigerator-repair">Refrigerator repair</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/air-cooler-repair">Air-cooler repair</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/water-purifier-repair">Water purifier</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/electrical-wiring-repair">Electrical Wiring</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo base_url();?>services/inverter-repairing">Inverter Repairing</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>amc">AMC</a>
                                            
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url();?>contact-us">Contact Us</a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-lg-3 d-flex justify-content-end">
                                <div class="header-action-layout1">
                                    <ul>
                                        <li class="header-action-btn">
                                            <a href="<?php echo base_url();?>get-quote" class="item-btn"><i class="fas fa-bell"></i>Get A Quote</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->