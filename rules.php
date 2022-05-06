<?php 
    include "connect.php";
    $query2 = mysqli_query($con, "SELECT * FROM guilds WHERE id='{$_GET['guild_id']}'");
    $query3 = mysqli_query($con, "SELECT * FROM newsguild WHERE guild_id='{$_GET['guild_id']}'");
    $stroka1 = $query2->fetch_assoc();
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
                    <div class="col-3">
                        <div class="row">
                            <div class="col">
                                <div class="row ramkaNews mt-5" style="border:1px solid #8080FF;">
                                    <div class="col-10 mx-auto">
                                        <div class="row mt-4">
                                            <div class="col-2">
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
                                                        Рейтинг: №
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
                                            <div class="col-11 mx-auto borderNews3">
                                                <p style="font-family: 'Noto Sans';font-style: normal;font-weight: 600;font-size: 16px;line-height: 22px;color: #FFFFFF;"
                                                    class="my-5">
                                                    <?php
                                                        echo $stroka1['description']
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button class="btn btn-join mx-auto px-4 py-2 text-white"
                                                style="width: max-content;">
                                                Вступить!
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5 my-2">
                            <div class="col-3">
                                <div class="row">
                                    <img src="img/docs.png" class="w-100 my-auto">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row h-100">
                                    <?php
                                        echo '<a href="guild.php?guild_id='.$_GET['guild_id'].'" class="bold my-auto text-decoration-none">События и турниры</a>'
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <div class="row">
                                    <img src="img/docs.png" class="w-100 my-auto">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row h-100">
                                    <?php
                                        echo '<a href="?guild_id='.$_GET['guild_id'].'" class="bold my-auto text-decoration-none">Дискорд сервер гильдии</a>'
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <div class="row">
                                    <img src="img/docs.png" class="w-100 my-auto">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row h-100">
                                    <?php
                                        echo '<a href="rules.php?guild_id='.$_GET['guild_id'].'" class="bold my-auto text-decoration-none">Правила</a>'
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-3">
                                <div class="row">
                                    <img src="img/docs.png" class="w-100 my-auto">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row h-100">
                                    <?php
                                        echo '<a href="treb.php?guild_id='.$_GET['guild_id'].'" class="bold my-auto text-decoration-none">Требования</a>'
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="row mt-5">
                                    <div class="col-8 bbl">
                                        <p class="my-3 orange" style="color: #8080FF;">
                                            Правила
                                        </p>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="col-3 mx-auto" style="height: 150px;border-color:#8080FF;">
                                        <div class="row h-100">
                                            <p class="my-auto"
                                                style="font-family: 'Noto Sans';font-style: normal;font-weight: 600;font-size: 16px;line-height: 22px;color: #FFFFFF;">
                                                1. члены гильдии обязаны уважать своих согильдийцев;</p>
                                        </div>
                                    </div>
                                    <div class="col-3 mx-auto" style="height: 150px;border-color:#8080FF;">
                                        <div class="row h-100">
                                            <p class="my-auto"
                                                style="font-family: 'Noto Sans';font-style: normal;font-weight: 600;font-size: 16px;line-height: 22px;color: #FFFFFF;">
                                                2. маты и оскорбления, несущие открытую агрессию, в общем чате гильдии
                                                категорически запрещены;</p>
                                        </div>
                                    </div>
                                    <div class="col-3 mx-auto" style="height: 150px;border-color:#8080FF;">
                                        <div class="row h-100">
                                            <p class="my-auto"
                                                style="font-family: 'Noto Sans';font-style: normal;font-weight: 600;font-size: 16px;line-height: 22px;color: #FFFFFF;">
                                                3. все конфликты и споры разрешаются через ГМа и его замов.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-8 bbl">
                                        <p class="my-3 orange">
                                            Правила поведения в Гильдии.
                                            Члену Гильдии запрещается:
                                        </p>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <div class="row">
                                        <p class="bold my-2">
                                            1. оскорблять, провоцировать других игроков - все межличностные отношения
                                            решаются в приватном чате и выражают личное мнение члена, но не Гильдии;
                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="bold my-2">

                                            2. негативно высказываться о Гильдии в каналах, включая канал Гильдии;

                                        </p>
                                    </div>
                                    <div class="row">
                                        <p class="bold my-2">
                                            3. лутерство (в рейде или пати);
                                            <div class="row">
                                                <p class="bold my-2">
                                                    4. попрошайничество;
                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="bold my-2">
                                                    5. бросать группу или рейд ради других игровых мероприятий;

                                                </p>
                                            </div>
                                            <div class="row">
                                                <p class="bold my-2">
                                                    6. совершать торговые операции с другими членами гильдии.
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