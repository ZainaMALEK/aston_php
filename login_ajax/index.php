<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">

            <!--Formulaire de connexion-->
            <button class="btn" id="connectBtn">Connexion</button>
            <button class="btn" id="registrBtn">Inscription</button>
            <section id="connexionSession"style="display:none">
                <form action="connexion.php" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="emailConnect" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password" name="mdp">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form>
            </section>    

        <!--Formulaire d'inscription-->
            
            <section id="inscriptionSession" style="display:block">
                <form action="inscription.php" method="POST">
                    <div class="form-group">
                        <label for="pseudo">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" aria-describedby="emailHelp" placeholder="Entrez un pseudo" name="pseudo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email </label>
                        <input type="email" class="form-control" id="emailRegistr" aria-describedby="emailHelp" placeholder="Entrez un email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="mdp" placeholder="Mot de passe" name="mdp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmez votre mot de passe</label>
                        <input type="password" class="form-control" id="mdp2" placeholder="Mot de passe" name="mdp2">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input type="number" class="form-control" id="age" placeholder="Age" name="age">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Valider</button>
                </form-->
            </section>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   

<!-- Modal -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </body>
</html>