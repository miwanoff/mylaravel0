<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="bg-dark text-white">


    <!-- <div class=" d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white border-bottom
    box-shadow">
        <h5 class="my-0 mr-md-auto font-weight-normal">Laravel</h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-white" href="/">Home</a>
            <a class="p-2 text-white" href="/about">About</a>
        </nav>
        <a class="btn btn-warning" href="/review">
            Reviews</a>
    </div> -->

    <div class="container">
        @yield('main_content')
    </div>
</body>

</html>