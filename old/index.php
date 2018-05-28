<?php
    session_start();
    if ($_GET['exit'] > 0) {
        $_SESSION['login'] = "";
        header("Location: .");
    } else {
        if ($_SESSION['login'] == "1") {
            header("Location: admin.php");
        } else {
            if ($_SESSION['login'] == "2") {
                header("Location: prepod.php");
            } else {
                if ($_SESSION['login'] == "3") {
                    header("Location: ych.php");
                } else {
                    if ($_SESSION['login'] != "") {
                        $_SESSION['login'] = "";
                        header("Location: .");
                    }
                }
            }
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="width.js"></script>
        <title></title>
        <style>
            @media screen and (max-width: 1280px) {
                div.contentblock {
                    width: 1200px;
                }
            }
            
            @media screen and (max-width: 1140px) {
                div.contentblock {
                    width: 1024px;
                }
            }
            
            @media screen and (max-width: 992px) {
                div.contentblock {
                    width: 970px;
                }
            }
            
            body {
                display: flex;
                flex-direction: column;
                margin: 0;
                background: url(f.jpg);
            }
            
            .form {
                display: flex;
                flex-direction: column;
                margin: 5px;
            }
            
            #main {
                display: flex;
                justify-content: center;
            }
            
            #head {
                display: flex;
                justify-content: center;
            }
            
            #head h1 {
                color: white;
            }
            
            * {
                box-sizing: border-box;
            }
            
            input,
            select,
            button {
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 100%;
                font-size: 13px;
                padding: 12px 20px 12px 40px;
                border: 1px solid #ddd;
                margin-bottom: 12px;
            }
            
            #form1 label {
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 100%;
                font-size: 20px;
                padding: 12px 20px 12px 0px;
                margin-bottom: 12px;
                color: #09539e;
            }
            
            #form2 label {
                background-position: 10px 10px;
                background-repeat: no-repeat;
                width: 100%;
                font-size: 20px;
                padding: 12px 20px 12px 40px;
                margin-bottom: 12px;
                color: #09539e;
            }
            
            button :hover {
                background-color: #09539e;
            }
        </style>
    </head>

    <body>
        <div id="main">

            <div id="bform2">
                <form class="form" action="login/index.php" method="post" id="form2">
                    <label for="name"><h3>Авторизация </h3></label>
                    <input type="login" name="login" placeholder="Логин">
                    <input type="password" name="password" placeholder="Пароль">
                    <button type="submit">Войти</button>
                </form>
            </div>
        </div>
    </body>

    </html>