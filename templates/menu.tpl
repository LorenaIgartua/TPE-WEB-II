

<div class="cuerpo" id= "numero_de_grupo">

  <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <h1>menú</h1>

    {foreach from=$tipo item=nombre_menu}
        <h3>{$nombre_menu['tipo_nombre']}</h3>
        <table class="menu" id = "{$nombre_menu['tipo_nombre']}" >
          {foreach from=$menu item=plato}
            {if ($plato['menu_id_menu']==$nombre_menu['tipo_id_menu'])}
              <tr>
                  <td id="plato" class = "celda_plato" >
                    <h4>{$plato['plato_nombre']}</h4>
              <br>
                    {$plato['plato_descripcion']}
              </td>
              <td id="precio" class = "celda_precio" >{$plato['plato_valor']}</td>
              </tr>
            {/if}
          {/foreach}
        </table>
  {/foreach}

  </div>
  <div class="formulario_rest">

          <form id= "formulario_menu" class="form-horizontal">

            <div class="form-group">
              <select class="form-control" id="tipo_plato">
                <option value="tabla_ensaladas">Ensaladas</option>
                <option value="tabla_risottos">Risottos</option>
                <option value="tabla_otros_platos">Otro Platos</option>
                <option value="tabla_postres">Postres</option>
              </select>
            </div>


            </div>
            <div class="form-group">
              <label for="exampleInputName2" class="col-sm-2 control-label">Plato</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="plato" placeholder="plato">
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputName2" class="col-sm-2 control-label">Ingredientes</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="desc" placeholder="Ingredientes">
              </div>
            </div>

            <div class="form-group">
              <label for="exampleInputName2" class="col-sm-2 control-label">Precio</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="precio" placeholder="precio">
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" onclick="guardarInformacion()"  id = "sube_informacion">Subir Item</button>
                <button type="submit" id="modificar_item" onclick="editInformationById()" class="btn btn-default" >Modificar Item</button>
                <button type="submit" class="btn btn-default" onclick="cargar_base()" id = "menu_base">Menu Base</button>
              </div>
            </div>
          </form>


  </div>

</div>
