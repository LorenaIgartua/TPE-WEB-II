<form class="actualizarPlato form-horizontal" method="post" >
   <input type="hidden" name="id_plato" value="{$plato[0]['id_plato']}">
   <select class="form-control" name="id_menu" id="tipo_plato" >
   {foreach from=$tipos item=tipo}
   <option value="{$tipo['id_menu']}"
   {if ( {$tipo['id_menu']} == {$plato[0]['id_menu']})}
   selected
   {/if}
   >{$tipo['nombre']}</option>
   {/foreach}
   </select>
   <label for="exampleInputName2" class=" control-label">Plato</label>
   <input type="text" class="form-control" id="nombre" name="nombre" placeholder="plato" value="{$plato[0]['nombre']}">
   <label for="exampleInputName2" class=" control-label">Ingredientes</label>
   <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Ingredientes" value="{$plato[0]['descripcion']}">
   <label for="exampleInputName2" class=" control-label">Precio</label>
   <input type="text" class="form-control" id="valor" name="valor" placeholder="precio" value="{$plato[0]['valor']}">
   <button type="submit" class="btn btn-default" >Modificar</button>
</form>
