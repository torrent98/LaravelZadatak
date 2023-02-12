<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Srcc's Pizza</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel= "stylesheet">
        
        <!-- Optional theme -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>

        {{View::make('header')}}

        @yield('content')



        <footer>
            Copyright 2023 Src's Pizza
        </footer>

        <style>
            .custom-login{
                height: 500px;
                padding-top: 100px;
            }
            img.slider-img{
                height: 400px !important
            }
            .custom-product{
                height: 600px
            }
            .slider-text{
                background-color: #35443585 !important;
            }
            .trending-image{
                height: 100px;
            }
            .trening-item{
                float: left;
                width: 20%;
            }
            .trending-wrapper{
                margin: 30px;
            }
            .detail-img{
                height: 200px;
            }
            .search-box{
                width: 500px !important
            }
            .cart-list-devider{
                border-bottom: 1px solid #ccc;
                margin-bottom: 20px;
                padding-bottom: 20px
            }
        </style>

    </body>
</html>