<div class="cuerpo">

    <h1>menú</h1>
    
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <form id= "filtro" class="form-horizontal" method="post" action="menu">
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

  <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">

    {foreach from=$tipo item=nombre_menu}
        <h3>{$nombre_menu['nombre']}</h3>
        <table class="menu" id = "{$nombre_menu['tipo_nombre']}" >
          {foreach from=$menu item=platom}
            {if ($platom['id_menu']==$nombre_menu['id_menu'])}
              <tr>
                <td>
                    <button type="button" class="btn btn-warning btn-xs" data-toggle="modal" data-target="#myModal-{$platom['id_plato']}">VER</button>

                    <div class="modal fade" id="myModal-{$platom['id_plato']}" role="dialog">
                      <div class="modal-dialog">

                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">{$nombre_menu['nombre']} </h4>  <h3> {$platom['nombre']}</h3>
                          </div>
                          <div class="modal-body">
                            <p>{$platom['descripcion']} </p>
                            <p> $ {$platom['valor']}</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
                          </div>
                        </div>

                      </div>
                    </div>
                </td>
                <td id="plato" class = "celda_plato" >
                    <h4>{$platom['nombre']}</h4>

                </td>
                <td id="precio" class = "celda_precio" >{$platom['valor']}</td>
            </tr>
            {/if}
          {/foreach}
        </table>
  {/foreach}
  </div>

</div>
