
$(document).ready(function(){
    const registrBtn = $('#registrBtn');
    const connectBtn = $('#connectBtn');
    const inscriptionSession = $('#inscriptionSession');
    const connexionSession = $('#connexionSession');
    
 //Inscription Ajax   
    registrBtn.on('click', function() {
        connexionSession.toggle();
        inscriptionSession.toggle();
        $.post('inscription.php',
        {
            pseudo: $('#pseudo').val(),
            email: $('#email').val(),
            mdp :$('#mdp').val() ,
            mdp2: $('#mdp2').val(),
            mage: $('#age').val()
        }, function(data) {
                
        });
    });

    connectBtn.on('click', function() {
        //inscriptionSession.hide(); 
        //connexionSession.show();
        connexionSession.toggle();
        inscriptionSession.toggle();
    });

      
      
})






