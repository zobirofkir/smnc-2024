<x-layouts.app>
    <div>
        <section class="cs_banner cs_style_5 cs_bg_filed" data-src="{{ asset('img/contact/banner_bg.svg') }}">
            {{--            <div class="cs_banner_img"> --}}
            {{--                <img src="{{ asset('img/contact/banner_img.png') }}" alt="Banner Image" class="cs_main_banner_img"> --}}
            {{--            </div> --}}
            <div class="container">
                <h2 class="cs_banner_title cs_fs_72">
                    Envoyer un résumé d'un travail scientifique
                </h2>
            </div>
        </section>

        <section>
            <div class="container cs_mt_minus_110">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30">

                            @if (session('success'))
                                <div class="alert alert-success mb-5" role="alert">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium amet minus
                                    repudiandae tempore voluptatum.
                                </div>
                            @endif

                            <form action="{{ route('inscription.abstract.store') }}" method="post">
                                <div class="row">
                                    @csrf
                                    <input type="hidden" name="validation" value="1">

                                    @php
                                        $types = [
                                            \App\Enums\TypeAbstractInscription::TYPE1->value,
                                            \App\Enums\TypeAbstractInscription::TYPE2->value,
                                        ];
                                    @endphp

                                    <div>
                                        <h3 class="mb-4">Auteur présentateur</h3>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <x-ui.form.input id="presenter-first-name" name="presenter_first_name"
                                                    label="Nom" />
                                            </div>

                                            <div class="col-lg-6">
                                                <x-ui.form.input id="presenter-last-name" name="presenter_last_name"
                                                    label="Prénom" />
                                            </div>

                                            <div class="col-span-12">
                                                <x-ui.form.input id="presenter-affiliation" name="presenter_affiliation"
                                                    label="Affiliation" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="authors-list">
                                        <h3 class="mb-4">Liste des auteurs</h3>

                                        @if (empty(old('authors')))

                                            <div id="author-wrapper-ddsdasd32" class="row"
                                                style="border-bottom: 1px solid rgba(48, 123, 196, 0.5);margin-bottom: 30px">
                                                <div class="col-lg-12 mb-3 d-flex justify-content-end">
                                                    <i class="delete-author text-danger fa-regular fa-trash-can"
                                                        style="cursor: pointer"
                                                        data-target="author-wrapper-ddsdasd32"></i>
                                                </div>

                                                <div class="col-lg-6">
                                                    <x-ui.form.input id="author-first-name-1"
                                                        name="authors[ddsdasd32][first_name]" label="Nom"
                                                        deep_path="{{ 'authors.ddsdasd32.first_name' }}" />
                                                </div>

                                                <div class="col-lg-6">
                                                    <x-ui.form.input id="author-last-name-1"
                                                        name="authors[ddsdasd32][last_name]" label="Prénom"
                                                        deep_path="{{ 'authors.ddsdasd32.last_name' }}" />
                                                </div>

                                                <div class="col-lg-12">
                                                    <x-ui.form.input id="author-affiliation-1"
                                                        name="authors[ddsdasd32][affiliation]" label="Affiliation"
                                                        deep_path="{{ 'authors.ddsdasd32.affiliation' }}" />
                                                </div>
                                            </div>
                                        @else
                                            @foreach (old('authors') as $index => $author)
                                                <div id="author-wrapper-{{ $index }}" class="row"
                                                    style="border-bottom: 1px solid rgba(48, 123, 196, 0.5);margin-bottom: 30px">
                                                    <div class="col-lg-12 mb-3 d-flex justify-content-end">
                                                        <i class="delete-author text-danger fa-regular fa-trash-can"
                                                            style="cursor: pointer"
                                                            data-target="author-wrapper-{{ $index }}"></i>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <x-ui.form.input id="author-first-name-{{ $index }}"
                                                            name="authors[{{ $index }}][first_name]"
                                                            label="Nom"
                                                            deep_path="{{ 'authors.' . $index . '.first_name' }}" />
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <x-ui.form.input id="author-last-name-{{ $index }}"
                                                            name="authors[{{ $index }}][last_name]"
                                                            label="Prénom"
                                                            deep_path="{{ 'authors.' . $index . '.last_name' }}" />
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <x-ui.form.input id="author-affiliation-{{ $index }}"
                                                            name="authors[{{ $index }}][affiliation]"
                                                            label="Affiliation"
                                                            deep_path="{{ 'authors.' . $index . '.affiliation' }}" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                    <style>
                                        .add-new {
                                            width: 100%;
                                            height: 70px;
                                            color: white;
                                            text-align: center;
                                            background-color: #307bc4;
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            border-radius: 30px;
                                            text-transform: capitalize;
                                            font-weight: bold;
                                            cursor: pointer;
                                            margin-top: 30px;
                                        }
                                    </style>

                                    @error('authors')
                                        <div class="text-danger mt-1 pl-1">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div id="add-new-author-btn" class="add-new">
                                        Ajouter un auteur
                                    </div>

                                    <div class="mt-5">
                                        <h3 class="mb-4">Abstract Information</h3>

                                        <div>
                                            <x-ui.form.input id="address" name="address"
                                                label="Service ou département ou cabinet" />

                                            <x-ui.form.input id="chu" name="chu" label="CHU" />

                                            <x-ui.form.input id="faculty" name="faculty" label="Faculté" />

                                            <x-ui.form.input id="university" name="university" label="Université" />

                                            <div class="col-lg-12">
                                                <x-ui.form.select id="abstract_type" name="abstract_type"
                                                    label="Type de travail proposé" :options="[$types[0], $types[1]]"
                                                    value="{{ $abstract_type ?? '' }}" />
                                            </div>

                                            <div class="col-lg-12">
                                                <x-ui.form.textarea id="title" name="title" label="Titre"
                                                    rows="5" max="150" />
                                            </div>

                                            <div class="col-lg-12">
                                                <x-ui.form.textarea id="introduction" name="introduction"
                                                    label="Introduction" max="400" />
                                            </div>

                                            <div class="col-lg-12" id="observation-wrapper">
                                                <x-ui.form.textarea id="observation" name="observation"
                                                    label="Observation" max="1000" />
                                            </div>

                                            <div class="col-lg-12" id="materiel-and-methods-wrapper">
                                                <x-ui.form.textarea id="materiel-and-methods"
                                                    name="materiel_and_methods" label="Matériel et méthodes"
                                                    max="800" />
                                            </div>

                                            <div class="col-lg-12" id="results-wrapper">
                                                <x-ui.form.textarea id="results" name="results" label="Résultats"
                                                    max="800" />
                                            </div>

                                            <div class="col-lg-12">
                                                <x-ui.form.textarea id="discussion" name="discussion"
                                                    label="Discussion" max="600" />
                                            </div>

                                            <div class="col-lg-12">
                                                <x-ui.form.textarea id="conclusion" name="conclusion"
                                                    label="Conclusion" max="400" />
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-12">
                                        <div class="cs_height_18"></div>
                                        <button class="cs_btn cs_style_1 w-100" style="height: 80px">
                                            <span>Envoyer</span>
                                        </button>
                                    </div>
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



    <x-slot:scripts>
        <script type="application/javascript">
            $(document).ready(function () {
                function handleInputs(val) {
                    let materielAndMethodsEl = $('#materiel-and-methods-wrapper');
                    let resultsEl = $('#results-wrapper');
                    let observationEl = $('#observation-wrapper');

                    switch (val) {
                        case '{{ \App\Enums\TypeAbstractInscription::TYPE1->value }}':
                            materielAndMethodsEl.hide();
                            resultsEl.hide();
                            observationEl.show();
                            break;

                        case '{{ \App\Enums\TypeAbstractInscription::TYPE2->value }}':
                            materielAndMethodsEl.show();
                            resultsEl.show();
                            observationEl.hide();
                            break;

                        default:
                            $('form').destroy();
                            break;
                    }
                }
                function appendAuthor(index) {
                    $('.authors-list').append(`
                       <div id="author-wrapper-${index}" class="row" style="border-bottom: 1px solid rgba(48, 123, 196, 0.5);margin-bottom: 30px">
                            <div class="col-lg-12 mb-3 d-flex justify-content-end">
                                <i class="delete-author text-danger fa-regular fa-trash-can" style="cursor: pointer" data-target="author-wrapper-${index}"></i>
                            </div>

                            <div class="col-lg-6">
                                <x-ui.form.input  id="author-first-name-${index}" name="authors[${index}][first_name]" label="Nom" deep_path="authors.${index}.affiliation"/>
                            </div>

                            <div class="col-lg-6">
                                <x-ui.form.input  id="author-last-name-${index}" name="authors[${index}][last_name]" label="Prénom" deep_path="authors.${index}.affiliation"/>
                            </div>

                            <div class="col-lg-12">
                                <x-ui.form.input  id="author-affiliation-${index}" name="authors[${index}][affiliation]" label="Affiliation" deep_path="authors.${index}.affiliation"/>
                            </div>
                       </div>
                    `);
                }

                let abstractTypeEl = $("#abstract_type");
                abstractTypeEl.select2();
                abstractTypeEl.on("select2:select", function (e) {
                    handleInputs($(this).val());
                });

                handleInputs(abstractTypeEl.val());


                let addNewAuthorBtn = $('#add-new-author-btn');
                addNewAuthorBtn.on('click', function () {
                    appendAuthor(Math.random().toString(16).slice(2));
                })

                $(document).on('click', '.delete-author', function (e) {
                    let targetSelector = '#' + $(this).data('target');
                    $(document).find(targetSelector).remove();
                })
            });
        </script>
    </x-slot:scripts>
</x-layouts.app>
