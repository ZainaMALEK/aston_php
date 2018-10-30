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
      <h1>Ajout de produits</h1>
      <form action="insert.php" method="post">
        <div class="form-group">
          <label for="nom">Nom du produit</label>
          <input type="text" class="form-control" id="productName" placeholder="nom du produit" name="productName">
        </div>

        <div class="form-group">
          <label for="price">Prix du produit</label>
          <input type="text" class="form-control" id="price" placeholder="prix du produit" name="price">
        </div>
        
        <div class="form-group">
          <label for="description">Description</label>
          <textarea class="form-control" id="description" rows="3" name ="description"></textarea>
        </div>
        <button id="addProductBtn" type="submit">Valider</button>
      </form>
    </div>
    <br>
    <div class="container">
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">Nom du produit</th>
            <th scope="col">Prix</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          
        </tbody>
      </table>
    </div>  
    <!--div class="form-group">
          <label for="exampleFormControlSelect1">Quantité</label>
          <input type="number" class="form-control" id="quantity" step="1">
          </input>
        </div-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>