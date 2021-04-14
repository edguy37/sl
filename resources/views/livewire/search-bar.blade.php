<div class="cover" style="background-image: url({{ url('storage/imgs/img-buscador.jpg') }});">
    <div  class="cover-wrapper container mx-auto px-4">
      <div class="logo">
        <a href="#">
          <img src="{{ url('storage/imgs/logo.png') }}" alt="Inicio"> <!-- Cambiar link por ruta -->
        </a>
      </div>
      <div class="titulo">
        <p>Nebox te ayuda a encontrar descuentos cerca de ti</p>
      </div>
      <form class="buscador" action="#" method="get">
        <div class="busqueda">
          <div class="campo-buscar">
            <input class="txt-buscador" type="text" name="search" autocomplete="off" placeholder="¿Qué estás buscando?" autofocus/>
          </div>
          <div class="campo-ubicacion">
            <select class=" px-2 select-ubic" name="ubic" id="ubic">
              <!-- <option value="Cancún">Cancún</option> -->
               <!-- GCP Se agrega otras ciudades ademas de Mérida  -->
              <option value="" selected="" disabled="">selecciona ubicacion</option>
              <option value="Cancún">Cancún</option>
              <option value="Ciudad del Carmen Campeche">Ciudad del Carmen Campeche</option>
              <option value="Isla Mujeres">Isla Mujeres</option>
              <option value="Mérida Yucatán">Mérida Yucatán</option>
              <option value="Playa del Carmen">Playa del Carmen</option>
              <option value="Progreso Yucatán">Progreso Yucatán</option>
              <option value="Tulum">Tulum</option>
               <!-- GCP Se agrega otras ciudades ademas de Mérida -->
            </select>
              <script type="text/javascript">
                document.getElementById('ubic').value = "";
              </script>
          </div>
        </div>
        <input type="submit" value="Buscar" class="btn btn-sm btn-default btn-buscar"/>
      </form>
    </div>
  </div>
