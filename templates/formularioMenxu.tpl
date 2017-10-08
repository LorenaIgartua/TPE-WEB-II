<div class="formulario_rest">
{if !empty($plato) }
    tendria que cargar :{$plato[0]['id_plato']}{$plato[0]['nombre']}
{/if}
<!-- echo  {$plato[0][id_plato]} -->


        <form id= "formulario" class="form-horizontal" method="post"

        {if empty($plato) }
            action="agregar"
        {else}
            action="actualizar"
        {/if}
            >


          <div class="form-group">
            <select class="form-control" name="id_menu" id="tipo_plato" >
              {foreach from=$tipo item=nombre_menu}
              <option
              {if !empty($plato) }
                  {if {$plato[0]['id_menu']}=={$nombre_menu['id_menu']} }
                   selected
                  {/if}
              {/if}


               value="{$nombre_menu['id_menu']}" >{$nombre_menu['nombre']} </option>
              {/foreach}
            </select>
          </div>


          </div>
          <div class="form-group">
            <label for="exampleInputName2" class="col-sm-2 control-label">Plato</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="plato"

              {if !empty($plato) }
                  value="{$plato[0]['nombre']}"
              {/if}



              >
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputName2" class="col-sm-2 control-label">Ingredientes</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingredientes"

              {if !empty($plato) }
                  value="{$plato[0]['descripcion']}"
              {/if}


              >
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputName2" class="col-sm-2 control-label">Precio</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="valor" name="valor" placeholder="precio"

              {if !empty($plato) }
                  value="{$plato[0]['valor']}"
              {/if}


              >
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default"  id = "sube_informacion">

                {if empty($plato) }
                    Agregar
                {else}
                    Modificar
                {/if}


              </button>


              <!-- <button type="submit" class="btn btn-default" onclick="cargar_base()" id = "menu_base">Menu Base</button> -->
            </div>
          </div>
        </form>


</div>
