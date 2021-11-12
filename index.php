<?php
    require_once('product.php');
    require_once('CDMusic.php');
    require_once('CDCabinet.php');

    $classProduct = "Product";
    $classMusic = "CD Music";
    $classRack = "CD Cabinet";

    $product = new Product();
    $product->setName("Album1");
    $product->setPrice(6000);
    $product->setDiscount(15);
    $name = $product->getName();
    $price = $product->getPrice();
    $discount = $product->getDiscount();
    $priceDiscount = $price-($price*($discount/100));

    $music = new CDMusic();
    $music->setName($name);
    $music->setArtist("Dewa 19");
    $music->setGenre("Rock Pop");
    $music->setPrice($price+($price*(10/100)));
    $music->setDiscount($discount+5);
    $musicName = $music->getName();
    $musicArtist = $music->getArtist();
    $musicGenre = $music->getGenre();
    $musicPrice = $music->getPrice();
    $musicDiscount = $music->getDiscount();
    $musicPriceDiscount = $musicPrice-($musicPrice*($musicDiscount/100));

    $rack = new CDCabinet();
    $rack->setName($name);
    $rack->setPrice($price+($price*(15/100)));
    $rack->setDiscount($discount);
    $rack->setCapacity(100);
    $rack->setModel("Etalase");
    $rackName = $rack->getName();
    $rackPrice = $rack->getPrice();
    $rackDiscount = $rack->getDiscount();
    $rackCapacity = $rack->getCapacity();
    $rackModel = $rack->getModel();
    $rackPriceDiscount = $rackPrice-($rackPrice*($rackDiscount/100));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-white" style="font-size:30px">
                        <?php echo $classProduct; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Name of Product:</h5>
                        <p class="card-text"><?php echo $name; ?></p>
                        <h5 class="card-title">Product Price:</h5>
                        <p class="card-text"><?php echo $price; ?></p>
                        <h5 class="card-title">Product Discount:</h5>
                        <p class="card-text"><?php echo $discount; ?></p>
                        <h5 class="card-title">Product Price After Discount:</h5>
                        <p class="card-text"><?php echo $priceDiscount; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white" style="font-size:30px">
                        <?php echo $classMusic; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Product Music Name:</h5>
                        <p class="card-text"><?php echo $musicName; ?></p>
                        <h5 class="card-title">Product Music Artist:</h5>
                        <p class="card-text"><?php echo $musicArtist; ?></p>
                        <h5 class="card-title">Product Music Genre:</h5>
                        <p class="card-text"><?php echo $musicGenre; ?></p>
                        <h5 class="card-title">Product Music Price:</h5>
                        <p class="card-text"><?php echo $musicPrice; ?></p>
                        <h5 class="card-title">Product Music Discount:</h5>
                        <p class="card-text"><?php echo $musicDiscount; ?></p>
                        <h5 class="card-title">Product Music Price After Discount:</h5>
                        <p class="card-text"><?php echo $musicPriceDiscount; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-danger text-white" style="font-size:30px">
                        <?php echo $classRack; ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Storefront Name:</h5>
                        <p class="card-text"><?php echo $rackName; ?></p>
                        <h5 class="card-title">Storefront Price:</h5>
                        <p class="card-text"><?php echo $rackPrice; ?></p>
                        <h5 class="card-title">Storefront Discount:</h5>
                        <p class="card-text"><?php echo $rackDiscount; ?></p>
                        <h5 class="card-title">Storefront Price After Discount:</h5>
                        <p class="card-text"><?php echo $rackPriceDiscount; ?></p>
                        <h5 class="card-title">Storefront Capacity:</h5>
                        <p class="card-text"><?php echo $rackCapacity; ?></p>
                        <h5 class="card-title">Storefront Model:</h5>
                        <p class="card-text"><?php echo $rackModel; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>