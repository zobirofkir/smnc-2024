<x-layouts.app>
    <div>
        <section class="cs_banner cs_style_5 cs_bg_filed" data-src="{{ asset('img/contact/banner_bg.svg') }}">
{{--            <div class="cs_banner_img">--}}
{{--                <img src="{{ asset('img/contact/banner_img.png') }}" alt="Banner Image" class="cs_main_banner_img">--}}
{{--            </div>--}}
            <div class="container">
                <h2 class="cs_banner_title cs_fs_72">
                    Identification
                </h2>
            </div>
        </section>

        <section>
            <div class="container cs_mt_minus_110">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30">

                            <form action="{{ route('auth.authenticate') }}" method="post">
                                <div class="row">
                                    @csrf

                                    <div>
                                        <x-ui.form.input  id="email" name="email" label="E-mail" />
                                    </div>

                                    <div>
                                        <x-ui.form.input type="password" id="password" name="password" label="Mot de pass" />
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="cs_height_18"></div>
                                        <button class="cs_btn cs_style_1 w-100" style="height: 80px">
                                            <span>Continuer</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                            <br>
                            <a href="{{ url('/inscription') }}" class="btn btn-outline-primary">
                                Inscription
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="mt-5">
            <div class="cs_footer_bottom cs_accent_bg">
                <div class="container">
                    <div class="cs_footer_bottom_in">
                        {{-- <div class="cs_copyright mx-auto">Copyright © 2024 SMN. All rights reserved.</div> --}}
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-layouts.app>
