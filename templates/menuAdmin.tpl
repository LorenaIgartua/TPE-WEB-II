<div class="cuerpo">


<div class="cuerpo" id= "numero_de_grupo">
  <a href="cerrarSesion" id= "cerrarSesion" ><button  class="btn btn-warning btn-lg" >Cerrar Sesion </button></a>
</div>
  <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form id= "filtroAdm" class="form-horizontal" method="post" >

      <select class="form-inline" name="id_menu" id="tipo_plato">
        <option value="">todos</option>
          {foreach from=$tipo item=nombre_menu}
          <option value="{$nombre_menu['id_menu']}">{$nombre_menu['nombre']}</option>
          {/foreach}
          </select>
      <label for="exampleInputName2" class="form-inline">Contenga</label>
      <input type="text" name="palabra" class="form-inline" id="palabra" placeholder="contenga..">
      <label for="exampleInputName2" class="form-inline">Precio</label>
      <input type="text" name="valor"class="form-inline" id="precio" placeholder="precio">
       <button type="submit"  class="btn btn-default" >Filtrar...</button>

    </form>

  </div>






  <div class="formulario_rest">
    {if empty($plato) }

            <form id= "formulario" class="form-horizontal" method="post" >
                <select class="form-control" name="id_menu" id="tipo_plato" >
                {foreach from=$tipo item=nombre_menu}
                <option value="{$nombre_menu['id_menu']}">{$nombre_menu['nombre']}</option>
                {/foreach}
              </select>
              <label for="exampleInputName2" class="col-sm-2 control-label">Plato</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="plato">
              <label for="exampleInputName2" class="col-sm-2 control-label">Ingredientes</label>
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingredientes">
              <label for="exampleInputName2" class="col-sm-2 control-label">Precio</label>
              <input type="text" class="form-control" id="valor" name="valor" placeholder="precio">
              <button type="submit" class="btn btn-default" >Agregar</button>
            </form>
        {else}

        <form id= "actualizar" class="form-horizontal" method="post" >
            <input type="hidden" name="id_plato" value="{$plato[0]['id_plato']}">
            <select class="form-control" name="id_menu" id="tipo_plato" >
            {foreach from=$tipo item=nombre_menu}
            <option value="{$nombre_menu['id_menu']}"
              {if ( {$nombre_menu['id_menu']} == {$plato[0]['id_menu']})}
                  selected
              {/if}
            >{$nombre_menu['nombre']}</option>
            {/foreach}
          </select>
          <label for="exampleInputName2" class="col-sm-2 control-label">Plato</label>
          <input type="text" class="form-control" id="nombre" name="nombre" placeholder="plato" value="{$plato[0]['nombre']}">
          <label for="exampleInputName2" class="col-sm-2 control-label">Ingredientes</label>
          <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingredientes" value="{$plato[0]['descripcion']}">
          <label for="exampleInputName2" class="col-sm-2 control-label">Precio</label>
          <input type="text" class="form-control" id="valor" name="valor" placeholder="precio" value="{$plato[0]['valor']}">
          <button type="submit" class="btn btn-default" >Modificar</button>
          <!-- <button type="nada" class="btn btn-default" >cancelar</button> -->
        </form>



    {/if}




  </div>


  <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">
    {if !empty($error) }
      <div class="alert alert-danger" role="alert">{$error}</div>
    {/if}
    <h1>menú</h1>

    {foreach from=$tipo item=nombre_menu}

      <h3>{$nombre_menu['nombre']}
       <button  class="eliminarMenu btn btn-warning btn-xs " name="{$nombre_menu['id_menu']}" ><span class="glyphicon glyphicon-trash"></span></button>
       <button  class="modificarMenu btn btn-warning btn-xs" name="{$nombre_menu['id_menu']}"><span class="glyphicon glyphicon-pencil"></span></button>
      </h3>

        <table class="menu" id = "{$nombre_menu['tipo_nombre']}" >
          {foreach from=$menu item=platom}
            {if ($platom['id_menu']==$nombre_menu['id_menu'])}
              <tr>
              <td id="plato" class = "celda_plato" >
                    <h4>{$platom['nombre']}</h4>
              <br>
                    {$platom['descripcion']}
              </td>
              <td id="precio" class = "celda_precio" >{$platom['valor']}</td>

            </td>
            <td class = "celda_boton" >
               <button  class="eliminarPlato btn btn-warning btn-lg" name="{$platom['id_plato']}" ><span class="glyphicon glyphicon-trash"></span></button>
            </td>
            <td>
              <button  class="modificarPlato btn btn-warning btn-lg" name="{$platom['id_plato']}" ><span class="glyphicon glyphicon-pencil"></span></button>
            </td>
              </tr>
            {/if}
          {/foreach}
        </table>
        {/foreach}



  </div>






<!-- <script src="js/jquery-3.2.1.min.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="js/bootstrap.min.js"></script> -->
 <!-- <script type="text/javascript" src = "js/risotto.js"></script> -->
    <!-- <script type="text/javascript" src = "js/menu.js"></script> -->
</div>
</div>
