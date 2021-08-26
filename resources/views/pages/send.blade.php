@extends('layouts.layout')
@section('header')
<div class="header-content d-flex flex-column h-100">
    <div class="container">
        <nav
            class="navbar navbar-expand-xl navbar-toggleable-lg navbar-toggleable-md navbar-toggleable-sm navbar-toggleable">
            <a class="navbar-brand" href="{{ route("home") }}">
                <img src="{{ asset('storage/imjob/images/logo_black.svg') }}" alt="Logo" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarheadertop"
                aria-controls="navbarheadertop" aria-expanded="false" aria-label="Toggle navigation">
                <svg class="svg-inline--fa fa-bars fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas"
                    data-icon="bars" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                    data-fa-i2svg="">
                    <path fill="currentColor"
                        d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
                    </path>
                </svg><!-- <i class="fas fa-bars"></i> -->
            </button>
            <div id="navbarheadertop" class="collapse navbar-collapse">
                <ul id="menu-main-menu" class="navbar-nav ml-auto">
                    <li id="menu-item-334"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-334 nav-item"><a
                            href="https://imjob.rs/about-us/" class="nav-link">About us</a></li>
                    <li id="menu-item-333"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333 nav-item"><a
                            href="https://imjob.rs/for-candidates/" class="nav-link">For candidates</a></li>
                    <li id="menu-item-197"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197 nav-item"><a
                            href="https://imjob.rs/for-employers/" class="nav-link">For employers</a></li>
                    <li id="menu-item-356"
                        class="menu-item menu-item-type-post_type_archive menu-item-object-job_offer menu-item-356 nav-item">
                        <a href="https://imjob.rs/job-offer/" class="nav-link">Job offers</a></li>
                    <li id="menu-item-275"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-275 nav-item"><a
                            href="https://imjob.rs/contact/" class="nav-link">Contact</a></li>
                    <li id="menu-item-wpml-ls-2-en"
                        class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-2-en nav-item dropdown">
                        <a title="English" href="https://imjob.rs/send-cv/" class="nav-link dropdown-toggle"
                            data-toggle="dropdown"><img class="wpml-ls-flag"
                                src="https://imjob.rs/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                                alt=""><span class="wpml-ls-native" lang="en">English</span><span
                                class="wpml-ls-display"><span class="wpml-ls-bracket"> (</span>English<span
                                    class="wpml-ls-bracket">)</span></span></a>
                        <div class="dropdown-menu">
                            <a title="Italian" href="https://imjob.rs/it/send-cv/" class="menu-item dropdown-item"><img
                                    class="wpml-ls-flag"
                                    src="https://imjob.rs/wp-content/plugins/sitepress-multilingual-cms/res/flags/it.png"
                                    alt=""><span class="wpml-ls-native" lang="it">Italiano</span><span
                                    class="wpml-ls-display"><span class="wpml-ls-bracket"> (</span>Italian<span
                                        class="wpml-ls-bracket">)</span></span></a><a title="Serbian"
                                href="https://imjob.rs/sr/send-cv/" class="menu-item dropdown-item"><img
                                    class="wpml-ls-flag"
                                    src="https://imjob.rs/wp-content/plugins/sitepress-multilingual-cms/res/flags/sr.png"
                                    alt=""><span class="wpml-ls-native" lang="sr">српски</span><span
                                    class="wpml-ls-display"><span class="wpml-ls-bracket"> (</span>Serbian<span
                                        class="wpml-ls-bracket">)</span></span></a></div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</div>
<style>
    .page-template-page-form header .nav-link {
        color: #5C6163 !important;
    }
</style>
@endsection
@section('content')
<div class="container mb-5">
    <div class="pt-5"></div>
    <script>
        $form_testing = false;
    </script>
    <div class="">
        <div class="py-5 specialform">
            <div class="specialcard p-4">
                <div class="px-3">


                    <h2 class="cv-title mb-0">Send CV</h2>
                    <p class="cv-desc">To send your curriculum, please fill the following form.</p>
                    <div class="joboffer-divider"></div>

                    <!-- Error: No job offer id added -->

                    <form method="POST" enctype="multipart/form-data" class="pt-4" novalidate>
                        <input type="hidden" name="joboffer_id" id="joboffer_id" value="">
                        <div class="row pb-2">

                            <div class="col-12">
                                <h2 class="form-heading">Personal data</h2>
                            </div>

                            <div class="col-12 col-md-4 pb-4">
                                <label>First Name</label>
                                <input type="text" class="form-control " name="personal_firstname"
                                    id="personal_firstname" required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Address</label>
                                <input type="text" class="form-control " name="personal_address" id="personal_address"
                                    required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Phone number</label>
                                <input type="text" class="form-control " name="personal_phonenumber"
                                    id="personal_phonenumber" required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Last name</label>
                                <input type="text" class="form-control " name="personal_surname" id="personal_surname"
                                    required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>City &#8211; Postal code</label>
                                <input type="text" class="form-control " name="personal_postalcode"
                                    id="personal_postalcode" required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Email</label>
                                <input type="email" class="form-control " name="personal_email" id="personal_email"
                                    required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Gender</label>
                                <select class="form-control" name="personal_gender" id="personal_gender" required>
                                    <option value="">Choose</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Country</label>
                                <input type="text" class="form-control " name="personal_country" id="personal_country"
                                    required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="custom-file">
                                    <label style="z-index:4;">Upload your photo</label>
                                    <input type="file" class="form-control custom-file-input" name="file_photo"
                                        id="file_photo" accept="image/*" required>
                                    <label class="custom-file-label" data-browse="Browse">Choose photo</label>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 pb-4">
                                <label>Date of birth</label>
                                <input type="text" class="form-control " name="personal_dateofbirth"
                                    id="personal_dateofbirth" required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Citizenship</label>
                                <input type="text" class="form-control " name="personal_citizenship"
                                    id="personal_citizenship" required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <div class="custom-file">
                                    <label style="z-index:4;">Upload CV</label>
                                    <input type="file" class="form-control custom-file-input" name="file_cv"
                                        id="file_cv"
                                        accept="application/msword, application/pdf, application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                                        required>
                                    <label class="custom-file-label" data-browse="Browse">Choose file</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <h2 class="form-heading">Education</h2>
                            </div>

                            <div class="col-12 repeater-row education_row">
                                <div class="row repeater-item">
                                    <div class="col-12 col-md-4 pb-4">
                                        <label>School name</label>
                                        <input type="text" class="form-control" name="education_schoolname[]"
                                            id="education_schoolname" required>
                                    </div>
                                    <div class="col-12 col-md-4 pb-4">
                                        <label>Qualification</label>
                                        <input type="text" class="form-control" name="education_qualification[]"
                                            id="education_qualification" required>
                                    </div>
                                    <div class="col-12 col-md-4 pb-4">
                                        <label>Year</label>
                                        <input type="text" class="form-control" name="education_year[]"
                                            id="education_year" required>
                                    </div>
                                    <div class="col-12 col-md-4 pb-4">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="education_city[]"
                                            id="education_city" required>
                                    </div>
                                    <div class="col-12 col-md-4 pb-4">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="education_country[]"
                                            id="education_country" required>
                                    </div>
                                    <div class="delete-row-div d-none">
                                        <span class="delete-row" data-rowclass="education_row">
                                            <i class="fas fa-minus-circle delete-row"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="education_row_count" id="education_row_count" value="1">
                                    <div class="col-12 col-md-3 pb-4">
                                        <button type="button" class="btn btn-outline-grey copyelement"
                                            data-copyclass="education_row" data-max="3">Add Education <i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <h2 class="form-heading">Professional experiences</h2>
                            </div>

                            <div class="col-12 repeater-row experience_row">
                                <div class="row repeater-item">
                                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                                        <label>Working period from</label>
                                        <input type="text" class="form-control monthpicker"
                                            name="experience_workingperiod_from[]" id="experience_workingperiod_from"
                                            required>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                                        <label>Working period till</label>
                                        <input type="text" class="form-control monthpicker"
                                            name="experience_workingperiod_till[]" id="experience_workingperiod_till"
                                            required>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                                        <label>Role/Title</label>
                                        <input type="text" class="form-control" name="experience_task[]"
                                            id="experience_task" required>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                                        <label>Company name</label>
                                        <input type="text" class="form-control" name="experience_companyname[]"
                                            id="experience_companyname" required>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="experience_city[]"
                                            id="experience_city" required>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4 pb-4">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="experience_country[]"
                                            id="experience_country" required>
                                    </div>
                                    <div class="col-12 pb-4">
                                        <label>Tasks performed</label>
                                        <textarea class="form-control" name="experience_tasksperformed[]"
                                            id="experience_tasksperformed" rows="4" required></textarea>
                                    </div>
                                    <div class="delete-row-div d-none">
                                        <span class="delete-row" data-rowclass="experience_row">
                                            <i class="fas fa-minus-circle delete-row"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="experience_row_count" id="experience_row_count"
                                        value="1">
                                    <div class="col-12 col-md-5 pb-4">
                                        <button type="button" class="btn btn-outline-grey copyelement"
                                            data-copyclass="experience_row" data-max="3">Add Professional Experience <i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <h2 class="form-heading">Professional skills</h2>
                            </div>

                            <div class="col-12 pb-4">
                                <label>Description</label>
                                <textarea class="form-control" name="proskills_desc" id="proskills_desc" rows="4"
                                    required></textarea>
                            </div>


                            <div class="col-12">
                                <h2 class="form-heading">Languages</h2>
                            </div>

                            <div class="col-12 repeater-row language_row">
                                <div class="row repeater-item">
                                    <div class="col-12 col-md-6 pb-4 pr-md-5">
                                        <label>Language</label>
                                        <input type="text" class="form-control" name="language_lang[]"
                                            id="language_lang" required>
                                    </div>
                                    <div class="col-12 col-md-6 pb-4 pl-md-5">
                                        <label>Knowledge level</label>
                                        <select class="form-control" name="language_level[]" id="language_level"
                                            required>
                                            <option value="">Choose an option</option>
                                            <option value="Native">Native</option>
                                            <option value="A1">A1</option>
                                            <option value="A2">A2</option>
                                            <option value="B1">B1</option>
                                            <option value="B2">B2</option>
                                            <option value="C1">C1</option>
                                            <option value="C2">C2</option>
                                            <!-- <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option> -->
                                        </select>
                                    </div>
                                    <div class="delete-row-div d-none">
                                        <span class="delete-row" data-rowclass="language_row">
                                            <i class="fas fa-minus-circle delete-row"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="language_row_count" id="language_row_count" value="1">
                                    <div class="col-12 col-md-3 pb-4">
                                        <button type="button" class="btn btn-outline-grey copyelement"
                                            data-copyclass="language_row" data-max="3">Add language <i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <h2 class="form-heading">Computer knowledges</h2>
                            </div>

                            <div class="col-12 repeater-row computerknowledge_row">
                                <div class="row repeater-item">
                                    <div class="col-12 col-md-6 pb-4 pr-md-5">
                                        <label>Skills</label>
                                        <input type="text" class="form-control" name="computerknowledge_software[]"
                                            id="computerknowledge_software">
                                    </div>
                                    <div class="col-12 col-md-6 pb-4 pl-md-5">
                                        <label>Knowledge level</label>
                                        <select class="form-control" name="computerknowledge_level[]"
                                            id="computerknowledge_level">
                                            <option value="">Choose an option</option>
                                            <option value="Low">Low</option>
                                            <option value="Medium">Medium</option>
                                            <option value="High">High</option>
                                        </select>
                                    </div>
                                    <div class="delete-row-div d-none">
                                        <span class="delete-row" data-rowclass="computerknowledge_row">
                                            <i class="fas fa-minus-circle delete-row"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row">
                                    <input type="hidden" name="computerknowledge_row_count"
                                        id="computerknowledge_row_count" value="1">
                                    <div class="col-12 col-md-3 pb-4">
                                        <button type="button" class="btn btn-outline-grey copyelement"
                                            data-copyclass="computerknowledge_row" data-max="4">Add Software <i
                                                class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <h2 class="form-heading">Other</h2>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Driving Licence</label>
                                <input type="text" class="form-control " name="other_drivinglicense"
                                    id="other_drivinglicense" required>
                            </div>
                            <div class="col-12 col-md-4 pb-4">
                                <label>Available From/ Notice Period</label>
                                <input type="text" class="form-control monthpicker" name="other_noticeperiod"
                                    id="other_noticeperiod" required>
                            </div>
                            <div class="col-12 pb-4">
                                <label>Message</label>
                                <textarea class="form-control" name="other_message" id="other_message"
                                    rows="4"></textarea>
                            </div>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="consentcheck">
                            <label class="custom-control-label" for="consentcheck">I agree to the processing of personal
                                data in accordance with the Law on Data Protection personalities (“Official Gazette of
                                RS”,
                                No. 87/2018). *
                                <a target="_blank" href="https://imjob.rs/it/privacy-policy/">Privacy policy</a></label>
                        </div>

                        <div class="form-error" style="display: none;">
                            <div class="py-3">*Please fill all the form fields before sending the CV</div>
                        </div>

                        <span class="btn-red-outline isdisabled">
                            <button type="submit" class="btn btn-red text-uppercase" id="form_submit" name="form_submit"
                                value="candidate_form" disabled>Send <span class="pl-2"><i
                                        class="fas fa-arrow-right"></i></span></button>
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('scripts')

<script src="https://imjob.rs/wp-content/themes/imjob/assets/js/form_candidate.js"></script>
@endsection
