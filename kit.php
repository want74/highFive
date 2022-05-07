<?php
    include "connect.php";
    session_start();
    $query1 = mysqli_query($con, "SELECT * FROM kits WHERE id='{$_GET['kit_id']}'");
    $query2 = mysqli_query($con, "SELECT * FROM guilds WHERE kit_id='{$_GET['kit_id']}' ORDER BY rating DESC");
    $klk = mysqli_query($con, "SELECT * FROM news WHERE kit_id='{$_GET['kit_id']}' ORDER BY id DESC");
    $stroka1 = $query1->fetch_assoc();
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
    <div class="container-fluid">
        <div class="row" style="height: 100vh;" data-section-name="1">
            <div class="col-10 mx-auto" style="height: 100vh;">
                <div class="row" style="height: 100vh;">
                    <div class="col-6">
                        <!-- Сообщества -->
                        <div class="row borderY my-5">
                            <div class="col">
                                <div class="row my-4">
                                    <p class="custom">
                                        Все гильдии
                                    </p>
                                </div>
                                <?php
                                    for($i=0;$i<$query2->num_rows;$i++){
                                        $stroka2 = $query2->fetch_assoc();
                                ?>
                                <div class="row">
                                    <?php
                                        echo '<a class="d-flex text-decoration-none" href="guild.php?guild_id='.$stroka2['id'].'">';
                                    ?>
                                    <div class="col-1">
                                        <?php
                                            echo '<img src="'.$stroka2['img'].'" class="krug">';
                                        ?>
                                    </div>
                                    <div class="col">
                                        <div class="row">
                                            <p class="title">
                                                <?php
                                                echo $stroka2['name'];
                                            ?>
                                            </p>
                                        </div>
                                        <div class="row">
                                            <p class="kol">
                                                10.000 участников
                                            </p>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <?php
                                    }
                                ?>
                                <div class="row">
                                <a href="cg.php" class="my-auto ms-5 d-flex text-decoration-none" style="width: max-content;">
                                    <button class="btn btn-more py-2 px-4 "
                                        style="width: max-content;height:10%;">
                                        Создать свою гильдию
                                    </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row row-cols-3 g-5">
                                    <?php
                                        for($i=0;$i<$klk->num_rows;$i++){
                                            $stroka3 = $klk->fetch_assoc();
                                            echo '<a class="d-flex text-decoration-none" href="news.php?news_id='.$stroka3['id'].'">';
                                    ?>

                                    <div class="col mx-auto">
                                        <div class="row">
                                            <div class="col ramkaNews">
                                                <div class="row">
                                                    <div class="col-11 mx-auto py-3" style="border-radius: 10px;">
                                                        <?php
                                                echo '<img src="'.$stroka3['img'].'" class="w-100 h-100" style="border-radius: 10px;">';
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
                                                    echo $stroka3['title'];
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
                                    <a href="allnews.php" class="my-auto ms-5 d-flex text-decoration-none" style="width: max-content;">
                                    <button class="btn btn-more py-2 px-4 "
                                        style="width: max-content;height:10%;">
                                        Больше новостей
                                    </button>
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col">
                        <div class="row mt-5">
                            <h1 class="project text-white animate__animated ms-auto" style="width:min-content;">
                                Гильдии
                            </h1>
                        </div>
                        <div class="row">
                            <p class="ms-auto"
                                style="color: #8080FF;font-weight: 700;font-size: 64px;width:max-content;">
                                <?php
                                    echo $stroka1['title'];
                                ?>
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-8 ramka ms-auto">
                                <div class="row">
                                    <div class="col">
                                        <p class="my-4"
                                            style="font-family: 'Noto Sans';font-style: normal;font-weight: 600;font-size: 24px;line-height: 33px;color: #8080FF;">
                                            <?php
                                            echo $stroka1['description'];
                                        ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
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