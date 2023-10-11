<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Learts – Handmade Shop eCommerce HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->

    <style>

.faq {
    margin-bottom: 50px;
    font-family: 'Arial', sans-serif; /* Use your desired font family */
    font-size: 25px;


}

.faq h4.question {

    color: #666;
    margin: 0;
    cursor: pointer;
    background-color: #F5F5F5;
    padding: 20px;
}

.faq p.answer {
    margin-top: 10px;
    color: #F8796C;
    display: none; /* Hide answer text by default */

}

.faq:hover p.answer {
    display: block; /* Show answer text on hover */
}
        .home-slider {
    position: relative;
    width: 100%;

    overflow: hidden;
}

.full-screen-image {
    width: 100%;
    height: 700px;
    object-fit: cover; /* This ensures the image covers the entire container */
}
.beautiful-background {
    background-color: #F5F5F5;
    padding: 50px 0;
    margin-bottom: 100px;
}

.beautiful-title {
    font-family: Modesty;
    font-size: 80px;
    font-weight: 400;
    margin-bottom: 20px;
    color: #F8796C;
}

.sub-title {
    font-size: 28px;
    font-weight: 600;
    color: #333;
    margin-bottom: 30px;
}

.beautiful-text {
    font-size: 20px;
    line-height: 1.6;
    color: #555;
}

    </style>
</head>

<body>





    @include('pageslayout.headerlinks')
</head>

<body>


 @include('pageslayout.navbar')


    @yield('content')

  @include('pageslayout.footer')

@include('pageslayout.footerscript')
</body>
</html>
