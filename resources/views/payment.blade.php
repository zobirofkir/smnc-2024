<x-layouts.app>
    <style>
        .cs_checkbox_label::before {
            border-radius: unset !important;
        }

        .cs_checkbox_label::after {
            border-radius: unset !important;
        }
    </style>
    <div>
        <section class="cs_banner cs_style_5 cs_bg_filed" data-src="{{ asset('img/contact/banner_bg.svg') }}">
            <div class="container">
                <h2 class="cs_banner_title cs_fs_72">
                    Finaliser votre inscription
                </h2>
            </div>
        </section>

        <section>
            <div id="trip_configuration_wrapper" class="container cs_mt_minus_110">
                @include('partials.trip_configuration')
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
                $(document).on('change', 'input[type=radio], input[type=checkbox]', function () {
                    $('#trip_configuration_form').submit();
                });

                $(document).on('submit', '#trip_configuration_form', function(event) {
                    // Prevent the default form submission
                    event.preventDefault();

                    // Serialize the form data
                    let formData = $(this).serialize();

                    // Send AJAX request
                    $.ajax({
                        type: 'get',
                        url: '{{ route('inscription.payment') }}',
                        data: formData,
                        success: function(response) {
                            // Update the UI with the response
                            $('#trip_configuration_wrapper').html(response);
                        },
                        error: function(xhr, status, error) {
                            // Handle errors
                            console.error(xhr.responseText);
                        }
                    });
                })


                $(document).on('change', 'input[type=file]', function () {
                    if ($(this).val()) {
                        $('#transfer_bank_btn').show();
                        $('#transfer_bank_input_wrapper').hide();
                    } else {
                        $('#transfer_bank_btn').hide();
                        $('#transfer_bank_input_wrapper').show();
                    }
                });

                $(document).on('click', '#transfer_bank_btn', function () {
                    let formData = new FormData();

                    let csrfToken = $('input[name=_token]').val();
                    let room = $('input[name=room]:checked').val() ?? 0;
                    let nights = $('input[name=nights]:checked').val() ?? 0;
                    let total = $('input[name=total]').val();
                    let roommate = $('input[name=roommate]').val() ?? null;
                    let depart_day = $('input[name=depart_day]').val() ?? null;

                    if(room === 'Chambre Twin' && !roommate) {
                        alert('le prénom et le nom de votre colocataire sont obligatoires');
                        return;
                    }

                    let meals = [];
                    $("input[name='meals[]']:checked").each(function(){
                        meals.push($(this).val());
                    });
                    let transfer_bank = $('input[name=transfer_bank]')[0].files[0];

                    formData.append('transfer_bank', transfer_bank);
                    formData.append('room', room);
                    formData.append('nights', nights);
                    formData.append('total', total);
                    formData.append('roommate', roommate);
                    formData.append('meals', meals);
                    formData.append('depart_day', depart_day)
                    formData.append('_token', csrfToken);

                    $.ajax({
                        url: '{{ route('inscription.transfer_bank.pay') }}',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            window.location.href = '/'
                        },
                        error: function(xhr, status, error){
                            console.error(xhr.responseText);
                        }
                    });

                })
            });
        </script>
    </x-slot:scripts>
</x-layouts.app>
