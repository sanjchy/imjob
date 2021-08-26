@extends('layouts.layout')
@section('content')
<div class="pt-5"></div>
<div class="">
    <div class="py-5 specialform">
        <div class="specialcard p-4">
            <div class="px-3">


                <h2 class="cv-title mb-0">Send company data</h2>
                <p class="cv-desc">To send your data, please fill the following form.</p>
                <div class="joboffer-divider"></div>

                <form method="POST" enctype="multipart/form-data" class="pt-4" novalidate>
                    <div class="row pb-2">

                        <div class="col-12">
                            <h2 class="form-heading">Company information</h2>
                        </div>

                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Company name</label>
                            <input type="text" class="form-control" name="general_company" id="general_company"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Address</label>
                            <input type="text" class="form-control" name="general_address" id="general_address"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Website</label>
                            <input type="text" class="form-control" name="general_website" id="general_website"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Company Industry</label>
                            <input type="text" class="form-control" name="general_industry" id="general_industry"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>City/Postal code</label>
                            <input type="text" class="form-control" name="general_city_postalcode"
                                id="general_city_postalcode" required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="general_phonenumber" id="general_phonenumber"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Company size</label>
                            <input type="text" class="form-control" name="general_size" id="general_size" required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Country</label>
                            <input type="text" class="form-control" name="general_country" id="general_country"
                                required>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">Referent Information</h2>
                        </div>

                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="personal_firstname" id="personal_firstname"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="personal_surname" id="personal_surname"
                                required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Role</label>
                            <input type="text" class="form-control" name="personal_role" id="personal_role" required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Email</label>
                            <input type="email" class="form-control" name="personal_email" id="personal_email" required>
                        </div>
                        <script>
                            $form_testing = false;
                        </script>
                        <div class="col-12 col-md-4 pb-4">
                            <label>Phone number</label>
                            <input type="text" class="form-control" name="personal_phonenumber"
                                id="personal_phonenumber" required>
                        </div>
                        <div class="col-12">
                            <h2 class="form-heading">Other</h2>
                        </div>
                        <div class="col-12 pb-4">
                            <label>About Company</label>
                            <textarea class="form-control" name="other_message" id="other_message" rows="4"
                                required></textarea>
                        </div>
                    </div>

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="consentcheck">
                        <label class="custom-control-label" for="consentcheck">I agree to the processing of personal
                            data in accordance with the Law on Data Protection personalities (“Official Gazette of RS”,
                            No. 87/2018). *
                            <a target="_blank" href="{{ route('privacy-policy') }}">Privacy policy</a></label>
                    </div>


                    <span class="btn-red-outline">
                        <button type="submit" class="btn btn-red text-uppercase" id="form_submit" name="form_submit"
                            value="client_form" disabled>Send <span class="pl-2"><i
                                    class="fas fa-arrow-right"></i></span></button>
                    </span>
                </form>
            </div>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/style.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr@latest/dist/plugins/monthSelect/index.js"></script>

</div>
@endsection
