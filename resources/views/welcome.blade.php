<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
        <title>Laravel</title>
       
    </head>
    <body>

        <div class="top-nav">
            <ul>
                <li><a href="">Pradinis</a></li>
                <li><a href="" id="categories">Kategorijos <i class="fas fa-chevron-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="">Nekazas</a></li>
                        <li><a href="">Kzazas</a></li>
                    </ul>
                </li>
                <li><a href="">Populiariausios</a></li>
                <li><a href="" class="login-reg">Prisijungti</a></li>
            </ul>
        </div>

        <div id="app">
            <books-index></books-index>
        </div>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous" />
        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            let cats = document.getElementById('categories');
            let dropdown = document.querySelector('.dropdown');
            cats.addEventListener('mouseover', function() {
                dropdown.classList.add('active-dropdown');
                document.querySelector('.fas').style.transform = 'rotateZ(180deg)';
            });
            dropdown.addEventListener('mouseleave', function() {
                dropdown.classList.remove('active-dropdown');
                document.querySelector('.fas').style.transform = 'rotateZ(0deg)';
            });            
        </script>
    </body>
</html>
