<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Milky - Dairy Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-light">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 bg-secondary d-inline-flex align-items-center text-dark py-2 px-4">
                    <span class="me-2 fw-semi-bold"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span>+012 345 6789</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
        <a href="index.php" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">Milky</h1>
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="login.php" class="nav-item nav-link">Login</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Services</a>
                <a href="product.php" class="nav-item nav-link">Products</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="gallery.html" class="dropdown-item">Gallery</a>
                        <a href="feature.html" class="dropdown-item">Features</a>
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <div class="border-start ps-4 d-none d-lg-block">
                <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to our dairy farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">The Farm of Dairy products</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to our dairy farm</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">Best Organic Dairy Products</h1>
                                    <a href="" class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <h1 class="display-1 mb-0">25</h1>
                                <small class="fs-5 fw-bold">Years Experience</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="img/service-1.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="img/service-2.jpg">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="img/service-3.jpg">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Know About Our Dairy Farm & Our History</h1>
                    <p class="mb-4">Certainly! Here's a revised version about the history of dairy cows in English: Throughout history, dairy cows have played a significant role in agriculture. They have been selectively bred for milk production, evolving from ancient
                        domesticated cattle to specialized breeds known for their high milk yield. This evolution has been influenced by human needs for dairy products like milk, cheese, and butter, shaping the development of dairy farming practices worldwide.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/service.png" alt="">
                            <h5 class="mb-3">Dedicated Services</h5>
                            <span>Our dedicated service is built on a commitment to excellence, integrity, and personalized care. We strive to exceed expectations by delivering exceptional quality and unwavering support to every client, ensuring their satisfaction and success.</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="img/product.png" alt="">
                            <h5 class="mb-3">Organic Products</h5>
                            <span>Our dedicated service is built on a commitment to excellence, integrity, and personalized care. We strive to exceed expectations by delivering exceptional quality and unwavering support to every client, ensuring their satisfaction and success.</span>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="">Explore More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Why Us!</p>
                    <h1 class="mb-4">Few Reasons Why People Choosing Us!</h1>
                    <p class="mb-4">Certainly! Here's a revised version about the history of dairy cows in English: Throughout history, dairy cows have played a significant role in agriculture. They have been selectively bred for milk production, evolving from ancient
                        domesticated cattle to specialized breeds known for their high milk yield. This evolution has been influenced by human needs for dairy products like milk, cheese, and butter, shaping the development of dairy farming practices worldwide.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Justo magna erat amet</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Clita erat ipsum et lorem et sit</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="">Explore More</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/experience.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">25</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Years Experience</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/award.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">183</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Award Winning</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/animal.png" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">2619</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Total Animals</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="img/client.png" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">51940</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Banner Start -->
    <div class="container-fluid banner my-5 py-5" data-parallax="scroll" data-image-src="img/banner.jpg">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="img/banner-1.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">We Sell Best Dairy Products</h2>
                            <p class="text-white mb-4">Our dedicated service is built on a commitment to excellence, integrity, and personalized care. We strive to exceed expectations by delivering exceptional quality and unwavering support to every client, ensuring their satisfaction
                                and success.</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="img/banner-2.jpg" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">We Deliver Fresh Mild Worldwide</h2>
                            <p class="text-white mb-4">Our dedicated service is built on a commitment to excellence, integrity, and personalized care. We strive to exceed expectations by delivering exceptional quality and unwavering support to every client, ensuring their satisfaction
                                and success.</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Services</p>
                <h1 class="mb-5">Services That We Offer For Entrepreneurs</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-1.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Best Animal Selection</h4>
                                <p class="mb-4">Certainly! Here's a paragraph about the cow: "The cow is widely recognized as one of the most important domesticated animals in human history. Renowned for its gentle demeanor and remarkable utility, cows have been indispensable
                                    to agricultural societies for centuries. They provide a rich source of milk, which is not only consumed fresh but also processed into various dairy products like cheese, butter, and yogurt. Additionally, cows are valued
                                    for their meat, leather, and even their dung, which has been historically used as a valuable fertilizer. Their docile nature and ability to thrive in diverse environments have solidified their place as a cornerstone
                                    of sustainable agriculture and a symbol of agricultural abundance worldwide."</p>
                                <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-2.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Breeding & Veterinary</h5>
                            <p class="mb-4">Certainly! Here's a paragraph about the cow: "The cow is widely recognized as one of the most important domesticated animals in human history. Renowned for its gentle demeanor and remarkable utility, cows have been indispensable
                                to agricultural societies for centuries. They provide a rich source of milk, which is not only consumed fresh but also processed into various dairy products like cheese, butter, and yogurt. Additionally, cows are valued
                                for their meat, leather, and even their dung, which has been historically used as a valuable fertilizer. Their docile nature and ability to thrive in diverse environments have solidified their place as a cornerstone of
                                sustainable agriculture and a symbol of agricultural abundance worldwide.".</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle" src="img/service-3.jpg" alt="">
                            </div>
                            <h5 class="mb-3">Care & Milking</h5>
                            <p class="mb-4">Certainly! Here's a paragraph about the cow: "The cow is widely recognized as one of the most important domesticated animals in human history. Renowned for its gentle demeanor and remarkable utility, cows have been indispensable
                                to agricultural societies for centuries. They provide a rich source of milk, which is not only consumed fresh but also processed into various dairy products like cheese, butter, and yogurt. Additionally, cows are valued
                                for their meat, leather, and even their dung, which has been historically used as a valuable fertilizer. Their docile nature and ability to thrive in diverse environments have solidified their place as a cornerstone of
                                sustainable agriculture and a symbol of agricultural abundance worldwide.".</p>
                            <a class="btn btn-square rounded-circle" href=""><i class="bi bi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-5.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-5.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-1.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-1.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-2.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-2.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-6.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-6.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-7.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-7.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-3.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-4.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="img/gallery-8.jpg" data-lightbox="gallery">
                            <img class="img-fluid" src="img/gallery-8.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


        <!-- DB FETCH START -->

    <?php
        // PHP code to fetch and display dishes
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dairy";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to retrieve all dishes
        $sql = "SELECT id, name, description, price,  url FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
           echo'<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                    <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
                </div>
               
                <div class="row gx-4">';

            // Loop through each row of the result set
            while ($row = $result->fetch_assoc()) {
                echo'<div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid" src="'.$row['url'].'" alt="">
                        <div class="product-overlay">
                            <a class="btn btn-square btn-secondary rounded-circle m-1"><button onclick="addtocart(\''.$row['name'].'\','.$row['price'].')"> <i class="bi bi-cart"></button></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block h5" href="">'.$row['name'].'</a>
                         <a class="d-block h5" href="">'.$row['description'].'</a>
                        <span class="text-primary me-1">'.$row['price'].'</span>
                    </div>
                </div>
            </div>';
                
            }

            echo '</div>'; 
            echo '</div>'; 
            echo '</div>'; 
            echo '</div>'; 
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>




<div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Your Orders</p>
                <h1 class="mb-5">

      


<hr>

<h3 style="text-align: center;" id="cart">~ Empty</h3>
<h3><strong id="realprice">0</strong></h3>
<hr>
<button style="background-color: gray; color:white"  onclick="checkout()" class="btn btn--small">Place Order</button>

</div>
                </h1>
            </div>
        
        </div>
    </div>


    <!-- Order Ends -->
        <!-- DB FETCH END -->

    <!-- Product Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Products</p>
                <h1 class="mb-5">Our Dairy Products For Healthy Living</h1>
            </div>
          
            <div class="row gx-4"> -->


                <!-- Row 1
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="product-item">
                     <div class="position-relative">
                            <img class="img-fluid" src="img/product-1.jpg" alt="">
                            <div class="product-overlay">
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-link"></i></a>
                                <a class="btn btn-square btn-secondary rounded-circle m-1" href=""><i class="bi bi-cart"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <a class="d-block h5" href="">Pure Milk</a>
                            <span class="text-primary me-1">$19.00</span>
                            <span class="text-decoration-line-through">$29.00</span>
                        </div>
                    </div>
                </div> -->
                <!-- ROW 2 -->
             
               
                
            </div>
        </div>
    </div>
    <!-- Product End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Team</p>
                <h1 class="mb-5">Experienced Team Members</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="img/team-1.jpg" alt="">
                        <h5>Adam Crew</h5>
                        <p class="text-primary">Founder</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="img/team-2.jpg" alt="">
                        <h5>Doris Jordan</h5>
                        <p class="text-primary">Veterinarian</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded p-4">
                        <img class="img-fluid rounded mb-4" src="img/team-3.jpg" alt="">
                        <h5>Jack Dawson</h5>
                        <p class="text-primary">Farmer</p>
                        <div class="d-flex justify-content-center">
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-secondary rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Testimonial</p>
                <h1 class="mb-5">What People Say About Our Dairy Farm</h1>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-img">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-4.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">As a professional cow, I believe in the power of green pastures and the joy of grazing under the open sky.</p>
                            <h5>Bo Vine, Grassland Expert</h5>
                            <span class="text-primary">Moo-ologist</span>
                        </div>

                        <!-- Testimonial 2 -->
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">In my experience as a seasoned cow, nothing refreshes like a drink from a clear stream after a day of thoughtful cud-chewing.</p>
                            <h5>Daisy Hornsby, Cud Connoisseur</h5>
                            <span class="text-primary">Ruminant Analyst</span>
                        </div>

                        <!-- Testimonial 3 -->
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">Being a professional cow, I find solace under the shade of an ancient oak, where the breeze whispers secrets of the pasture.</p>
                            <h5>Clara Bovina, Bovine Arboreal Specialist</h5>
                            <span class="text-primary">Pasture Philosopher</span>
                        </div>

                        <!-- Testimonial 4 -->
                        <div class="testimonial-item">
                            <img class="img-fluid mb-3" src="img/testimonial-4.jpg" alt="">
                            <p class="fs-5">As a dedicated cow, I understand the importance of a good scratch on a sturdy fencepost to maintain a healthy hide.</p>
                            <h5>Benny Bovine, Dermatological Consultant</h5>
                            <span class="text-primary">Scratchology Expert</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Our Office</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-secondary rounded-circle me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <a class="btn btn-link" href="insert-prooduct.php">Add Products</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Business Hours</h5>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-secondary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-secondary text-body copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-semi-bold" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

<script>
    function addtocart(name, price)
    {
        console.log(name);
        console.log(price);

        
        
    }
</script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>

var carts = [];


function addtocart(name, price){
console.log(name,price);

carts.push({'name':name,"price":price});
//once inserted display the orders

display_orders();
}


function display_orders()
{

    console.log(carts);
var order_head =document.getElementById('order_head');
//checking cond
if(carts.length>0)
{
    
var cartelements =document.getElementById('cart')
cartelements.innerHTML ="";
carts.forEach(item =>{
    var itemDiv = document.createElement('div');
itemDiv.classList.add('card', 'mb-3');// Optional: Add a class for styling
// Create the HTML content for the item
itemDiv.innerHTML = `
 <div class="card-body">
        <h5 class="card-title">${item.name}</h5>
        <p class="card-text">₹ ${item.price}</p>
    </div>
`;

// Append the item div to the cart element
cartelements.appendChild(itemDiv);

    
});
addprice();
}

}


function addprice()
{
  let total = 0;

  carts.forEach(item=>{
            total += item.price;
        });
    document.getElementById('realprice').textContent = ` Total Price ₹${total}`;


}

function checkout()
{

if(carts.length>0)
{
    window.alert("Order Has Been Placed");
    carts.pop;
    var cartelements =document.getElementById('cart')
    cartelements.innerHTML ="";
    var order_head =document.getElementById('order_head');

        order_head.innerHTML ="";
        document.getElementById('realprice').textContent = ` Total Price ₹ 0`;

}
else
{
    window.alert("Pls Select Some Product");

}
}



</script>
</body>

</html>