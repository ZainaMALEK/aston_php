
$(document).ready(function(){
    const registrBtn = $('#registrBtn');
    const connectBtn = $('#connectBtn');
    const inscriptionSession = $('#inscriptionSession');
    const connexionSession = $('#connexionSession');
    const validregistr = $('#validregistr');
    const displayError = $('#displayError');
    //const displayErrorConnect = $('#displayErrorConnect');
    const validConnexion = $('#validConnexion');
    
    //onglet inscription 
    registrBtn.on('click', function() {
         
        connexionSession.hide();
        inscriptionSession.show();
        
    });
    //onglet connexion
    connectBtn.on('click', function() {
        inscriptionSession.hide(); 
        connexionSession.show();
        
    });
    //validation formulaire d'inscription
    validregistr.on('click', function() {
        displayError.text('');
        $.post('inscription.php',
        {
            pseudo: $('#pseudo').val(),
            email: $('#email').val(),
            mdp :$('#mdp').val() ,
            mdp2: $('#mdp2').val(),
            age: $('#age').val()
        }, function(data) {
             console.log(data); 
             displayError.append(data);

        });
        
    });


    //validation formulaire de connexion
    validConnexion.on('click', function() {
        
        displayError.html('');
        $.post('connexion.php',
        {
            emailConnect: $('#emailConnect').val(),
            mdpConnect :$('#mdpConnect').val() 
            
        }, function(data) {
             console.log(data); 
             displayError.append(data);

        });
        
    });

    //Validation du formulaire d\'inscription d\'une autre manière
    //on remets les balises form et on leur donne l'id #inscForm
    // 
    /*$('#inscForm').submit(function(event){
            $('#erreur').empty();
            //Empeche la recharge de la page
            event.preventDefault();
            let pwd = $('#pwd').val();
            let confirmPwd = $('#confirmPwd').val();
            if(pwd == confirmPwd)
            {
                //serialize recupere tous les champs du form et les mets en json
                console.log( $( this ).serialize() );
                $.ajax({
                    type: 'post',
                    url: 'phpInscription.php',
                    data: $( this ).serialize(),
                    timeout: 3000,
                    success: function(data){
                        console.log(data);
                        if(data = 'ok')
                        {
                            $('#erreur').html('Bien enregistre');
                        }
                    },
                    error: function(){
                        $('#erreur').html('Cette requête AJAX n\'a pas abouti');
                    }
                });

            }
            else
            {
                $('#erreur').empty();
                $('#erreur').append('MDP pas egaux');
            }
        });
      */
      
})






