<?php
include('inc/link.php');
include('inc/header.php');

?>
<!-- carousal -->
<div class="container-fluid">
    <div class="swiper swiper-container mt-4">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/carousel/IMG_15372.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/IMG_40905.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/IMG_55677.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/IMG_62045.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/IMG_93127.png" class="w-100 d-block" />
            </div>
            <div class="swiper-slide">
                <img src="images/carousel/IMG_99736.png" class="w-100 d-block" />
            </div>
        </div>

    </div>
</div>
<!-- check availabiltiy -->
<div class="container  ">
    <div class="row ">
        <div class="col-lg-12 bg-white shadow p-4 rounded availabiltiy">
            <h5 class="text-center">Check Booking Availability</h5>
            <form>
                <div class="row mt-4">
                    <div class="col-lg-3 check">
                        <label for="exampleInputEmail1" class="form-label">check in</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 check">
                        <label for="exampleInputEmail1" class="form-label">check out</label>
                        <input type="date" class="form-control shadow-none">
                    </div>
                    <div class="col-lg-3 check">
                        <label for="exampleInputEmail1" class="form-label">Adult</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-2 check">
                        <label for="exampleInputEmail1" class="form-label">Children</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-lg-1 ">
                        <button type="submit" class="btn check-btn text-white  shadow-none">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Our room -->
<h2 class="mt-5 pt-4 mb-4 text-center  text-uppercase ">our rooms</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 mycard ">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Simple Room Name</h5>
                    <h6 class="mb-4">₹200 Room per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Feature</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            1 Baathroom
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            Wifi
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Television
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Ac
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Room heater
                        </span>
                    </div>
                    <div class="Guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            5 Adults
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            4 Children
                        </span>

                    </div>
                    <div class="rating-room mb-3">
                        <h6 class="mb-1">Rating</h6>
                        <span class="rating badge">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="btn btn-sm shadow-none text-white room-btn">Book Rooms</a>
                        <a href="#" class="btn btn-sm shadow-none text-white btn-dark">More Details</a>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 mycard ">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Simple Room Name</h5>
                    <h6 class="mb-4">₹200 Room per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Feature</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            1 Baathroom
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            Wifi
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Television
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Ac
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Room heater
                        </span>
                    </div>
                    <div class="Guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            5 Adults
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            4 Children
                        </span>

                    </div>
                    <div class="rating-room mb-3">
                        <h6 class="mb-1">Rating</h6>
                        <span class="rating badge">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="btn btn-sm shadow-none text-white room-btn">Book Rooms</a>
                        <a href="#" class="btn btn-sm shadow-none text-white btn-dark">More Details</a>

                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 mycard ">
                <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Simple Room Name</h5>
                    <h6 class="mb-4">₹200 Room per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Feature</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            2 Rooms
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            1 Baathroom
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            1 Balcony
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            3 Sofa
                        </span>
                    </div>
                    <div class="facilities mb-4">
                        <h6 class="mb-1">Facilities</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            Wifi
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Television
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Ac
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            Room heater
                        </span>
                    </div>
                    <div class="Guests mb-4">
                        <h6 class="mb-1">Guests</h6>
                        <span class="badge bg-light text-dark  text-wrap">
                            5 Adults
                        </span>
                        <span class="badge bg-light text-dark  text-wrap">
                            4 Children
                        </span>

                    </div>
                    <div class="rating-room mb-3">
                        <h6 class="mb-1">Rating</h6>
                        <span class="rating badge">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly">
                        <a href="#" class="btn btn-sm shadow-none text-white room-btn">Book Rooms</a>
                        <a href="#" class="btn btn-sm shadow-none text-white btn-dark">More Details</a>

                    </div>

                </div>
            </div>
        </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms >></a>

        </div>
    </div>
</div>
<!-- our facilities -->
<h2 class="mt-5 pt-4 mb-4 text-center  text-uppercase ">our facilities</h2>
<div class="container">
    <div class="row d-flex justify-content-evenly px-lg-9 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/IMG_43553.svg" alt="" style="width:80px;">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/IMG_43553.svg" alt="" style="width:80px;">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/IMG_43553.svg" alt="" style="width:80px;">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/IMG_43553.svg" alt="" style="width:80px;">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
            <img src="images/facilities/IMG_43553.svg" alt="" style="width:80px;">
            <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities >></a>
        </div>
    </div>
</div>
<h2 class="mt-5 pt-4 mb-4 text-center  text-uppercase ">testimonials</h2>

<div class="container">
    <div class="swiper testimonials ">
        <div class="swiper-wrapper shadow">
            <div class="swiper-slide user-slider bg-white p-4">
                <div class="profile d-flex align-items-center p-4 ">
                    <img src="images/facilities/IMG_47816.svg" class="user-profile" />

                </div>
                <p class="user-h6 m-0 ms-2 text-center">Randvsdfsom User</p>
                <p class="text-dark text-center">Lorem, ipsum dolor sit
                    ipsum dolor sit amet consectetur adipisicing elit.Lorem,
                    ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span class="user-ratings badge text-center">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </span>
            </div>
            <div class="swiper-slide user-slider bg-white p-4">
                <div class="profile d-flex align-items-center p-4 ">
                    <img src="images/facilities/IMG_47816.svg" class="user-profile" />

                </div>
                <p class="user-h6 m-0 ms-2 text-center">Randvsdfsom User</p>
                <p class="text-dark">Lorem, ipsum dolor sit
                    ipsum dolor sit amet consectetur adipisicing elit.Lorem,
                    ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span class="user-ratings badge">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </span>
            </div>
            <div class="swiper-slide user-slider bg-white p-4">
                <div class="profile d-flex align-items-center p-4 ">
                    <img src="images/facilities/IMG_47816.svg" class="user-profile" />

                </div>
                <p class="user-h6 m-0 ms-2 text-center">Randvsdfsom User</p>
                <p class="text-dark">Lorem, ipsum dolor sit
                    ipsum dolor sit amet consectetur adipisicing elit.Lorem,
                    ipsum dolor sit amet consectetur adipisicing elit. </p>
                <span class="user-ratings badge">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </span>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>
    <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none"> Known More Facilities >></a>
    </div>
</div>
<!-- Reach us -->
<h2 class="mt-5 pt-4 mb-4 text-center  text-uppercase ">reach us</h2>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mblg-0 mb-3 shadow bg-white rounded">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113911.20573097582!2d80.94251274999999!3d26.848692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1727141381987!5m2!1sen!2sin" class="w-100 rounded" height="320" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-lg-4">
            <div class="bg-white p-4 shadow rounded mb-4">
                <h5>Call us</h5>
                <a href="tel: 8052945321" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +91 8052945321</a><br />
                <a href="tel: 8052945321" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +91 8052945321</a>
            </div>
            <div class="bg-white p-4 shadow rounded mb-4">
                <h5>Fellow us</h5>
                <a href="#" class="d-line-block mb-3 ">
                    <span class="badge bg-light text-dark fs-6p-2">
                        <i class="bi bi-twitter me-2"></i> Twitter
                    </span></a><br><br>
                <a href="#" class="d-line-block mb-3">
                    <span class="badge bg-light text-dark fs-6p-2">
                        <i class="bi bi-facebook me-2"></i> Facebook
                    </span></a><br><br>

                <a href="#" class="d-line-block mb-3">
                    <span class="badge bg-light text-dark fs-6p-2">
                        <i class="bi bi-instagram me-2"></i> Instagram
                    </span></a><br><br>

            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            deplay: 3500,
            disableOnInteraction: false,
        }

    });

    var swiper = new Swiper(".testimonials", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView:3,
    loop: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    }
});

</script>
<?php include('inc/footer.php'); ?>