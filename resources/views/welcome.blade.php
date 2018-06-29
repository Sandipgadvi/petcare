<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pet Entry</title>

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
                font-size: 84px;
                padding-bottom: 20px;
            }

            .links > a {
                color: #636b6f;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                padding: 15px 30px;
                border: solid 1px #000;
                font-size: 20px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            label{
                color:#000 !important;
            }
            .btn-cust{
                
            }

            ul{
                padding: 40px;
            }
            li{
                display:inline-block;
                text-decoration: none;
            }
            li a{
                text-decoration: none;
                padding:15px 20px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
             <div class="content">
                <div class="title m-b-md">
                    Pet Note  
                </div>

                <div class="links">
                    @if (Auth::user())

                        @else
                        <a href="{{url('/admin')}}">Login</a>

                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
