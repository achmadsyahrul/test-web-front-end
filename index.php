<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>ToT</title>
    <style>
        .card-footer {
            background: transparent;
            border-top: 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            $data = file_get_contents("data.json");
            $data = json_decode($data);
            $i = 0;
            foreach ($data as $value) { ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch my-2">
                    <div class="card w-100" style="width: 18rem;">
                        <img src="<?= $value->cover ?>" class="card-img-top" alt="cover">
                        <div class="card-body">
                            <h6 class="card-title"><?= $value->product_name ?></h6>
                            <p class="card-text"><?= $value->description ?></p>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-6">
                                    <div class="float-start">
                                    <?php
                                    if ($i % 2 == 1) {
                                    ?>
                                        <b><a style="text-decoration: none;" href="#">Sponsored Ad</a></b>
                                    <?php
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="float-end">
                                        <?=$value->likes?>
                                        <img src="assets/icons/heart.png" alt="like" style="width: 16px;" class="mr-1">
                                        <?php 
                                            if($i % 2 == 1){
                                        ?>
                                        <img src="assets/icons/tag-solid.png" alt="tag" style="width: 16px;" class="mx-2">
                                        <?php 
                                            }
                                            else{
                                        ?>
                                        <img src="assets/icons/tag.png" alt="tag" style="width: 16px;" class="mx-2">
                                        <?php 
                                            }
                                            $i++;
                                        ?>
                                        <img src="assets/icons/share.png" alt="share" style="width: 16px;" class="ml-1">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>