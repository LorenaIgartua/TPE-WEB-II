{include file="header.tpl"}

<div id="render">


<div class="cuerpo">

<div class="formulario_rest">
{if !empty($plato) }
    tendria que cargar :{$plato[0]['id_plato']}{$plato[0]['nombre']}
{/if}
<!-- echo  {$plato[0][id_plato]} -->


        <form id= "formulario_menu" class="form-horizontal" method="post" action="agregar">


          <div class="form-group">
            <select class="form-control" name="id_menu" id="tipo_plato">
              {foreach from=$tipo item=nombre_menu}
              <option value="{$nombre_menu['id_menu']}" >{$nombre_menu['nombre']} </option>
              {/foreach}
            </select>
          </div>


          </div>
          <div class="form-group">
            <label for="exampleInputName2" class="col-sm-2 control-label">Plato</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="plato">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputName2" class="col-sm-2 control-label">Ingredientes</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingredientes">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputName2" class="col-sm-2 control-label">Precio</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="valor" name="valor" placeholder="precio">
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default"  id = "sube_informacion">Agregar</button>
              <!-- <button type="submit" id="modificar_item" onclick="editInformationById()" class="btn btn-default" >Modificar Item</button> -->
              <!-- <button type="submit" class="btn btn-default" onclick="cargar_base()" id = "menu_base">Menu Base</button> -->
            </div>
          </div>
        </form>


</div>

</div>
</div>

{include file="footer.tpl"}
