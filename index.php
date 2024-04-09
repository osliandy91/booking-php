<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cucky nails booking</title>
    <link href="./fontawesome/css/all.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./CardJs-master/card-js.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet">


    <style>
        body {
            font-family: 'Lato', sans-serif;
            padding-bottom: 50px;
        }

        fieldset {
            margin-bottom: 10px;
            border-radius: 10px;
            padding: 20px;
        }


        h4 {
            color: white;
        }


    </style>
</head>
<body style="background-color: #dcdcdc;">
<!-- Navbar -->
<nav class="navbar navbar-dark" style="background-color: #4a6a79;">
    <div class="container-fluid text-center">
        <a href="#" class="navbar-brand">Cucky nails booking service</a>
        <a href="https://www.instagram.com/nailsbycuky/" target="_blank" class="navbar-brand"><i
                    class="fab fa-instagram"></i></a>
        <a href="mailto:nailsbycuky@yahoo.com" class="navbar-brand"><i class="fa fa-envelope"></i></a>
        <a href="tel:+1 (786) 916-7082" class="navbar-brand"><i class="fa fa-phone"></i></a>
    </div>
</nav>


<!-- Contenido principal -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 offset-lg-2">
            <div class="" style="background-color:#dcdcdc ">
                <div class="row mb-3">
                    <div class="col">
                        <img src="img/banner.png" class="img-fluid" alt="Imagen"
                             style="max-width: 100%; border-radius: 10px">
                    </div>
                </div>

                <form id="form_data_booking">
                    <fieldset style="background-color: #4a6a79;">
                        <h4>Services <i class="fa fa-server"></i></h4>
                        <div class="mb-3">
                            <label style="color: white" for="service" class="form-label">Choose a service (*)</label>
                            <select multiple class="form-select select2" id="service" name="service" required
                                    style="width: 100%">
                                <option value="" disabled>Choose one or more</option>
                                <option value="manicury">Manicury</option>
                                <option value="pedicury">Pedicury</option>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label style="color: white" for="date_book" class="form-label">Date (*)</label>
                                <input type="date" class="form-control" id="date_book" required
                                       min="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="col">
                                <label style="color: white" for="timeslot" class="form-label">Time (*)</label>
                                <select class="form-select" id="timeslot" required>
                                    <option selected value="" disabled>Pick a date first</option>
                                </select>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset style="background-color: #4a6a79;">
                        <h4>Contact information <i class="fa fa-contact-card"></i></h4>
                        <div class="row mb-3">
                            <div class="col">
                                <label style="color: white" for="first_name" class="form-label">First name (*)</label>
                                <input type="text" class="form-control" id="first_name" required>
                            </div>
                            <div class="col">
                                <label style="color: white" for="last_name" class="form-label">Last name (*)</label>
                                <input type="text" class="form-control" id="last_name" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col">
                                <label style="color: white" for="email" class="form-label">Email (*)</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                            <div class="col">
                                <label style="color: white" for="phone" class="form-label">Phone number (*)</label>
                                <input type="tel" class="form-control" id="phone" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label style="color: white" for="note" class="form-label">Note</label>
                            <textarea class="form-control" id="note"></textarea>
                        </div>
                    </fieldset>

                    <fieldset style="background-color: #546e7a !important;">
                        <h4 style="color: white">Deposit <i class="fa fa-money-check"></i></h4>
                        <p style="color: white">To secure your appointment, we require a pre-payment of <b>$5 USD</b>.
                            By providing your card details, you authorize a non-refundable charge to reserve this time
                            slot.</p>

                        <div class="card-js mb-3">
                            <input class="card-number my-custom-class form-control" name="card-number">
                            <input class="name form-control" id="the-card-name-id" name="card-holders-name">
                            <input class="expiry-month form-control" name="expiry-month">
                            <input class="expiry-year form-control" name="expiry-year">
                            <input class="cvc form-control" name="cvc">
                        </div>
                    </fieldset>
                    <fieldset style="background-color: #4a6a79 !important;">


                        <div class="row " style="text-align: center;">
                            <button class="btn btn-success btn-lg" type="submit" name="action">Book now <i
                                        class="fa fa-arrow-alt-circle-right"></i></button>
                        </div>
                </form>
                <div class="row" style="margin-top: 10px">
                    <p style="text-align: center; padding: 10px; color: white; font-weight: bold">© 2024 Copyright Cucky
                        nails booking</p>

                    <div class="container-fluid text-center" style="    display: flex;
    flex-wrap: nowrap;
    justify-content: center;">
                        <a href="https://www.instagram.com/nailsbycuky/" target="_blank" class="navbar-brand"><i style="color: white" class="fab fa-instagram"></i></a>
                        <a href="mailto:nailsbycuky@yahoo.com" class="navbar-brand"><i style="color: white" class="fa fa-envelope"></i></a>
                        <a href="tel:+1 (786) 916-7082" class="navbar-brand"><i style="color: white" class="fa fa-phone"></i></a>
                    </div>

                </div>

                </fieldset>
            </div>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="./CardJs-master/card-js.min.js"></script>
<script src="./fontawesome/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2(); // Inicializa el select con Select2

        $('#date_book').on('change', function () {
            var fecha = $(this).val();
            $.ajax({
                url: 'obtener_opciones.php',
                method: 'POST',
                data: {fecha: fecha},
                dataType: 'json',
                success: function (data) {
                    $('#timeslot').empty();
                    $.each(data, function (index, value) {
                        $('#timeslot').append('<option value="' + value + '">' + value + '</option>');
                    });

                    // Actualiza Select2 después de cambiar las opciones
                    $('.select2').select2();
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>
</body>
</html>
