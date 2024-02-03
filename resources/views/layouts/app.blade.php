<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <link rel="stylesheet" href="{{ Vite::asset('resources/css/app.css') }}">
 <!-- UIkit CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
    <body>
        <header> 
            @if ($nav)
            <nav class="uk-navbar-container uk-margin" uk-navbar>
                <div class="uk-navbar-center">    
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="/">Configuration</a></li>
                        <li class="historique"><a href="/historique">historique</a></li>
                    </ul>                              
                </div>
            </nav>                     
            @endif           
        </header>  
        @if ($nav) 
            <div class="container ">              
                    @yield('content') 
            </div>                    
        @else
            <div class="container uk-margin-large   uk-padding ">              
               @yield('content') 
            </div>     
        @endif 
    </body>
</html>
<script src="{{ Vite::asset('resources/js/jquery-ui.js') }}"></script>
<script src="{{ Vite::asset('resources/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- UIkit JS -->
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/js/uikit-icons.min.js"></script>
 @include('modal.clavier')
 @include('modal.pad')
 @include('modal.annuler')
 @include('modal.success')

