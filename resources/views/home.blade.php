<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
        
        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">

    </head>
    <body>
       <section id="site-header">
        <nav>
            <input type="checkbox" id="checkbox" />
            <label for="checkbox">
                <span class="toggle">☰</span>
            <ul class="menu second">
            <li><a href="#">Home</a></li>
            <li><a href="#">Web Development</a></li>  
            <li><a href="#">Interested Topics</a></li>  
            <li><a href="#">About</a></li>  
            </ul>
            </label>
        </nav>
       </section>

       <section id="slider">
           <div class="main-slider">
                <div class="canvas">
                    <canvas class="canvas">

                    </canvas>
                </div>
                <div class="text-holder">
                    <p>text is going in here</p>
                </div>
           </div>
       </section>
    </body>
</html>



