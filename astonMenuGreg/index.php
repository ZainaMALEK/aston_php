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
        <div class="row">
            <div class="col-10"></div>
            <div class="col-2">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
Add</button>

            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead class="bg-dark text-light">
                        <tr>
                            <td>id</td>
                            <td>Nom</td>
                            <td>Categorie</td>
                            <td>Prix</td>
                            <td>Suppr</td>
                            <td>Modif</td>
                        </tr>
                    </thead>
                    <tbody id='cible'>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajout d un plat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                    <label for="nom">Nom</label><br>
                    <input type="text" name="nom" id="nom"><br>
                    <label for="prix">Prix</label><br>
                    <input type="text" name="prix" id="prix"><br>
                    <label for="categorie">Categorie</label><br>
                    <input type="text" name="categorie" id="categorie"><br>
                    <label for="image">Image</label><br>
                    <input type="text" name="image" id="image"><br>
                    <button class="btn btn-success" id="addButton">
                        ajouter
                    </button>
         </div>
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script>
        let idModif;
        //Partie ajout
        $('#addButton').click(function(){
                //add.php page appellee
                $.post('add.php',
                {
                        nom: $('#nom').val(),
                        prix: $('#prix').val(),
                        categorie :$('#categorie').val() ,
                        image: $('#image').val(),
                        id: idModif
                    }, function(data) {
                        liste();
                        //Vide les champs de la modal
                        $('#nom').val('');
                        $('#prix').val('');
                        $('#categorie').val('');
                        $('#image').val('');
                });
                $('#exampleModal').modal('hide');
        })

        //Partie Modification
        $('body').on('click','.editBtn',function(){
            $('#exampleModal').modal('show');
            $('#exampleModalLabel').html('Modification');
            idModif = $(this).data('target');
            $.post('modif.php',
            {
                id: idModif
            }, function(data){
                let recette = JSON.parse(data);
                console.log(recette[0].nom)
                $('#nom').val(recette[0].nom);
                $('#prix').val(recette[0].prix);
                $('#categorie').val(recette[0].categorie);
                $('#image').val(recette[0].image);
                idModif='';
            });
        });

        //Partie suppression
        $('body').on('click','.delBtn',function(){
            console.log('click')
            let id =$(this).data('target');
            console.log(id)
            $.post('suppr.php',
            {
                id: id
            },function(data){
                liste();
            });
        })

        //Partie affichage
        function liste(){
            idModif = '';
            $.post('liste.php',
            {

            }, function(data){
                console.log(data);
                //Je vide le tableau
                $('#cible').empty();
                //Je parse le Json pour le traiter
                let recettes = JSON.parse(data);

                //Je parcours le json pour l afficher
                $(recettes).each(function(index, recette){
                    $('#cible').append('<tr>');
                    $('#cible').append('<td>'+recette.id+'</td>');
                    $('#cible').append('<td>'+recette.nom+'</td>');
                    $('#cible').append('<td>'+recette.categorie+'</td>');
                    $('#cible').append('<td>'+recette.prix+'</td>');
                    $('#cible').append('<td><button class="btn btn-danger delBtn" data-target="'+recette.id+'">X</button></td>');
                    $('#cible').append('<td><button class="btn btn-info editBtn" data-target="'+recette.id+'">Modifier</button></td>');
                    $('#cible').append('</tr>');
                 });
            });
        }
        liste();

    </script>

  </body>
</html>
