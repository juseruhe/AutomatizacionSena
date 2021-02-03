<nav class="navbar has-background-link" role="navigation" aria-label="main navigation">
 


 <!--  Ciudades -->

   
    <div class="columns">

     <div class="column is-2  ">

      <div class="navbar-item has-dropdown is-hoverable   ">

      <a class="navbar-link has-text-white ">
      <i class="fas fa-city"></i>
          Ciudades
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white "  href={{route('ciudad.index')}}>
            Mostrar Ciudades
          </a>
          <a class="navbar-item has-text-white " href={{route('ciudad.create')}}>
            Crear Ciudad
          </a>
        </div>
      </div>
   
      </div>
    
  <!-- Propietarios  -->

  <div class="column is-2  ">
      <div class="navbar-item has-dropdown is-hoverable ">
        <a class="navbar-link has-text-white ">
        <i class="fas fa-user-secret"></i>
          Propietarios
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white " href={{route('propietario.index')}}>
            Mostrar Propietarios
          </a>
          <a class="navbar-item has-text-white " href={{route('propietario.create')}}>
            Crear Propietario
          </a>
        </div>
      </div>
      </div>


   
  <!--  Conductores  -->

       <div class="column is-2">
      <div class="navbar-item has-dropdown is-hoverable" >
        <a class="navbar-link has-text-white ">
        <i class="fas fa-user-alt"></i>
          Conductores
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white " href={{route('conductor.index')}}>
            Mostrar Conductores
          </a>
          <a class="navbar-item has-text-white " href={{route('conductor.create')}}>
            Crear Conductor
          </a>
        </div>
      </div>
      </div>

   
  <!--  Colores -->
    <div class="column is-2">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link has-text-white">
        <i class="fas fa-palette"></i>
          Colores
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white " href={{route('color.index')}}>
          
            Mostrar Colores
          </a>
          <a class="navbar-item has-text-white " href={{route('color.create')}}>
            Crear Color
          </a>
        </div>
      </div>
      </div>

    
  <!--  Marcas -->
    <div class="column is-1">
      <div class="navbar-item has-dropdown is-hoverable has-background-link">
        <a class="navbar-link has-text-white ">
        <i class="fas fa-car-side"></i>
          Marcas
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white" href={{route('marca.index')}}>
            Mostrar Marcas
          </a>
          <a class="navbar-item has-text-white" href={{route('marca.create')}}>
            Crear Marca
          </a>
        </div>
      </div>
      </div>



    
  <!--  Tipo de Vehículos -->
    <div class="column is-1">
      <div class="navbar-item has-dropdown is-hoverable has-background-link">
        <a class="navbar-link has-text-white " >
        <i class="fas fa-caravan"></i>
          Tipo de Vehículos 
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white " href={{route('tipo_vehiculo.index')}}>
            Mostrar Tipo de Vehículos
          </a>
          <a class="navbar-item has-text-white" href={{route('tipo_vehiculo.create')}}>
            Crear Tipo de Vehículos
          </a>
        </div>
      </div>
      </div>

    
  <!--  Vehículos -->
    <div class="column is-2">
      <div class="navbar-item has-dropdown is-hoverable has-background-link">
        <a class="navbar-link has-text-white " >
        <i class="fas fa-car"></i>
         Vehículos
        </a>

        <div class="navbar-dropdown has-background-link">
          <a class="navbar-item has-text-white" href={{route('vehiculo.index')}}>
            Mostrar Vehículos
          </a>
          <a class="navbar-item has-text-white " href={{route('vehiculo.create')}}>
            Crear Vehículo
          </a>
        </div>
      </div>
   

      </div>






     

      </div>
      
</nav>

