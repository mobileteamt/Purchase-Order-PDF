<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Purchase Order PDF in Laravel</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body>
        <div class="container mt-5">
            <div class="text-center">
                <h2>Welcome to purchace order PDF generation using laravel</h2>
                <a type="button" href="{{URL::to('order/generate_pdf')}}" class="btn btn-success mt-3" target="_blank">Generate Order PDF</a>
            </div>
        </div>
    </body>
</html>
