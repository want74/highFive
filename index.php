<?php
    include "connect.php";
    $query1 = mysqli_query($con, "SELECT * FROM users");
    $query2 = mysqli_query($con, "SELECT * FROM news ORDER BY id DESC");
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
        <!-- Слайд 1 -->
        <div class="row panel bgKek" style="height: 100vh;" data-section-name="1">
            <div class="col">
                <div class="row lol ">
                    <div class="col-10 loll mx-auto" style="height: 100vh;">
                        <div class="row" style="height: 100vh;">
                            <div class="col my-auto">
                                <div class="row my-4">
                                    <img src="img/logo.svg" class="logo">
                                </div>
                                <div class="row">
                                    <p class="slogan">
                                        Найди своих
                                        единомышленников
                                        и развивайся!
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row" style="height: 100vh;">
                                    <div class="col-6 ms-auto my-auto">
                                        <div class="row">
                                            <h1 style="color: #8080FF;font-weight: 700;font-size: 64px;">
                                                Более
                                            </h1>
                                            <h1 class="shadowBolee">
                                                Более
                                            </h1>
                                        </div>
                                        <div class="row">
                                            <p class="bold">

                                                <span style="color:white;font-weight: 700;">
                                                    +1.500
                                                </span>
                                                школьников присоединились к нам!
                                            </p>
                                        </div>
                                        <div class="row ramka bg-white ">
                                            <div class="col">
                                                <div class="row my-3">
                                                    <p
                                                        style="color: rgba(0, 0, 0, 0.5);font-weight: 600;font-size: 20px;line-height: 24px;">
                                                        На сайте я нашла своих
                                                        единомышленников и
                                                        свое призвание!</p>
                                                </div>
                                                <div class="row">
                                                    <p class="author"
                                                        style="width:max-content;color: rgba(0, 0, 0, 0.5);">
                                                        Елизавета Шабурова
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

        </div>
        <!-- Слайд 2 -->
        <div class="row panel bg5kitov" style="height: 100vh;" data-section-name="2">
            <div class="col-10 mx-auto" style="height: 100vh;">
                <div class="row" style="height: 100vh;">
                    <div class="row">
                        <div class="col">
                            <div class="row" style="margin-top: 0vh;">
                                <div class="col-3">
                                    <img src="img/5kits.svg" class="w-100">
                                </div>
                                <div class="col bold my-auto">
                                    <p>
                                        Выбери своего <span
                                            style="font-style: normal;font-weight: 500;font-size: 24px;line-height: 33px;color: #E06529;">кита</span>
                                        , чем ты интересуешься больше всего и хочешь <span
                                            style="font-style: normal;font-weight: 500;font-size: 24px;line-height: 33px;color: #E06529;">развиваться</span>
                                        именно в этом напрвлении.
                                    </p>
                                </div>
                            </div>
                            <div class="row" style="z-index: 10000;margin-top:10vh;">
                                <div class="col-3 mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <a href="kit.php?kit_id=4" class="mx-auto text-decoration-none">
                                                <img src="img/1.svg" class="w-100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-">
                                        <p class="mx-auto bold" style="width: max-content;color:#F96C1B;">Рисуем все</p>
                                    </div>
                                </div>
                                <div class="col-3 mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <a href="kit.php?kit_id=5" class="mx-auto text-decoration-none">
                                                <img src="img/2.svg" class="w-100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-">
                                        <p class="mx-auto bold" style="width: max-content;color:#F96C1B;">Все в спорт!
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <a href="kit.php?kit_id=1" class="mx-auto text-decoration-none">
                                                <img src="img/3.svg" class="w-100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-">
                                        <p class="mx-auto bold" style="width: max-content;color:#F96C1B;">3 языка</p>
                                    </div>
                                </div>
                                <div class="col-3 mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <a href="kit.php?kit_id=2" class="mx-auto text-decoration-none">
                                                <img src="img/4.svg" class="w-100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-">
                                        <p class="mx-auto bold" style="width: max-content;color:#F96C1B;">Шахматы</p>
                                    </div>
                                </div>
                                <div class="col-3 mx-auto">
                                    <div class="row">
                                        <div class="col">
                                            <a href="kit.php?kit_id=3" class="mx-auto text-decoration-none">
                                                <img src="img/5.svg" class="w-100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row mt-">
                                        <p class="mx-auto bold" style="width: max-content;color:#F96C1B;">Музыка для
                                            всех</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Слайд 3 -->
        <div class="row panel bg" style="height: 100vh;" data-section-name="3">
            <div class="col-10 mx-auto" style="height: 100vh;">
                <div class="row" style="height: 100vh;">
                    <div class="col">
                        <div class="row" style="height: 100vh;">
                            <div class="col-6 ms-auto my-auto">
                                <div class="row">
                                    <div class="col ">
                                        <div class="row">
                                            <div class="col-8 ms-auto ">
                                                <h1 class="project text-white animate__animated ms-auto"
                                                    style="width:min-content;">
                                                    Начало
                                                    проекта
                                                </h1>
                                                <h1 class="shadowStart text-white animate__animated"
                                                    style="width:min-content;">
                                                    Начало
                                                    проекта
                                                </h1>
                                            </div>

                                        </div>
                                        <div class="row mt-5">
                                            <div class="col ramka">
                                                <div class="row my-5">
                                                    <div class="col my-auto bold" style="">
                                                        <div class="row text-center">
                                                            <p>“Воспитание и формирование гармоничной личности ребенка
                                                                должно
                                                                быть
                                                                основано
                                                                на пяти китах образования: музыкальное образование, игра
                                                                в
                                                                шахматы,
                                                                изобразительное искусство, развитие навыков знание
                                                                иностранных
                                                                языков,
                                                                спорт. Иного пути нет. Это очень благородная задача и
                                                                она
                                                                подсилу
                                                                нам”. </p>
                                                        </div>
                                                        <div class="row text-center">
                                                            <p style="">
                                                                ***
                                                            </p>
                                                        </div>
                                                        <div class="row text-center">
                                                            <p style="">
                                                                Николаев Михаил Ефимович (первый президент РС(Я) ).
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <a href=""
                                                style="font-style: normal;font-weight: 600;font-size: 24px;line-height: 33px;text-align: center;color: #2C67FF;text-decoration:none;"><span
                                                    style="font-weight: 600;font-size: 24px;line-height: 33px;text-align: center;color: #E06529;">Источник:</span>
                                                https://nikolaevcentre.ru/news/963</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Слайд 4 -->
        <div class="row panel bgKek" style="height: 100vh;" data-section-name="4">
            <div class="col-10 mx-auto" style="height: 100vh;">
                <div class="row" style="margin-top: 30px;margin-bottom:100px;">
                    <h1 class="project text-white animate__animated" style="width:max-content;">
                        Новости
                    </h1>
                    <h1 class="shadowProject text-white animate__animated" style="width:max-content;">
                        Новости
                    </h1>
                </div>
                <div class="row row-cols-3 g-5">
                            <?php
                                for($i=0;$i<$query2->num_rows;$i++){
                                    $stroka1 = $query2->fetch_assoc();
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
                <div class="row mt-5">
                    <a href="allnews.php" class="mx-auto" style="width:max-content;">
                    <button class="btn btn-our px-4 py-2 " style="width: max-content;">
                        Все новости
                    </button>
                    </a>
                </div>
            </div>
        </div>
        <!-- Слайд 5 -->
        <div class="row panel bgKek" style="height: 100vh;" data-section-name="5">
            <div class="row" style="height:10vh;">
                <div class="col-6 mx-auto">
                    <div class="row h-100">
                        <img src="img/Group 214.svg" class="w-75 mx-auto my-auto">
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-3 mx-auto">
                    <div class="row h-100">
                        <img src="img/Group 201.svg" class="w-100 mb-auto">
                    </div>
                </div>
                <div class="col-3 mx-auto">
                    <div class="row h-100">
                        <img src="img/Group 202.svg" class="w-100 mb-auto">
                    </div>
                </div>
                <div class="col-3 mx-auto">
                    <div class="row h-100">
                        <img src="img/Group 203.svg" class="w-100 mb-auto">
                    </div>
                </div>
            </div>
        </div>
        <!-- Слайд 6 -->
        <div class="row panel bgCircle" style="height: 100vh;" data-section-name="6">
            <div class="row">
                <div class="col-6 mx-auto mt-5">
                    <div class="row">
                        <img src="img/live.svg" class="w-25 mx-auto">
                    </div>
                </div>
            </div>
            <div class="row ss">
                <div class="col-6 mx-auto ">
                    <p class="bold mx-auto" style="width: max-content;">Видеоконференцсвязь онлайн-мероприятий
                    </p>
                </div>
            </div>
            <div class="row">
                <iframe class="mx-auto" style="width: 50vw;"
                    src="https://vk.com/video_ext.php?oid=-212633668&id=456239039&hash=101923f861fd5eb4" height="500"
                    frameborder="0" allowfullscreen="1"
                    allow="autoplay; encrypted-media; fullscreen; picture-in-picture"></iframe>
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
        let project = document.querySelector('.project')
        bool = 0
        project.onmouseover = function () {
            project.classList.add("animate__tada");

            function sayHi() {
                project.classList.remove("animate__tada");
            }

            // После запуска функции ssss добавляется класс затем таймер ждёт 1 секунду и запускает функцию sayHi
            setTimeout(sayHi, 1000);

        }

        $.scrollify({
            section: ".panel",
            scrollbars: false,
            scrollSpeed: 100,
        })
    </script>
</body>

</html>