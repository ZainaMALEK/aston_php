const btn$ = $('#btn');
const deleteBtn$ = $('#deleteBtn');

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


deleteBtn$.click(function()
{
  console.log ('ca supprime');
  $.post('sup.php',
    

     function(data)
    {
    alert(data);
    });
})
