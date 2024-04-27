<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <title>Check | Muda SPP</title>
</head>
<style>
    body {
        font-family: poppins;
    }
</style>

<body style="background-color: #FAFAFA;">

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-3" >
            <div class="col text-center">
                <img src="<?= base_url("assets/img/search.svg") ?>" alt="" class="img-fluid" width="300px">
                <p class="text-secondary fs-5 fw-semibold">Input NISN di bawah ini! :D</p>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <form action="<?= base_url('search/cari') ?>" method="GET">
                                    <input type="text" name="nisn" class="form-control" placeholder="006..." required>
                                    <div class="d-flex">
                                        <a href="<?= base_url('/') ?>" class="btn btn-outline-secondary mt-3 ms-auto" >Kembali</a>
                                        <button class="btn btn-primary mt-3 ms-2" type="submit">Cari</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>