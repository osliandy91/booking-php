<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./CardJs-master/card-js.min.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        body {
            padding-top: 50px; /* Ajuste para el logo */
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Logo</a>
    </div>
</nav>

<!-- Contenido principal -->
<div class="container mt-5" style="background-color: #f1f1f1">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <form id="form_data_booking">

                <fieldset>
                    <legend>Your data</legend>
                <div class="mb-3">
                    <label for="service" class="form-label">Choose a service (*)</label>
                    <select multiple class="form-select select2" id="service" name="service" required style="width: 100%">
                        <option value="" disabled>Choose one or more</option>
                        <option value="manicury">Manicury</option>
                        <option value="pedicury">Pedicury</option>
                    </select>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="date_book" class="form-label">Date (*)</label>
                        <input type="date" class="form-control" id="date_book" required>
                    </div>
                    <div class="col">
                        <label for="timeslot" class="form-label">Time (*)</label>
                        <select class="form-select" id="timeslot" required>
                            <option value="570">9:30 am</option>
                            <option value="585">9:45 am</option>
                            <option value="600">10:00 am</option>
                            <option value="615">10:15 am</option>
                            <option value="630">10:30 am</option>
                            <option value="645">10:45 am</option>
                            <option value="660">11:00 am</option>
                            <option value="675">11:15 am</option>
                            <option value="690">11:30 am</option>
                            <option value="705">11:45 am</option>
                            <option value="720">12:00 pm</option>
                            <option value="735">12:15 pm</option>
                            <option value="750">12:30 pm</option>
                            <option value="765">12:45 pm</option>
                            <option value="780">1:00 pm</option>
                            <option value="795">1:15 pm</option>
                            <option value="810">1:30 pm</option>
                            <option value="825">1:45 pm</option>
                            <option value="840">2:00 pm</option>
                            <option value="855">2:15 pm</option>
                            <option value="870">2:30 pm</option>
                            <option value="885">2:45 pm</option>
                            <option value="900">3:00 pm</option>
                            <option value="915">3:15 pm</option>
                            <option value="930">3:30 pm</option>
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="first_name" class="form-label">First name (*)</label>
                        <input type="text" class="form-control" id="first_name" required>
                    </div>
                    <div class="col">
                        <label for="last_name" class="form-label">Last name (*)</label>
                        <input type="text" class="form-control" id="last_name" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">Email (*)</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="col">
                        <label for="phone" class="form-label">Phone number (*)</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <textarea class="form-control" id="note"></textarea>
                </div>
                    </fieldset>

                <fieldset>
                    <legend>Your card</legend>
                <div class="card-js mb-3">
                    <input class="card-number my-custom-class form-control" name="card-number">
                    <input class="name form-control" id="the-card-name-id" name="card-holders-name" placeholder="Name on card">
                    <input class="expiry-month form-control" name="expiry-month">
                    <input class="expiry-year form-control" name="expiry-year">
                    <input class="cvc form-control" name="cvc">
                </div>
                </fieldset>

                <button class="btn btn-primary" type="submit" name="action">Book</button>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./CardJs-master/card-js.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
</body>
</html>
