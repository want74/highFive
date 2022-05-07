<?php 
session_start();
    include "connect.php";
    $query2 = mysqli_query($con, "SELECT * FROM guilds");
    $query3 = mysqli_query($con, "SELECT * FROM newsguild WHERE guild_id='{$_GET['guild_id']}'");
    $userd = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['user_id']}'");
    $userstr = $userd->fetch_assoc();
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

<body class="bg-now" style="height: 100vh;">
    <div class="container-fluid">
        <div class="row" style="height: 100vh;" data-section-name="1">
            <div class="col-10 mx-auto" style="height: 100vh;">
                <div class="row row-cols-3 g-5" style="height: 100vh;">
                    <?php
                        for($i=0;$i<$query2->num_rows;$i++){
                            $stroka1 = $query2->fetch_assoc();
                    ?>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="row ramkaNews mt-5" style="border:1px solid #8080FF;">
                                    <div class="col-10 mx-auto">
                                        <div class="row mt-4">
                                            <div class="col-3">
                                                <div class="row h-100">
                                                    <?php
                                                    echo '<img src="'.$stroka1['img'].'" class="krug h-50 my-auto">';
                                                ?>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="row">
                                                    <p class="title">
                                                        <?php
                                                            echo $stroka1['name']
                                                        ?>
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <p class="kol">
                                                        10.000 участников
                                                    </p>
                                                </div>
                                                <div class="row">
                                                    <p class="kol">
                                                        Баллы:  
                                                        <?php
                                                            echo $stroka1['rating']
                                                        ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row rel">
                                    <div class="col-11 mx-auto">
                                        <div class="row">

                                        </div>
                                        <div class="row">
                                            <div class="col-11 mx-auto borderNews3" style="margin-top: 160px;">
                                                <p style="font-family: 'Noto Sans';font-style: normal;font-weight: 600;font-size: 16px;line-height: 22px;color: #FFFFFF;"
                                                    class="my-5">
                                                    <?php
                                                        echo $stroka1['description']
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?php
                                                echo '<a class="mx-auto" style="width:max-content;"
                                                href="plusBal.php?guild_id='.$stroka1['id'].'">';
                                            ?>
                                            
                                                <button class="btn btn-join  px-4 py-2 text-white"
                                                    style="width: max-content;">
                                                    Прибавить
                                                </button>
                                            </a>
                                            <?php
                                                echo '<a class="mx-auto" style="width:max-content;"
                                                href="minusBal.php?guild_id='.$stroka1['id'].'">';
                                            ?>
                                                <button class="btn btn-join  px-4 py-2 text-white"
                                                    style="width: max-content;">
                                                    Убавить
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                        };
                    ?>
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