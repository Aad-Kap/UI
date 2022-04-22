@extends('master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,800" rel='stylesheet' type='text/css'>
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
</head>
<body>
<h3>Search Results</h3>

<div class="tools">
       
        <div class="settings">
            <button id="view">Switch View</button>
        </div>
    </div>
    <div class="products products-table">
        <div class="product">
            <div class="product-img">
                <img src="data:image/jpeg;base64,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" alt="" srcset="">
            </div>
            <div class="product-content">
                <h3>
                    Iphone 10s
                    <small>Midnight Grey</small>
                </h3>
                <p class="product-text price">$999.99</p>
                <p class="product-text genre">Ratings:4.5/5</p>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <img src="data:image/jpeg;base64,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" alt="" srcset="">
            </div>
            <div class="product-content">
            <h3>
                    Iphone 10s
                    <small>Midnight Grey</small>
                </h3>
                <p class="product-text price">$999.99</p>
                <p class="product-text genre">Ratings:4.5/5</p>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <img src="data:image/jpeg;base64,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" alt="" srcset="">
            </div>
            <div class="product-content">
            <h3>
                    Iphone 10s
                    <small>Midnight Grey</small>
                </h3>
                <p class="product-text price">$999.99</p>
                <p class="product-text genre">Ratings:4.5/5</p>
            </div>
        </div>
        <div class="product">
            <div class="product-img">
                <img src="data:image/jpeg;base64,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" alt="" srcset="">
            </div>
            <div class="product-content">
            <h3>
                    Iphone 10s
                    <small>Midnight Grey</small>
                </h3>
                <p class="product-text price">$999.99</p>
                <p class="product-text genre">Ratings:4.5/5</p>
            </div>
        </div>
    </div>
    <script>
        $("#view").click(function () {
            $(".products").toggleClass("products-table");
        });
    </script>






@endsection
</body>
</html>
    
<style>
        input,
        textarea,
        button {
            height: 25px;
            margin: 0;
            padding: 10px;
            font-family: Raleway, sans-serif;
            font-weight: normal;
            font-size: 12pt;
            outline: none;
            border-radius: 0;
            background: none;
            border: 1px solid #282B33;
        }

        button,
        select {
            height: 45px;
            padding: 0 15px;
            cursor: pointer;
        }

        button {
            background: none;
            border: 1px solid black;
            margin: 25px 0;
        }

        button:hover {
            background-color: #282B33;
            color: white;
        }


        .tools {
            overflow: auto;
            zoom: 1;
        }

        .search-area {
            float: left;
            width: 60%;
        }

        .settings {
            display: none;
            float: right;
            width: 40%;
            text-align: right;
        }

        #view {
            display: none;
            width: auto;
            height: 47px;
        }

        #searchbutton {
            width: 60px;
            height: 47px;
        }

        input#search {
            width: 30%;
            width: calc(100% - 90px);
            padding: 10px;
            border: 1px solid #282B33;
        }

        @media screen and (max-width:400px) {
            .search-area {
                width: 100%;
            }
        }

        .products {
            width: 100%;
            font-family: Raleway;
        }

        .product {
            display: inline-block;
            width: calc(24% - 13px);
            margin: 10px 10px 30px 10px;
            vertical-align: top;
        }

        .product img {
            display: block;
            margin: 0 auto;
            width: auto;
            height: 200px;
            max-width: calc(100% - 20px);
            background-cover: fit;
            box-shadow: 0px 0px 7px 0px rgba(0, 0, 0, 0.8);
            border-radius: 2px;
        }

        .product-content {
            text-align: center;
        }

        .product h3 {
            font-size: 20px;
            font-weight: 600;
            margin: 10px 0 0 0;
        }

        .product h3 small {
            display: block;
            font-size: 16px;
            font-weight: 400;
            font-style: italic;
            margin: 7px 0 0 0;
        }

        .product .product-text {
            margin: 7px 0 0 0;
            color: #777;
        }

        .product .price {
            font-family: sans-serif;
            font-size: 16px;
            font-weight: 700;
        }

        .product .genre {
            font-size: 14px;
        }


        @media screen and (max-width:1150px) {
            .product {
                width: calc(33% - 23px);
            }
        }

        @media screen and (max-width:700px) {
            .product {
                width: calc(50% - 43px);
            }
        }

        @media screen and (max-width:400px) {
            .product {
                width: 100%;
            }
        }

        /* TABLE VIEW */

        @media screen and (min-width:401px) {
            .settings {
                display: block;
            }
            #view {
                display: inline;
            }
            .products-table .product {
                display: block;
                width: auto;
                margin: 10px 10px 30px 10px;
            }
            .products-table .product .product-img {
                display: inline-block;
                margin: 0;
                width: 120px;
                height: 120px;
                vertical-align: middle;
            }
            .products-table .product img {
                width: auto;
                height: 120px;
                max-width: 120px;
            }
            .products-table .product-content {
                text-align: left;
                display: inline-block;
                margin-left: 20px;
                vertical-align: middle;
                width: calc(100% - 145px);
            }
            .products-table .product h3 {
                margin: 0;
            }
        }
    </style>