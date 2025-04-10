<!-- header section -->
<?php include("header.php");  ?>
<!--  header section ends -->


<div id="checkout">

    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 co-12 ">
                <div class="billingsummary mb-3" data-aos="fade-up" data-aos-delay="100">

                    <h5>Booking Address</h5>

                    <form action="" method="post" class="php-email-form">
                        <div class="row gy-3">

                            <div class="col-md-6">
                                <label for="name-field" class="pb-2">First Name</label>
                                <input type="text" name="name" id="name-field" class="form-control" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="Last Name" class="pb-2">Last Name</label>
                                <input type="text" class="form-control" name="Last Name" id="Last Name" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="subject-field" class="pb-2">Email</label>
                                <input type="email" class="form-control" name="Email" id="subject-field" required="">
                            </div>

                            <div class="col-md-6">
                                <label for="Last Name" class="pb-2">Phone</label>
                                <input type="text" class="form-control" name="Phone" id="Phone" required="">
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class=" form-check">
                                    <input type="checkbox" class="form-check-input" id="account">
                                    <label class="form-check-label" for="account">Create an account for later use</label>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="billingsummary mb-3" data-aos="fade-up" data-aos-delay="200">

                    <h5>Select any Add-ons</h5>

                    <form action="" method="post" class="">
                        <div class="row gy-3">

                            <div class="col-md-4">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="account1">
                                    <label class="form-check-label" for="account1">Daily Cleaning - AED 20</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="account2">
                                    <label class="form-check-label" for="account2">Laundering & Ironing - AED 50</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="account3">
                                    <label class="form-check-label" for="account3">Extra Towels - AED 10 </label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="account4">
                                    <label class="form-check-label" for="account4">Extra Accessories - AED 30</label>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mb-0 form-check">
                                    <input type="checkbox" class="form-check-input" id="account5">
                                    <label class="form-check-label" for="account5">Others (Please specify)</label>
                                </div>
                            </div>



                        </div>
                    </form>

                </div>
                <div class="billingsummary mb-3" data-aos="fade-up" data-aos-delay="300">

                    <h5>Payment Method</h5>
                    <form action="" method="post" class="php-email-form">
                        <div class="row gy-3">

                            <div class="d-flex justify-content-between">
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            <span class="fw-bold "> Pay with Credit Card</span>
                                        </label>
                                    </div>
                                </div>
                                <div>
                                    <img src="assets/img/dw/cards.png" alt="card" class="img-fluid">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label for="name-field" class="pb-2">Email</label>
                                <input type="email" name="name" id="name-field" class="form-control" required="" placeholder="Email Address">
                            </div>

                            <div class="col-md-4">
                                <label for="Last Name" class="pb-2">Card Number</label>
                                <input type="text" class="form-control" name="Card Number" id="Last Name" required="" placeholder="1234 1234 1234 1234 ">
                            </div>

                            <div class="col-md-4">
                                <label for="subject-field" class="pb-2">Expiration Date</label>
                                <input type="text" class="form-control" name="Email" required="" placeholder="MM / YY">
                            </div>

                            <div class="col-md-4">
                                <label for="Last Name" class="pb-2">Security Date</label>
                                <input type="text" class="form-control" name="Security Date" id="Security Date" required="" placeholder="CVC">
                            </div>


                            <div class="col-md-12 mb-3">
                                <label for="Last Name" class="pb-2">Country</label>
                                <select class="form-select py-3">
                                    <option selected>Dubai</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5  col-md-5 col-sm-12 co-12">
                <div class="booking_preview h-100">
                    <h5 class="">Billing Summary</h5>
                    <div class="bps_card mb-2 ">
                        <div class="d-flex flex-column">
                            <div class="p_details_bb">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Property Name</p>
                                    </div>
                                    <div class="p_details">
                                        <p>Highest infinity Pool in Australia</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Property ID</p>
                                    </div>
                                    <div class="p_details">
                                        <p>123456</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Move In</p>
                                    </div>
                                    <div class="p_details">
                                        <p>27 / 09 / 2024</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Move Out</p>
                                    </div>
                                    <div class="p_details">
                                        <p>30 / 09 / 2024</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb border-0">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Guests</p>
                                    </div>
                                    <div class="p_details">
                                        <p>5</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="bps_card ">

                        <div class="d-flex flex-column ">
                            <div class="p_details_bb border-0">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Subtotal</p>
                                    </div>
                                    <div class="p_details">
                                        <p>AUD 3,491.00</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb border-0">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Cleaning Charges</p>
                                    </div>
                                    <div class="p_details">
                                        <p>AUD 350</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p>Discount</p>
                                    </div>
                                    <div class="p_details">
                                        <p>AUD 175</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-column ">
                            <div class="p_details_bb border-0">
                                <div class="d-flex justify-content-between">
                                    <div class="p_name">
                                        <p class="fw-bold">Grand Total</p>
                                    </div>
                                    <div class="p_details">
                                        <p>AUD 3,666.00</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="mb-3 form-check acknowledgement">
                            <input type="checkbox" class="form-check-input" id="check_label">
                            <label class="form-check-label text-dark" for="check_label">Please check to acknowledge <a href="#" class="text-dark"> <u>Terms of Service</u> </a> and <a href="#" class="text-dark"> <u>Privacy Policy</u> </a> </label>
                        </div>

                        <div class="mt-1">
                            <button class="btn bg-black text-white py-2 rounded-5 w-100" type="submit" data-bs-toggle="modal" data-bs-target="#checkOut">Pay 3,666.00</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="checkOut" tabindex="-1" aria-labelledby="checkOutLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="check_text text-center">
                    <h5>Your Booking is Confirmed</h5>
                    <p>Check details on your dashboard or email.
                        Enjoy your stay with Dwell Away
                    </p>
                </div>
                <div class="row gy-3 d-flex justify-content-center align-items-center mb-lg-4 mb-sm-3 mb-3">
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="assets/img/dw/c1.png" alt="c1" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="chk_cards">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="border-0 mb-0">
                                    <p>Booking Reference No.</p>
                                </div>
                                <div class="border-0 mb-0">
                                    <p class="mb-0">
                                        <strong>123456</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="border-0 mb-0">
                                    <p>Total Guests</p>
                                </div>
                                <div class="border-0 mb-0">
                                    <p class="mb-0">
                                        <strong>5</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="border-0 mb-0">
                                    <p>Check In</p>
                                </div>
                                <div class="border-0 mb-0">
                                    <p class="mb-0">
                                        <strong>27 / 09 / 2024</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="border-0 mb-0">
                                    <p>Check Out</p>
                                </div>
                                <div class="border-0 mb-0">
                                    <p class="mb-0">
                                        <strong>27 / 09 / 2024</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mb-0 border-0">
                                <div class="border-0 mb-0">
                                    <p>Amount Paid</p>
                                </div>
                                <div class="border-0 mb-0">
                                    <p class="mb-0">
                                        <strong>AED 3,000</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3" onclick="location.href='index.php'"
                >
                    <button class="btn btn-dark w-100" >Back to Home</button>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- footer sec -->
<?php include('footer.php'); ?>