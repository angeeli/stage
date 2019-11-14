<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>sigpse | connexion </title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">
    <!-- vendor css -->
    <link href="/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/lib/Ionicons/css/ionicons.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="css/bracket.css">
     
    </head>
    
  <body>

    <div class="d-flex align-items-center justify-content-center bg-white ht-100v">
        
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 rounded shadow-base" style="background-color:rgba(236, 240, 241,0.7)">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse" style="color: blue;"><span>SIGPSE</span></div>
        <div class="tx-center mg-b-600"><p>Système Intégré de Gestion de Patrimoine et de Suivi-Entretien</p></div>
        <div style="text-align: center;"><img src="images/cle.png" width="100" height="100"></div>
         <hr style="width: 90%; border:none; height: 4px; background-color: #009432;">
         <form method="post">
            <div class="form-group">
              <input type="email" name="mail" class="form-control" placeholder="Entrer votre adresse">
            </div><!-- form-group -->
            <div class="form-group">
              <input type="password" name="mdp" class="form-control" placeholder="Entrer le mot de passe">
              <a href="" class="tx-info tx-12 d-block mg-t-10"> mot de passe oublié?</a>
            </div><!-- form-group -->
            <button type="submit" name="submit" class="btn btn-success btn-block">se connecter</button>  
        </form>

        <!-- <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div> -->
      </div><!-- login-wrapper -->
    </div><!-- d-flex -->

    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/popper.js/popper.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>

    </body>
</html>
