<header class="cs_site_header cs_style1 cs_sticky_header cs_heading_color">
    <div class="cs_main_header">
        <div class="container">
            <div class="cs_main_header_in">
                <div class="cs_main_header_left">
                    <a class="cs_site_branding" href="/">
                        <img src="{{ asset('img/logo-smn.png') }}" alt="Logo" width="95px">
                    </a>
                </div>
                <div class="cs_main_header_right">
                    @if (!Route::is('login') && !auth()->user()?->id)
                        <a href="{{ route('login') }}" class="cs_btn cs_style_1"
                            style="height: 40px;margin-right: 10px">
                            <span>Identification</span>
                        </a>
                    @endif
                    <div class="cs_toolbox">
                        <button class="cs_toolbox_btn cs_sidebar_toggle_btn" type="button">
                            <svg width="35" height="30" viewBox="0 0 35 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.483887 2.46544C0.483887 1.10383 1.14618 0 1.96315 0H33.5208C34.3377 0 35 1.10383 35 2.46544C35 3.82708 34.3377 4.93088 33.5208 4.93088H1.96315C1.14618 4.93088 0.483887 3.82708 0.483887 2.46544Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.483887 14.6694C0.483887 13.3074 1.14618 12.2039 1.96315 12.2039H33.5208C34.3377 12.2039 35 13.3074 35 14.6694C35 16.0309 34.3377 17.1348 33.5208 17.1348H1.96315C1.14618 17.1348 0.483887 16.0309 0.483887 14.6694Z"
                                    fill="currentColor" />
                                <path
                                    d="M0.483887 26.6267C0.483887 25.2648 1.14618 24.1613 1.96315 24.1613H33.5208C34.3377 24.1613 35 25.2648 35 26.6267C35 27.9883 34.3377 29.0922 33.5208 29.0922H1.96315C1.14618 29.0922 0.483887 27.9883 0.483887 26.6267Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="cs_sidenav">
    <div class="cs_sidenav_overlay"></div>
    <div class="cs_sidenav_in">
        <button class="cs_close" type="button"><img src="{{ asset('img/icons/close.svg') }}" alt="Close"></button>
        <div class="cs_logo_box">
            <img src="{{ asset('img/logo-smn.png') }}" alt="Logo" width="100px">
            <div class="cs_height_15"></div>
            <h3 class="cs_fs_24 cs_semibold mb-0">
                Société Marocaine De Neurologie
            </h3>
        </div>
        <div class="cs_height_35"></div>
        <hr>
        <div class="cs_height_70 cs_height_lg_50"></div>
        <div class="cs_iconbox cs_style_11 cs_radius_25">
            <div class="cs_iconbox_icon">
                <img src="{{ asset('img/contact/icon_1.svg') }}" alt="Icon">
            </div>
            <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title cs_fs_24 mb-0">Telephone</h3>
                <p class="cs_iconbox_subtitle mb-0 cs_heading_color"> 06 08 43 59 85</p>
            </div>
        </div>
        <div class="cs_height_30"></div>
        <div class="cs_iconbox cs_style_11 cs_radius_25">
            <div class="cs_iconbox_icon">
                <img src="{{ asset('img/contact/icon_2.svg') }}" alt="Icon">
            </div>
            <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title cs_fs_24 mb-0">Email</h3>
                <p class="cs_iconbox_subtitle mb-0 cs_heading_color">
                    smneurologie.contact@gmail.com
                </p>
            </div>
        </div>
        <div class="cs_height_30"></div>
        <div class="cs_iconbox cs_style_11 cs_radius_25">
            <div class="cs_iconbox_icon">
                <img src="{{ asset('img/contact/icon_3.svg') }}" alt="Icon">
            </div>
            <div class="cs_iconbox_right">
                <h3 class="cs_iconbox_title cs_fs_24 mb-0">Adresse</h3>
                <p class="cs_iconbox_subtitle mb-0 cs_heading_color">
                    5 RUE TABARIA - N°3 - RABAT
                </p>
            </div>
        </div>
        <div class="cs_height_60"></div>
    </div>
</div>
