<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello - @yield("title") </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
    <style>
        .footer {
           position: fixed;
           left: 0;
           bottom: 0;
           width: 100%;
           color: blue;
           text-align: center;
           font-size: large;
        }
        .color {
            color: black;
            background-color: chartreuse;
        }
        .text {
            color: chartreuse;
            background-color: black;
        }
        table {
            margin-top: 2rem;
        }
        th {
            color: chartreuse;
            background-color: black; 
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @section('sidebar')
                  <nav class="navbar navbar-dark bg-success justify-content-between">
                    <a class="navbar-brand">Navbar</a>
                    <form class="form-inline">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </nav>
                @show
            </div>
        </div>
        @yield("content")
        <div class="row">
            <div class="col-md-12">
                @yield("another", View::make("test"))
            </div>
        </div>
    </div>
    @stack("script")
</body>
</html>