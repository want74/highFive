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
    <title>High Five</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        /*Ну боди, чел ты чё?*/
        body {
            margin: 0 auto;
            height: auto;
            background-color: #2E3190;
            background-image: url(img/kits.svg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        /*Левая колонка*/
        .left {
            background-image: url("/img/circle.svg");
            background-size: 50vw;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
        }

        /*То что у нас программа?*/
        .spec {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 48px;
            line-height: 128.19%;
            /* identical to box height, or 62px */

            text-align: center;
            letter-spacing: 0.12em;
        }

        /*Название нашего прокта*/
        .ourProject {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 300;
            font-size: 80px;
            line-height: 128.19%;
            /* identical to box height, or 103px */

            text-align: center;
            letter-spacing: 0.12em;
        }

        /*Слоган проекта*/
        .slogan {
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 24px;
            line-height: 128.19%;
            /* or 31px */

            text-align: center;
            letter-spacing: 0.12em;
            color: rgba(255, 255, 255, 0.5);
        }

        .sec {
            height: auto;
            border-bottom: 1px solid #313131;
        }

        /*заголовок*/
        .head-reg {
            font-style: normal;
            font-weight: 700;
            font-size: 40px;
            line-height: 36px;
            display: flex;
            align-items: center;

            color: #F96C1B;
        }

        /*текст*/
        .text-reg {
            font-style: normal;
            font-weight: 400;
            font-size: 22px;
            line-height: 28px;
            /* or 156% */

            display: flex;
            align-items: center;

            color: rgba(255, 255, 255, 0.5);
        }

        .login {
            font-family: 'Open Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 18px;
            /* identical to box height, or 129% */

            letter-spacing: -0.154px;

            color: rgba(255, 255, 255, 0.5);

        }

        input {
            background: white !important;
            border: 1px solid #8080FF !important;
            box-sizing: border-box !important;
            border-radius: 6px !important;
            height: 5vh;
        }

        /*кнопка выбора программы*/
        .btn-choice {
            background: #F96C1B;
            border-radius: 4px;
            color: white;
            height: 40px;
            font-family: 'Open Sans', sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 20px;
        }
    </style>
</head>

<body>
    <!--Контент-->
    <div class="container-fluid">
        <div class="row">
            <div class="col left">
                <div class="row" style="margin-top: 5vh;">
                    <img src="img/logomin.svg" class="w-25 mx-auto" style="margin-top: 5vh;">
                </div>
                <div class="row mb-5">
                    <img src="img/logo.svg" class="w-50 mx-auto" style="margin-top: 5vh;">
                </div>
                <div class="row">
                    <p class="slogan w-75 mx-auto">прокачай свою научную работу, воплоти в жизнь практическую часть,
                        получи поддержку менторов, найди новых друзей!</p>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class="row" style="margin-top: 20vh;">
                            <h1 class="head-reg">Регистрация аккаунта </h1>
                        </div>
                        <div class="row">
                            <p class="text-reg">Для успешной регистрации заполните следуещее... </p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="reg.php" method="post" class="w-100">
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="row">
                                                <p class="login">Логин</p>
                                            </div>
                                            <div class="row">
                                                <input type="text" name="login" class="form-control"
                                                    placeholder="Например: Alexey Semenov">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="row">
                                                <p class="login">Почта</p>
                                            </div>
                                            <div class="row">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="Enter email address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <div class="row">
                                                <p class="login">Создайте надежный пароль</p>
                                            </div>
                                            <div class="row">
                                                <input type="password" name="pass" class="form-control"
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <button class="btn btn-choice mx-auto w-25">
                                            Дальше
                                        </button>
                                    </div>
                                </form>
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
    <script>
    </script>
</body>

</html>