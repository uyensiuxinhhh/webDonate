<?php

    // include dirname(__DIR__)."/../Database/dataProcessor.php";
    // include dirname(__DIR__)."/../PHP/creator.php";
    // include dirname(__DIR__)."/../PHP/comment.php";


    // $mainData = new dataProcessor();

//     if(isset($_GET['idPhoto'])) {
//         $idPhoto = $_GET['idPhoto'];
//         $condition = ['idPhoto' => $idPhoto];
//         if(isset($_POST['sendComment']))
//         {
//             echo "SendComment";
//             if(!empty($_POST['newComment'])){
//                 echo "Not empty";
//                 $content = $_POST['newComment'];
//                 if($content !== ""){
//                     $mainData->addComment($idPhoto, creator::createComment($idPhoto));
//                     echo "Comment Posted";
//                 }
//             }else{
//                 echo "Write your comment";
//             }
//         }
//         else{
//             echo "No thing";
//         }
//     } else{
//         echo "No idPhoto";
//     }

    

// ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../Assets/css/productdetail.css">
    <link rel="stylesheet" href="../../Assets/css/reset.css">
    <title>Product detail</title>
</head>

<body>
    <?php include_once "../Page/header.php"?>
    <div class="--c--container">
        <div class="c--product--detail">

            <div class="c--product--item">
                <div class="c--img--product--detail">

                    <img id="image-detail" src="http://hanoimoi.com.vn/Uploads/tuandiep/2018/4/8/1(1).jpg" alt=""
                        name="img--product--detail">

                </div>
                <div class="c--content--product--detail">
                    <h3 class="c--name--photo--detail">Cong Hue Market </h3>
                    <hr id="c--hr">
                    <p class="c--margin--p-detail">
                        <i class="fa fa-heart-o" aria-hidden="true"></i>Add
                        to Wishlist
                    </p>
                    <hr>

                    <p class="c--margin--p-detail" name="catelary">Your book
                        will be signed by Réhahn</p>
                    <p class="c--margin--p-detail --c--content-detail-" name="description">
                        In Hue, two days before the new year means busy
                        markets and lots of colors. Tet Holiday has been
                        quiet the past few years because of Covid-19
                        concerns, but the markets, when they are allowed to
                        open, are always packed.

                    </p>
                </div>
            </div>

        </div>
        <div class="--c--mytabs">
            <input type="radio" id="tabsilver" name="mytabs" checked="checked">
            <label for="tabsilver">Reviews</label>
            <div class="--c--tab">
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">Vinhliet</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        moi</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">congkpl</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        trung quoc</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">thanhmillo</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        trung quoc</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <br>
                <div class="--c--form--comment">
                    <form action="" method="POST">
                        <textarea name="Newcomment" placeholder="Type your comment here."
                            class="--c--comment"></textarea>
                        <br>
                        <input type="submit" class="--c--btn" name="sendComment" value="Post your comment">
                    </form>
                </div>
            </div>

            <input type="radio" id="--c--tabfree" name="mytabs">
            <label for="--c--tabfree">All</label>
            <div class="--c--tab">

                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">Vinhliet</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        moi</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">Vinhliet</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        moi</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">Vinhliet</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        moi</p>
                    </p>

                    <br>
                    <hr>
                </div>
                <div class="--c--comment--content">
                    <p class="--c--content--user">
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <p class="--c--content--user" name="nameuser">Vinhliet</p>
                    <p class="--c--conten--date" name="date">12/02/2021</p>
                    <br>
                    <br>
                    <p class="--c--content--detail" name="content-user">Hang
                        moi</p>
                    </p>

                    <br>
                    <hr>
                </div>
            </div>

        </div>

    </div>

    <?php include_once "../Page/footer.php"?>

</body>

</html>