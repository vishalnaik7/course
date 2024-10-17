@extends('admin.header')
@section('content')
<main>
    <!-- contact area start -->
    <section class="tp-contact-area tp-contact-p fix p-relative pt-150 pb-125">
        <div class="tp-contact-bg" data-background="assets/img/live/contact-bg.png"></div>
        <div class="tp-contact-shape">
            <span>
                <svg width="1920" height="559" viewBox="0 0 1920 559" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1958.7 6.55286C1332.03 310.106 2369.35 119.238 2232.58 220.873C2018.48 379.976 692.5 607.75 254.5 538.145C-27.1058 493.393 1387 130.595 -280 395.595" stroke="url(#paint0_linear_2756_1168)" stroke-width="14"/>
                    <defs>
                        <linearGradient id="paint0_linear_2756_1168" x1="92.1912" y1="171.542" x2="1827.4" y2="294.717" gradientUnits="userSpaceOnUse"></linearGradient>
                    </defs>
                </svg>
            </span>
        </div>
        <div class="tp-contact-shape-2">
            <img src="assets/img/live/contact-shape-2.svg" alt="">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="tp-contact-wrap p-relative">
                        <div class="tp-contact-heading text-center">
                            <h3 class="tp-contact-title">Registration Form</h3>
                            <p>We are here to assist you with your registration.</p>
                        </div>
                        <div class="tp-contact-from-box">
                            <h3 class="tp-contact-from-title">Fill in the Details 📝</h3>
                            <form id="registration-form" action=" " method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="tp-contact-input-form">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Your Name</label>
                                                <input type="text" name="name" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Education</label>
                                                <input type="text" name="education" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Mobile No</label>
                                                <input type="text" name="mobile" required pattern="\d{10}">
                                                <small>Please enter a 10-digit mobile number.</small>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Email Address</label>
                                                <input type="email" name="email" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="tp-contact-input p-relative">
                                                <label>Address</label>
                                                <textarea name="address" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Date of Birth</label>
                                                <input type="date" name="dob" required>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                            <div class="tp-contact-input p-relative">
                                                <label>Upload Image</label>
                                                <input type="file" name="image" accept="image/*" required>
                                            </div>
                                        </div>
                                        <div class="tp-contact-btn">
                                            <button type="submit" class="tp-btn-inner">Register</button>
                                            <p style="display: none;" class="ajax-response text-danger mt-1 mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Frontend validation script -->
<script>
document.getElementById('registration-form').addEventListener('submit', function(event) {
    const mobile = document.querySelector('input[name="mobile"]').value;

    // Validate mobile number
    if (!/^\d{10}$/.test(mobile)) {
        alert("Please enter a valid 10-digit mobile number.");
        event.preventDefault();
    }
});
</script>
@endsection
