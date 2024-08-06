<x-layouts.app>
    <div>
        <div class="cs_height_170"></div>

        <!-- Start About Section -->
        <section>

            <div class=" cs_half_bg">
                <div class="container">
                    
                    <div class="cs_about cs_style_3 cs_radius_20 overflow-hidden">
                        <div class="row flex-xl-row flex-column-reverse">
                            <div class="col-xl-7 position-relative">
                                <div class="cs_about_text d-flex  align-items-center">
                                    <div class="cs_section_heading cs_style_1">
                                        <h3
                                            class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">
                                            Chers neurologues</h3>
                                        <div class="cs_height_20"></div>
                                        <h2 class="cs_section_title cs_fs_50 m-0">La Société Marocaine de Neurologie
                                            organise le Congrès National de Neurologie </h2>
                                        <div class="cs_height_85 cs_height_xl_40 cs_height_lg_30"></div>
                                        <p class="cs_section_minititle m-0 cs_heading_color cs_fs_20"> du 09 au 11 mai
                                            2024 à FES, hôtel Marriott.</p>
                                        <div class="cs_height_50"></div>
                                        <div class="cs_hero_info_col">
                                            <a href="{{ asset('pdf/programme/pré-programme1.pdf') }}"
                                                class="cs_btn cs_style_1">
                                                <span>Télécharger Le Programme</span>
                                                <i>
                                                    <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                                    <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                                </i>
                                            </a>
                                        </div>
                                        <div class="cs_height_30"></div>
                                        <div class="cs_hero_info_col">
                                            <button 
                                                class="cs_btn cs_style_1"id="btn-acc">
                                                <span>Mot de bienvenue</span>
                                                <i>
                                                    <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                                    <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                                </i>
                                            </button>
                                        </div>
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="cs_about_img">
                                    <img src="{{ asset('img/jmn/jpn2024.jpg') }}" alt="About" class="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cs_height_100"></div>
        </section>
        <!-- End About Section -->

                   <!-- Start About Section -->
    <section class="cs_about cs_style_1" id="mot-acc" >
        
        <div class="container">
          <div class="row align-items-center flex-lg-row flex-column-reverse cs_gap_y_40">

            <div class="col-lg-12">
              <div class="cs_about_content">
                <div class="cs_section_heading cs_style_1">
                  <h2 class="cs_section_title cs_fs_72 m-0">Mot de bienvenue</h2>
                  <div class="cs_height_5"></div>
                  {{-- <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">Pr Hicham El Otmani</h3> --}}
                </div>
                <div class="cs_height_72 cs_height_lg_30"></div>
                <ul class="cs_about_text_list">
                  <li>
                    <p class="m-0 cs_fs_12">Chers collègues, <br>
                        Au nom du bureau de la SMN, c'est avec un grand honneur que je vous adresse mes salutations et vous souhaite la
                         bienvenue au Congrès National de Neurologie, qui se déroulera du 09 au 11 mai 2024 à Fès, une ville empreinte
                          d'histoire et de culture. Notre thème, « Aux confins de la neurologie et de la psychiatrie », illustre notre
                           engagement à explorer les limites et les interactions entre ces deux domaines médicaux
                        </p><div class="cs_height_20"></div>
                        <p class="m-0 cs_fs_12">
                            Nous sommes ravis d'accueillir des experts, tant locaux qu'internationaux,
                             qui partageront leurs connaissances et perspectives uniques au cours de sessions dédiées. 
                             Ce congrès est également une occasion privilégiée pour renforcer notre collaboration avec
                              les autres sociétés savantes neurologiques spécialisées : Les Sociétés Marocaines de : 
                              Neuropsychologie (SMNP), Maladie de Parkinson et Mouvement Anormal (SMPMA), la SEP (SMASEP), 
                              Maladies Neuro-Vasculaires (SMMNV), Sommeil et la Vigilance (SMSV), le Club Marocain d’ENMG 
                              (CMENMG) ainsi que la Fondation Marocaine de lutte contre les Maladies Neurologiques (F2MN) 
                              et le Collège des Enseignants de Neurologie du Maroc (CENeM) .

                            </p><div class="cs_height_20"></div>
                            <p class="m-0 cs_fs_12">
                                Je tiens à exprimer ma profonde gratitude à tous les acteurs – intervenants, 
                                organisateurs, industrie pharmaceutique et participants – qui contribueront à la réussite de ce
                                 rassemblement scientifique. Ensemble, nous allons approfondir notre compréhension et tracer de
                                  nouvelles voies pour l'avancement de notre domaine.  <br>
                                    Merci à tous pour votre engagement et votre passion

                                </p>
                                <div class="cs_height_30"></div>
                                <h5 class="cs_section_title cs_fs_12 m-0">Pr Hicham El Otmani  <br>
                                    Pour le bureau de la Société Marocaine de Neurologie</h5>
                                    <div class="cs_height_100"></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- End About Section -->
    
 
     
    </div>


    
    <x-slot:scripts>
        <script type="application/javascript">
          var isContentVisible = true;
          $('#mot-acc').hide();
       
            $(document).ready(function () {
                $('#btn-acc').on('click', function () {
                    
                    
                    if (isContentVisible) {
                    $('#mot-acc').show();
                     isContentVisible = false;
                     $("html, body").scrollTop(1000);
                } else{
                    $('#mot-acc').hide();
                    isContentVisible = true;
                    
                }
                })
            })
           

  
        </script>
    </x-slot:scripts>
</x-layouts.app>
