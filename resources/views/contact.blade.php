<x-layouts.app>
    <!-- Start Banner  -->
    <section class="cs_banner cs_style_5 cs_bg_filed" data-src=" {{ asset('img/contact/banner_bg.svg') }}">
       
            <div class="container">
              <h2 class="cs_banner_title cs_fs_72">Contactez-nous</h2>
            </div>
    </section>
    <!-- End Banner  -->
    <!-- Start Contact Section -->
    <section>
            <div class="container cs_mt_minus_110">
              <div class="row">
                <div class="col-lg-10 offset-lg-1">
                  <div class="cs_contact_form cs_style_1 cs_white_bg cs_radius_30">
                    <div class="row">
                      <div class="col-lg-6">
                        <label class="cs_input_label cs_heading_color">Nom</label>
                        <input type="text" class="cs_form_field" placeholder="David John">
                        <div class="cs_height_42 cs_height_xl_25"></div>
                      </div>
                      <div class="col-lg-6">
                        <label class="cs_input_label cs_heading_color">Email</label>
                        <input type="email" class="cs_form_field" placeholder="example@gmail.com">
                        <div class="cs_height_42 cs_height_xl_25"></div>
                      </div>
                      <div class="col-lg-12">
                        <label class="cs_input_label cs_heading_color">Sujet</label>
                        <input type="text" class="cs_form_field" placeholder="Your subject">
                        <div class="cs_height_42 cs_height_xl_25"></div>
                      </div>
                      <div class="col-lg-12">
                        <label class="cs_input_label cs_heading_color">Message</label>
                        <textarea cols="30" rows="10" class="cs_form_field" placeholder="Write something..."></textarea>
                        <div class="cs_height_42 cs_height_xl_25"></div>
                      </div>
                      <div class="col-lg-12">
                        <div class="cs_height_18"></div>
                        <button class="cs_btn cs_style_1">
                          <span>Soumettre</span>
                          <i>
                            <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon">
                            <img src="{{ asset('img/icons/arrow_white.svg') }}" alt="Icon"> 
      
                          </i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_height_200 cs_height_xl_150 cs_height_lg_100"></div>
              <h2 class="cs_fs_72 mb-0">Trouvez-nous ici</h2>
              <div class="cs_height_70 cs_height_lg_50"></div>
              <div class="row g-4 g-xl-3 g-xxl-5">
                <div class="col-xl-4">
                  <div class="cs_iconbox cs_style_11 cs_radius_25">
                    <div class="cs_iconbox_icon">
                      <img src="{{ asset('img/contact/icon_1.svg') }}" alt="Icon">
                    </div>
                    <div class="cs_iconbox_right">
                      <h3 class="cs_iconbox_title cs_fs_24 mb-0">Téléphone</h3>
                      <p class="cs_iconbox_subtitle mb-0 cs_heading_color">06 08 43 59 85</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="cs_iconbox cs_style_11 cs_radius_25">
                    <div class="cs_iconbox_icon">
                      <img src="{{ asset('img/contact/icon_2.svg') }}" alt="Icon">
                    </div>
                    <div class="cs_iconbox_right">
                      <h3 class="cs_iconbox_title cs_fs_24 mb-0">E-mail</h3>
                      <p class="cs_iconbox_subtitle mb-0 cs_heading_color">smneurologie.contact@gmail.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="cs_iconbox cs_style_11 cs_radius_25">
                    <div class="cs_iconbox_icon">
                      <img src="{{ asset('img/contact/icon_3.svg') }}" alt="Icon">
                    </div>
                    <div class="cs_iconbox_right">
                      <h3 class="cs_iconbox_title cs_fs_24 mb-0">Emplacement</h3>
                      <p class="cs_iconbox_subtitle mb-0 cs_heading_color"> Hôpital des spécialités - Rabat</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cs_height_35"></div>
              <!-- Start Google Map -->
              <div class="cs_map">
                <!-- <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe> -->
                {{-- <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.86704723539!2d-6.838279288612868!3d34.021623519234325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76c77d27cf9b3%3A0x52c9dfd759b9b7b8!2s5%20Rue%20Tabariya%2C%20Rabat%2010000!5e0!3m2!1sfr!2sma!4v1705936895711!5m2!1sfr!2sma"  allowfullscreen></iframe> --}}
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.409186724365!2d-6.859785224286516!3d33.98202207318351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76cc05de0dcf3%3A0x513c49c2f772cbba!2zSMO0cGl0YWwgRGVzIFNww6ljaWFsaXTDqXM!5e0!3m2!1sfr!2sma!4v1710801636369!5m2!1sfr!2sma" allowfullscreen></iframe>
              </div>
              <!-- End Google Map -->
            </div>
          </section>
          <!-- End Contact Section -->
          <div class="cs_height_200 cs_height_xl_150 cs_height_lg_110"></div>
</x-layouts.app>