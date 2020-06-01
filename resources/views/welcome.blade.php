<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta content="{{csrf_token()}}" name="csrf-param" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
        <!-- Styles -->
        <link href="{{asset('css/app.css')}}">
        
    </head>
    <body>
        <div id="app" class="flex-center position-ref full-height">

            {{-- navbar  --}}
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <router-link to="/" class="navbar-brand" >Navbar</router-link>
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <router-link to="/tasks" class="nav-link" >Home <span class="sr-only">(current)</span></router-link>
                        </li>
                        <li class="nav-item">
                            <router-link to="/example" class="nav-link" >Example</a>
                        </li>
                        
                    </ul>
                    
                </div>
            </nav>

            <router-view></router-view>
        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
