<div class="container">
    <nav
        class="navbar navbar-expand-xl navbar-toggleable-lg navbar-toggleable-md navbar-toggleable-sm navbar-toggleable">
        <a class="navbar-brand" href="{{ route('home', app()->getLocale()) }}">
            <img src="{{ asset('storage/imjob/images/logo_white.svg') }}" alt="Logo" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarheadertop"
            aria-controls="navbarheadertop" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div id="navbarheadertop" class="collapse navbar-collapse">
            <ul id="menu-main-menu" class="navbar-nav ml-auto">
                <li id="menu-item-334"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-334 nav-item">
                    <a href="{{ route('about', app()->getLocale()) }}"
                        class="nav-link {{ (\Request::is(app()->getLocale().'/about') ? 'active' : '') }}">{{__('About us')}}</a>
                <li id="menu-item-333"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-333 nav-item">
                    <a href="{{ route('for-candidates', app()->getLocale()) }}"
                        class="nav-link {{ (\Request::is(app()->getLocale().'/for-candidates') ? 'active' : '') }}">{{ __('For Candidates') }}</a>
                <li id="menu-item-197"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-197 nav-item">
                    <a href="{{ route('for-employers', app()->getLocale()) }}"
                        class="nav-link {{ (\Request::is(app()->getLocale().'/for-employers') ? 'active' : '') }}">{{ __('For Employers') }}</a>
                <li id="menu-item-356"
                    class="menu-item menu-item-type-post_type_archive menu-item-object-job_offer menu-item-356 nav-item">
                    <a href="{{ route('job-offers', app()->getLocale()) }}"
                        class="nav-link {{ (\Request::is(app()->getLocale().'/job-offers') ? 'active' : '') }}">{{ __('Job Offers') }}</a>
                <li id="menu-item-275"
                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-275 nav-item">
                    <a href="{{ route('contact', app()->getLocale()) }}"
                        class="nav-link {{ (\Request::is(app()->getLocale().'/contact') ? 'active' : '') }}">{{ __('Contact') }}</a>
                <li id="menu-item-wpml-ls-2-en"
                    class="menu-item wpml-ls-slot-2 wpml-ls-item wpml-ls-item-en wpml-ls-current-language wpml-ls-menu-item wpml-ls-first-item menu-item-type-wpml_ls_menu_item menu-item-object-wpml_ls_menu_item menu-item-has-children menu-item-wpml-ls-2-en nav-item dropdown">
                    {{-- Flag for selected country --}}
                    @switch(true)
                    @case(app()->getLocale() === 'en')
                    <a title="English" href="{{ route('home', app()->getLocale()) }}" class="nav-link dropdown-toggle"
                        data-toggle="dropdown">
                        <img class="wpml-ls-flag" src="{{ asset('storage/flags/en.png') }}" alt="">
                        <span class="wpml-ls-native" lang="en">English</span>
                        <span class="wpml-ls-display">
                            <span class="wpml-ls-bracket"> (</span>English<span class="wpml-ls-bracket">)</span>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a title="Italian" href="{{ route(\Request::route()->getName(),'it') }}"
                            class="menu-item dropdown-item">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/it.png') }}" alt="">
                            <span class="wpml-ls-native" lang="it">Italiano</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>Italian<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                        <a title="Serbian" href="{{ route(\Request::route()->getName(),'rs') }}"
                            class="menu-item dropdown-item">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/sr.png') }}" alt="">
                            <span class="wpml-ls-native" lang="sr">српски</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>Serbian<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                    </div>
                    @break
                    @case(app()->getLocale() === 'it')
                    <a title="Italian" href="{{ route(\Request::route()->getName(),'it') }}"
                        class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img class="wpml-ls-flag" src="{{ asset('storage/flags/it.png') }}" alt="">
                        <span class="wpml-ls-native" lang="en">Italian</span>
                        <span class="wpml-ls-display">
                            <span class="wpml-ls-bracket"> (</span>Italiano<span class="wpml-ls-bracket">)</span>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a title="English" href="{{ route(\Request::route()->getName(),'en') }}"
                            class="menu-item dropdown-item">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/en.png') }}" alt="">
                            <span class="wpml-ls-native" lang="it">English</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>English<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                        <a title="Serbian" href="{{ route(\Request::route()->getName(),'rs') }}"
                            class="menu-item dropdown-item">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/sr.png') }}" alt="">
                            <span class="wpml-ls-native" lang="sr">српски</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>Serbian<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                    </div>
                    @break
                    @case(app()->getLocale() === 'rs')
                    <a title="Serbian" href="{{ route(\Request::route()->getName(),'rs') }}"
                        class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img class="wpml-ls-flag" src="{{ asset('storage/flags/sr.png') }}" alt="">
                        <span class="wpml-ls-native" lang="en">српски</span>
                        <span class="wpml-ls-display">
                            <span class="wpml-ls-bracket"> (</span>Serbian<span class="wpml-ls-bracket">)</span>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a title="English" href="{{ route(\Request::route()->getName(),'en') }}"
                            class="menu-item dropdown-item">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/en.png') }}" alt="">
                            <span class="wpml-ls-native" lang="it">English</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>English<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                        <a title="Italian" href="{{ route(\Request::route()->getName(),'it') }}"
                            class="menu-item dropdown-item">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/it.png') }}" alt="">
                            <span class="wpml-ls-native" lang="it">Italiano</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>Italian<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                        @break
                        @default
                        <a title="English" href="{{ route(\Request::route()->getName(),'en') }}"
                            class="nav-link dropdown-toggle" data-toggle="dropdown">
                            <img class="wpml-ls-flag" src="{{ asset('storage/flags/en.png') }}" alt="">
                            <span class="wpml-ls-native" lang="en">English</span>
                            <span class="wpml-ls-display">
                                <span class="wpml-ls-bracket"> (</span>English<span class="wpml-ls-bracket">)</span>
                            </span>
                        </a>
                        @endswitch
                        <div class="dropdown-menu">
                            <a title="Italian"
                                href="@if(\Request::route()->getName() === 'home') {{ url('/it') }} @else {{ url('/it/'.\Request::route()->getName()) }} @endif"
                                class="menu-item dropdown-item">
                                <img class="wpml-ls-flag" src="{{ asset('storage/flags/it.png') }}" alt="">
                                <span class="wpml-ls-native" lang="it">Italian</span>
                                <span class="wpml-ls-display">
                                    <span class="wpml-ls-bracket"> (</span>Italian<span class="wpml-ls-bracket">)</span>
                                </span>
                            </a>
                            <a title="Serbian"
                                href="@if(\Request::route()->getName() === 'home') {{ url('/rs') }} @else {{ url('/rs/'.\Request::route()->getName()) }} @endif"
                                class="menu-item dropdown-item">
                                <img class="wpml-ls-flag" src="{{ asset('storage/flags/sr.png') }}" alt="">
                                <span class="wpml-ls-native" lang="sr">српски</span>
                                <span class="wpml-ls-display">
                                    <span class="wpml-ls-bracket"> (</span>Serbian<span class="wpml-ls-bracket">)</span>
                                </span>
                            </a>
                        </div>
            </ul>
        </div>
    </nav>
</div>
