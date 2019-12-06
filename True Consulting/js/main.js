//Señores, esto solo sirve para desplazar el label que esta en el input hacia abajo cuando escriban
$(document).ready(function(){
    $(".contenedorFormularios").find("input, textarea").on("keyup blur focus", function(e){
        var $this= $(this),
        label= $this.prev("label");

        if (e.type=== "keyup"){
            if ($this.val()=== ""){
                label.removeClass("active highlight");
            } else {
                label.addClass("active highlight");
            }
        } else if(e.type==="blur"){
            if($this.val()===""){
                label.removeClass("active highlight");
            } else{
                label.removeClass("highlight");
            }
        } else if(e.type==="focus"){
            if ($this.val()=== ""){
                label.removeClass("highlight");
            } else if ($this.val()=== ""){
                label.addClass("highlight");
            }
        }
    })
});

//Esto lo usamos para evitar que un wey venga y nos joda el login

function validarCampos(){
    var usuario, pass;
    
    usuario=document.getElementById("usuario").value;
    pass=document.getElementById("pass").value;
    
    if (usuario===""||pass===""){
        alert("Por favor, completar todos los campos");
        return false;
    }
    };