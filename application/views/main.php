<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mystyle.css') ?> ">

    <title>Property</title>
</head>

<body>


    <?php $this->load->view("partials/navbar.php") ?>

    <div class="home-header">
        <div class="banner-text">
            <p class="text-center">SELAMAT DATANG</p>
        </div>
    </div>

    <div class="home-body">
        <div class="home1 text-center">
            <p>LOREM IPSUM</p>

            <p id="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>

    <div class="blackbox">
        <div class="text-center">
            <p id="text1_g">Lorem Ipsum</p>
            <p id="text2_g">Lorem Ipsum</p>
        </div>
    </div>

    <div class="body-guarantee mt-5">
        <div class="mosaic">
            <div class="mosaic_item">
                <img id="img1" src="assets/img/img1.jpg">
            </div>
            <div class="mosaic_item">
                <div class="col-xs-3 col-sm-offset-4 overlay-text">
                    <h1 class="text-center">LOREM IPSUM</h1>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>
        </div>
    </div>

    <div class="blackbox">
        <div class="text-center">
            <p id="text2_g">Lorem Ipsum</p>
        </div>
    </div>

    <div class="container-fluid mt-5">

        <div class="d-flex flex-row justify-content-around my-flex-container">
            <?php foreach ($properti as $p) { ?>
                <div class="p-2 my-flex-item">
                    <div class="card" style="width: 18rem; border:2;">
                        <img class="card-img-top" src="<?php echo "data:image/jpeg;base64," . base64_encode($p->Gambar); ?>" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title text-left"><?php echo $p->Nama ?></h3>
                            <h5 class="text-right">RP <?php echo $p->Harga ?></h5>
                            <hr>
                            <p style="font-size: 13px;"><?php echo $p->Deskripsi ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <!-- </div> -->
        </div>

        <div class="container">
            <div class="row">
                <div class="col pt-4 text-center">
                    <a href="<?php echo base_url("gallery") ?>" id="buttonview" type="button" class="btn btn-outline-warning btn-lg ">View All</a>
                </div>
            </div>
        </div>
    </div>





    <?php $this->load->view("partials/footer") ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>