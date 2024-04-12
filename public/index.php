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
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="container-fluid p-0 mb-5" style="height: 450px;">
        <div class="row h-100">
            <div class="col image-text-container">
                <div class="banner-image h-100">
                    <div class="centered-text">
                        <h2>UNIQUELY <span id="banner-text-color">FRESH TASTE</span></h2>
                        <p>Try our tasty coffee bean. produced with unique taste.</p>
                        <a href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ads area 1 -->
    <div class="container mb-5">
        <div class="row h-100 g-3">

            <div class="col-md-6 image-text-container">
                <div class="ad1" style="height: 250px;">
                    <div class="centered-text">
                        <h3>SEASONAL COFFEE <br>FLAVOURS</h3>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 image-text-container">
                <div class="ad2" style="height: 250px;">
                    <div class="centered-text">
                        <h3>COFFEE BUNDLE <br>PACKAGES</h3>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Heading -->
    <div class="container">
        <div class="heading">
            <span>What happens here</span>
            <h2>COFFEE HOUSE MERCHANDISE</h2>
            <hr>
        </div>
    </div>

    <!-- Merchandise -->
    <div class="container mb-5">
        <!-- <div class="row h-100 g-3"> -->
        <div class="row g-3">
            <div class="col-6 col-md-3" id="item1">
                <img class="img-fluid" src="images/merch-img1.jpg" alt="Arabica - Extra Course">
                <h3>Arabica - Extra Course</h3>
                <span>*****</span>
                <p>$70.00</p>
            </div>

            <div class="col-6 col-md-3" id="item2">
                <img class="img-fluid" src="images/merch-img2.jpg" alt="Arabica - Fine Grind">
                <h3>Arabica - Fine Grind</h3>
                <span>*****</span>
                <p>$70.00</p>
            </div>

            <div class="col-6 col-md-3" id="item3">
                <img class="img-fluid" src="images/merch-img3.jpg" alt="French Vanilla">
                <h3>French Vanilla</h3>
                <span>*****</span>
                <p>$80.00</p>
            </div>

            <div class="col-6 col-md-3" id="item4">
                <img class="img-fluid" src="images/merch-img4.jpg" alt="Deluxe Chocolate">
                <h3>Deluxe Chocolate</h3>
                <span>*****</span>
                <p>$100.00</p>
            </div>


            <div class="col-6 col-md-3" id="item5">
                <img class="img-fluid" src="images/merch-img5.jpg" alt="Original Beans">
                <h3>Original Beans</h3>
                <span>*****</span>
                <p>$100.00</p>
            </div>

            <div class="col-6 col-md-3" id="item6">
                <img class="img-fluid" src="images/merch-img6.jpg" alt="Paper Pouch">
                <h3>Paper Pouch</h3>
                <span>*****</span>
                <p>$71.00</p>
            </div>

            <div class="col-6 col-md-3" id="item7">
                <img class="img-fluid" src="images/merch-img7.jpg" alt="Freshly Picked">
                <h3>Freshly Picked</h3>
                <span>*****</span>
                <p>$71.00</p>
            </div>

            <div class="col-6 col-md-3" id="item8">
                <img class="img-fluid" src="images/merch-img8.jpg" alt="Mug">
                <h3>Mug</h3>
                <span>*****</span>
                <p>$25.00</p>
            </div>

        </div>
    </div>

    <!-- Discount -->
    <div class="container mb-5" style="height: 250px;">
        <div class="row h-100 g-3">
            <div class="col-md image-text-container">
                <div class="discount-image h-100">
                    <div class="centered-text">
                        <p id="discount-text1">We brew them fresh daily</p>
                        <p id="discount-text2">MEMBER'S DISCOUNTS UP TO 40%</p>
                        <button>View Products</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Heading -->
    <div class="container">
        <div class="heading">
            <span>What happens here</span>
            <h2>MERCHANDISE SALE</h2>
            <hr>
        </div>
    </div>


    <!-- Sale -->
    <div class="container mb-5">
        <div class="row g-3">
            <div class="col-6 col-md-3" id="item9">
                <img class="img-fluid" src="images/merch-img9.jpg" alt="Arabica with cup">
                <h3>Arabica with cup</h3>
                <span>*****</span>
                <p>$90.00</p>
            </div>

            <div class="col-6 col-md-3" id="item10">
                <img class="img-fluid" src="images/merch-img10.jpg" alt="Double Arabica">
                <h3>Double Arabica</h3>
                <span>*****</span>
                <p>$120.00</p>
            </div>

            <div class="col-6 col-md-3" id="item11">
                <img class="img-fluid" src="images/merch-img11.jpg" alt="Paper Pouch">
                <h3>Paper Pouch</h3>
                <span>*****</span>
                <p>$100.00</p>
            </div>

            <div class="col-6 col-md-3" id="item12">
                <img class="img-fluid" src="images/merch-img12.jpg" alt="Double Mug">
                <h3>Double Mug</h3>
                <span>*****</span>
                <p>$40.00</p>
            </div>
        </div>
    </div>

    <!-- Ads area 2 -->
    <div class="container mb-5">
        <div class="row g-3">

            <div class="col-md-6 image-text-container">
                <div class="ad3" style="height: 250px;">
                    <div class="centered-text">
                        <h3>COFFEE BEAN <br>VARIETIES</h3>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 image-text-container">
                <div class="ad4" style="height: 250px;">
                    <div class="centered-text">
                        <h3>OUR BARISTA'S <br>FAVORITE</h3>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md image-text-container">
                <div class="ad5" style="height: 250px;">
                    <div class="centered-text">
                        <h3>THE COFFEE - BEST <br>SELLERS</h3>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>

            <div class="col-md image-text-container">
                <div class="ad6" style="height: 250px;">
                    <div class="centered-text">
                        <h3>MORE THAN JUST <br>THE COFFEE</h3>
                        <a href="#">READ MORE</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Heading -->
    <div class="container">
        <div class="heading">
            <h2>RESERVATION FORM</h2>
            <hr>
        </div>
    </div>

    <!-- Forms -->
    <form action="">
        <div class="container mb-5">
            <div class="row">
                <div class="col-md-6">
                    <label for="fname">Full Name</label>
                    <input type="text" id="full-name" placeholder="Last Name, First Name">

                    <label for="email">Email Address</Address></label>
                    <input type="email" id="email" placeholder="mail@mail.com">

                    <label for="phone">Phone Number</label>
                    <input type="text" id="phone" placeholder="(+63) 912345678">

                    <p class="forms-heading">Reservation Details</p>

                    <label for="num-guest">Number of Guest</label>
                    <select name="num-guest" id="num-guest">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="more than 4">more than 4</option>
                    </select>

                    <label for="date">Reservation Date</label>
                    <input type="date" name="date" id="date">

                    <p class="forms-heading">Reservation Time</p>
                    <div class="radio-container">
                        <input class="radio-input" type="radio" name="time" id="morning" value="morning">
                        <label class="radio-label" for="morning">Morning</label>
                        <input class="radio-input" type="radio" name="time" id="afternoon" value="afternoon">
                        <label class="radio-label" for="afternoon">Afternoon</label>
                        <input class="radio-input" type="radio" name="time" id="night" value="night">
                        <label class="radio-label" for="night">Night</label>
                    </div>
                </div>

                <div class="col-md-6">
                    <label for="request">Additional Request</label>
                    <textarea name="request" id="request" cols="" rows=""></textarea>

                    <p id="payment-title">PAYMENT</p>
                    <img id="payment-cards" src="images/reservation-cards.png" alt="reservation-cards">

                    <p class="forms-heading">Payment Accepted Cards</p>

                    <label for="pay-name">Full Name</label>
                    <input type="text" id="pay-name" placeholder="John Doe">

                    <label for="card-num">Credit Card Number</label>
                    <input type="text" id="card-num" placeholder="1234567890">

                    <input type="checkbox" name="terms" id="terms">
                    <label id="terms-label" for="terms">I agree in the terms and conditions.</label>

                    <button id="send-button">SEND</button>
                </div>
            </div>
        </div>
    </form>

    <!-- Info -->
    <div class="container-fluid info-bg-img">
        <div class="container">
            <div class="row g-3">
                <!-- Opening Hours -->
                <div class="col-6 col-md-3">
                    <h3>Opening Hours</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Day</th>
                                <th>........</th>
                                <th>Availability</th>
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

                <!-- Latest Post -->
                <div class="col-6 col-md-3">
                    <h3>Latest Post</h3>
                    <h4>Expand your Mind. Change Everything</h4>
                    <p>20-Mar-2024</p>
                    <h4>Places to Get Lost</h4>
                    <p>18-Mar-2024</p>
                    <h4>How to Brew Aromatic Coffee</h4>
                    <p>15-Mar-2024</p>
                    <h4>Elevate your Expectation</h4>
                    <p>12-Mar-2024</p>
                </div>

                <!-- Contact us -->
                <div class="col-6 col-md-3">
                    <h3>Contact us</h3>
                    <p>
                        info@xxxxxxxx.com<br>
                        1-444-123-xxxx<br>
                        Xxxx Boulevard 224. New York
                    </p>
                    <h3>The last standard post</h3>
                    <form action="#">
                        <input type="text" name="search" id="search">
                        <button id="search-btn">SEARCH</button>
                    </form>
                </div>

                <!-- Other locations -->
                <div class="col-6 col-md-3">
                    <h3>Other locations</h3>
                    <h4>Coffee Bean Philippines</h4>
                    <p>
                        1234 Xxxx Park<br>
                        Cebu City
                    </p>
                    <h4>Coffee Bean Japan</h4>
                    <p>
                        1234 Xxxxxxx<br>
                        Xxxx City, Tokyo, Japan
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid" style="background-color: #19100f">
        <div class="container">
            <div class="row">
                <!-- Logo -->
                <div class="col-md-4">
                    <div class="logo">
                        <a href="#">COFFEE BEAN</a>
                    </div>
                </div>

                <!-- SNS-links -->
                <div class="col-md-4">
                    <div class="sns-links">
                        <a href="https://www.facebook.com/" target="_blank">
                            <img class="img-fluid" src="images/icon-fb.png" alt="" style="width: 32px;">
                        </a>
                        <a href="https://www.instagram.com/" target="_blank">
                            <img src="images/icon-ig.png" alt="" style="width: 32px;">
                        </a>
                        <a href="https://twitter.com/" target="_blank">
                            <img src="images/icon-tw.png" alt="" style="width: 32px;">
                        </a>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="col-md-4">`
                    <div class="copyright">
                        <p>&copy; 2024 | xxxxxxxx (Coded by Yasuhiro W)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>