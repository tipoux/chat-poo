// Empêche le chargement de la page en Ajax

$(function(){
    $("#bouton").click(function(){
        var messageAjax = $("#idmessage").val();
        $.ajax({
            method: "post",
            url: "formChat.php",
            data: { message: messageAjax }
        })
        $("#idmessage").val("");
    });
});

// Rafraichi les messages du chat toutes les 1 secondes

//function playlist(){
//
//$("#box").load("affichage.php");
//
//$("#utilisateur").load("user.php");
//}
//
//setInterval('playlist()', 1000);

