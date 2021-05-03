<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
        <title>Laravel</title>
        
    </head>
    <body>

        <div id="app">
            <app></app>
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
