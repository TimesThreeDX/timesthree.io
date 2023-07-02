<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php if (is_search()) { ?>
		   <meta name="robots" content="noindex, nofollow" /> 
		<?php } ?>
        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="apple-touch-icon" href="icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">
        <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="wrapper"> 

            <div class="logo">
                <a href="<?php echo get_home_url(); ?>"><img width="100%" height="auto" alt="Times Three" class="logo" src="<?php bloginfo('template_url')?>/img/logo.png"/></a>
            </div>

                <div class="menu">

                <ul>
                
                <?php

                    get_menu('header-menu');

                ?>
                </ul>

                </div>

                <div class="menu-burger">
                    
                    <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="2" y="6.5" width="20" height="2" fill="#000"/>
                    <rect x="2" y="11.5" width="20" height="2" fill="#000"/>
                    <rect x="2" y="16.5" width="20" height="2" fill="#000"/>
                    </svg>
                    
                </div>

                <div class="menu-burger-close">
                    
                <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="3.0166" y="20.3726" width="25.0489" height="2.50489" transform="rotate(-45 3.0166 20.3726)" fill="#000"/>
                <rect x="4.26953" y="2.83838" width="25.0489" height="2.50489" transform="rotate(45 4.26953 2.83838)" fill="#000"/>
                </svg>
    
                </div>

            </div>

            <div class="sky">

                <div class="cloud one">
                
                    <svg version="1.1" width="100%" height="100%" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 500 170">
                    <style type="text/css">
                        .cloud{fill:#FFFFFF;}
                    </style>
                    <g>
                        <path class="cloud" d="M287.8,156h42.9c33.6-8.6,58.3-37.1,58.3-70.9c0-40.7-35.7-73.6-79.7-73.6s-79.7,33-79.7,73.6
                            C229.5,118.9,254.2,147.3,287.8,156z"/>
                        <path class="cloud" d="M142.4,156H209c12.1-9.7,19.9-24.6,19.9-41.4c0-29.4-23.8-53.2-53.2-53.2s-53.2,23.8-53.2,53.2
                            C122.5,131.4,130.3,146.2,142.4,156z"/>
                        <path class="cloud" d="M90.5,156c0.7-3.2,1.1-6.5,1.1-10c0-23.4-16.5-42.3-36.8-42.3C34.5,103.7,18,122.7,18,146
                            c0,3.4,0.4,6.8,1.1,10H90.5z"/>
                        <path class="cloud" d="M145.6,156c5.8-7.3,9.3-16.4,9.3-26.4c0-23.4-19-42.4-42.4-42.4S70,106.1,70,129.5c0,10,3.5,19.2,9.3,26.4
                            H145.6z"/>
                        <path class="cloud" d="M428.4,156c8.5-10,13.8-23.9,13.8-39.3c0-30.5-20.6-55.3-46-55.3c-25.4,0-46,24.7-46,55.3
                            c0,15.4,5.3,29.2,13.8,39.3H428.4z"/>
                        <path class="cloud" d="M481.6,156c3.3-5.3,5.3-11.5,5.3-18.1c0-18.8-15.3-34.1-34.1-34.1c-18.8,0-34.1,15.3-34.1,34.1
                            c0,6.7,1.9,12.9,5.3,18.1H481.6z"/>
                        <rect x="189.1" y="81.4" class="cloud" width="228.3" height="74.5"/>
                    </g>
                    </svg>

                </div>

                <div class="cloud two">
                    <svg version="1.1" width="100%" height="100%" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 500 170">
                    <style type="text/css">
                        .cloud{fill:#FFFFFF;}
                    </style>
                    <g>
                        <path class="cloud" d="M287.8,156h42.9c33.6-8.6,58.3-37.1,58.3-70.9c0-40.7-35.7-73.6-79.7-73.6s-79.7,33-79.7,73.6
                            C229.5,118.9,254.2,147.3,287.8,156z"/>
                        <path class="cloud" d="M142.4,156H209c12.1-9.7,19.9-24.6,19.9-41.4c0-29.4-23.8-53.2-53.2-53.2s-53.2,23.8-53.2,53.2
                            C122.5,131.4,130.3,146.2,142.4,156z"/>
                        <path class="cloud" d="M90.5,156c0.7-3.2,1.1-6.5,1.1-10c0-23.4-16.5-42.3-36.8-42.3C34.5,103.7,18,122.7,18,146
                            c0,3.4,0.4,6.8,1.1,10H90.5z"/>
                        <path class="cloud" d="M145.6,156c5.8-7.3,9.3-16.4,9.3-26.4c0-23.4-19-42.4-42.4-42.4S70,106.1,70,129.5c0,10,3.5,19.2,9.3,26.4
                            H145.6z"/>
                        <path class="cloud" d="M428.4,156c8.5-10,13.8-23.9,13.8-39.3c0-30.5-20.6-55.3-46-55.3c-25.4,0-46,24.7-46,55.3
                            c0,15.4,5.3,29.2,13.8,39.3H428.4z"/>
                        <path class="cloud" d="M481.6,156c3.3-5.3,5.3-11.5,5.3-18.1c0-18.8-15.3-34.1-34.1-34.1c-18.8,0-34.1,15.3-34.1,34.1
                            c0,6.7,1.9,12.9,5.3,18.1H481.6z"/>
                        <rect x="189.1" y="81.4" class="cloud" width="228.3" height="74.5"/>
                    </g>
                    </svg>
                </div>

                <div class="cloud three">
                    <svg version="1.1" width="100%" height="100%" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 500 170">
                    <style type="text/css">
                        .cloud{fill:#FFFFFF;}
                    </style>
                    <g>
                        <path class="cloud" d="M287.8,156h42.9c33.6-8.6,58.3-37.1,58.3-70.9c0-40.7-35.7-73.6-79.7-73.6s-79.7,33-79.7,73.6
                            C229.5,118.9,254.2,147.3,287.8,156z"/>
                        <path class="cloud" d="M142.4,156H209c12.1-9.7,19.9-24.6,19.9-41.4c0-29.4-23.8-53.2-53.2-53.2s-53.2,23.8-53.2,53.2
                            C122.5,131.4,130.3,146.2,142.4,156z"/>
                        <path class="cloud" d="M90.5,156c0.7-3.2,1.1-6.5,1.1-10c0-23.4-16.5-42.3-36.8-42.3C34.5,103.7,18,122.7,18,146
                            c0,3.4,0.4,6.8,1.1,10H90.5z"/>
                        <path class="cloud" d="M145.6,156c5.8-7.3,9.3-16.4,9.3-26.4c0-23.4-19-42.4-42.4-42.4S70,106.1,70,129.5c0,10,3.5,19.2,9.3,26.4
                            H145.6z"/>
                        <path class="cloud" d="M428.4,156c8.5-10,13.8-23.9,13.8-39.3c0-30.5-20.6-55.3-46-55.3c-25.4,0-46,24.7-46,55.3
                            c0,15.4,5.3,29.2,13.8,39.3H428.4z"/>
                        <path class="cloud" d="M481.6,156c3.3-5.3,5.3-11.5,5.3-18.1c0-18.8-15.3-34.1-34.1-34.1c-18.8,0-34.1,15.3-34.1,34.1
                            c0,6.7,1.9,12.9,5.3,18.1H481.6z"/>
                        <rect x="189.1" y="81.4" class="cloud" width="228.3" height="74.5"/>
                    </g>
                    </svg>
                </div>

                <div class="sun">
                    <svg version="1.1" width="100%" height="100%" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve">
                    <style type="text/css">
                        .sun{fill:#F07F1A;}
                    </style>
                    <circle class="sun" cx="74.6" cy="75.4" r="69.3"/>
                    </svg>
                </div>

                </div>

        </header>

        <div class="sidenav">
            
            <div class="nav">
               <?php get_menu('header-menu'); ?>
            </div>

        </div>


        <div class="main">