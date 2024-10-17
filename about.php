<?php
include('inc/link.php');
include('inc/header.php');
?>
<div class="container">
    <div class="my-5 px-4">
        <h2 class="fw-bold text-center h2-facilites text-uppercase  ">About us</h2>
        <div class="bg-dark h-line"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minima,
            accusantium architecto ratione odit impedit<br> at aliquid quis, ducimus vitae nam.
            Impedit magni tenetur, rem repellat quisquam recusandae aliquid molestiae.</p>
    </div>
</div>
<div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 mb-4 order-2 order-lg-1  order-md-1">
            <h3 class="mb-3">Lorem, ipsum dolor sit </h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum
                officia tempora labore minima. Eveniet ratione rem tempore modi neque pariatur facere,
                obcaecati iusto iste dicta. Quod itaque quidem fugit corporis.</p>

        </div>
        <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1 order-md-2">
            <img src="images/about/about.jpg" class="w-100 rounded" alt="">
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="px-4 bg-white border-top rounded shadow p-4 border-4 text-center box">
            <img src="images/about/hotel.svg" width="70px" alt="">
            <h4 class="mt-3">100+ Room </h4>
            </div>
           
        </div>
        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="px-4 bg-white border-top rounded shadow p-4 border-4 text-center box">
            <img src="images/about/customers.svg" width="70px" alt="">
            <h4 class="mt-3">200+ Custmores </h4>
            </div>
           
        </div>
        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="px-4 bg-white border-top rounded shadow p-4 border-4 text-center box">
            <img src="images/about/hotel.svg" width="70px" alt="">
            <h4 class="mt-3">300+ Reviews </h4>
            </div>
           
        </div>
        <div class="col-lg-3 col-md-6 mb-4 ">
            <div class="px-4 bg-white border-top rounded shadow p-4 border-4 text-center box">
            <img src="images/about/staff.svg" width="70px" alt="">
            <h4 class="mt-3">120+ Staffs </h4>
            </div>
           
        </div>
    </div>
</div>
<h3 class="text-uppercase my-5 fw-bold text-center h2-facilites">management team</h3>
<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
    <div class="swiper-slide bg-white text-center shadow overflow-hidden rounded ">
        <img src="images/about/IMG_17352.jpg" class="w-100" alt="">
        <h5 class="mt-2 h2-facilites">Random </h5>
      </div>
      <div class="swiper-slide bg-white text-center shadow overflow-hidden rounded ">
        <img src="images/about/IMG_17352.jpg" class="w-100" alt="">
        <h5 class="mt-2 h2-facilites">Random </h5>
      </div>
      <div class="swiper-slide bg-white text-center shadow overflow-hidden rounded ">
        <img src="images/about/IMG_17352.jpg" class="w-100" alt="">
        <h5 class="mt-2 h2-facilites">Random </h5>
      </div>
      <div class="swiper-slide bg-white text-center shadow overflow-hidden rounded ">
        <img src="images/about/IMG_17352.jpg" class="w-100" alt="">
        <h5 class="mt-2 h2-facilites">Random </h5>
      </div>
      <div class="swiper-slide bg-white text-center shadow overflow-hidden rounded ">
        <img src="images/about/IMG_17352.jpg" class="w-100" alt="">
        <h5 class="mt-2 h2-facilites">Random </h5>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
    slidesPerView:4,
    spaceBetween:40,
    loop:true,
      pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
      },
      breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
    });
  </script>
<?php include('inc/footer.php'); ?>