<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php include './includes.php' ?>
        <link rel="stylesheet" type="text/css" href="dist/slick/slick.css">
        <link rel="stylesheet" type="text/css" href="dist/slick/slick-theme.css">
        <style type="text/css">
            .slider {
                
            }

            .slick-slide {
              /*margin: 0px 20px;*/
            }

            .slick-slide img {
              width: 100%;
            }

            .slick-prev:before,
            .slick-next:before {
              color: #076606 !important;
            }

            .slick-arrow {
                z-index: 1;
            }
            .slick-slide {
              transition: all ease-in-out .3s;
              opacity: .2;
            }

            .slick-active {
              opacity: .5;
            }

            .slick-current {
              opacity: 1;
            }
            .slick-dots {
                display: none !important;
            }
          </style>
          <script type="text/javascript" src="./dist/js/acmeticker.js"></script>
          <link rel="stylesheet" href="./dist/css/tickerstyle.css">
    </head>
    <body>
        <header>
            <div class="container-fluid logo-wrapper top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="top-text">
                                <p>Welcome to TNSLTU</p>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="top-textLink text-right">
                                <a href="">lingamail@gmail.com <i class="material-icons">mail</i></a>
                                <a href="">098765 43210 <i class="material-icons">whatsapp</i></a>
                            </div>                            
                        </div>
                    </div>
                    <div class="menuIcon">
                        <span class="material-icons">menu</span>
                    </div>
                </div>
            </div>
            <div class="container-fluid logo-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <img src="images/Logo.jpg" alt="Logo"/>
                            </div>                            
                        </div>
                        <div class="col-lg-6">
                            <div class="logoHeading">
                                <p>
                                    தமிழ்நாடு ஸ்ரீலிங்கா கட்டுமானம் மற்றும் அமைப்புசாரா தொழிலாளர் நல சங்கம்
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="logotext text-right">
                                <h1>TNSLTU</h1>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid menu-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 menu-wrapper1">
                            <div class="menu">
                                <ul class="level1">
                                    <li class="active"><a href="#">Home</a></li>
                                     <li><a href="#">About Us</a></li> 
                                    <li><a href="#">Services</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="loginLink"><a href="./admin/login.php">Login</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <section id="slider">
            <div class="container-fluid1 slider-wrapper">
                <div class="slider">
                    <div>
                        <img src="./images/slide1.jpg" />
                    </div>
                    <div>
                        <img src="./images/slide2.jpg" />
                    </div>
                </div>
            </div>
        </section>
        
        <section>
            <div class="container-fluid">
                <div class="container">
                    <div class="acme-news-ticker latestNewsTicker">
                        <div class="acme-news-ticker-label">Horizontal News</div>

                        <div class="acme-news-ticker-box">
                            <ul class="my-news-ticker">
                                <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></li>
                                <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></li>
                                <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a></li>
                            </ul>
                        </div>
                        <div class="acme-news-ticker-controls acme-news-ticker-horizontal-controls">
                            <button class="acme-news-ticker-arrow acme-news-ticker-prev"></button>
                            <button class="acme-news-ticker-pause"></button>
                            <button class="acme-news-ticker-arrow acme-news-ticker-next"></button>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        
        <section id="services">
            
            <div class="container-fluid service-wrapper">
                <div class="container">
                    <div class="text-center welcomeText">
                        <h2 class="section-title">We provide</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                    </div>
                    <div class="service-blocks row">
                        <div class="service-block col-lg-4">
                            <figure class="wp-block-image size-large">
                                <a href="#">
                                    <img loading="lazy" src="https://nalavariyam.com/wp-content/uploads/2021/09/WhatsApp-Image-2021-09-22-at-10.23.52-PM-1024x612.jpeg" alt="">
                                </a>
                                <figcaption>
                                    <strong>
                                        <a href="#">Board Registration and Renewal</a>
                                    </strong>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="service-block col-lg-4">
                            <figure class="wp-block-image size-large">
                                <a href="#">
                                    <img loading="lazy" src="https://nalavariyam.com/wp-content/uploads/2021/09/11.jpg" alt="" ]>
                                </a>
                                <figcaption>
                                    <strong>
                                        <a href="#" >Education and employment</a>
                                    </strong>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="service-block col-lg-4">
                            <figure>
                                <a href="#">
                                    <img loading="lazy" src="https://nalavariyam.com/wp-content/uploads/2021/09/12.jpg" alt="">
                                </a>
                                <figcaption>
                                    <strong>
                                        <a href="#" >Marriage Welfare Scheme</a>
                                    </strong>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        
        <section id="services">
            <div class="container-fluid">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <h2 class="section-title">Our Services</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.</p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <a href="#">Online Service 1</a>
                                        <iframe loading="lazy" title="HOW to Avoid Resubmit and Rejection For New Application/Renewal/Updation || #nalavariyam" width="100%" height="275" src="https://www.youtube.com/embed/fWQ95_1u4X0?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <a href="#">Online Service 2</a>
                                        <iframe loading="lazy" title="HOW to Avoid Resubmit and Rejection For New Application/Renewal/Updation || #nalavariyam" width="100%" height="275" src="https://www.youtube.com/embed/fWQ95_1u4X0?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <a href="#">Online Service 3</a>
                                        <iframe loading="lazy" title="HOW to Avoid Resubmit and Rejection For New Application/Renewal/Updation || #nalavariyam" width="100%" height="275" src="https://www.youtube.com/embed/fWQ95_1u4X0?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card">
                                        <a href="#">Online Service 4</a>
                                        <iframe loading="lazy" title="HOW to Avoid Resubmit and Rejection For New Application/Renewal/Updation || #nalavariyam" width="100%" height="275" src="https://www.youtube.com/embed/fWQ95_1u4X0?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <h2 class="section-title">Total Members</h2>
                            <div class="service-card1">
                                <h4>District Secretaries</h4>
                                <span>28</span>
                            </div>
                            <div class="side-links">
                                <a href="admin/login.php">
                                    <i class="material-icons">logins</i>Login
                                </a>
                                <a href="admin/login.php">
                                    <i class="material-icons">dashboard</i>View all members
                                </a>
                            </div>
                            <div class="sidebarImage">
                                <img src="images/CHENNAI SEYALALR.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer>
            <div class="container-fluid">
                <p>Copyright &COPY;2022, All rights reserved. </p>
            </div>
        </footer>
        
        
        
        
        
        <script src="dist/slick/slick.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript">
            $(document).on('ready', function() {
                $(".slider").slick({
                    dots: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 4000,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear'
                });
                
                $('.my-news-ticker').AcmeTicker({
                    type:'typewriter',/*horizontal/horizontal/Marquee/type*/
                    direction: 'right',/*up/down/left/right*/
                    speed: 50,/*true/false/number*/ /*For vertical/horizontal 600*//*For marquee 0.05*//*For typewriter 50*/
                    controls: {
                        prev: $('.acme-news-ticker-prev'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                        toggle: $('.acme-news-ticker-pause'),/*Can be used for horizontal/horizontal/typewriter*//*not work for marquee*/
                        next: $('.acme-news-ticker-next')/*Can be used for horizontal/horizontal/marquee/typewriter*/
                    }
                });
                
                $('.menuIcon span').on('click', function(){
                    $('header').toggleClass('toggleMenuOpen');
                    $(this).text(($(this).text() == 'close') ? 'menu' : 'close');
                });
            });
        </script>
    </body>
</html>