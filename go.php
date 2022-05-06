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
    <title>highfive</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        /*Ну боди, чел ты чё?*/
        body {
            margin: 0 auto;
            height: auto;
            background-color: #0D0D0D;
            background-image: url(img/grid.svg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        /*Левая колонка*/
        .left {
            background: rgba(115, 124, 132, 0.04);
            backdrop-filter: blur(56px);
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

            color: #8080FF;
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
            background: #282828 !important;
            border: 1px solid #8080FF !important;
            box-sizing: border-box !important;
            border-radius: 6px !important;
            height: 5vh;
        }

        /*кнопка выбора программы*/
        .btn-choice {
            background: #8080FF;
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
                <div class="row">
                    <img src="img/logo.svg" class="w-25 mx-auto" style="margin-top: 30vh;">
                </div>
                <div class="row">
                    <p class="spec text-white">Программа</p>
                </div>
                <div class="row mb-5">
                    <p class="ourProject text-white">High Five</p>
                </div>
                <div class="row">
                    <p class="slogan w-75 mx-auto">прокачай свою научную работу, воплоти в жизнь практическую часть, получи поддержку менторов, найди новых друзей!</p>
                </div>
            </div>
            <div class="col">
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div class="row" style="margin-top: 20vh;">
                            <h1 class="head-reg">Вход в аккаунт</h1>
                        </div>
                        <div class="row sec">
                            <p class="text-reg">Для успешного входа заполните следующее...  </p>
                        </div>
                        <div class="row">
                            <div class="col">
                                <form action="going.php" method="post" class="w-100">
                                <div class="row mt-4" style="margin-bottom: 10vh;">
                                    <div class="col">
                                        <div class="row">
                                            <p class="login">Логин</p>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="login" class="form-control text-white"
                                                placeholder="Alexey Semenov">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <div class="row">
                                            <p class="login">Пароль</p>
                                        </div>
                                        <div class="row">
                                            <input type="password" name="pass" class="form-control text-white" placeholder="Password">
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