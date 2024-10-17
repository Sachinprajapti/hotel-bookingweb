<?php
include('inc/link.php');
include('inc/header.php');
?>

<div class="container">
    <div class="my-5 px-4">
        <h2 class="fw-bold text-center h2-facilites">contacts us</h2>
        <div class="bg-dark h-line"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque minima,
            accusantium architecto ratione odit impedit<br> at aliquid quis, ducimus vitae nam.
            Impedit magni tenetur, rem repellat quisquam recusandae aliquid molestiae.</p>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-6 col-md-6 mb-5 px-4">
            <div class="bg-white rounded shadow p-4">
                <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113911.20573097582!2d80.94251274999999!3d26.848692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1727141381987!5m2!1sen!2sin" class="w-100 rounded" height="320" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5>Address</h5>
                <a href="https://maps.app.goo.gl/XJx1He3EKcG8gmGXA" target="_blank" class="d-inline-block text-decoration-none text-dark"><i class="bi bi-geo-alt"></i>SA HOTEL, LUCKNOW UTTER PRADESH</a>
                <h5 class="mt-3">Call us</h5>
                <a href="tel: 8052945321" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +91 8052945321</a><br />
                <a href="tel: 8052945321" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone-fill"></i> +91 8052945321</a>
                <h5 class="mt-3">Email</h5>
                <a href="mail: sachinmagarayar80@gmail.com" class="d-line-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope-at-fill"></i> sachinmagarayar80@gmail.com</a>
                <h5 class="mt-3">Fellow us</h5>
                <a href="#" class="d-line-block  bg-light text-dark fw-bold fs-5 ">

                    <i class="bi bi-twitter me-2"></i>
                </a>
                <a href="#" class="d-line-block  bg-light text-dark fw-bold fs-5">

                    <i class="bi bi-facebook me-2"></i>
                </a>

                <a href="#" class="d-line-block bg-light text-dark fw-bold fs-5">

                    <i class="bi bi-instagram me-2"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 mb-5 px-4">
    <div class="bg-white rounded shadow p-4">
        <h5>Send a message</h5>
        <form action="">
            <div class="form-group mb-3">
                <label for="name" class="form-label" style="font-size: large;">Name</label>
                <input type="text" class="form-control shadow-none" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label" style="font-size: large;">Email address</label>
                <input type="email" class="form-control shadow-none" id="email" placeholder="Enter your email">
            </div>
            <div class="form-group mb-3">
                <label for="subject" class="form-label" style="font-size: large;">Subject</label>
                <input type="text" class="form-control shadow-none" id="subject" placeholder="Enter subject">
            </div>
            <div class="form-group col-md-12 mb-3">
                <label for="message" class="form-label" style="font-size: large;">Message</label>
                <textarea class="form-control shadow-none" id="message" cols="4" rows="5" style="resize:none;" placeholder="Write your message here"></textarea>
            </div>
            <button type="submit" class="btn btn-white check-btn shadow-none">Send Message</button>
        </form>
    </div>
</div>



    </div>
</div>
<?php include('inc/footer.php'); ?>