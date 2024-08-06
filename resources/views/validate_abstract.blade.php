<x-layouts.app>
    <div>
        <section class="cs_banner cs_style_5 cs_bg_filed" data-src="{{ asset('img/contact/banner_bg.svg') }}">
            {{--            <div class="cs_banner_img">--}}
            {{--                <img src="{{ asset('img/contact/banner_img.png') }}" alt="Banner Image" class="cs_main_banner_img">--}}
            {{--            </div>--}}
            <div class="container">
                <h2 class="cs_banner_title cs_fs_72">
                    Veuillez valider votre envoi
                </h2>
            </div>
        </section>

        <section>
            <div class="container cs_mt_minus_110">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30">

                            <form action="{{ route('inscription.abstract.store') }}" method="post">
                                <div class="row">
                                    @csrf

                                    <input type="hidden" name="validation" value="0">

                                    <table class="table">
                                        @if($presenter_first_name && $presenter_last_name)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Soumis par:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="presenter_first_name" value="{{ $presenter_first_name }}">
                                                    <input type="hidden" name="presenter_last_name" value="{{ $presenter_last_name }}">
                                                    <input type="hidden" name="presenter_affiliation" value="{{ $presenter_affiliation }}">
                                                    {{ $presenter_first_name }} {{ $presenter_last_name }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if(count($authors))
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Auteurs:</strong>
                                                </td>
                                                <td>
                                                    @foreach($authors as $index => $author)

                                                        <input type="hidden" name="authors[{{$index}}][first_name]" value="{{ $author['first_name'] }}">
                                                        <input type="hidden" name="authors[{{$index}}][last_name]" value="{{ $author['last_name'] }}">
                                                        <input type="hidden" name="authors[{{$index}}][affiliation]" value="{{ $author['affiliation'] }}">

                                                        <div>{{ $author['first_name'] }} {{ $author['last_name'] }}</div>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        @endif

                                        @if($title)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Titre de la communication:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="title" value="{{ $title }}">
                                                    {{ $title }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($address)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Service ou address d'affiliation:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="address" value="{{ $address }}">
                                                    {{ $address }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($chu)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>CHU:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="chu" value="{{ $chu }}">
                                                    {{ $chu }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($faculty)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Faculté:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="faculty" value="{{ $faculty }}">
                                                    {{ $faculty }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($university)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Université:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="university" value="{{ $university }}">
                                                    {{ $university }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($abstract_type)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Type de travail proposé:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="abstract_type" value="{{ $abstract_type }}">
                                                    {{ $abstract_type }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($introduction)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Introduction:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="introduction" value="{{ $introduction }}">
                                                    {{ $introduction }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($observation)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Observation:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="observation" value="{{ $observation }}">
                                                    {{ $observation }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($materiel_and_methods)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Matériel et méthodes:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="materiel_and_methods" value="{{ $materiel_and_methods }}">
                                                    {{ $materiel_and_methods }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($results)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Résultats:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="results" value="{{ $results }}">
                                                    {{ $results }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($discussion)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Discussion:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="discussion" value="{{ $discussion }}">
                                                    {{ $discussion }}
                                                </td>
                                            </tr>
                                        @endif

                                        @if($conclusion)
                                            <tr>
                                                <td style="margin-right: 30px">
                                                    <strong>Conclusion:</strong>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="conclusion" value="{{ $conclusion }}">
                                                    {{ $conclusion }}
                                                </td>
                                            </tr>
                                        @endif
                                    </table>
                                </div>

                                <div class="col-lg-12">
                                    <div class="cs_height_18"></div>
                                    <button class="cs_btn cs_style_1 w-100" style="height: 80px">
                                        <span>Valider</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="mt-5">
            <div class="cs_footer_bottom cs_accent_bg">
                <div class="container">
                    <div class="cs_footer_bottom_in">
                        <div class="cs_copyright mx-auto">Copyright © 2024 SMN. All rights reserved.</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-layouts.app>
