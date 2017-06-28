<div  id="accordion_menu" class="panel-group" role="tablist" aria-multiselectable="true">

  <div class="panel panel-default acordion-item">
    <div class="panel-heading" role="tab" id="menu_usuarios">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_usuarios" aria-expanded="true" aria-controls="collapse_usuarios">
          Usuarios
        </a>
      </h4>
    </div>

    <div id="collapse_usuarios" 
      class="{{ Welcome::collapseActive(array('users*')) }}" 
      role="tabpanel" 
      aria-labelledby="menu_usuarios">
      <div class="panel-body">
        <ul class="list-group">
           <li class="list-group-item {{ Welcome::linkActive('users*') }}">
            <a href="{{ route('users.index') }}">Usuarios</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="menu_bancos">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_bancos" aria-expanded="false" aria-controls="collapse_bancos">
          Bancos        
        </a>
      </h4>
    </div>

    <div id="collapse_bancos" 
      class="{{ Welcome::collapseActive(array('bancos*','cuentas*')) }}" 
      role="tabpanel" 
      aria-labelledby="menu_bancos">
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item {{ Welcome::linkActive('bancos*') }}">
            <a href="{{ route('bancos.index') }}">Bancos</a>
          </li>
          <li class="list-group-item {{ Welcome::linkActive('cuentas*') }}">
            <a href="{{ route('cuentas.index') }}">Cuentas</a>
          </li>
        <!--  <li class="list-group-item"><a>Tipo Cambio</a></li> -->
        </ul>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Negocios
        </a>
      </h4>
    </div>
    <div id="collapseThree"
      class="{{ Welcome::collapseActive(array('negocios*','movimientos*')) }}" 
      role="tabpanel" 
      aria-labelledby="headingThree">
      <div class="panel-body">
        <ul class="list-group">
          <li class="list-group-item {{ Welcome::linkActive('negocios*') }}">
            <a href="{{ route('negocios.index') }}">Negocios o socios</a>
          </li>
          <li class="list-group-item {{ Welcome::linkActive('movimientos*') }}">
            <a href="{{ route('movimientos.index') }}">Movimientos</a>
          </li>
          <!-- <li class="list-group-item"><a>Abonos</a></li>
          <li class="list-group-item"><a>Cierres</a></li>  -->
        </ul>
      </div>
    </div>
  </div>
</div> 