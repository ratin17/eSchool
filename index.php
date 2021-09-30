<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-School</title>

    <!-- Bootstrap cdn Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- OwlCarousel CDN Links-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />




    <!-- Font awesome cdn Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- My Custom css -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header secttion -->

    <header id="header">

        <div class="shadow-lg bg-body rounded my-5">
            <nav class="navbar navbar-expand-lg navbar-light m-3 h4">




                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>






                <a class="navbar-brand m-auto" href="#">
                    <img src="images/logo.png" alt="" width="100" height="80" class="d-inline-block align-text-center">
                    E-School
                </a>






                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                    <ul class="navbar-nav mb-2 mb-lg-0 m-auto font-roboto">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Categories</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#">Login</a>
                        </li>

                    </ul>

                </div>




                <div class="m-auto">
                    <form action="#" class="font-size-14 font-rale">
                        <a href="#" class="py-2 rounded-pill color-primary-bg">
                            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>




            </nav>
        </div>

    </header>



    <!-- main secttion -->

    <main id="main-site">

        <!-- Owl-carousel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./images/web1.jpg" alt="Banner1">
                </div>
                <div class="item">
                    <img src="./images/dsa1.png" alt="Banner2">
                </div>
                <div class="item">
                    <img src="./images/ds1.jpg" alt="Banner3">
                </div>
            </div>
        </section>
        <!-- !Owl-carousel ends-->


        <section id="top-courses">
            <div class="container py-5">
                <h4 class="font-rubik font-size-20">Top Courses</h4>
                <hr>

                <!-- owl carousel -->
                <div class="owl-carousel owl-theme">


                    <div class="item py-2">
                        <div class="course font-rale">
                            <a href="#"><img src="./images/web2.png" alt="course1" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Learn to Desgn a Website</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                            </div>
                        </div>
                    </div>


                    <div class="item py-2">
                        <div class="course font-rale">
                            <a href="#"><img src="./images/web3.png" alt="course2" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Learn to Desgn a Website</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                            </div>
                        </div>
                    </div>


                    <div class="item py-2">
                        <div class="course font-rale">
                            <a href="#"><img src="./images/dsa2.jpg" alt="course3" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Learn to Desgn a Website</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                            </div>
                        </div>
                    </div>



                    <div class="item py-2">
                        <div class="course font-rale">
                            <a href="#"><img src="./images/web4.jpg" alt="course4" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Learn to Desgn a Website</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                            </div>
                        </div>
                    </div>


                    <div class="item py-2">
                        <div class="course font-rale">
                            <a href="#"><img src="./images/dsa2.jpg" alt="course5" class="img-fluid"></a>
                            <div class="text-center">
                                <h6>Learn to Desgn a Website</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>
                                <div class="price py-2">
                                    <span>$152</span>
                                </div>
                                <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                            </div>
                        </div>
                    </div>



                    <div class="item py-2">
                        <div class="course font-rale">
                            <div class="d-flex flex-column">
                                <a href="#"><img src="./images/ds1.jpg" class="img-fluid" alt="course6"></a>
                                <div class="text-center">
                                    <h6>Data Science Basics</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$122</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Chose to Enrol</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- !owl carousel -->
            </div>
        </section>
        <!-- !Top Sale -->



        <!-- Categories -->
        <section id="catego">
            <div class="container">
                <h4 class="font-rale font-size-20">From categories</h4>
                <div id="filters" class="button-group text-right font-baloo font-size-16">
                    <button class="btn is-checked" data-filter="*">All Courses</button>
                    <button class="btn" data-filter=".dsa">DSA</button>
                    <button class="btn" data-filter=".web">Web</button>
                    <button class="btn" data-filter=".ds">Data Science</button>
                </div>

                <div class="grid">
                    <div class="grid-item web border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="course font-rale">
                                <a href="#"><img src="./images/web1.jpg" alt="course1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Web Course 1</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$ 13</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Choose to enrol</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="grid-item dsa border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="course font-rale">
                                <a href="#"><img src="./images/dsa2.jpg" alt="dsa2" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>DSA Course 2</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="grid-item ds border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="course font-rale">
                                <a href="#"><img src="./images/ds1.jpg" alt="ds1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>DS Course 1</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="grid-item web border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="course font-rale">
                                <a href="#"><img src="./images/web2.png" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Web 2</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Choose to Enrol</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item web border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="course font-rale">
                                <a href="#"><img src="./images/web3.png" alt="product1" class="img-fluid"></a>
                                <div class="text-center">
                                    <h6>Web 3</h6>
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <div class="price py-2">
                                        <span>$152</span>
                                    </div>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item  Redmi border ">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="../assets/products/4.png" class="img-fluid" alt="pro1"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7 Pro</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item  Redmi border ">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="../assets/products/5.png" class="img-fluid" alt="pro1"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7 Pro</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item  Redmi border ">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="../assets/products/6.png" class="img-fluid" alt="pro1"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7 Pro</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item  Redmi border">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="../assets/products/10.png" class="img-fluid" alt="pro1"></a>
                                    <div class="text-center">
                                        <h6>Redmi Note 7 Pro</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$152</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item Apple border  ">
                        <div class="item py-2" style="width: 200px;">
                            <div class="product font-rale">
                                <div class="d-flex flex-column">
                                    <a href="#"><img src="../assets/products/13.png" class="img-fluid" alt="pro1"></a>
                                    <div class="text-center">
                                        <h6>Apple iPhone 10</h6>
                                        <div class="rating text-warning font-size-12">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="far fa-star"></i></span>
                                        </div>
                                        <div class="price py-2">
                                            <span>$252</span>
                                        </div>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- !Special Price -->






    </main>

    <!-- footer section -->

    <footer id="footer" class="bg-dark text-white py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <h4 class="font-roboto font-size-20">E-School</h4>
                    <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit</p>
                </div>




                <div class="col-lg-4 col-12">
                    <h4 class="font-rubik font-size-20">Information</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">About Us</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Privacy Policy</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Terms & Conditions</a>
                    </div>
                </div>


                <div class="col-lg-4 col-12">
                    <h4 class="font-roboto font-size-20">Designed By</h4>
                    <div class="d-flex flex-column flex-wrap">
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Swapnil Bashar</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Mosiur Rahman</a>
                        <a href="#" class="font-rale font-size-14 text-white-50 pb-1">Mehrab rabbi ratin</a>
                    </div>
                </div>
            </div>
        </div>


    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p class="font-rale font-size-14">&copy; Copyrights 2021.</p>
    </div>
    <!-- Footer Ends -->



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha256-pTxD+DSzIwmwhOqTFN+DB+nHjO4iAsbgfyFq5K5bcE0=" crossorigin="anonymous"></script>


    <!--  isotope plugin cdn  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha256-CBrpuqrMhXwcLLUd5tvQ4euBHCdh7wGlDfNz8vbu/iI=" crossorigin="anonymous"></script>


    <!-- Custom Js -->
    <script src="./index.js"></script>
</body>

</html>