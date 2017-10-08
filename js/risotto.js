//--------------------- Render ------------------------------
//-----------------------------------------------------------
$(document).ready(function(){
  $.ajax({
    url: document.location.href+"home",
    success: function(data) {
      mostrar_render(data);

    }
  });
});

$ ("#login").on ("click", function (evento) {
  cargarSeccion(evento,"login");
});

  $ ("#nav_logo").on ("click", function (evento) {
    cargarSeccion(evento,"home")
});

$("#nav_inicio").on ("click", function(evento) {
  cargarSeccion(evento,"home");
  });

$("#nav_menu").on("click", function(evento) {

  cargarSeccion(evento,"menu")
  });

$("#nav_contacto").on("click", function(evento) {
  cargarSeccion(evento,"contacto")
  });


$("#nav_nosotros").on("click", function(evento) {
    cargarSeccion(evento,"nosotros")
});

function mostrar_render (data){
    $("#render").html(data);
};
//





function cargarSeccion(evento,seccion) {
  evento.preventDefault();
    $.ajax({
      url: document.location.href+seccion,
      success: function(data) {
        mostrar_render(data);
      }
    });
};

$(".eliminar").on("submit",function(event) {
    event.preventDefault();

let serializedData = $(this).serialize();
   alert(serializedData);

   alert(document.location.href+"eliminar"+serializedData);
   $.post(document.location.href+"eliminar", serializedData,
                function(response) {
                    //  alert("Response: "+response);
                  $("#render").html(response);

   });
  });

  $(".modificar").on("submit",function(event) {
      event.preventDefault();

  let serializedData = $(this).serialize();
     alert(serializedData);

     alert(document.location.href+"modificar"+serializedData);
     $.post(document.location.href+"modificar", serializedData,
                  function(response) {
                      //  alert("Response: "+response);
                    $("#render").html(response);

     });
    });


  $("#formulario").on("submit",function(event) {
   event.preventDefault();
alert("hola");
  let serializedData = $(this).serialize();
      alert(serializedData);
      alert(document.location.href+"menu"+serializedData);
     $.post(document.location.href+"menu", serializedData,
                  function(response) {
                       alert("Response: "+response);
                    $("#render").html(response);

     });
 });

$("#filtro").on("submit",function(event) {
 event.preventDefault();

let serializedData = $(this).serialize();
    alert(serializedData);
    alert(document.location.href+"menu"+serializedData);
   $.post(document.location.href+"menu", serializedData,
                function(response) {
                     alert("Response: "+response);
                  $("#render").html(response);

   });
  });
