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

$(".eliminar").on("submit",function(event) {
    event.preventDefault();
    let serializedData = $(this).serialize();
   $.post(document.location.href+"eliminar", serializedData,
                function(response) {
                  $("#render").html(response);

   });
  });

  $("#login").on("submit",function(event) {
      event.preventDefault();
      let serializedData = $(this).serialize();
      $.post(document.location.href+"verificarUsuario", serializedData,
        function(response) {
          $("#render").html(response);
        });
  });


  $(".modificar").on("submit",function(event) {
      event.preventDefault();
      let serializedData = $(this).serialize();
      $.post(document.location.href+"modificar", serializedData,
        function(response) {
          $("#render").html(response);
        });
  });

  $("#actualizar").on("submit",function(event) {
      event.preventDefault();
      let serializedData = $(this).serialize();
      $.post(document.location.href+"actualizar", serializedData,
        function(response) {
          $("#render").html(response);
        });
  });

  $("#formulario").on("submit",function(event) {
    event.preventDefault();
    let serializedData = $(this).serialize();
    $.post(document.location.href+"agregar", serializedData,
        function(response) {
          $("#render").html(response);
        });
    });

$("#filtro").on("submit",function(event) {
    event.preventDefault();
    let serializedData = $(this).serialize();
    $.post(document.location.href+"menu", serializedData,
                function(response) {
                $("#render").html(response);
          });
     });

   $("#filtroAdm").on("submit",function(event) {
    event.preventDefault();
    let serializedData = $(this).serialize();
      $.post(document.location.href+"menuAdmin", serializedData,
                   function(response) {
                       $("#render").html(response);
      });
});
