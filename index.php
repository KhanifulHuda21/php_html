<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Magang</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                   <?php $nomor=1;foreach($data_slider as $data):?>
                        <div class="carousel-item <?php if($nomor==1){echo"active";}?>">
                        <img src="<?php echo $data ?>" class="d-block w-100" alt="logo-<?php $nomor;?>">
                        </div>
                        
                    <?php $nomor++;endforeach;?>        
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>
</div>


    <div class="container">

        <div class="row">

            <?php foreach($data_siswa as $key=>$value ): ?>

            <div class="col-12 col-sm-12 col-lg-4 mt-3" >
                <div class="card <?php if( $value[3]=="y"){echo"bg-primary";}; ?>" style="width:18rem;"> 
                    <img src="asset\images\logo.png" class="card-img-top img-thumbnail" alt="...">
                     <div class="card-body"> 
                        <h5 class="card-title"><?php echo $value[0];?></h5>
                        <p class="card-text"><?php echo $value[1];?></p>
                        <p class="card-text"><?php echo $value[2];?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

            <?php endforeach; ?>
        </div>

    </div>



    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>