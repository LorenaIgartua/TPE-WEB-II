<div class="cuerpo">
<div class="cuerpo" id= "numero_de_grupo">

  <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">

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


  </div>


  <div class="menu col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <h1>menú</h1>

    {foreach from=$tipo item=nombre_menu}
        <h3>{$nombre_menu['nombre']}</h3>
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

              </tr>
            {/if}
          {/foreach}
        </table>
  {/foreach}



  </div>






<script src="js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src = "js/risotto.js"></script>
    <script type="text/javascript" src = "js/menu.js"></script>
</div>
</div>
