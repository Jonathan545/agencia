<!doctype html>
<html lang="en">

<head>
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>SEYTU</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
        rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href=" {{ asset ('css/loader/loaders.css') }} ">
    <link rel="stylesheet" href=" {{ asset ('css/font-awesome/font-awesome.css') }} ">
    <link rel="stylesheet" href=" {{ asset ('css/bootstrap.css') }} ">
    <link rel="stylesheet" href=" {{ asset ('css/aos/aos.css') }} ">
    <link rel="stylesheet" href=" {{ asset ('css/swiper/swiper.css') }} ">
    <link rel="stylesheet" href=" {{ asset ('css/lightgallery.min.css') }} ">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href=" {{ asset ('css/style.css') }} ">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href=" {{ asset ('responsive.css') }} ">
</head>

<body>
    <!-- Loader Start -->
    <div class="css-loader">
        <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <header class="position-absolute w-100">
        <div class="container">
            <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
                <div class="contact">
                    <a href="tel:+1234567890" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>0980861340</a>
                    <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"
                            aria-hidden="true"></i>jonathanjami765@gmail.com</a>
                </div>
                <nav class="d-flex aic">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="login"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
                    @endauth

                    <ul class="nav social d-none d-md-flex">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </nav>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <div align="center">
                    <font size="5" face="Homer Simpson UI"><b>SEYTU</b></font>
                    <font face=""> <sub><i>"Rapidez para tu vida"</i></sub></font>
            </div>
                <div class="group d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <a class="login-icon d-sm-none" href="#"><i class="fa fa-user"></i></a>
                </div>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Quiero Ser Cliente</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Soy Cliente</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Contactos</a></li>
                    </ul>
                    <form class="bg-white search-form" method="get" id="searchform">
                        <div class="input-group">
                            <input class="field form-control" id="s" name="s" type="text" placeholder="Search">
                            <span class="input-group-btn">
                                <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
                                    value="Search">
                            </span>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </header>


 <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 offset-md-1 col-md-11">
                    <div class="swiper-container hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">Promociones<br> Fantasticas para ti
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="600">
                                        Disfruta el 20% Descuento hasta en 11 mensualidades de tu Plan de Internet por Fibra Óptica, Contratando con tu Tarjeta de Crédito favorita.
                                    </p>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">Mas info</a>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">Adquirir</a>
                                </div>
                            </div>
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                     <h1 data-aos="fade-right" data-aos-delay="200">Promociones<br> Fantasticas para ti
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="600">
                                        Disfruta el 20% Descuento hasta en 11 mensualidades de tu Plan de Internet por Fibra Óptica, Contratando con tu Tarjeta de Crédito favorita.
                                    </p>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">Mas info</a>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">Adquirir</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Control -->
            <span class="arr-left"><i class="fa fa-angle-left"></i></span>
            <span class="arr-right"><i class="fa fa-angle-right"></i></span>
        </div>
        <div class="texture"></div>
        <div class="diag-bg"></div>
    </section>

    
    <!-- Hero End -->
    <!-- Call To Action Start -->
    <section class="pricing-table">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Planes</h1>
                <h6 class="title-primary">para ti</h6>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="0"
                        data-aos-duration="600">
                        <span>Mensual</span>
                        <h2>25</h2>
                        <h3>MB</h3>
                        <h5 class="desc">Velocidad Simétrica</h5>
                        <h5 class="desc">Fibra Óptica</h5>
                        <h5 class="desc">Compartición</h5>
                        <p class="price">$27.99</p>
                        <p>Mira Netflix y YouTube en HD.</p>
                        <p>Todos conectados y navegando a Ultra Alta Velocidad.</p>
                        <p>Todos compartiendo contenido multimedia (fotos y vídeos) en redes sociales.</p>
                        <a href="#" class="btn btn-primary">Contrátalo</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="600">
                        <span>Mensual</span>
                        <h2>50</h2>
                        <h3>MB</h3>
                        <h5 class="desc">Velocidad Simétrica</h5>
                        <h5 class="desc">Fibra Óptica</h5>
                        <h5 class="desc">Compartición</h5>
                        <p class="price">$31.99</p>
                        <p>Mira Netflix y YouTube en HD.</p>
                        <p>Todos conectados y navegando a Ultra Alta Velocidad.</p>
                        <p>Todos compartiendo contenido multimedia (fotos y vídeos) en redes sociales.</p>
                        <a href="#" class="btn btn-primary">Contrátalo</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="600"
                        data-aos-duration="600">
                        <span>Mensual</span>
                        <h2>100</h2>
                        <h3>MB</h3>
                        <h5 class="desc">Velocidad Simétrica</h5>
                        <h5 class="desc">Fibra Óptica</h5>
                        <h5 class="desc">Compartición</h5>
                        <p class="price">$38.99</p>
                        <p>Mira Netflix y YouTube en HD.</p>
                        <p>Todos conectados y navegando a Ultra Alta Velocidad.</p>
                        <p>Todos compartiendo contenido multimedia (fotos y vídeos) en redes sociales.</p>
                        <a href="#" class="btn btn-primary">Contrátalo</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    

   <!--  <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="#" class="btn btn-primary">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Call To Action End -->
    <!-- Services Start -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h1 class="title-blue">Recomendaciones</h1>
                <h6>para ti</h6>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <!-- <img class="mr-4" src=" {{ asset ('images/service1.png') }}" alt="Web Development"> -->
                            <div class="media-body">
                                <h5>Movil Pospago</h5>
                                Comparte tus gigas, minutos y SMS
                                <p>Desde <b>$15.99</b>/mes</p>
                                <a href="#" class="btn btn-primary">Mas info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <!-- <img class="mr-4" src=" {{ asset ('images/service2.png') }}" alt="Web Development"> -->
                            <div class="media-body">
                                <h5>TV</h5>
                                Mas de 100 Canales para disfrutar!!
                                <p>a solo <b>$9.99</b></p>
                                <a href="#" class="btn btn-primary">Mas info</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <!-- <img class="mr-4" src=" {{ asset ('images/service3.png') }}" alt="Web Development"> -->
                            <div class="media-body">
                                <h5>Telefonica Fija</h5>
                                Descuento de 10-15% si ya tienes otro servicio
                                <p>desde <b>$7.95</b>/mes</p>
                                <a href="#" class="btn btn-primary">Mas info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <!-- Featured Start -->
    <!-- <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-md-6" data-aos="fade-right" data-aos-delay="400" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">about Tamplate</h6>
                        <h1 class="title-blue">a rich featured, epic & premium work.</h1>
                    </div>
                    <p>There are many variations of passages of available but the majority have suffered alteration in
                        some form, by injected humour, or randomised words which don't look even slightly believable. If
                        you are going to use a passage of you need to be sure there isn't anything embarrassing hidden
                        in the middle of text. All the generators on the Internet.</p>
                    <div class="media-element d-flex justify-content-between">
                        <div class="media">
                            <i class="fa fa-magic mr-4"></i>
                            <div class="media-body">
                                <h5>any offer</h5>
                                New York, United States
                            </div>
                        </div>
                        <div class="media">
                            <i class="fa fa-magic mr-4"></i>
                            <div class="media-body">
                                <h5>any offer</h5>
                                New York, United States
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary">See More</a>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="800">
                    <div class="featured-img">
                        <img class="featured-big" src="{{ asset ('images/featured-img1.jpg') }}" alt="Featured 1">
                        <img class="featured-small" src="{{ asset ('images/featured-img2.jpg') }}" alt="Featured 2">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Featured End -->
    <!-- Recent Posts Start -->
    <!-- <section class="recent-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Proudly for us to build stylish</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src=" {{ asset ('images/post1.jpg') }}" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src=" {{ asset ('images/post2.jpg') }}" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Remind me to water the plants</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Add apples to the grocery list</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src=" {{ asset ('images/post3.jpg') }}" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src=" {{ asset ('images/post4.jpg') }}" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Make it warmer downstairs</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary">See More</a>
            </div>
        </div>
    </section> -->
    <!-- Recent Posts End -->
    <!-- Trust Start -->
    <!-- <section class="trust">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-6" data-aos="fade-right" data-aos-delay="200" data-aos-duration="800">
                    <div class="title">
                        <h6 class="title-primary">about Tamplate</h6>
                        <h1>a rich featured, epic & premium work.</h1>
                    </div>
                    <p>Suspendisse facilisis commodo lobortis. Nullam mollis lobortis ex vel faucibus. Proin nec viverra
                        turpis. Nulla eget justo scelerisque, pretium purus vel, congue libero. Suspendisse potenti.
                    </p>
                    <h5>Web Design & Development</h5>
                    <ul class="list-unstyled">
                        <li>Web Content</li>
                        <li>Website other</li>
                        <li>Fashion</li>
                        <li>Moblie & Tablette</li>
                    </ul>
                </div>
                <div class="col-xl-5 gallery">
                    <div class="row no-gutters h-100" id="lightgallery">
                        <a href="https://lorempixel.com/600/400/" class="w-50 h-100 gal-img" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="400">
                            <img class="img-fluid" src="{{ asset ('images/gallery1.jpg') }}" alt="Gallery Image">
                            <i class="fa fa-caret-right"></i>
                        </a>
                        <a href="https://lorempixel.com/600/400/" class="w-50 h-50 gal-img" data-aos="fade-up"
                            data-aos-delay="400" data-aos-duration="600">
                            <img class="img-fluid" src="{{ asset ('images/gallery2.jpg') }}" alt="Gallery Image">
                            <i class="fa fa-caret-right"></i>
                        </a>
                        <a href="https://lorempixel.com/600/400/" class="w-50 h-50 gal-img gal-img3" data-aos="fade-up"
                            data-aos-delay="0" data-aos-duration="600">
                            <img class="img-fluid" src="{{ asset ('images/gallery3.jpg') }}" alt="Gallery Image">
                            <i class="fa fa-caret-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Trust End -->
    <!-- Pricing Start -->
    
    <!-- Pricing End -->
    <!-- Testimonial and Clients Start -->
    <!-- <section class="testimonial-and-clients">
        <div class="container">
            <div class="testimonials">
                <div class="swiper-container test-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="{{ asset ('images/test1.png') }}" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">John</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">UI/UX
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="{{ asset ('images/test1.png') }}" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">John</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">UI/UX
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="{{ asset ('images/test1.png') }}" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">John</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">UI/UX
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
            <div class="clients" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="swiper-container clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset ('images/client1.png') }}" alt="Client 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset ('images/client2.png') }}" alt="Client 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset ('images/client3.png') }}" alt="Client 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset ('images/client4.png') }}" alt="Client 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset ('images/client5.png') }}" alt="Client 5">
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Testimonial and Clients End -->
    <!-- Call To Action 2 Start -->
   <!--  <section class="cta cta2" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="#" class="btn btn-primary">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Call To Action 2 End -->
    <!-- Footer Start -->
    <footer>
        <!-- Widgets Start -->
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget contact-widget" data-aos="fade-up" data-aos-delay="0">
                            <h6 class="widget-tiltle">Informacion sobre nosotros</h6>
                            <p>Al suscribirse a nuestra lista de correo, siempre estará actualizado con las últimas noticias nuestras.
                            
                            </p>
                            <div class="media">
                                <i class="fa fa-map-marker"></i>
                                <div class="media-body ml-3">
                                    <h6>Direccion</h6>
                                    San Pedro Av.Qr<br>
                                    Calle 520
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-envelope-o"></i>
                                <div class="media-body ml-3">
                                    <h6>¿Tiene alguna pregunta?</h6>
                                    <a href="mailto:support@steelthemes.com">SoporteTecnico@gmail.com</a>
                                </div>
                            </div>
                            <div class="media">
                                <i class="fa fa-phone"></i>
                                <div class="media-body ml-3">
                                    <h6>Contactos</h6>
                                    <a href="tel:+610791803458"> +593 980861340</a><br>
                                    <a href="tel:+610791803458"> +593 984689524</a><br>
                                    <a href="tel:+610791803458"> +02  2126545</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget twitter-widget" data-aos="fade-up" data-aos-delay="200">
                            <h6 class="widget-tiltle">Horarios de Atencion</h6>
                            <div class="media">
                                <!-- <i class="fa fa-twitter"></i> -->
                                <div class="media-body ml-3">
                                    <h6> Lunes a Viernes</h6>
                                    <span>8:00 a 18:00</span>
                                    <h6>Sabados</h6>
                                    <span>10:00 a 14:00</span>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="single-widget recent-post-widget" data-aos="fade-up" data-aos-delay="400">
                            <!-- <div class="media">
                                <a class="rcnt-img" href="#"><img src="{{ asset ('images/rcnt-post1.png') }}"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">An engaging</a></h6>
                                    <p><i class="fa fa-user"></i>Mano <i class="fa fa-eye"></i> 202 Views</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="{{ asset ('images/rcnt-post2.png') }}"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">Statistics and analysis. The key to succes.</a></h6>
                                    <p><i class="fa fa-user"></i>Rosias <i class="fa fa-eye"></i> 20 Views</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="{{ asset ('images/rcnt-post3.png') }}"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">Envato Meeting turns into a photoshooting.</a></h6>
                                    <p><i class="fa fa-user"></i>Kien <i class="fa fa-eye"></i> 74 Views</p>
                                </div>
                            </div>
                            <div class="media">
                                <a class="rcnt-img" href="#"><img src="{{ asset ('images/rcnt-post4.png') }}"
                                        alt="Recent Post"></a>
                                <div class="media-body ml-3">
                                    <h6><a href="#">An engaging embedded the video posts</a></h6>
                                    <p><i class="fa fa-user"></i>Robert <i class="fa fa-eye"></i> 48 Views</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3"> -->
                        <!-- <div class="single-widget tags-widget" data-aos="fade-up" data-aos-delay="800">
                            <h6 class="widget-tiltle">Popular Tags</h6>
                            <a href="#">Amazing</a>
                            <a href="#">Design</a>
                            <a href="#">Photoshop</a>
                            <a href="#">Art</a>
                            <a href="#">Wordpress</a>
                            <a href="#">jQuery</a>
                        </div> -->
                        <div class="single-widget subscribe-widget" data-aos="fade-up" data-aos-delay="800">
                            <h6 class="widget-tiltle">Suscribete</h6>
                            <p>Regístrese en nuestra lista de correo para recibir las últimas actualizaciones y ofertas</p>
                            <form class="" method="get">
                                <div class="input-group">
                                    <input class="field form-control" name="subscribe" type="email"
                                        placeholder="Email">
                                    <span class="input-group-btn">
                                        <button type="submit" name="submit-mail"><i class="fa fa-check"></i></button>
                                    </span>
                                </div>
                            </form>
                            <p>Respetamos tu privacidad</p>
                            <ul class="nav social-nav">
                                <li><a href="https://www.facebook.com/fh5co" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Widgets End -->
        <!-- Foot Note Start -->
        <div class="foot-note">
            <div class="container">
                <div
                    class="footer-content text-center text-lg-left d-lg-flex justify-content-between align-items-center">
                    <p class="mb-0" data-aos="fade-right" data-aos-offset="0">&copy; 2021 Todos los derechos son reservados SEYTU </p>
                    <p class="mb-0" data-aos="fade-left" data-aos-offset="0"><a
                            href="#">Privacidad y Seguridad</a></p>
                </div>
            </div>
        </div>
        <!-- Foot Note End -->
    </footer>
    <!-- Footer Endt -->
    <!--jQuery-->
    <script src=" {{ asset ('js/jquery-3.3.1.js') }}"></script>
    <!--Plugins-->
    <script src=" {{ asset ('js/bootstrap.bundle.js') }}"></script>
    <script src=" {{ asset ('js/loaders.css.js') }}"></script>
    <script src=" {{ asset ('js/aos.js') }}"></script>
    <script src=" {{ asset ('js/swiper.min.js') }}"></script>
    <script src=" {{ asset ('js/lightgallery-all.min.js') }}"></script>
    <!--Template Script-->
    <script src=" {{ asset ('js/main.js') }}"></script>
</body>

</html>