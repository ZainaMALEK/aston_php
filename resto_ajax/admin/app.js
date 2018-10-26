const btn$ = $('#btn');
const domAffichage =$('#domAffichage');
//que faire pr transormer en moteur api?

btn$.click(function()
{
  console.log ('ca ajoute');
  $.post('menu.php',
    {
      nom: $('#nom').val(),
      prix: $('#prix').val(),
      categorie: $('#categorie').val(),
      image: $('#image').val()
    }, function(data)
    {
    alert(data);
    });
})
//data-target="'+value.id+'"
//Affichage
function liste()
{
  $.post('affichage.php', function(data)
  {
    //console.log(data);
    let results= JSON.parse(data);
    //console.log(results);
    let html='';
    $.each(results, function(key, value){

      html += '<tr><td><a href ="'+value.image+'">'+value.nom+'</a></td>';
      html += '<td>'+value.categorie+'</td>';
      html += '<td>'+value.prix+'</td>';
      html += '<td><a href src ="'+value.image+'"</a></td>';
      html += '<td><button class="deleteBtn btn btn-danger" data-target="'+value.id+'">Supprimer</button></td>';
      html += '<td><button class=" updateBtn btn btn-secondary"  >Modifier</button></td></tr>';
    })

    domAffichage.html(html)


  });
}
liste();

//Suppression

$('body').on('click','.deleteBtn', function()
{
  let id = $(this).data('target');

  $.post('sup.php',
  {
    id: id
  },function(data){
    liste();
  });
})

//modification

$('body').on('click','.updateBtn', function(){
  console.log('ok');
  $('#exempleModal').modal('show');
  //console.log ('ca update');
  $.post('update.php',
    {
      nom: $('#nom').val(),
      prix: $('#prix').val(),
      categorie: $('#categorie').val(),
      image: $('#image').val()
    }, function(data)
    {
    liste();
    });
})
function updateListe()
{
  $.post('update.php', function(data)
  {
    //console.log(data);
    let results= JSON.parse(data);
    //console.log(results);
    let html='';
    $.each(results, function(key, value){

      html += '<tr><td><a href ="'+value.image+'">'+value.nom+'</a></td>';
      html += '<td>'+value.categorie+'</td>';
      html += '<td>'+value.prix+'</td>';
      html += '<td><a href src ="'+value.image+'"</a></td>';
      html += '<td><button class="deleteBtn btn btn-danger" data-target="'+value.id+'">Supprimer</button></td>';
      html += '<td><button class=" btn btn-secondary" data-toggle="modal" data-target="#exampleModal" >Modifier</button></td></tr>';
    })

    domAffichage.html(html)


  });
}
liste();
