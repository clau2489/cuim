

<!-- Sidebar
<div class="bg-black border-right" id="sidebar-wrapper">
  <div class="sidebar-heading"><h5>CUARI</h5> </div>
  <div class="list-group list-group-flush">
  	<a href="index.php" class="list-group-item list-group-item-action bg-black"><i class="fa fa-th"></i> TODOS</a>
    <a href="pendings.php" class="list-group-item list-group-item-action bg-black"><i class="fa fa-bell"></i> PENDIENTES</a>
    <a href="inprocess.php" class="list-group-item list-group-item-action bg-black"><i class="fa fa-history"></i> EN PROCESO</a>
    <a href="success.php" class="list-group-item list-group-item-action bg-black"><i class="fa fa-check-circle"></i> FINALIZADOS</a>
    <hr>
    <a href="../../index.php" class="list-group-item list-group-item-action bg-black"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle"></i> INGRESAR NUEVO</a>
  </div>
</div>
<!-- /#sidebar-wrapper 


<!-- The Modal 
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Modal Header 
      <div class="modal-header">
        <h4 class="modal-title">Ingresar Reclamo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body 
      <div class="modal-body">

      <form action="procesarreclamo.php" method="post">
        <h6 style="font-weight: 600">DATOS DE LA PERSONA QUE GESTIONA EL RECLAMO:</h6>
        <div class="form-group">
          <label>Apellido: </label>
          <input type="text" class="form-control" id="apellido" name="apellido" required>
        </div>
        <div class="form-group">
          <label>Nombre: </label>
          <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
          <label>Nº de Documento: </label>
          <input type="text" class="form-control" id="documento" name="documento" required>
        </div>
        <div class="form-group">
          <label>Celular de contacto: (Sin 0, 15 ni guiones) </label>
          <input type="text" class="form-control" id="telefono" name="telefono" required>
        </div>
        <hr>                                         
        <h6 style="font-weight: 600">Información del reclamo:</h6>
        <div class="form-group">
          <label>Fecha del reclamo:</label>
          <input type="date" class="form-control" id="fecha" name="fecha" required>
        </div>        
        <div class="form-group">
          <label>Tipo de Reclamo: </label>
          <select class="form-control" id="tiporeclamo" name="tiporeclamo">
            <option disabled>Seleccionar..</option>
            <optgroup label="ALUMBRADO PUBLICO">
              <option value="REPOSICION DE LAMPARA">REPOSICION DE LAMPARA</option>
              <option value="REPOSICION DE TULIPA">REPOSICION DE TULIPA</option>
              <option value="CABLES DESCONECTADOS">CABLES DESCONECTADOS</option>
              <option value="ARREGLO DE FOTOCELULA">ARREGLO DE FOTOCELULA</option>
              <option value="REPARACION DE LUMINARIA">REPARACION DE LUMINARIA</option>
            </optgroup>
            <optgroup label="BOCAS DE TORMENTA">
              <option value="DESOBSTRUCCION Y LIMPIEZA">DESOBSTRUCCION Y LIMPIEZA</option>
              <option value="COLOCACION TAPA SUMIDERO">COLOCACION TAPA SUMIDERO</option>
            </optgroup>
            <optgroup label="BOLETAS">
              <option value="ENTREGA FUERA DE TERMINO">ENTREGA FUERA DE TERMINO</option>
              <option value="OBSERVACIONES">OBSERVACIONES</option>
            </optgroup>
            <optgroup label="CALLES DE ASFALTO">
              <option value="BACHEO">BACHEO</option>
              <option value="SELLADO DE JUNTAS">SELLADO DE JUNTAS</option>
            </optgroup>
            <optgroup label="CALLES DE TIERRA">
              <option value="NIVELADO">NIVELADO</option>
              <option value="ENCASCOTADO">ENCASCOTADO</option>
              <option value="ZANJEO">ZANJEO</option>
              <option value="DESMALEZADO DE ZANJAS">DESMALEZADO DE ZANJAS</option>
              <option value="LIMPIEZA DE ZANJAS">LIMPIEZA DE ZANJAS</option>
              <option value="PROFUNDIZACION DE ZANJAS">PROFUNDIZACION DE ZANJAS</option>
            </optgroup>
            <optgroup label="CONTROL AMBIENTAL">
              <option value="QUEMA DE BASURA">QUEMA DE BASURA</option>
              <option value="CONTENEDOR">CONTENEDOR</option>
              <option value="FORMACION DE BASURALES">FORMACION DE BASURALES</option>
              <option value="OLORES NAUSEABUNDOS">OLORES NAUSEABUNDOS</option>
              <option value="RUIDOS MOLESTOS EN VIVIENDA">RUIDOS MOLESTOS EN VIVIENDA</option>
              <option value="CIERRE DE LOTE">CIERRE DE LOTE</option>
              <option value="LIMPIEZA DE LOTE">LIMPIEZA DE LOTE</option>
              <option value="MATERIAL DE CONSTRUCCION">MATERIAL DE CONSTRUCCION</option>
            </optgroup>                  
            <optgroup label="ESPACIOS VERDES Y PLAZAS">
              <option value="LIMPIEZA DE ESPACIOS PUBLICOS">LIMPIEZA DE ESPACIOS PUBLICOS</option>
              <option value="DESMALEZADO DE ESPACIOS PUBLICOS">DESMALEZADO DE ESPACIOS PUBLICOS</option>
            </optgroup>
            <optgroup label="FORESTALES">
              <option value="PODA">PODA</option>
              <option value="ERRADICACION CLANDESTINA">ERRADICACION CLANDESTINA</option>
              <option value="ARBOL CAIDO">ARBOL CAIDO</option>
              <option value="INSP. ECOLOGIA">INSP. ECOLOGIA</option>
            </optgroup>                                                                         
            <optgroup label="INSPECCION DE COMERCIOS">
              <option value="NORMAS DE SEGURIDAD">NORMAS DE SEGURIDAD</option>
              <option value="ALIMENTOS">ALIMENTOS</option>
              <option value="VENTA DE PIROTECNIA">VENTA DE PIROTECNIA</option>
              <option value="VENTA DE ALCOHOL">VENTA DE ALCOHOL</option>
              <option value="RUIDOS MOLESTOS">RUIDOS MOLESTOS</option>
              <option value="HORARIOS DE ATENCION">HORARIOS DE ATENCION</option>
              <option value="VENTA AMBULANTE">VENTA AMBULANTE</option>
            </optgroup>
            <optgroup label="LIMPIEZA Y RECOLECCION DOMICILIARIA">
              <option value="RETIRO DE RAMAS">RETIRO DE RAMAS</option>
              <option value="RETIRO DE BASURA">RETIRO DE BASURA</option>
              <option value="BARRENDERO">BARRENDERO</option>
              <option value="LIMPIEZA DE VEREDAS">LIMPIEZA DE VEREDAS</option>
            </optgroup>
            <optgroup label="TRANSITO">
              <option value="RETIRO DE RAMAS">AUTOS ABANDONADOS</option>
              <option value="ALIMENTOS">ESTACIONAMIENTO</option>
              <option value="INSPECCION DE TRANSITO">INSPECCION DE TRANSITO</option>
            </optgroup>
            <optgroup label="VIA PUBLICA">
              <option value="REFUGIOS">REFUGIOS</option>
              <option value="SEMAFOROS">SEMAFOROS</option>
              <option value="BADEN">BADEN</option>
              <option value="LOMOS DE BURRO">LOMOS DE BURRO</option>
              <option value="INDICADORES DE CALLES">INDICADORES DE CALLES</option>
            </optgroup>                                                                                          
          </select>
        </div>
        <div class="form-group">
          <label>N° Partida Municipal: </label>
          <input type="text" class="form-control" id="partida" name="partida" required>
        </div>                       
        <div class="form-group">
          <label>Calle: </label>
          <input type="text" class="form-control" id="calle" name="calle" required>
        </div>
        <div class="form-group">
          <label>Altura: </label>
          <input type="text" class="form-control" id="altura" name="altura" required>
        </div>
        <div class="form-group">
          <label>Entre Calles: </label>
          <input type="text" class="form-control" id="entrecalle1" name="entrecalle1" required placeholder="Calle 1">
          <label> y </label>
          <input type="text" class="form-control" id="entrecalle2" name="entrecalle2" required placeholder="Calle 2">
        </div>
        <div class="form-group">
          <label>Barrio: </label>
          <select class="form-control" id="barrio" name="barrio" required>
          <option>Seleccionar..</option>
            <?php
            include("../conexion/db.php");
            include("../conexion/conexion.php");
            $consulta=mysqli_query($conn,"select * from barrios order by nombre_barrio");
            while($campo=mysqli_fetch_array($consulta)){
            ?>                
            <option value="<?php echo utf8_encode($campo[1])?>"><?php echo utf8_encode($campo[1])?></option>
            <?php
            }
            ?>
          </select>
        </div>
        <div class="form-group">
          <label>Localidad: </label>
          <select class="form-control" id="localidad" name="localidad" required>
            <option>Seleccionar..</option>
            <option value="Marcos Paz">Marcos Paz</option>
          </select>
        </div>                            
        <div class="form-group">
          <label>Tu comentario: </label>
          <textarea class="form-control" id="comentario" name="comentario" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-success btn-block">Enviar reclamo</button>

                  
      </form>

      </div>

      <!-- Modal footer
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
 -->