<?php
    include "connect.php";
    $nao = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC");
    if($_GET['kit_id']==NULL){
        $query1 = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC");
    }
    session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <title>High five</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php
    if($_SESSION['user_id']==0){
        echo'<div class="abs"><a href="regist.php"><button class="btn btn-reg py-3 px-2 text-decoration-none">Регистрация</button></a><a href="go.php"><button class="btn btn-go py-3 px-4 text-decoration-none">Войти</button></a></div>';
     }
    ?>

    <div class="container-fluid">
        <!-- Новости-->
        <div class="row panel bgKek" style="height: 100vh;" data-section-name="4">
            <div class="col-10 mx-auto" style="height: 100vh;">
                <div class="row" style="margin-top: 60px;margin-bottom:100px;">
                    <div class="col-4">
                        <img src="img/Group 216.svg" class="w-100">
                    </div>
                    <a href="cn.php" class="my-auto ms-auto" style="width: max-content;">
                        <button class="btn btn-more py-2 px-4 " style="width: max-content;height:10%;">
                            Добавить
                        </button>
                    </a>
                </div>
                <div class="row">
                    <div class="col-3 ramkaOrange p-2 me-2" style="">
                        <div class="row">
                            <p class="text-white"
                                style="font-style: normal;font-weight: 600;font-size: 20px;line-height: 27px;">Свежие
                                новости</p>
                        </div>
                        <?php
                            for($i=0;$i<$nao->num_rows;$i++){
                                $stroka2 = $nao->fetch_assoc();
                        ?>
                        <div class="row">
                            <?php
                                echo '<a href=news.php?news_id='.$stroka2['id'].' class="text-decoration-none">';
                            ?>
                            
                            <div class="col">
                                <div class="row">
                                    <p
                                        style="font-family: 'Noto Sans';font-style: normal;font-weight: 500;font-size: 16px;line-height: 22px;color: #FFFFFF;">
                                        <?php
                                            echo $stroka2['title'];
                                        ?>
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-11 mx-auto borderBot">

                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php
                                };
                        ?>
                    </div>
                    <div class="col">
                        <div class="row">

                        </div>
                        <div class="row row-cols-3 g-5">
                            <?php
                                for($i=0;$i<$query1->num_rows;$i++){
                                    $stroka1 = $query1->fetch_assoc();
                                    echo '<a class="d-flex text-decoration-none" href="news.php?news_id='.$stroka1['id'].'">';
                            ?>
                            
                            <div class="col mx-auto">
                                <div class="row">
                                    <div class="col ramkaNews">
                                        <div class="row">
                                            <div class="col-11 mx-auto py-3" style="border-radius: 10px;">
                                            <?php
                                                echo '<img src="'.$stroka1['img'].'" class="w-100 h-100" style="border-radius: 10px;">';
                                            ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-11 mx-auto borderNews2">
                                        <div class="row mt-4">
                                            <p
                                                style="font-family: 'Noto Sans';font-style: normal;font-weight: 300;font-size: 16px;line-height: 22px;color: #FFFFFF;">
                                                <?php
                                                    echo $stroka1['title'];
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </a>
                            <?php
                                };
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script/jquery-2.2.1.min.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="script/jquery.scrollify.js"></script>
    <script>
    </script>
</body>

</html>