<?php 
session_start();
    include "connect.php";
    $query2 = mysqli_query($con, "SELECT * FROM guilds WHERE id='{$_GET['guild_id']}'");
    $query3 = mysqli_query($con, "SELECT * FROM newsguild WHERE guild_id='{$_GET['guild_id']}'");
    $queryTreb = mysqli_query($con, "SELECT * FROM treb WHERE guild_id='{$_GET['guild_id']}'");
    $q4 = mysqli_query($con, "SELECT * FROM users WHERE id='{$_SESSION['user_id']}'");
    $me = $q4->fetch_assoc();
    $stroka1 = $query2->fetch_assoc();
    $users = mysqli_query($con, "SELECT * FROM users WHERE guild_id='{$_GET['guild_id']}'");
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
    <!-- minified snippet to load TalkJS without delaying your page -->
    <script>
        (function (t, a, l, k, j, s) {
            s = a.createElement('script');
            s.async = 1;
            s.src = "https://cdn.talkjs.com/talk.js";
            a.head.appendChild(s);
            k = t.Promise;
            t.Talk = {
                v: 3,
                ready: {
                    then: function (f) {
                        if (k) return new k(function (r, e) {
                            l.push([f, r, e])
                        });
                        l
                            .push([f])
                    },
                    catch: function () {
                        return k && new k()
                    },
                    c: l
                }
            };
        })(window, document, []);
    </script>
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
                        <div class="row my-2">
                            <div class="col-3">
                                <div class="row">
                                    <img src="img/docs.png" class="w-100 my-auto">
                                </div>
                            </div>
                            <div class="col">
                                <div class="row h-100">
                                    <?php
                                        echo '<a href="chat.php?guild_id='.$_GET['guild_id'].'" class="bold my-auto text-decoration-none">Чат</a>'
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
                                            чат
                                        </p>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    <!-- container element in which TalkJS will display a chat UI -->
                                    <div id="talkjs-container" style="width: 100%; margin: 30px; height: 500px">
                                        <i>Loading chat...</i>
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
    Talk.ready.then(function () {
        var me = new Talk.User(
            <?php echo json_encode(array(
                "id" => strval($me['id']),
                "name" => $me['login'],
                "email" => $me['email']
            )); ?>
        );
        window.talkSession = new Talk.Session({
            appId: 't19HwB6X',
            me: me,
        });

        <?php
            for($i=0;$i<$users->num_rows;$i++){
                $treb = $users->fetch_assoc();
                echo "var other".$i." = new Talk.User("
        ?>
        
        
            <?php echo json_encode(array(
                "id" => strval($treb['id']),
                "name" => $treb['login'],
                "email" => $treb['email']
            )); ?>
        );
        <?php
            };
        ?>

        var conversation = window.talkSession.getOrCreateConversation("CONVERSATION_ID");
        conversation.setParticipant(me);
        <?php
            for($i=0;$i<$users->num_rows;$i++){
                $treb = $users->fetch_assoc();
                echo "conversation.setParticipant(other".$i.");"
        ?>
        
        <?php
            };
        ?>
        conversation.setAttributes({
           
            <?php
                echo "photoUrl: '".$stroka1['img']."',";
                echo "subject: '".$stroka1['name']."'";
            ?>
        });

        var chatbox = window.talkSession.createChatbox();
        chatbox.select(conversation);
        chatbox.mount(document.getElementById('talkjs-container'));
    });
</script>
</body>

</html>