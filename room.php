<?php
include('inc/link.php');
include('inc/header.php');
?>
<style>
    /* Center the section headings and horizontal line */
.h2-facilites {
    text-align: center;
}

.h-line {
    width: 100px;
    height: 3px;
    margin: 0 auto;
}

/* Center filters section */
.filters-section {
    text-align: center;
}

/* Center align the content inside the card */
.card {
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Room details alignment */
.room-details {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

/* Center room badges */
.room-badges {
    display: flex;
    justify-content: center;
    gap: 10px;
}

/* Buttons and price alignment */
.room-btn, .room-price {
    margin: 0 auto;
}

/* Adjustments for form elements */
.form-label {
    text-align: center;
    display: block;
}

/* Checkboxes and filters alignment */
.navbar-toggler {
    margin: 0 auto;
}

</style>
<div class="container">
    <div class="my-5 px-4 text-center">
        <h2 class="fw-bold h2-facilites">Our Rooms</h2>
        <div class="bg-dark h-line mx-auto"></div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="text-uppercase mt-2 text-center">Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h6 class="text-center">CHECK AVAILABILITY</h6>
                            <label class="form-label">Check in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label">Check out</label>
                            <input type="date" class="form-control shadow-none mb-3">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h6 class="text-center">FACILITIES</h6>
                            <div class="mb-2">
                                <input type="checkbox" class="form-check-input shadow-none me-1" id="f1">
                                <label for="f1" class="form-label">Facilities One</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" class="form-check-input shadow-none me-1" id="f2">
                                <label for="f2" class="form-label">Facilities Two</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" class="form-check-input shadow-none me-1" id="f3">
                                <label for="f3" class="form-label">Facilities Three</label>
                            </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h6 class="mb-2 text-center">GUESTS</h6>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <label class="form-label">Adults</label>
                                    <input type="number" class="form-control shadow-none mb-3">
                                </div>
                                <div>
                                    <label class="form-label">Children</label>
                                    <input type="number" class="form-control shadow-none mb-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Rooms Section -->
        <div class="col-lg-9 col-md-12 px-4">
            <div class="card mb-4 border-0 shadow rounded">
                <div class="row g-0 p-3 align-items-center text-center" style="height: 100%;">
                    <!-- Image Section -->
                    <div class="col-md-5 mb-3">
                        <img src="images/rooms/1.jpg" class="img-fluid rounded-start" alt="Room Image" style="height: 100%; width: 100%; object-fit: cover;">
                    </div>

                    <!-- Room Details Section -->
                    <div class="col-md-5 px-lg-3 px-0 d-flex flex-column justify-content-center text-center" style="height: 100%;">
                        <h5 class="mb-2 fw-bold">Simple Room Name</h5>
                        <div class="mb-3">
                            <h6 class="fw-semibold text-muted">Features</h6>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <span class="badge bg-light text-dark">2 Rooms</span>
                                <span class="badge bg-light text-dark">1 Bathroom</span>
                                <span class="badge bg-light text-dark">1 Balcony</span>
                                <span class="badge bg-light text-dark">3 Sofas</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <h6 class="fw-semibold text-muted">Facilities</h6>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <span class="badge bg-light text-dark">Wifi</span>
                                <span class="badge bg-light text-dark">Telephone</span>
                                <span class="badge bg-light text-dark">Lighting</span>
                            </div>
                        </div>
                        <div>
                            <h6 class="fw-semibold text-muted">Guests</h6>
                            <div class="d-flex flex-wrap justify-content-center gap-2">
                                <span class="badge bg-light text-dark">5 Adults</span>
                                <span class="badge bg-light text-dark">4 Children</span>
                            </div>
                        </div>
                    </div>

                    <!-- Price and Action Section -->
                    <div class="col-md-2 d-flex flex-column justify-content-center text-center" style="height: 100%;">
                        <h6 class="mb-4 text-primary">₹200 per Night</h6>
                        <a href="#" class="btn btn-sm w-100 shadow-none text-white room-btn mb-2 bg-primary">Book Room</a>
                        <a href="#" class="btn btn-sm w-100 shadow-none text-white btn-dark">More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>
