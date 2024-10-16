<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Management panel - PARTS TRADE 24 GmbH</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>
                <!-- Navbar-->
                <nav class="navbar navbar-marketing navbar-expand-lg bg-primary navbar-dark fixed-top">
                    <div class="container px-5">
                        {{-- <a class="navbar-brand text-white" href="">PARST TRADE 24 GmbH</a> --}}
                        <img src="{{ asset('assets/img/logo_partstrade24gmbh_white_panel.png') }}">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation"><i data-feather="menu"></i></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                            <ul class="navbar-nav ms-auto me-lg-5">

                                <li class="nav-item dropdown no-caret">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownDocs" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Recruitment
                                        <i class="fas fa-chevron-right dropdown-arrow"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end animated--fade-in-up" aria-labelledby="navbarDropdownDocs">
                                        <a class="dropdown-item py-3" href="{{route('candidate.list')}}">
                                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="list"></i></div>
                                            <div>
                                                Application list
                                            </div>
                                        </a>

                                        <div class="dropdown-divider m-0"></div>

                                        <a class="dropdown-item py-3" href="{{route('candidate.create')}}">
                                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="user"></i></div>
                                            <div>
                                                New application
                                            </div>
                                        </a>

                                        {{-- <a class="dropdown-item py-3" href="https://docs.startbootstrap.com/sb-ui-kit-pro/changelog" target="_blank">
                                            <div class="icon-stack bg-primary-soft text-primary me-4"><i data-feather="file-text"></i></div>
                                            <div>
                                                Updates and changes
                                            </div>
                                        </a> --}}
                                    </div>
                                </li>

                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            Logged: {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest



                                    {{-- <li class="nav-item dropdown dropdown-xl no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownDemos" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Landings
                                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animated--fade-in-up me-lg-n25 me-xl-n15" aria-labelledby="navbarDropdownDemos">
                                            <div class="row g-0">
                                                <div class="col-lg-5 p-lg-3 bg-img-cover overlay overlay-primary overlay-70 d-none d-lg-block" style="background-image: url('assets/img/backgrounds/bg-dropdown-xl.jpg')">
                                                    <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                                                        <div class="text-white text-center z-1">
                                                            <div class="mb-3">Multipurpose landing pages for a variety of projects.</div>
                                                            <a class="btn btn-white btn-sm text-primary fw-500" href="index.html">View All</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 p-lg-5">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <h6 class="dropdown-header text-primary">Applications</h6>
                                                            <a class="dropdown-item" href="landing-app-mobile.html">Mobile App</a>
                                                            <a class="dropdown-item" href="landing-app-desktop.html">Desktop App</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Business</h6>
                                                            <a class="dropdown-item" href="landing-multipurpose.html">Multipurpose</a>
                                                            <a class="dropdown-item" href="landing-agency.html">Agency</a>
                                                            <a class="dropdown-item" href="landing-press.html">Press</a>
                                                            <a class="dropdown-item" href="landing-directory.html">Directory</a>
                                                            <a class="dropdown-item" href="landing-rental.html">Rental</a>
                                                            <a class="dropdown-item" href="landing-real-estate.html">Real Estate</a>
                                                            <a class="dropdown-item" href="landing-classifieds.html">Classifieds</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Lead Generation</h6>
                                                            <a class="dropdown-item" href="landing-lead-capture.html">Lead Capture</a>
                                                            <div class="dropdown-divider border-0 d-lg-none"></div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <h6 class="dropdown-header text-primary">Personal</h6>
                                                            <a class="dropdown-item" href="landing-resume.html">Resume</a>
                                                            <a class="dropdown-item" href="landing-portfolio.html">Portfolio</a>
                                                            <div class="dropdown-divider border-0"></div>
                                                            <h6 class="dropdown-header text-primary">Header Styles</h6>
                                                            <a class="dropdown-item" href="header-basic.html">Basic</a>
                                                            <a class="dropdown-item" href="header-basic-signup.html">Basic (Signup)</a>
                                                            <a class="dropdown-item" href="header-graphic.html">Graphic</a>
                                                            <a class="dropdown-item" href="header-graphic-signup.html">Graphic (Signup)</a>
                                                            <a class="dropdown-item" href="header-video.html">
                                                                Video Header
                                                                <span class="badge bg-primary-soft text-primary ms-1">New!</span>
                                                            </a>
                                                            <a class="dropdown-item" href="header-inner-page.html">Inner Page</a>
                                                            <a class="dropdown-item" href="header-nav-only.html">Nav Only</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}


                                    {{-- <li class="nav-item dropdown dropdown-xl no-caret">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdownPages" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                            <i class="fas fa-chevron-right dropdown-arrow"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end me-lg-n20 me-xl-n15 animated--fade-in-up" aria-labelledby="navbarDropdownPages">
                                            <div class="row g-0">
                                                <div class="col-lg-4 p-lg-5">
                                                    <h6 class="dropdown-header text-primary">Company</h6>
                                                    <a class="dropdown-item" href="page-basic.html">Basic Page</a>
                                                    <a class="dropdown-item" href="page-company-about.html">About</a>
                                                    <a class="dropdown-item" href="page-company-pricing.html">Pricing</a>
                                                    <a class="dropdown-item" href="page-company-contact.html">Contact</a>
                                                    <a class="dropdown-item" href="page-company-team.html">Team</a>
                                                    <a class="dropdown-item" href="page-company-terms.html">Terms</a>
                                                    <div class="dropdown-divider border-0"></div>
                                                    <h6 class="dropdown-header text-primary">Support</h6>
                                                    <a class="dropdown-item" href="page-help-center.html">Help Center</a>
                                                    <a class="dropdown-item" href="page-help-knowledgebase.html">Knowledgebase</a>
                                                    <a class="dropdown-item" href="page-help-message-center.html">Message Center</a>
                                                    <a class="dropdown-item" href="page-help-support-ticket.html">Support Ticket</a>
                                                    <div class="dropdown-divider border-0 d-lg-none"></div>
                                                </div>
                                                <div class="col-lg-4 p-lg-5">
                                                    <h6 class="dropdown-header text-primary">Careers</h6>
                                                    <a class="dropdown-item" href="page-careers-overview.html">Careers List</a>
                                                    <a class="dropdown-item" href="page-careers-listing.html">Position Details</a>
                                                    <div class="dropdown-divider border-0"></div>
                                                    <h6 class="dropdown-header text-primary">Blog</h6>
                                                    <a class="dropdown-item" href="page-blog-overview.html">Overview</a>
                                                    <a class="dropdown-item" href="page-blog-post.html">Post</a>
                                                    <a class="dropdown-item" href="page-blog-archive.html">Archive</a>
                                                    <div class="dropdown-divider border-0"></div>
                                                    <h6 class="dropdown-header text-primary">Portfolio</h6>
                                                    <a class="dropdown-item" href="page-portfolio-grid.html">Grid</a>
                                                    <a class="dropdown-item" href="page-portfolio-large-grid.html">Large Grid</a>
                                                    <a class="dropdown-item" href="page-portfolio-masonry.html">Masonry</a>
                                                    <a class="dropdown-item" href="page-portfolio-case-study.html">Case Study</a>
                                                    <a class="dropdown-item" href="page-portfolio-project.html">Project</a>
                                                    <div class="dropdown-divider border-0 d-lg-none"></div>
                                                </div>
                                                <div class="col-lg-4 p-lg-5">
                                                    <h6 class="dropdown-header text-primary">Error</h6>
                                                    <a class="dropdown-item" href="page-error-400.html">400 Error</a>
                                                    <a class="dropdown-item" href="page-error-401.html">401 Error</a>
                                                    <a class="dropdown-item" href="page-error-404-1.html">404 Error (Option 1)</a>
                                                    <a class="dropdown-item" href="page-error-404-2.html">404 Error (Option 2)</a>
                                                    <a class="dropdown-item" href="page-error-500.html">500 Error</a>
                                                    <a class="dropdown-item" href="page-error-503.html">503 Error</a>
                                                    <a class="dropdown-item" href="page-error-504.html">504 Error</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li> --}}


                            </ul>
                            {{-- <a class="btn fw-500 ms-lg-4 btn-teal" href="https://shop.startbootstrap.com/sb-ui-kit-pro">
                                    Buy Now
                                    <i class="ms-2" data-feather="arrow-right"></i>
                                </a> --}}
                        </div>
                    </div>
                </nav>
                <!-- Page Header-->
                <header class="page-header-ui page-header-ui-dark bg-primary">
                    <div class="page-header-ui-content pt-10">
                        <div class="container px-5 text-center">
                            <div class="row gx-5 justify-content-center">
                                <div class="col-lg-8">
                                    <h1 class="page-header-ui-title mb-3">Application ID {{$candidate->id}} </h1>
                                    <h4 class="text-white">{{$candidate->first_name}} {{$candidate->last_name}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="svg-border-rounded text-light">
                        <!-- Rounded SVG Border-->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none"
                            fill="currentColor">
                            <path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path>
                        </svg>
                    </div>
                </header>
                <section class="bg-light pt-10">
                    <div class="container px-5">
                        <div class="input-group input-group-lg">
                            {{-- <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Case ID</button>
                                <div class="dropdown-menu animated--fade-in-up">
                                    <a class="dropdown-item" href="#!">Transaction ID</a>
                                    <a class="dropdown-item" href="#!">Invoice ID</a>
                                    <a class="dropdown-item" href="#!">Name</a>
                                    <a class="dropdown-item" href="#!">Email</a>
                                </div>
                                <input class="form-control" type="text" aria-label="Text input with dropdown button" placeholder="Search for a case..." /> --}}
                        </div>
                        <div class="row gx-5">
                            <div class="col-lg-4 col-xl-3">
                                {{-- <div class="card">
                                        <div class="list-group list-group-flush small">
                                            <a class="list-group-item list-group-item-action p-3" href="#!">
                                                <i class="fas fa-plus fa-fw me-2 text-gray-400"></i>
                                                Make New Ticket
                                            </a>
                                            <a class="list-group-item list-group-item-action p-3" href="#!">
                                                <i class="fas fa-file-alt fa-fw me-2 text-gray-400"></i>
                                                View Open Tickets
                                            </a>
                                            <a class="list-group-item list-group-item-action p-3" href="#!">
                                                <i class="fas fa-archive fa-fw me-2 text-gray-400"></i>
                                                View Closed Tickets
                                            </a>
                                            <a class="list-group-item list-group-item-action p-3" href="#!">
                                                <i class="fas fa-star fa-fw me-2 text-gray-400"></i>
                                                View Starred Tickets
                                            </a>
                                            <a class="list-group-item list-group-item-action p-3" href="#!">
                                                <i class="far fa-handshake fa-fw me-2 text-gray-400"></i>
                                                Managed Services
                                            </a>
                                        </div>
                                    </div> --}}
                            </div>
                            <form action="{{ route('candidate.update')}}" method="POST">
                                @csrf
                                @method('put')
                                <input type="hidden" name="id" value="{{$candidate->id}}" />

                                <div class="row gx-5 mb-4">
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="first_name">Vorname</label>
                                        <input class="form-control py-4" id="first_name" name="first_name"
                                            type="text" required="required" placeholder="" value="{{$candidate->first_name}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="last_name">Nachname</label>
                                        <input class="form-control py-4" id="last_name" name="last_name"
                                            type="text" required="required" placeholder="" value="{{$candidate->last_name}}" />
                                    </div>
                                </div>



                                <div class="row gx-5 mb-4">
                                    <p class="card-text"></p>
                                    <div class="col-md-3">
                                        <label class="text-dark mb-2" for="gender">Geschlecht</label>
                                        <select class="form-select py-4" id="gender" name="gender"
                                            type="text" placeholder="" >
                                            <option selected value="{{$candidate->gender}}">@if ($candidate->gender == 1) männlich @endif @if ($candidate->gender == 2) weiblich @endif @if ($candidate->gender == 3) divers @endif</option>
                                            <option value="1">männlich</option>
                                            <option value="2">weiblich</option>
                                            <option value="3">divers</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="text-dark mb-2" for="phone">Handynummer</label>
                                        <input class="form-control py-4" id="phone" name="phone"
                                            type="text" required="required" placeholder="" value="{{$candidate->phone}}" />
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-dark mb-2" for="email">E-mail</label>
                                        <input class="form-control py-4" id="email" name="email"
                                            type="email" required="required" placeholder="" value="{{$candidate->email}}" />
                                    </div>
                                </div>


                                <div class="row gx-5 mb-4 mt-10">
                                    <div class="col-md-7">
                                        <label class="text-dark mb-2" for="address_street">Straße</label>
                                        <input class="form-control py-4" id="address_street"
                                            name="address_street" type="text" required="required" placeholder="" value="{{$candidate->address_street}}" />
                                    </div>
                                    <div class="col-md-3">
                                        <label class="text-dark mb-2" for="address_number">Hausnummer</label>
                                        <input class="form-control py-4" id="address_number"
                                            name="address_number" type="text" required="required" placeholder="" value="{{$candidate->address_number}}" />
                                    </div>
                                </div>
                                <div class="row gx-5 mb-4">
                                    <div class="col-md-4">
                                        <label class="text-dark mb-2" for="address_code">PLZ</label>
                                        <input class="form-control py-4" id="address_code"
                                            name="address_code" type="text" required="required" placeholder="" value="{{$candidate->address_code}}"/>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="address_town">Stadt</label>
                                        <input class="form-control py-4" id="address_town"
                                            name="address_town" type="text" required="required" placeholder="" value="{{$candidate->address_town}}"/>
                                    </div>
                                </div>
                                <div class="row gx-5 mb-4">
                                    <div class="col-md-4">
                                        <label class="text-dark mb-2" for="address_country">Land</label>
                                        <select class="form-select py-4" id="address_country"
                                            name="address_country" type="text" required="required" placeholder="">
                                            <option selected value="{{$candidate->address_country}}">{{$candidate->address_country}}</option>
                                            <option value="Polen">Polen</option>
                                            <option value="Deutschland">Deutschland</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                </div>

                                <div class="row gx-5 mb-4 mt-10">
                                    <div class="col-md-4">
                                        <label class="text-dark mb-2" for="birth_date">Geburtsdatum</label>
                                        <input class="form-control py-4" id=" "
                                            name="birth_date" type="date" required="required" placeholder="" value="{{$candidate->birth_date}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="birth_town">Geburtsort</label>
                                        <input class="form-control py-4" id="birth_town"
                                            name="birth_town" type="text" required="required" placeholder="" value="{{$candidate->birth_town}}" />
                                    </div>
                                </div>
                                <div class="row gx-5 mb-4">
                                    <div class="col-md-5">
                                        <label class="text-dark mb-2" for="birth_country">Geburtsland</label>
                                        <select class="form-select py-4" id="birth_country"
                                            name="birth_country" type="text" required="required" placeholder="" >
                                            <option selected value="{{$candidate->birth_country}}">{{$candidate->birth_country}}</option>
                                            <option value="Polen">Polen</option>
                                            <option value="Deutschland">Deutschland</option>
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="text-dark mb-2" for="marital_status">Familienstand</label>
                                        <select class="form-select py-4" id="marital_status"
                                            name="marital_status" type="text" required="required" placeholder="">
                                            <option selected value="{{$candidate->marital_status}}">{{$candidate->marital_status}}</option>
                                            <option value="ledig">ledig</option>
                                            <option value="verheiratet">verheiratet</option>
                                            <option value="geschieden">geschieden</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="row gx-5 mb-4 mt-10">
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="bank">Bank</label>
                                        <input class="form-control py-4" id="bank" name="bank"
                                            type="text" placeholder="" value="{{$candidate->bank}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="bic">BIC</label>
                                        <input class="form-control py-4" id="bic" name="bic"
                                            type="text" placeholder="" value="{{$candidate->bic}}" />
                                    </div>
                                </div>
                                <div class="row gx-5 mb-4">
                                    <div class="col-md-12">
                                        <label class="text-dark mb-2" for="iban">IBAN</label>
                                        <input class="form-control py-4" id="iban" name="iban"
                                            type="text" placeholder="" value="{{$candidate->iban}}" />
                                    </div>
                                </div>


                                <div class="row gx-5 mb-4 mt-10">
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2"
                                            for="sozialversicherungsnummer">Sozialversicherungsnummer</label>
                                        <input class="form-control py-4" id="sozialversicherungsnummer"
                                            name="sozialversicherungsnummer" type="text"
                                            placeholder="" value="{{$candidate->sozialversicherungsnummer}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="steuer_id">Steuer ID</label>
                                        <input class="form-control py-4" id="steuer_id" name="steuer_id"
                                            type="text" placeholder="" value="{{$candidate->steuer_id}}" />
                                    </div>
                                </div>
                                <div class="row gx-5 mb-4">
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="krankenkasse">Name der Krankenkasse</label>
                                        <input class="form-control py-4" id="krankenkasse"
                                            name="krankenkasse" type="text" placeholder="" value="{{$candidate->krankenkasse}}" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-dark mb-2" for="versichertennummer">Versichertennummer</label>
                                        <input class="form-control py-4" id="versichertennummer"
                                            name="versichertennummer" type="text" placeholder="" value="{{$candidate->versichertennummer}}" />
                                    </div>
                                </div>





                                {{-- <div class="mb-4">
                                        <label class="text-dark mb-2" for="inputMessage">Message</label>
                                        <textarea class="form-control py-3" id="inputMessage" type="text" placeholder="Enter your message..." rows="4"></textarea>
                                    </div> --}}

                                <div class="text-center"><button class="btn btn-primary mt-4"
                                        type="submit">Update</button></div>
                            </form>

                        </div>
                    </div>
                    {{-- <div class="svg-border-rounded text-dark">
                            <!-- Rounded SVG Border-->
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 144.54 17.34" preserveAspectRatio="none" fill="currentColor"><path d="M144.54,17.34H0V0H144.54ZM0,0S32.36,17.34,72.27,17.34,144.54,0,144.54,0"></path></svg>
                        </div> --}}
                </section>
            </main>
        </div>
        <div id="layoutDefault_footer">
            <footer class="footer pt-2 pb-5 text-primary mt-auto footer-dark">
                <div class="container px-5">
                    {{-- <div class="row gx-5">
                            <div class="col-lg-3">
                                <div class="footer-brand">SB UI Kit Pro</div>
                                <div class="mb-3">Design made easy</div>
                                <div class="icon-list-social mb-5">
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-instagram"></i></a>
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-facebook"></i></a>
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-github"></i></a>
                                    <a class="icon-list-social-link" href="#!"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row gx-5">
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Product</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="#!">Landing</a></li>
                                            <li class="mb-2"><a href="#!">Pages</a></li>
                                            <li class="mb-2"><a href="#!">Sections</a></li>
                                            <li class="mb-2"><a href="#!">Documentation</a></li>
                                            <li><a href="#!">Changelog</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Technical</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="#!">Documentation</a></li>
                                            <li class="mb-2"><a href="#!">Changelog</a></li>
                                            <li class="mb-2"><a href="#!">Theme Customizer</a></li>
                                            <li><a href="#!">UI Kit</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
                                        <div class="text-uppercase-expanded text-xs mb-4">Includes</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="#!">Utilities</a></li>
                                            <li class="mb-2"><a href="#!">Components</a></li>
                                            <li class="mb-2"><a href="#!">Layouts</a></li>
                                            <li class="mb-2"><a href="#!">Code Samples</a></li>
                                            <li class="mb-2"><a href="#!">Products</a></li>
                                            <li class="mb-2"><a href="#!">Affiliates</a></li>
                                            <li><a href="#!">Updates</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="text-uppercase-expanded text-xs mb-4">Legal</div>
                                        <ul class="list-unstyled mb-0">
                                            <li class="mb-2"><a href="#!">Privacy Policy</a></li>
                                            <li class="mb-2"><a href="#!">Terms and Conditions</a></li>
                                            <li><a href="#!">License</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    <hr class="my-5" />
                    <div class="row gx-5 align-items-center">
                        <div class="col-md-6 small">Copyright &copy; PARTS TRADE 24 GmbH</div>
                        <div class="col-md-6 text-md-end small">
                            {{-- <a href="#!">Privacy Policy</a>
                                &middot;
                                <a href="#!">Terms &amp; Conditions</a> --}}
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            disable: 'mobile',
            duration: 600,
            once: true,
        });
    </script>
</body>

</html>
