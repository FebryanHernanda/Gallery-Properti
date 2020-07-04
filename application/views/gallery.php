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

    <div class="blackbox-header">

        <p class="text-center">Gallery</p>

    </div>



    <div class="container-fluid mt-5">

        <div class="d-flex flex-row justify-content-around">

            <div class="row ">

                <?php foreach ($properti as $p) { ?>
                    <div class="p-2 my-flex-item">
                        <div class="card" style="width: 18rem; border:2;">
                        <img class="card-img-top" class="img-thumbnail" src="<?php echo base_url()?>/assets/uploads/files/<?php echo $p->Gambar ?>" alt="Card image cap" style="width: 100%; height: 250px ;">
                            <div class="card-body">
                                <h3 class="card-title text-left"><?php echo $p->Nama ?></h3>
                                <h5 class="text-right">RP <?php echo $p->Harga ?></h5>
                                <hr>
                                <p style="font-size: 13px;"><?php echo $p->Deskripsi ?></p>
                                <div class="text-center">
                                    <a href="<?php echo base_url('detail-gallery/'). $p->propertiCode ?>" class="btn btn-primary stretched-link">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <!-- <div class="col-md-4">
                    <div class="p-2 my-flex-item">
                        <div class="card" style="width: 20rem; border:2;">
                            <img class="card-img-top" src="assets/img/img2.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h4 class="card-title text-left">Lorem Ipsum</h4>
                                <h5 class="text-right">RP10.000.000</h5>
                                <hr>
                                <p style="font-size: 13px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="text-center">
                                    <a href=" echo base_url('detail-gallery') ?>" class="btn btn-primary stretched-link">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-2 my-flex-item">
                        <div class="card" style="width: 20rem; border:2;">
                            <img class="card-img-top" src="assets/img/img3.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h4 class="card-title text-left">Lorem Ipsum</h4>
                                <h5 class="text-right">RP10.000.000</h5>
                                <hr>
                                <p style="font-size: 13px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary stretched-link">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="p-2 my-flex-item">
                        <div class="card" style="width: 20rem; border:2;">
                            <img class="card-img-top" src="assets/img/img4.jpg" alt="Card image cap">
                            <div class="card-body ">
                                <h4 class="card-title text-left">Lorem Ipsum</h4>
                                <h5 class="text-right">RP10.000.000</h5>
                                <hr>
                                <p style="font-size: 13px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary stretched-link">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

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