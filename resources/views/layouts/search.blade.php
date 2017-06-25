<form class="navbar-form navbar-right" role="search">  
  <div class="form-group">
    <input type="text" name="search" value="{{ Request::get('search') }}" class="form-control" placeholder="Search">
  </div>
  <button type="submit" class="btn btn-default">Buscar</button>
</form>