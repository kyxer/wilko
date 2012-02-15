$(document).ready(function(){

    //Para envio de informacion y autenticacion
    $("#formAutenticacion").live("submit", function(event){
        event.preventDefault();
        var usuario = $("#usuario").val();
        var clave = $("#clave").val();
        var usuarioTrim = $.trim(usuario);
        var claveTrim = $.trim(clave);

        if(claveTrim==""){
            $("#spanClave").html("No puede ser vacio");
            $("#divClave").addClass("warning");
            $("#clave").focus();
        }
        
        if(usuarioTrim==""){
            $("#spanUsuario").html("No puede ser vacio");
            $("#divUsuario").addClass("warning");
            $("#usuario").focus();
        }

        if(usuarioTrim!="" && claveTrim!=""){
            var action = $("#formAutenticacion").attr("action");
            
            $.ajax({
                //FIXME cambiar url por la de produccion
                url: "http://wilco/frontend_dev.php/"+action,
                dataType: json,
                data: { "usuario" : usuarioTrim, "clave":clave },
                success: function(data){
                    alert("exito");
                },
                error: function(data){
                    aler("error");
                }
            });
        }

        

    });

    


});