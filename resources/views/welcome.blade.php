<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecta</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/main.min.css">
        <!-- Styles -->
        <style>
          body {background-color: rgb(0, 87, 129);}
        </style>


    </head>
    <body class="loaded">
        <div class="main">
            <div class="content">
                <div id="info" class="container">
                  <div>
                    <?php
                    $results = DB::select('select * from sp where id = ?', [0]);
                    ?>
                    <h1><?php echo $results[0]->title; ?></h1>
                    <p><?php echo $results[0]->subtitle; ?></p>
                  </div>
                </div>
                <div id="stat" class="container">
                  <h2>Site in construction</h2>
                </div>
                <div id="controls" class="container">
          				<a href="#" class="button">
          					<div class="back"></div>
          					<img src="img/play_button_proyecta.png" alt="Play Video" class="offset">
          					<div class="caption">conoce más</div>
          				</a>
          				<input type="email" name="email" id="email" placeholder="tu correo">
          				<a href="#" class="button">
          					<div class="back"></div>
          					<img src="img/mail_button_proyecta.png" alt="Notifícame">
          					<div class="caption">notifícame</div>
          				</a>
          			</div>

            </div>
        </div>
    </body>
</html>
