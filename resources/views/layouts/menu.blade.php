<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">

      <li class="{{ Welcome::collapseActive(array('users*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Usuarios<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a 
              href="{{ route('users.index') }}" 
              class="{{ Welcome::linkActive('users*') }}">
                Usuarios
            </a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li>

      <li class="{{ Welcome::collapseActive(array('bancos*','cuentas*','abonos*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Bancos <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">

          <li>
            <a
              href="{{ route('bancos.index') }}"
              class="{{ Welcome::linkActive('bancos*') }}">
              Bancos
            </a>
          </li>

          <li>
            <a 
              href="{{ route('cuentas.index') }}"
              class="{{ Welcome::linkActive('cuentas*') }}">
                Cuentas
            </a>
          </li>

          <li>
            <a 
              href="{{ route('abonos.index') }}"
              class="{{ Welcome::linkActive('abonos*') }}">
                Abonos
            </a>
          </li>


        </ul>
        <!-- /.nav-second-level -->
      </li>

      <li class="{{ Welcome::collapseActive(array('negocios*','movimientos*','gastos*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Movimientos <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a
              href="{{ route('negocios.index') }}"
              class="{{ Welcome::linkActive('negocios*') }}">
                Negocios o socios
            </a>
          </li>
          <li>
            <a 
              href="{{ route('movimientos.index') }}" 
              class="{{ Welcome::linkActive('movimientos*') }}">
              Transferencias
            </a>
          </li>

          <li>
            <a 
              href="{{ route('gastos.index') }}" 
              class="{{ Welcome::linkActive('gastos*') }}">
              Gastos
            </a>
          </li>


        </ul>
        <!-- /.nav-second-level -->
      </li>

      <li class="{{ Welcome::collapseActive(array('reporte*')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Reporte <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a
              href="{{ route('reportegeneral') }}"
              class="{{ Welcome::linkActive('negocios*') }}">
                Reporte General
            </a>
          </li>
          <li>
            <a
              href="{{ route('reportecuenta') }}"
              class="{{ Welcome::linkActive('reportecuenta*') }}">
                Balance de Cuentas
            </a>
          </li>


          <li>
            <a
              href="{{ route('reportenegocio') }}"
              class="{{ Welcome::linkActive('reportenegocio*') }}">
                Balance de Negocio
            </a>
          </li>


        </ul>
      </li>

      <li class="{{ Welcome::collapseActive(array('configuracion')) }}" >
        <a href="#"><i class="fa  fa-folder "></i> Configuracion <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li>
            <a
              href="{{ route('configuracion') }}"
              class="{{ Welcome::linkActive('configuracion') }}">
              Configuracion
            </a>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
    </ul>    
  </div>
</div>