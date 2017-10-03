//--------------------- Render ------------------------------
//-----------------------------------------------------------

$("#nav_menu").on("click", function()
{
  $.ajax({
    url:"http://localhost/proyectos/TPE%20WEB%20II/",
    method:"GET",
    dataType:"html",
    success: mostrar_render,
    error: handle_error
    });
  });


/* $(document).ready(function(){
  cargarSeccion("http://localhost/proyectos/TPE%20WEB%20II/");
//  document.location.href ="#header";
});

  $ ("#nav_logo").on("click", function (evento) {
	evento.preventDefault();
  let  dir_nueva = $(this).attr("inicio.html")
  cargarSeccion("inicio.html");
});

$("#nav_inicio").on("click", function() {
  cargarSeccion("inicio.html")
  });

$("#nav_menu").on("click", function() {
  cargarSeccion("menu.html")
  });

$("#nav_contacto").on("click", function() {
  cargarSeccion("contacto.html")
  });


$("#nav_nosotros").on("click", function() {
    cargarSeccion("nosotros.html")
});

function handle_error ( ) {
  $("#render").html("<h1>Error - Request Failed!</h1>");
};*/

function mostrar_render (data){
  $("#render").html(data);
};

function cargarSeccion(seccion) {
    $.ajax({
      url: seccion,
      method:"GET",
      dataType:"html",
      success: function(data) {
        mostrar_render(data);
       if (seccion = "menu.html")
          iniciarEventosMenu()
      },
      error: handle_error
    });
}

//--------------------- Render ------------------------------
//--------------------- Rest ---------------------------------
/*const GRUPOWEB = 51;

function cargar_base() {
    event.preventDefault();
    let grupo = GRUPOWEB;
    let tipo_comida = $("#tipo_plato").val();
    let nombre_plato = $("#plato").val();
    let descripcion = $("#desc").val();
    let precio_plato = $("#precio").val();
    let informacion = {
        tipo_plato: tipo_comida,
        plato: nombre_plato,
        ingredientes: descripcion,
        precio: precio_plato
    };

    let cargar = [];
    cargar[0] = {
        tipo_plato: "tabla_ensaladas",
        plato: "Rucula y Parmesano",
        ingredientes: "rucula, mezclada con queso parmesano, tomates cherrys, mozzarella y oregano.",
        precio: "100"
    };
    cargar[1] = {
        tipo_plato: "tabla_ensaladas",
        plato: "Ensalada Cesar",
        ingredientes: "Lechuga Romana, croutons, hebras de queso parmesano y aderezo Cesar casero.",
        precio: "100"
    };
    cargar[2] = {
        tipo_plato: "tabla_risottos",
        plato: "Risotto de Pollo",
        ingredientes: "RISOTTO con pollo panceta, espÃ¡rragos y queso parmeggiano",
        precio: "250"
    };
    cargar[3] = {
        tipo_plato: "tabla_risottos",
        plato: "Risotto de mar",
        ingredientes: "RISOTTO con mejillones, calamares, gambas y queso parmeggiano.",
        precio: "250"
    };
    cargar[4] = {
        tipo_plato: "tabla_otros_platos",
        plato: "PASTA CON MARISCOS",
        ingredientes: "Espaguetis con almejas, mejillones, calamares y camarones.",
        precio: "250"
    };
    cargar[5] = {
        tipo_plato: "tabla_otros_platos",
        plato: "BRACIOLE DE TERNERA",
        ingredientes: "Carne de ternera, tocino, zanahorias, limón, acompañado de pure de papas.",
        precio: "250"
    };
    cargar[6] = {
        tipo_plato: "tabla_postres",
        plato: "Tiramisu",
        ingredientes: "Tradicional con frutos rojos",
        precio: "150"
    };
    cargar[7] = {
        tipo_plato: "tabla_postres",
        plato: "Brownies con helado",
        ingredientes: "Budin de chocolate con helado de americana",
        precio: "150"
    };

    let info = {
        group: grupo,
        thing: informacion
    };

    for (let i = 0; i < 8; i++) {
        info.thing = cargar[i];
        if (grupo && informacion) {
            $.ajax({
                method: "POST",
                dataType: 'JSON',
                data: JSON.stringify(info),
                contentType: "application/json; charset=utf-8",
                url: "https://web-unicen.herokuapp.com/api/thing",
                success: function(resultData) {
                    getInformationByGroup();
                },
                error: function(jqxml, status, errorThrown) {
                    console.log(errorThrown);
                }
            });
        }
    }
}

function deleteInformationById(id) {
    event.preventDefault();
      $.ajax({
        method: "DELETE",
        dataType: 'JSON',
        url: "https://web-unicen.herokuapp.com/api/thing/" + id,
        success: function(resultData) {
            getInformationByGroup();
        },
        error: function(jqxml, status, errorThrown) {
            console.log(errorThrown);
        }
    });
}

  function iniciarEventosMenu() {
    getInformationByGroup();
}

function limpiar_form(){
  document.getElementById('tipo_plato').value="tabla_ensaladas";
  document.getElementById('plato').value="";
  document.getElementById('desc').value = "";
  document.getElementById('precio').value = "" ;
  document.getElementById('modificar_item').name = "" ;
}

function actualizar_Item(id){
  event.preventDefault();
  $.ajax({
     method: "GET",
     dataType: 'JSON',
     url: "https://web-unicen.herokuapp.com/api/thing/" + id,
     success: function(resultData){
       document.getElementById('tipo_plato').value = resultData.information['thing'].tipo_plato ;
       document.getElementById('plato').value = resultData.information['thing'].plato ;
       document.getElementById('desc').value = resultData.information['thing'].ingredientes ;
       document.getElementById('precio').value = resultData.information['thing'].precio ;
      document.getElementById("modificar_item").name = id;
     },
     error:function(jqxml, status, errorThrown){
       console.log(errorThrown);
     }
  });
}

function editInformationById () {
  let id = document.getElementById("modificar_item").name;
  let grupo = GRUPOWEB;
  let tipo_comida = $("#tipo_plato").val();
  let nombre_plato = $("#plato").val();
  let descripcion = $("#desc").val();
  let precio_plato = $("#precio").val();
  let informacion = {
      tipo_plato: tipo_comida,
      plato: nombre_plato,
      ingredientes: descripcion,
      precio: precio_plato
  };
  let info = {
      group: grupo,
      thing: informacion
  };
      $.ajax({
        method: "PUT",
        dataType: 'JSON',
        data: JSON.stringify(info),
        contentType: "application/json; charset=utf-8",
        url: "https://web-unicen.herokuapp.com/api/thing/" + id,
        success: function(resultData) {
            getInformationByGroup();
            limpiar_form();
        },
        error: function(jqxml, status, errorThrown) {
            console.log(errorThrown);
        }
    });
}

function crear_boton_editar(name, celda){
       let boton = document.createElement("button");
        boton.name = name;
        boton.innerHTML = "Editar Item";
        celda.appendChild(boton);
        boton.addEventListener('click', function(){
            actualizar_Item(name);
        });
}

function crear_boton_borrar(name, celda){
       let boton = document.createElement("button");
        boton.name = name;
        boton.innerHTML = "Borrar Item";
        celda.appendChild(boton);
        boton.addEventListener('click', function(){
            deleteInformationById(name);
        });
}

function cargar_tabla(nombre_tabla, resultData){
   let table = document.getElementById(nombre_tabla);
   table.innerHTML ="";
   for (let i = 0; i < resultData.information.length; i++) {
      if (resultData.information[i]['thing'].tipo_plato == nombre_tabla) {
          let row = table.insertRow(0);
          let cell1 = row.insertCell(0);
          let cell2 = row.insertCell(1);
          let cell3 = row.insertCell(2);
          let cell4 = row.insertCell(3);
          cell1.classList.add('celda_plato');
          cell2.classList.add('celda_precio');
          cell3.classList.add('celda_boton');
          cell4.classList.add('celda_boton');
          cell1.innerHTML = "<h4>" + resultData.information[i]['thing'].plato + "</h4> <br> <p>" + resultData.information[i]['thing'].ingredientes + " </p></td>"
          cell2.innerHTML = resultData.information[i]['thing'].precio + " Pesos";
          crear_boton_borrar(resultData.information[i]['_id'],cell3);
          crear_boton_editar(resultData.information[i]['_id'],cell4);
      }
   }
}

function getInformationByGroup() {
    let grupo = GRUPOWEB;
    $.ajax({
        method: "GET",
        dataType: 'JSON',
        url: "https://web-unicen.herokuapp.com/api/thing/group/" + grupo,
        success: function(resultData) {
          cargar_tabla("tabla_ensaladas", resultData);
          cargar_tabla("tabla_risottos", resultData);
          cargar_tabla("tabla_otros_platos", resultData);
          cargar_tabla("tabla_postres", resultData);
        },
        error: function(jqxml, status, errorThrown) {
            console.log(errorThrown);
        }
    });
}

function guardarInformacion() {
    let grupo = GRUPOWEB;
    let tipo_comida = $("#tipo_plato").val();
    let nombre_plato = $("#plato").val();
    let descripcion = $("#desc").val();
    let precio_plato = $("#precio").val();
    let informacion = {
        tipo_plato: tipo_comida,
        plato: nombre_plato,
        ingredientes: descripcion,
        precio: precio_plato
    };
    let info = {
        group: grupo,
        thing: informacion
    };

    if (grupo && informacion) {
        $.ajax({
            method: "POST",
            dataType: 'JSON',
            data: JSON.stringify(info),
            contentType: "application/json; charset=utf-8",
            url: "https://web-unicen.herokuapp.com/api/thing",
            success: function(resultData) {
                  getInformationByGroup();
                  limpiar_form();
            },
            error: function(jqxml, status, errorThrown) {
                console.log(errorThrown);
            }
        });
    }
}*/
