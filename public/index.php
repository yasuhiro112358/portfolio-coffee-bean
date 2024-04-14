<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFFEE BEAN</title>
    <link rel="stylesheet" href="css/reset.css">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">COFFEE BEAN</a>
            <button class="navbar-toggler d-lg-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Merchandise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Discount</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">On Sale</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner -->
    <div class="container-fluid p-0 mb-5">
        <div class="row">
            <div class="col image-text-container">
                <div class="banner-image d-flex justify-content-center align-items-center">
                    <div class="banner-text p-3">
                        <h2 class="display-3">UNIQUELY <span id="banner-text-color">FRESH TASTE</span></h2>
                        <p>Try our tasty coffee bean. produced with unique taste.</p>
                        <a href="#" class="btn btn-dark text-light border-0">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ads area 1 -->
    <div class="container mb-5">
        <div class="row g-3">

            <div class="col-md-6 image-text-container">
                <div class="ad-image ad1-image d-flex justify-content-center align-items-center">
                    <div class="ad-text p-3">
                        <h3 class="fs-4">SEASONAL COFFEE <br>FLAVOURS</h3>
                        <a class="text-white" href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 image-text-container">
                <div class="ad-image ad2-image d-flex justify-content-center align-items-center">
                    <div class="ad-text p-3">
                        <h3 class="fs-4">COFFEE BUNDLE <br>PACKAGES</h3>
                        <a class="text-white" href="#">READ MORE</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Heading -->
    <div class="container mb-3">
        <div class="w-75 mx-auto text-center heading">
            <span class="fst-italic">What happens here</span>
            <h2 class="m-0 fs-5">COFFEE HOUSE MERCHANDISE</h2>
            <hr class="border-2 m-0">
        </div>
    </div>

    <!-- Merchandise -->
    <div class="container mb-5">
        <div class="row g-3">

            <div class="col-6 col-md-3" id="item1">
                <img class="img-fluid" src="images/merch-img1.jpg" alt="Arabica - Extra Course">
                <h3 class="fs-6 fw-bold">Arabica - Extra Course</h3>
                <span>*****</span>
                <p>$70.00</p>
            </div>

            <div class="col-6 col-md-3" id="item2">
                <img class="img-fluid" src="images/merch-img2.jpg" alt="Arabica - Fine Grind">
                <h3 class="fs-6 fw-bold">Arabica - Fine Grind</h3>
                <span>*****</span>
                <p>$70.00</p>
            </div>

            <div class="col-6 col-md-3" id="item3">
                <img class="img-fluid" src="images/merch-img3.jpg" alt="French Vanilla">
                <h3 class="fs-6 fw-bold">French Vanilla</h3>
                <span>*****</span>
                <p>$80.00</p>
            </div>

            <div class="col-6 col-md-3" id="item4">
                <img class="img-fluid" src="images/merch-img4.jpg" alt="Deluxe Chocolate">
                <h3 class="fs-6 fw-bold">Deluxe Chocolate</h3>
                <span>*****</span>
                <p>$100.00</p>
            </div>


            <div class="col-6 col-md-3" id="item5">
                <img class="img-fluid" src="images/merch-img5.jpg" alt="Original Beans">
                <h3 class="fs-6 fw-bold">Original Beans</h3>
                <span>*****</span>
                <p>$100.00</p>
            </div>

            <div class="col-6 col-md-3" id="item6">
                <img class="img-fluid" src="images/merch-img6.jpg" alt="Paper Pouch">
                <h3 class="fs-6 fw-bold">Paper Pouch</h3>
                <span>*****</span>
                <p>$71.00</p>
            </div>

            <div class="col-6 col-md-3" id="item7">
                <img class="img-fluid" src="images/merch-img7.jpg" alt="Freshly Picked">
                <h3 class="fs-6 fw-bold">Freshly Picked</h3>
                <span>*****</span>
                <p>$71.00</p>
            </div>

            <div class="col-6 col-md-3" id="item8">
                <img class="img-fluid" src="images/merch-img8.jpg" alt="Mug">
                <h3 class="fs-6 fw-bold">Mug</h3>
                <span>*****</span>
                <p>$25.00</p>
            </div>

        </div>
    </div>

    <!-- Discount -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md image-text-container">
                <div class="discount-image d-flex justify-content-center align-items-center">
                    <div class="discount-text text-center p-3">
                        <p class="discount-text1 fst-italic">We brew them fresh daily</p>
                        <p class="discount-text2 fs-4">MEMBER'S DISCOUNTS UP TO 40%</p>
                        <button class="btn btn-light text-white border-0">View Products</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Heading -->
    <div class="container mb-3">
        <div class="w-75 mx-auto text-center heading">
            <span class="fst-italic">What happens here</span>
            <h2 class="m-0 fs-5">MERCHANDISE SALE</h2>
            <hr class="border-2 m-0">
        </div>
    </div>

    <!-- Sale -->
    <div class="container mb-5">
        <div class="row g-3">

            <div class="col-6 col-md-3" id="item9">
                <img class="img-fluid" src="images/merch-img9.jpg" alt="Arabica with cup">
                <h3 class="fs-6 fw-bold">Arabica with cup</h3>
                <span>*****</span>
                <p>$90.00</p>
            </div>

            <div class="col-6 col-md-3" id="item10">
                <img class="img-fluid" src="images/merch-img10.jpg" alt="Double Arabica">
                <h3 class="fs-6 fw-bold">Double Arabica</h3>
                <span>*****</span>
                <p>$120.00</p>
            </div>

            <div class="col-6 col-md-3" id="item11">
                <img class="img-fluid" src="images/merch-img11.jpg" alt="Paper Pouch">
                <h3 class="fs-6 fw-bold">Paper Pouch</h3>
                <span>*****</span>
                <p>$100.00</p>
            </div>

            <div class="col-6 col-md-3" id="item12">
                <img class="img-fluid" src="images/merch-img12.jpg" alt="Double Mug">
                <h3 class="fs-6 fw-bold">Double Mug</h3>
                <span>*****</span>
                <p>$40.00</p>
            </div>

        </div>
    </div>

    <!-- Ads area 2 -->
    <div class="container mb-5">
        <div class="row g-3">

            <div class="col-md-6 image-text-container">
                <div class="ad-image ad3-image d-flex justify-content-center align-items-center">
                    <div class="ad-text  p-3">
                        <h3 class="fs-4">COFFEE BEAN <br>VARIETIES</h3>
                        <a class="text-white" href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 image-text-container">
                <div class="ad-image ad4-image d-flex justify-content-center align-items-center">
                    <div class="ad-text p-3">
                        <h3 class="fs-4">OUR BARISTA'S <br>FAVORITE</h3>
                        <a class="text-white" href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 image-text-container">
                <div class="ad-image ad5-image d-flex justify-content-center align-items-center">
                    <div class="ad-text p-3">
                        <h3 class="fs-4">THE COFFEE - BEST <br>SELLERS</h3>
                        <a class="text-white" href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 image-text-container">
                <div class="ad-image ad6-image d-flex justify-content-center align-items-center">
                    <div class="ad-text p-3">
                        <h3 class="fs-4">MORE THAN JUST <br>THE COFFEE</h3>
                        <a class="text-white" href="#">READ MORE</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Heading -->
    <div class="container mb-3">
        <div class="w-75 mx-auto text-center heading">
            <h2 class="m-0 fs-5 ">RESERVATION FORM</h2>
            <hr class="border-2 m-0">
        </div>
    </div>

    <!-- Forms -->
    <form action="">
        <div class="container mb-5">
            <div class="row">
                <!-- Col 1 -->
                <div class="col-md-6 pt-3 px-4 form-items-container">
                    <!-- Full Name -->
                    <div class="row mb-3">
                        <label for="full-name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="full-name" placeholder="Last Name, First Name">
                    </div>
                    <!-- Email Address -->
                    <div class="row mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="mail@mail.com">
                    </div>
                    <!-- Phone Number -->
                    <div class="row mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="(+63) 912345678">
                    </div>

                    <!-- Heading -->
                    <div class="row">
                        <h4 class="fs-6 fw-bold text-center mb-3">Reservation Details</h4>
                    </div>

                    <!-- Number of Guest -->
                    <div class="row mb-3">
                        <label for="num-guest" class="form-label">Number of Guest</label>
                        <select class="form-select" name="num-guest" id="num-guest">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="more than 4">more than 4</option>
                        </select>
                    </div>

                    <!-- Reservation Date -->
                    <div class="row mb-3">
                        <label for="date" class="form-label">Reservation Date</label>
                        <input type="date" class="form-control" name="date" id="date">
                    </div>

                    <!-- Heading -->
                    <div class="row mb-3">
                        <h4 class="fs-6 fw-bold text-center">Reservation Time</h4>
                    </div>

                    <!-- Reservation Time -->
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="time" id="morning" value="morning">
                        <label class="form-check-label" for="morning">Morning</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="time" id="afternoon" value="afternoon">
                        <label class="form-check-label" for="afternoon">Afternoon</label>
                    </div>
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="radio" name="time" id="night" value="night">
                        <label class="form-check-label" for="night">Night</label>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="col-md-6 pt-3 px-4 form-items-container">
                    <!-- Additional Request -->
                    <div class="row mb-3">
                        <label for="request" class="form-label">Additional Request</label>
                        <textarea name="request" class="form-control" id="request" cols="" rows="5"></textarea>
                    </div>

                    <!-- PAYMENT -->
                    <div class="row mb-3">
                        <h4 class="m-0 fs-6 fw-bold text-center">PAYMENT</h4>
                        <img class="image-fluid w-50 mx-auto" id="payment-cards" src="images/reservation-cards.png" alt="reservation-cards">
                    </div>

                    <!-- Heading -->
                    <div class="row mb-3">
                        <h4 class="fs-6 fw-bold text-center">Payment Accepted Cards</h4>
                    </div>

                    <!-- Card Name -->
                    <div class="row mb-3">
                        <label for="card-name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="card-name" placeholder="JOHN DOE">
                    </div>

                    <!-- Card Number -->
                    <div class="row mb-3">
                        <label for="card-num" class="form-label">Credit Card Number</label>
                        <input type="text" class="form-control" id="card-num" placeholder="1234567890">
                    </div>

                    <!-- Terms -->
                    <div class="form-check form-check-inline mb-3">
                        <input class="form-check-input" type="checkbox" id="terms" name="terms">
                        <label class="form-check-label" for="terms">I agree in the terms and conditions.</label>
                    </div>

                    <!-- Send button -->
                    <div class="row mb-3">
                        <button class="btn btn-light text-dark w-100 form-send-button">SEND</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Info -->
    <div class="container-fluid info-bg-img text-white">
        <div class="container info-container">
            <div class="row py-4 g-3">

                <!-- Opening Hours -->
                <div class="col-md-6 col-lg-3 pb-3">
                    <h3 class="mb-3 fs-5 fw-bold">Opening Hours</h3>

                    <div class="table-responsive">
                        <table class="table table-dark table-sm table-borderless info-table">
                            <thead>
                                <tr class="fw-bold">
                                    <th class="text-center" scope="col">Day</th>
                                    <th scope="col">........</th>
                                    <th scope="col">Availability</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Monday</td>
                                    <td>........</td>
                                    <td>Closed</td>
                                </tr>
                                <tr>
                                    <td>Tuesday</td>
                                    <td>........</td>
                                    <td>9:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Wednesday</td>
                                    <td>........</td>
                                    <td>Closed</td>
                                </tr>
                                <tr>
                                    <td>Thursday</td>
                                    <td>........</td>
                                    <td>9:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Friday</td>
                                    <td>........</td>
                                    <td>9:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Saturday</td>
                                    <td>........</td>
                                    <td>9:00-22:00</td>
                                </tr>
                                <tr>
                                    <td>Sunday</td>
                                    <td>........</td>
                                    <td>9:00-22:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <!-- Latest Post -->
                <div class="col-md-6 col-lg-3 pb-3">
                    <h3 class="mb-3 fs-5 fw-bold">Latest Post</h3>
                    <div class="mb-1">
                        <h4 class="fs-6 fw-bold m-0">Expand your Mind. Change Everything</h4>
                        <p class="m-0">20-Mar-2024</p>
                    </div>
                    <div class="mb-1">
                        <h4 class="fs-6 fw-bold m-0">Places to Get Lost</h4>
                        <p class="m-0">18-Mar-2024</p>
                    </div>
                    <div class="mb-1">
                        <h4 class="fs-6 fw-bold m-0">How to Brew Aromatic Coffee</h4>
                        <p class="m-0">15-Mar-2024</p>
                    </div>
                    <div class="mb-1">
                        <h4 class="fs-6 fw-bold m-0">Elevate your Expectation</h4>
                        <p class="m-0">12-Mar-2024</p>
                    </div>
                </div>

                <!-- Contact us -->
                <div class="col-md-6 col-lg-3 pb-3">
                    <!-- Contact us -->
                    <div class="row pb-3">
                        <h3 class="mb-3 fs-5 fw-bold">Contact us</h3>
                        <p>
                            info@xxxxxxxx.com<br>
                            1-444-123-xxxx<br>
                            Xxxx Boulevard 224. New York
                        </p>
                    </div>

                    <!-- The last standard post -->
                    <div class="row">
                        <h3 class="mb-3 fs-5 fw-bold">The last standard post</h3>
                        <form action="#">
                            <div class="row">
                                <div class="col-8 col-lg-12 mb-1">
                                    <input type="text" class="form-control" name="search" id="search">
                                </div>
                                <div class="col-4 col-lg-12 mb-1">
                                    <button class="btn btn-light text-dark border-0 w-100 search-button">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Other locations -->
                <div class="col-md-6 col-lg-3 pb-3">
                    <h3 class="mb-3 fs-5 fw-bold">Other locations</h3>

                    <div class="mb-1">
                        <h4 class="fs-6 fw-bold m-0">Coffee Bean Philippines</h4>
                        <p class="m-0">
                            1234 Xxxx Park<br>
                            Cebu City
                        </p>
                    </div>

                    <div class="mb-1">
                        <h4 class="fs-6 fw-bold m-0">Coffee Bean Japan</h4>
                        <p class="m-0">
                            1234 Xxxxxxx<br>
                            Xxxx City, Tokyo, Japan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid footer-bg-color text-white text-center">
        <div class="container py-2">
            <div class="row">
                <!-- Logo -->
                <div class="col-md-4 d-flex justify-content-center align-items-center py-2">
                    <a href="#" class="text-decoration-none text-white fs-5 fw-bold ">COFFEE BEAN</a>
                </div>

                <!-- SNS-links -->
                <div class="col-md-4 d-flex justify-content-center align-items-center py-2">
                    <div class="sns-links">
                        <a href="https://www.facebook.com/" target="_blank" class="d-inline-block">
                            <img class="img-fluid" src="images/icon-fb.png" alt="">
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="d-inline-block">
                            <img src="images/icon-ig.png" alt="">
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="d-inline-block">
                            <img src="images/icon-tw.png" alt="">
                        </a>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-md-4 d-flex justify-content-center align-items-center py-2">
                    <p class="m-0">&copy; 2024 | Yasuhiro W</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>