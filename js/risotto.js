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

  $ ("#nav_logo").on ("click", function (evento) {
    cargarSeccion(evento,"home");
});

$("#nav_inicio").on ("click", function(evento) {
  cargarSeccion(evento,"home")
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

function cargarSeccion(evento,seccion) {
  evento.preventDefault();
    $.ajax({
      url: document.location.href+seccion,
      success: function(data) {
        mostrar_render(data);
      }
    });
}
