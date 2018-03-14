<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Small API By (Ayman Aljohary)
                </div>
                <div style="text-align:left; color:#0039ff !important; font-family:sans-serif;">
                    <span>[POST]</span> /api/login : {'email':'admin@admin.com', 'password':'123456'}<br>
                    [POST] /api/register : {'name':'hello', 'email':'admin@admin.com', 'password':'123456'}<br>
                    [GET] /api/user?token=.... : UserInfo<br>
                    [GET] /api/logout?token=.... : logout<br>
                    [GET] /api/books?token=.... : Get the user Books<br>
                    [POST] /api/books?token=.... : {'title':'book name', 'description': 'book description'}<br>
                    [PUT] /api/books/{id}?token=.... : {'title':'book name 11', 'description': 'book description 11'}<br>
                    [DELETE] /api/books/{id}?token=.... : Delete Book<br>
                </div>               
            </div>
        </div>
    </body>
</html>
