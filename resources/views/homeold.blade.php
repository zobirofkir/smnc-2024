<x-layouts.app>
    <section class="cs_hero cs_style_1" style="padding-bottom: 0;height: 100vh">
        <div class="cs_hero_wrap cs_bg_filed" style="padding-top: 148px;" data-src="{{ asset('img/home_1/hero_bg.jpeg') }}">
            <div class="container">
                <div class="cs_hero_text">
                    <h1 class="cs_hero_title cs_fs_94">
                        La Société Marocaine de Neurologie (SMN)
                    </h1>
                    <p class="cs_hero_subtitle cs_fs_20 cs_heading_color" style="margin-top: 0">
                        La Société Marocaine de Neurologie (SMN) est une association à but non lucratif des neurologues marocains dont le rôle est d’assurer la formation continue dans le domaine de la neurologie et des neurosciences .
                    </p>

                    <div>
                        @if(!auth()->user() || !auth()->user()->inscription)
                            <div>
                                <a href="{{ route('inscription.index') }}" class="cs_btn cs_style_1">
                                    <span>Envoyer demande d'inscription</span>
                                </a>
                            </div>
                        @endif

                        @if(auth()->user())
                            @if(!auth()->user()->inscription?->abstractInscription)
                                <div class="mt-2">
                                    <a href="{{ route('inscription.abstract') }}" class="cs_btn cs_style_1">
                                        <span>Soumettre votre abstract</span>
                                    </a>
                                </div>
                            @else
                                <h3 class="text-success">
                                    votre résumé encour de traitement
                                </h3>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
