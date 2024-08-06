<x-layouts.app>
    <!-- Start Banner  -->
    <section class="cs_banner cs_style_5 cs_bg_filed" data-src=" {{ asset('img/doctors/banner_bg.svg') }}">

        <div class="cs_banner_img">
          <img src="{{ asset('img/logo-smn-v1.png') }}" alt="Banner Image" id="home-page-image">

        </div>
        <div class="container">
          <div class="cs_banner_text">
            <h2 class="cs_banner_title cs_fs_72" >Société Marocaine <br>de Neurologie</h2>
            <h2 class="cs_banner_title cs_fs_72" id="titre-header-smn">Moroccan Society of Neurology</h2>

            <h2 class="cs_banner_title cs_fs_72 cs_heading_color" id="titre-header-smn">الجمعية المغربية لأمراض الجهاز العصبي</h2>

          </div>
        </div>
    </section>
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                <div class="container">
                    {{ session('message') }}
                </div>
            </div>
        @endif
      <!-- End Banner  -->
          <!-- Start About Section -->
          <div class="cs_height_170 cs_gray_bg_1"></div>
          <section>

            <div  class="  cs_gray_bg_1">
              <div class="container">
                <div class="cs_about cs_style_3 cs_radius_20 overflow-hidden">
                  <div class="row flex-xl-row flex-column-reverse">
                    <div class="col-xl-7 position-relative">
                      <div class="cs_about_text d-flex  align-items-center">
                        <div class="cs_section_heading cs_style_1">
                          <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">Chers neurologues</h3>
                          <div class="cs_height_20"></div>
                          <h2 class="cs_section_title cs_fs_50 m-0">La Société Marocaine de Neurologie organise le Congrès National de Neurologie  </h2>
                          <div class="cs_height_85 cs_height_xl_40 cs_height_lg_30"></div>
                          <p class="cs_section_minititle m-0 cs_heading_color cs_fs_20"> du 09 au 11 mai 2024 à FES, hôtel Marriott.</p>
                          <div class="cs_height_50"></div>
                          <div class="cs_hero_info_col">
                            <a href="{{ asset('pdf/programme/pré-programme1.pdf') }}" class="cs_btn cs_style_1" >
                              <span> Télécharger Le  Programme</span>
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

                          @if(auth()->user())
                          <div class="cs_height_30"></div>
                          <div class="cs_hero_info_col">
                              @if(env('ABSTRACT_FEATURE_EXPIRED', false))
                                  <a href="{{ route('inscription.abstract') }}" class="cs_btn cs_style_99 " style="cursor: not-allowed">
                                      <span>Le délai de soumettre un abstract est expiré  </span>
                                  </a>

                              @else
                              <a href="{{ route('inscription.abstract') }}" class="cs_btn cs_style_99 " >
                                  <span>Soumettre votre abstract  </span>
                                  <i>
                                      <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                      <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                  </i>
                              </a>
                              @endif

                          </div>
                          @endif
                            {{-- @if(!auth()->user() || !auth()->user()->inscription)
                            <div class="cs_height_30"></div>
                            <div class="cs_hero_info_col">
                                    <a href="{{ route('inscription.index') }}" class="cs_btn cs_style_1" id="cnn-btn">
                                        <span>Inscription CNN 2024  </span>
                                        <i>
                                            <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                            <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                        </i>
                                    </a>
                                </div>
                            @endif --}}

                            @if(auth()->user())
                            <div class="cs_height_30"></div>
                            <div class="cs_hero_info_col">
                                    <a href="{{ route('inscription.payment') }}" class="cs_btn cs_style_1">
                                        <span>Finaliser votre inscription  </span>
                                        <i>
                                            <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                            <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                                        </i>
                                    </a>
                                </div>
                            @endif



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
            <div class="cs_height_170 cs_gray_bg_1"></div>

          </section>
          <div class="cs_height_100"></div>

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
     <!-- Start About Section -->
    <section class="cs_about cs_style_1 cs_type_1 cs_shape_wrap" id="about-smn">
        <div class="cs_shape_1 cs_position_4"></div>
        <div class="container">
          <div class="row align-items-center cs_gap_y_50">
            <div class="col-lg-6">
              <div class="cs_about_img">
                <img src="{{ asset('img/about-img.png') }}" alt="About">
             </div>
            </div>
            <div class="col-lg-6">
              <div class="cs_about_content">
                <div class="cs_section_heading cs_style_1">
                  <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">À PROPOS DE NOUS</h3>
                  <div class="cs_height_5"></div>
                  <h2 class="cs_section_title cs_fs_72 m-0">La Société Marocaine de Neurologie (SMN)</h2>
                  <div class="cs_height_85 cs_height_xl_50"></div>
                  <p class="mb-0">La Société Marocaine de Neurologie (SMN) est une association à but non lucratif des neurologues marocains dont le rôle est d’assurer la formation continue dans le domaine de la neurologie et des neurosciences . <br> </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
      <!-- End About Section -->

    <!-- Start Blog Section -->
    <section>
        <div class="cs_height_160 cs_height_xl_110 cs_height_lg_70"></div>
        <div class="container">
          <div class="cs_section_heading cs_style_1 text-center">
            <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">Événements</h3>
            <div class="cs_height_5"></div>
            <h2 class="cs_section_title cs_fs_72 m-0">Derniers Événements</h2>
          </div>
          <div class="cs_height_70 cs_height_lg_50"></div>
          <div class="row cs_gap_y_24">
            <!-- 1 -->
            <div class="col-lg-6">
              <div class="cs_post_pr_136">
                <div class="cs_post cs_style_1 cs_type_2">
                  <a href="/jpn2023" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_tanger2023.jpg') }}" alt="Post"></a>
                  <div class="cs_post_info">
                    <div>
                      <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="/jpn2023">Journée de Printemps de Neurologie 2023</a></h2>
                    </div>
                    <div class="cs_post_meta">
                      <div class="cs_posted_by">Mai 4,5,6 2023</div>
                      <div class="cs_post_social">
                        <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="cs_center rounded-circle"><i class="fa-brands fa-twitter"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <div class="col-lg-6">
              <div class="cs_post cs_style_2 cs_radius_20 overflow-hidden">
                <a href="/jan2022" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_rabat2022..jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <div>
                    <h2 class="cs_post_title cs_semibold cs_fs_24"><a href="/jan2022">Journée d’Automne de Neurologie 2022</a></h2>
                    <div class="cs_posted_by">Septembre 05, 2022 </div>
                  </div>
                </div>
              </div>
              <!-- 3 -->
              <div class="cs_post cs_style_2 cs_radius_20 overflow-hidden">
                <a href="/enmg2022" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/enmg2022.jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <div>
                    <h2 class="cs_post_title cs_semibold cs_fs_24"><a href="/enmg2022">ENMG2022</a></h2>
                    <div class="cs_posted_by">Janvier 31, 2022  3</div>
                  </div>
                </div>
              </div>
              <!-- 4 -->
              <div class="cs_post cs_style_2 cs_radius_20 overflow-hidden">
                <a href="/jan2021" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/home.jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <div>
                    <h2 class="cs_post_title cs_semibold cs_fs_24"><a href="/jan2021">Journée d’Automne de Neurologie 2021, "Journée des Retrouvailles" </a></h2>
                    <div class="cs_posted_by">Novembre  09, 2021  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_height_70 cs_height_lg_50"></div>
    </section>
    <!-- End Blog Section -->
        <!-- Start Blog Section -->
    <section>
        <div class="cs_height_185 cs_height_xl_145 cs_height_lg_105"></div>
        <div class="container">
          <div class="cs_section_heading cs_style_1 text-center">
            <h2 class="cs_section_title cs_fs_72 m-0">Nos Travaux</h2>
          </div>
          <div class="cs_height_70 cs_height_lg_50"></div>
          <div class="row cs_gap_y_24">
            <!-- -------------1------ -->
            <div class="col-lg-6">
              <div class="cs_post cs_style_3 cs_radius_20 overflow-hidden">
                <p class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/vid1.jpg') }}" alt="Post"></p>
                <div class="cs_post_info">
                  <div class="cs_hero_btn_wrap">
                    <a href="https://www.youtube.com/embed/xF15PYwWmwE?si=Fa-iyovbfSlSvBhI" class="cs_video_open cs_heading_color cs_text_btn_2 cs_fs_20">
                      <span class="cs_text_btn_icon">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M42.739 7.26089C32.8938 -2.48797 17.0097 -2.40994 7.26088 7.43526C-2.42029 17.2121 -2.42029 32.9623 7.26088 42.7392C17.1061 52.488 32.9902 52.41 42.739 42.5648C52.4202 32.788 52.4202 17.0377 42.739 7.26089ZM25 48.0713C12.2783 48.0713 1.92868 37.7217 1.92868 25C1.92868 12.2782 12.2782 1.9288 25 1.9288C37.7217 1.9288 48.0712 12.2784 48.0712 25.0001C48.0712 37.7218 37.7216 48.0713 25 48.0713Z" fill="currentColor"/>
                          <path d="M38.5996 24.1265V24.1277L18.2308 12.368C17.7487 12.0897 17.1322 12.2548 16.8539 12.737C16.7655 12.8901 16.7189 13.0637 16.7189 13.2405V36.7598C16.7191 37.3164 17.1707 37.7676 17.7273 37.7672C17.9041 37.7671 18.0778 37.7206 18.2309 37.6322L38.5997 25.8725C39.0819 25.5943 39.2471 24.9778 38.9689 24.4956C38.8803 24.3423 38.753 24.215 38.5996 24.1265Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span class="cs_text_btn_text">Regarder la vidéo</span>
                    </a>
                  </div>
                  <div class="cs_height_10"></div>
                  {{-- <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="Actualites-jan-2023.html"> Journée d’Automne de Neurologie 2023
                  </a></h2>
                  <div class="cs_posted_by">
                    <i>
                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.474 0.873999H13.362V0.582666C13.362 0.428133 13.2988 0.27993 13.1863 0.170659C13.0737 0.0613878 12.9211 0 12.762 0C12.6029 0 12.4503 0.0613878 12.3377 0.170659C12.2252 0.27993 12.162 0.428133 12.162 0.582666V0.873999H5.838V0.582666C5.838 0.428133 5.77479 0.27993 5.66226 0.170659C5.54974 0.0613878 5.39713 0 5.238 0C5.07887 0 4.92626 0.0613878 4.81374 0.170659C4.70121 0.27993 4.638 0.428133 4.638 0.582666V0.873999H2.526C1.85655 0.875537 1.21497 1.13447 0.741599 1.59417C0.268225 2.05387 0.0015845 2.67691 0 3.32702V13.547C0.0015845 14.1971 0.268225 14.8201 0.741599 15.2798C1.21497 15.7395 1.85655 15.9985 2.526 16H15.474C16.1435 15.9985 16.785 15.7395 17.2584 15.2798C17.7318 14.8201 17.9984 14.1971 18 13.547V3.32702C17.9984 2.67691 17.7318 2.05387 17.2584 1.59417C16.785 1.13447 16.1435 0.875537 15.474 0.873999ZM2.526 2.03933H4.638V2.33066C4.638 2.4852 4.70121 2.6334 4.81374 2.74267C4.92626 2.85194 5.07887 2.91333 5.238 2.91333C5.39713 2.91333 5.54974 2.85194 5.66226 2.74267C5.77479 2.6334 5.838 2.4852 5.838 2.33066V2.03933H12.162V2.33066C12.162 2.4852 12.2252 2.6334 12.3377 2.74267C12.4503 2.85194 12.6029 2.91333 12.762 2.91333C12.9211 2.91333 13.0737 2.85194 13.1863 2.74267C13.2988 2.6334 13.362 2.4852 13.362 2.33066V2.03933H15.474C15.8257 2.03933 16.163 2.175 16.4116 2.41649C16.6603 2.65798 16.8 2.9855 16.8 3.32702V4.70794H1.2V3.32702C1.2 2.9855 1.3397 2.65798 1.58838 2.41649C1.83705 2.175 2.17432 2.03933 2.526 2.03933ZM15.474 14.858H2.526C2.34983 14.858 2.17542 14.8239 2.01296 14.7578C1.85049 14.6916 1.70324 14.5947 1.57979 14.4726C1.45634 14.3506 1.35917 14.2058 1.29396 14.0469C1.22875 13.888 1.19681 13.718 1.2 13.547V5.87327H16.8V13.547C16.8032 13.718 16.7712 13.888 16.706 14.0469C16.6408 14.2058 16.5437 14.3506 16.4202 14.4726C16.2968 14.5947 16.1495 14.6916 15.987 14.7578C15.8246 14.8239 15.6502 14.858 15.474 14.858Z" fill="currentColor"/>
                      </svg>
                    </i>
                    Octobre 30, 2023
                  </div> --}}

                </div>
              </div>
            </div>
            <!-- ------------------2--------- -->
            <div class="col-lg-6">
              <div class="cs_post cs_style_3 cs_radius_20 overflow-hidden">
                <p class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/vid2.jpg') }}" alt="Post"></p>
                <div class="cs_post_info">
                  <div class="cs_hero_btn_wrap">
                    <a href="https://www.youtube.com/embed/H9El9s4pMBc?si=V7EGYGbFrE-8YBZd" class="cs_video_open cs_heading_color cs_text_btn_2 cs_fs_20">
                      <span class="cs_text_btn_icon">
                        <svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M42.739 7.26089C32.8938 -2.48797 17.0097 -2.40994 7.26088 7.43526C-2.42029 17.2121 -2.42029 32.9623 7.26088 42.7392C17.1061 52.488 32.9902 52.41 42.739 42.5648C52.4202 32.788 52.4202 17.0377 42.739 7.26089ZM25 48.0713C12.2783 48.0713 1.92868 37.7217 1.92868 25C1.92868 12.2782 12.2782 1.9288 25 1.9288C37.7217 1.9288 48.0712 12.2784 48.0712 25.0001C48.0712 37.7218 37.7216 48.0713 25 48.0713Z" fill="currentColor"/>
                          <path d="M38.5996 24.1265V24.1277L18.2308 12.368C17.7487 12.0897 17.1322 12.2548 16.8539 12.737C16.7655 12.8901 16.7189 13.0637 16.7189 13.2405V36.7598C16.7191 37.3164 17.1707 37.7676 17.7273 37.7672C17.9041 37.7671 18.0778 37.7206 18.2309 37.6322L38.5997 25.8725C39.0819 25.5943 39.2471 24.9778 38.9689 24.4956C38.8803 24.3423 38.753 24.215 38.5996 24.1265Z" fill="currentColor"/>
                        </svg>
                      </span>
                      <span class="cs_text_btn_text">Regarder la vidéo</span>
                    </a>
                  </div>
                  <div class="cs_height_10"></div>
                  {{-- <a href="#" class="cs_post_category">Tanger</a>
                  <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="Actualites-jpn-2023.html">Journée de printemps de Neurologie 2023</a></h2>
                  <div class="cs_posted_by">
                    <i>
                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.474 0.873999H13.362V0.582666C13.362 0.428133 13.2988 0.27993 13.1863 0.170659C13.0737 0.0613878 12.9211 0 12.762 0C12.6029 0 12.4503 0.0613878 12.3377 0.170659C12.2252 0.27993 12.162 0.428133 12.162 0.582666V0.873999H5.838V0.582666C5.838 0.428133 5.77479 0.27993 5.66226 0.170659C5.54974 0.0613878 5.39713 0 5.238 0C5.07887 0 4.92626 0.0613878 4.81374 0.170659C4.70121 0.27993 4.638 0.428133 4.638 0.582666V0.873999H2.526C1.85655 0.875537 1.21497 1.13447 0.741599 1.59417C0.268225 2.05387 0.0015845 2.67691 0 3.32702V13.547C0.0015845 14.1971 0.268225 14.8201 0.741599 15.2798C1.21497 15.7395 1.85655 15.9985 2.526 16H15.474C16.1435 15.9985 16.785 15.7395 17.2584 15.2798C17.7318 14.8201 17.9984 14.1971 18 13.547V3.32702C17.9984 2.67691 17.7318 2.05387 17.2584 1.59417C16.785 1.13447 16.1435 0.875537 15.474 0.873999ZM2.526 2.03933H4.638V2.33066C4.638 2.4852 4.70121 2.6334 4.81374 2.74267C4.92626 2.85194 5.07887 2.91333 5.238 2.91333C5.39713 2.91333 5.54974 2.85194 5.66226 2.74267C5.77479 2.6334 5.838 2.4852 5.838 2.33066V2.03933H12.162V2.33066C12.162 2.4852 12.2252 2.6334 12.3377 2.74267C12.4503 2.85194 12.6029 2.91333 12.762 2.91333C12.9211 2.91333 13.0737 2.85194 13.1863 2.74267C13.2988 2.6334 13.362 2.4852 13.362 2.33066V2.03933H15.474C15.8257 2.03933 16.163 2.175 16.4116 2.41649C16.6603 2.65798 16.8 2.9855 16.8 3.32702V4.70794H1.2V3.32702C1.2 2.9855 1.3397 2.65798 1.58838 2.41649C1.83705 2.175 2.17432 2.03933 2.526 2.03933ZM15.474 14.858H2.526C2.34983 14.858 2.17542 14.8239 2.01296 14.7578C1.85049 14.6916 1.70324 14.5947 1.57979 14.4726C1.45634 14.3506 1.35917 14.2058 1.29396 14.0469C1.22875 13.888 1.19681 13.718 1.2 13.547V5.87327H16.8V13.547C16.8032 13.718 16.7712 13.888 16.706 14.0469C16.6408 14.2058 16.5437 14.3506 16.4202 14.4726C16.2968 14.5947 16.1495 14.6916 15.987 14.7578C15.8246 14.8239 15.6502 14.858 15.474 14.858Z" fill="currentColor"/>
                      </svg>
                    </i>
                    Mars 16, 2023
                  </div> --}}
                </div>
              </div>
            </div>
            <!-- ------------3------------ -->

          </div>
        </div>
        <div class="cs_height_160 cs_height_xl_110 cs_height_lg_80"></div>
    </section>
    <!-- End Blog Section -->

    <!-- Start Blog Section -->
    {{-- <section>
        <div class="cs_height_185 cs_height_xl_145 cs_height_lg_105"></div>
        <div class="container">
          <div class="cs_section_heading cs_style_1 text-center">
            <h2 class="cs_section_title cs_fs_72 m-0">Dernières Actualités</h2>
          </div>
          <div class="cs_height_70 cs_height_lg_50"></div>
          <div class="row cs_gap_y_24">
            <!-- -------------1------ -->
            <div class="col-lg-4">
              <div class="cs_post cs_style_3 cs_radius_20 overflow-hidden">
                <a href="Actualites-jan-2023.html" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_casa2023.jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <a href="#" class="cs_post_category">Casa</a>
                  <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="Actualites-jan-2023.html"> Journée d’Automne de Neurologie 2023
                  </a></h2>
                  <div class="cs_posted_by">
                    <i>
                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.474 0.873999H13.362V0.582666C13.362 0.428133 13.2988 0.27993 13.1863 0.170659C13.0737 0.0613878 12.9211 0 12.762 0C12.6029 0 12.4503 0.0613878 12.3377 0.170659C12.2252 0.27993 12.162 0.428133 12.162 0.582666V0.873999H5.838V0.582666C5.838 0.428133 5.77479 0.27993 5.66226 0.170659C5.54974 0.0613878 5.39713 0 5.238 0C5.07887 0 4.92626 0.0613878 4.81374 0.170659C4.70121 0.27993 4.638 0.428133 4.638 0.582666V0.873999H2.526C1.85655 0.875537 1.21497 1.13447 0.741599 1.59417C0.268225 2.05387 0.0015845 2.67691 0 3.32702V13.547C0.0015845 14.1971 0.268225 14.8201 0.741599 15.2798C1.21497 15.7395 1.85655 15.9985 2.526 16H15.474C16.1435 15.9985 16.785 15.7395 17.2584 15.2798C17.7318 14.8201 17.9984 14.1971 18 13.547V3.32702C17.9984 2.67691 17.7318 2.05387 17.2584 1.59417C16.785 1.13447 16.1435 0.875537 15.474 0.873999ZM2.526 2.03933H4.638V2.33066C4.638 2.4852 4.70121 2.6334 4.81374 2.74267C4.92626 2.85194 5.07887 2.91333 5.238 2.91333C5.39713 2.91333 5.54974 2.85194 5.66226 2.74267C5.77479 2.6334 5.838 2.4852 5.838 2.33066V2.03933H12.162V2.33066C12.162 2.4852 12.2252 2.6334 12.3377 2.74267C12.4503 2.85194 12.6029 2.91333 12.762 2.91333C12.9211 2.91333 13.0737 2.85194 13.1863 2.74267C13.2988 2.6334 13.362 2.4852 13.362 2.33066V2.03933H15.474C15.8257 2.03933 16.163 2.175 16.4116 2.41649C16.6603 2.65798 16.8 2.9855 16.8 3.32702V4.70794H1.2V3.32702C1.2 2.9855 1.3397 2.65798 1.58838 2.41649C1.83705 2.175 2.17432 2.03933 2.526 2.03933ZM15.474 14.858H2.526C2.34983 14.858 2.17542 14.8239 2.01296 14.7578C1.85049 14.6916 1.70324 14.5947 1.57979 14.4726C1.45634 14.3506 1.35917 14.2058 1.29396 14.0469C1.22875 13.888 1.19681 13.718 1.2 13.547V5.87327H16.8V13.547C16.8032 13.718 16.7712 13.888 16.706 14.0469C16.6408 14.2058 16.5437 14.3506 16.4202 14.4726C16.2968 14.5947 16.1495 14.6916 15.987 14.7578C15.8246 14.8239 15.6502 14.858 15.474 14.858Z" fill="currentColor"/>
                      </svg>
                    </i>
                    Octobre 30, 2023
                  </div>
                </div>
              </div>
            </div>
            <!-- ------------------2--------- -->
            <div class="col-lg-4">
              <div class="cs_post cs_style_3 cs_radius_20 overflow-hidden">
                <a href="Actualites-jpn-2023.html" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_tanger2023.jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <a href="#" class="cs_post_category">Tanger</a>
                  <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="Actualites-jpn-2023.html">Journée de printemps de Neurologie 2023</a></h2>
                  <div class="cs_posted_by">
                    <i>
                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.474 0.873999H13.362V0.582666C13.362 0.428133 13.2988 0.27993 13.1863 0.170659C13.0737 0.0613878 12.9211 0 12.762 0C12.6029 0 12.4503 0.0613878 12.3377 0.170659C12.2252 0.27993 12.162 0.428133 12.162 0.582666V0.873999H5.838V0.582666C5.838 0.428133 5.77479 0.27993 5.66226 0.170659C5.54974 0.0613878 5.39713 0 5.238 0C5.07887 0 4.92626 0.0613878 4.81374 0.170659C4.70121 0.27993 4.638 0.428133 4.638 0.582666V0.873999H2.526C1.85655 0.875537 1.21497 1.13447 0.741599 1.59417C0.268225 2.05387 0.0015845 2.67691 0 3.32702V13.547C0.0015845 14.1971 0.268225 14.8201 0.741599 15.2798C1.21497 15.7395 1.85655 15.9985 2.526 16H15.474C16.1435 15.9985 16.785 15.7395 17.2584 15.2798C17.7318 14.8201 17.9984 14.1971 18 13.547V3.32702C17.9984 2.67691 17.7318 2.05387 17.2584 1.59417C16.785 1.13447 16.1435 0.875537 15.474 0.873999ZM2.526 2.03933H4.638V2.33066C4.638 2.4852 4.70121 2.6334 4.81374 2.74267C4.92626 2.85194 5.07887 2.91333 5.238 2.91333C5.39713 2.91333 5.54974 2.85194 5.66226 2.74267C5.77479 2.6334 5.838 2.4852 5.838 2.33066V2.03933H12.162V2.33066C12.162 2.4852 12.2252 2.6334 12.3377 2.74267C12.4503 2.85194 12.6029 2.91333 12.762 2.91333C12.9211 2.91333 13.0737 2.85194 13.1863 2.74267C13.2988 2.6334 13.362 2.4852 13.362 2.33066V2.03933H15.474C15.8257 2.03933 16.163 2.175 16.4116 2.41649C16.6603 2.65798 16.8 2.9855 16.8 3.32702V4.70794H1.2V3.32702C1.2 2.9855 1.3397 2.65798 1.58838 2.41649C1.83705 2.175 2.17432 2.03933 2.526 2.03933ZM15.474 14.858H2.526C2.34983 14.858 2.17542 14.8239 2.01296 14.7578C1.85049 14.6916 1.70324 14.5947 1.57979 14.4726C1.45634 14.3506 1.35917 14.2058 1.29396 14.0469C1.22875 13.888 1.19681 13.718 1.2 13.547V5.87327H16.8V13.547C16.8032 13.718 16.7712 13.888 16.706 14.0469C16.6408 14.2058 16.5437 14.3506 16.4202 14.4726C16.2968 14.5947 16.1495 14.6916 15.987 14.7578C15.8246 14.8239 15.6502 14.858 15.474 14.858Z" fill="currentColor"/>
                      </svg>
                    </i>
                    Mars 16, 2023
                  </div>
                </div>
              </div>
            </div>
            <!-- ------------3------------ -->
            <div class="col-lg-4">
              <div class="cs_post cs_style_3 cs_radius_20 overflow-hidden">
                <a href="Actualites-jan-2022.html" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_rabat2022..jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <a href="#" class="cs_post_category">Rabat</a>
                  <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="Actualites-jan-2022.html">Journée d’Automne de Neurologie 2022</a></h2>
                  <div class="cs_posted_by">
                    <i>
                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.474 0.873999H13.362V0.582666C13.362 0.428133 13.2988 0.27993 13.1863 0.170659C13.0737 0.0613878 12.9211 0 12.762 0C12.6029 0 12.4503 0.0613878 12.3377 0.170659C12.2252 0.27993 12.162 0.428133 12.162 0.582666V0.873999H5.838V0.582666C5.838 0.428133 5.77479 0.27993 5.66226 0.170659C5.54974 0.0613878 5.39713 0 5.238 0C5.07887 0 4.92626 0.0613878 4.81374 0.170659C4.70121 0.27993 4.638 0.428133 4.638 0.582666V0.873999H2.526C1.85655 0.875537 1.21497 1.13447 0.741599 1.59417C0.268225 2.05387 0.0015845 2.67691 0 3.32702V13.547C0.0015845 14.1971 0.268225 14.8201 0.741599 15.2798C1.21497 15.7395 1.85655 15.9985 2.526 16H15.474C16.1435 15.9985 16.785 15.7395 17.2584 15.2798C17.7318 14.8201 17.9984 14.1971 18 13.547V3.32702C17.9984 2.67691 17.7318 2.05387 17.2584 1.59417C16.785 1.13447 16.1435 0.875537 15.474 0.873999ZM2.526 2.03933H4.638V2.33066C4.638 2.4852 4.70121 2.6334 4.81374 2.74267C4.92626 2.85194 5.07887 2.91333 5.238 2.91333C5.39713 2.91333 5.54974 2.85194 5.66226 2.74267C5.77479 2.6334 5.838 2.4852 5.838 2.33066V2.03933H12.162V2.33066C12.162 2.4852 12.2252 2.6334 12.3377 2.74267C12.4503 2.85194 12.6029 2.91333 12.762 2.91333C12.9211 2.91333 13.0737 2.85194 13.1863 2.74267C13.2988 2.6334 13.362 2.4852 13.362 2.33066V2.03933H15.474C15.8257 2.03933 16.163 2.175 16.4116 2.41649C16.6603 2.65798 16.8 2.9855 16.8 3.32702V4.70794H1.2V3.32702C1.2 2.9855 1.3397 2.65798 1.58838 2.41649C1.83705 2.175 2.17432 2.03933 2.526 2.03933ZM15.474 14.858H2.526C2.34983 14.858 2.17542 14.8239 2.01296 14.7578C1.85049 14.6916 1.70324 14.5947 1.57979 14.4726C1.45634 14.3506 1.35917 14.2058 1.29396 14.0469C1.22875 13.888 1.19681 13.718 1.2 13.547V5.87327H16.8V13.547C16.8032 13.718 16.7712 13.888 16.706 14.0469C16.6408 14.2058 16.5437 14.3506 16.4202 14.4726C16.2968 14.5947 16.1495 14.6916 15.987 14.7578C15.8246 14.8239 15.6502 14.858 15.474 14.858Z" fill="currentColor"/>
                      </svg>
                    </i>
                    Septembre 05, 2022
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cs_height_160 cs_height_xl_110 cs_height_lg_80"></div>
    </section> --}}
    <!-- End Blog Section -->

    <!-- Start Blog Section 2 -->
    {{-- <section>
        <div class="cs_height_190 cs_height_xl_145 cs_height_lg_105"></div>
        <div class="container">
          <div class="cs_section_heading cs_style_1 text-center">
            <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">Agenda</h3>
            <div class="cs_height_5"></div>
            <h2 class="cs_section_title cs_fs_72 m-0">Dernières mise à jour</h2>
          </div>
          <div class="cs_height_70 cs_height_lg_50"></div>
          <div class="row cs_gap_y_24">
            <!-- 1 -->
            <div class="col-lg-4">
              <div class="cs_post cs_style_1 cs_type_1">
                <a href="" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_casa2023.jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <div>
                    <div class="cs_post_meta">
                      <div class="cs_posted_by">Octobre 30, 2023</div>
                    </div>
                    <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="">Journée d’Automne de Neurologie 2023</a></h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- 2 -->
            <div class="col-lg-4">
              <div class="cs_post cs_style_1 cs_type_1">
                <a href="" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_tanger2023.jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <div>
                    <div class="cs_post_meta">
                      <div class="cs_posted_by">Mars 16, 2023</div>
                    </div>
                    <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="">Journée de Printemps de Neurologie 2023</a></h2>
                  </div>
                </div>
              </div>
            </div>
            <!-- 3 -->
            <div class="col-lg-4">
              <div class="cs_post cs_style_1 cs_type_1">
                <a href="" class="cs_post_thumb cs_view_mouse"><img src="{{ asset('img/blog/Affiche_rabat2022..jpg') }}" alt="Post"></a>
                <div class="cs_post_info">
                  <div>
                    <div class="cs_post_meta">
                      <div class="cs_posted_by">Septembre 05, 2022</div>
                    </div>
                    <h2 class="cs_post_title cs_semibold cs_fs_32"><a href="">Journée d’Automne de Neurologie 2022</a></h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section> --}}
    <!-- End Blog Section  2-->
    <!-- Start Portfolio Section -->
    {{-- <section id="gallery-smn">
            <div class="cs_height_170 cs_height_xl_120 cs_height_lg_80"></div>
            <div class="container">
              <div class="cs_isotop cs_style1 cs_isotop_col_3 cs_has_gutter_24 cs_lightgallery">
                <div class="cs_grid_sizer"></div>
                <div class="cs_isotop_item cs_w66">
                  <div class="cs_section_heading cs_style_1">
                    <h3 class="cs_section_subtitle text-uppercase cs_accent_color cs_semibold m-0 cs_accent_color cs_fs_32">JETTES UN COUP D'OEIL À</h3>
                    <div class="cs_height_5"></div>
                    <h2 class="cs_section_title cs_fs_72 m-0">Nos dernières activités</h2>
                    <div class="cs_height_52 cs_height_xl_97 cs_height_lg_25"></div>
                  </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                  <div class="cs_portfolio cs_style_1 cs_size_1 cs_radius_20 overflow-hidden">
                    <a href="{{ asset('img/acctivite/Affiche_AVC.jpg') }}" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="{{ asset('img/acctivite/Affiche_AVC.jpg') }}" id="image-index-1"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                  </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                  <div class="cs_portfolio cs_style_1  cs_radius_20 overflow-hidden">
                    <a href="{{ asset('img/acctivite/Affiche_casa2023.jpg') }}" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="{{ asset('img/acctivite/Affiche_casa2023.jpg') }}"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                  </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                  <div class="cs_portfolio cs_style_1  cs_radius_20 overflow-hidden">
                    <a href="{{ asset('img/acctivite/casa_novembre2012_02.jpg') }}" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="{{ asset('img/acctivite/casa_novembre2012_02.jpg') }}"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                  </div>
                </div><!-- .cs_isotop_item -->


                <div class="cs_isotop_item">
                  <div class="cs_portfolio cs_style_1  cs_radius_20 overflow-hidden">
                    <a href="{{ asset('img/acctivite/affichejpn2023.jpg') }}" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="{{ asset('img/acctivite/affichejpn2023.jpg') }}"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                  </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                  <div class="cs_portfolio cs_style_1  cs_radius_20 overflow-hidden">
                    <a href="{{ asset('img/acctivite/banner_web.jpg') }}" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="{{ asset('img/acctivite/banner_web.jpg') }}"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                  </div>
                </div><!-- .cs_isotop_item -->
                <div class="cs_isotop_item">
                  <div class="cs_portfolio cs_style_1  cs_radius_20 overflow-hidden">
                    <a href="{{ asset('img/acctivite/creation_SMN.jpg') }}" class="cs_portfolio_img d-block cs_bg_filed st_lightbox_item" data-src="{{ asset('img/acctivite/creation_SMN.jpg') }}"><span class="cs_link_hover"><i class="fas fa-arrows-alt"></i></span></a>
                  </div>
                </div><!-- .cs_isotop_item -->
              </div>
            </div>
    </section> --}}
    <!-- End Portfolio Section -->
    <x-slot:scripts>
      <script type="application/javascript">
        var isContentVisible = true;
        $('#mot-acc').hide();

          $(document).ready(function () {
              $('#btn-acc').on('click', function () {


                  if (isContentVisible) {
                  $('#mot-acc').show();
                   isContentVisible = false;
                   $("html, body").scrollTop(1900);
              } else{
                  $('#mot-acc').hide();
                  isContentVisible = true;

              }
              })
          })



      </script>
    </x-slot:scripts>
    </x-layouts.app>
