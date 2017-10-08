//--------------------- Render ------------------------------
//-----------------------------------------------------------
$(document).ready(function(){

  // $.ajax({
  //   url: document.location.href+"home",
  //   success: function(data) {
  //     mostrar_render(data);
  //
  //   }
  // });
});

  $ ("#nav_logo").on ("click", function (event) {
    cargarSeccion(event,"home")
});

$("#nav_inicio").on ("click", function(event) {
  cargarSeccion(event,"home");
  });

$("#nav_menu").on("click", function(event) {

  cargarSeccion(event,"menu")
  });

$("#nav_contacto").on("click", function(event) {
  cargarSeccion(event,"contacto")
  });

$("#nav_nosotros").on("click", function(event) {
    cargarSeccion(event,"nosotros")
});

$("#menuAdmin").on("click", function(event) {
    cargarSeccion(event,"menuAdmin")
});

function mostrar_render (data){
    $("#render").html(data);
};


function cargarSeccion(event,seccion) {
  event.preventDefault();
    $.ajax({
      url: document.location.href+seccion,
      success: function(data) {
        mostrar_render(data);
      }
    });
};

function renderPost(destino,serializedData) {
   $.post(document.location.href+destino, serializedData,
          function(response) {
          mostrar_render(response);
   });
      };

$(".eliminar").on("submit", function (event) {
    event.preventDefault();
    renderPost("eliminar", $(this).serialize());
});


  $("#login").on("submit",function(event) {
      event.preventDefault();
      renderPost("verificarUsuario", $(this).serialize());
});


  $(".modificar").on("submit",function(event) {
      event.preventDefault();
      renderPost("modificar", $(this).serialize());
});

  $("#actualizar").on("submit",function(event) {
      event.preventDefault();
      renderPost("actualizar", $(this).serialize());
});

  $("#formulario").on("submit",function(event) {
    event.preventDefault();
    renderPost("agregar", $(this).serialize());
});

$("#filtro").on("submit",function(event) {
    event.preventDefault();
    renderPost("menu", $(this).serialize());
 });

   $("#filtroAdm").on("submit",function(event) {
    event.preventDefault();
    renderPost("menuAdmin", $(this).serialize());
});
