<form class="navbar-form navbar-right" role="search" style="margin-top: 0px; padding-right: 0px;">  
  <div class="form-group">
    <input type="text" name="descripcion" 
      value="{{ Request::get('descripcion') }}" class="form-control" placeholder="Buscar">
    <input type="hidden" name="ordenar" value="fecha" >
    <input type="hidden" name="ordenarTipo" value="asc" >
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>
