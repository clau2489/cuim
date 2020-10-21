<!DOCTYPE html>
<html lang="en">

<?php include('layout/head.php') ?>

<body>

  <div class="d-flex" id="wrapper">

    <?php include('layout/sidebar.php') ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php include('layout/nav.php') ?>

      <div class="container-fluid">

        <br>
        <div class="row">
          <div class="col-md-12">
            <h4>Filtrar por: </h4>
            <input type="text" id="search" class="form-control form-control-sm" placeholder="Escribe para buscar..." />
          </div>
        </div>
        <br>        

        <div class="table-responsive">
          <table class="table table-bordered table-hover table-sm bg-light" id="table">
            <thead class="bg-secondary text-white">
                <tr>
                  <th># Reclamo</th>
                  <th>Apellido y Nombre</th>
                  <th>Documento</th>
                  <th>Telefono</th>
                  <th>Tipo de Reclamo</th>
                  <th>Calle</th>
                  <th>Altura</th>
                  <th>Entre Calles</th>
                  <th>Barrio</th>
                  <th>Estado de Reclamo</th>
                  <th></th>
                </tr>
              </thead>
                  <?php
                  require_once ("conexion/db.php");
                  require_once ("conexion/conexion.php");
                  $query_ped=mysqli_query($conn,"select * from cuari where estadoreclamo='Pendiente' order by fecha");  
                  while($rw=mysqli_fetch_array($query_ped)) {  
                  ?>                
              <tbody>
                <tr>
                    <td><?php echo $rw['id_reclamo']; ?></td>
                    <td><?php echo $rw['apellido']; ?> <?php echo $rw['nombre']; ?></td>
                    <td><?php echo $rw['documento']; ?></td>
                    <td><?php echo $rw['telefono']; ?></td>
                    <td><?php echo $rw['tipo_reclamo']; ?></td>
                    <td><?php echo $rw['calle']; ?></td>
                    <td><?php echo $rw['altura']; ?></td>
                    <td><?php echo $rw['entrecalle1']; ?> y <?php echo $rw['entrecalle2']; ?></td>
                    <td><?php echo $rw['barrio']; ?></td>
                    <?php 
                    switch($rw['estadoreclamo']){
                      case 'Finalizado':
                        echo "<td bgcolor='#28a745' style='color: white'>$rw[estadoreclamo]</td>";
                        break;
                      case 'En Proceso':
                        echo "<td bgcolor='#17a2b8' style='color: white'>$rw[estadoreclamo]</td>";
                        break;
                      default:
                        echo "<td bgcolor='#fd7e14' style='color: white'>$rw[estadoreclamo]</td>";
                        break;
                      }
                    ?>                    
                    <td>
                      <a class="btn btn-secondary btn-sm" href="view.php?id=<?php echo $rw['id_reclamo']; ?>"><i class="fa fa-search"></i></a>
                    </td>                      
                  <?php
                  }
                  ?>
                </tr>
              </tbody>
              <iframe id="txtArea1" style="display:none"></iframe>
          </table>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->
    

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript">

  //script toggle
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });    

  // script de reemplazo de punto por coma
  function Remplaza(entry) {
    out = "."; // reemplazar el .
    add = ","; // por ,
    temp = "" + entry;
    while (temp.indexOf(out)>-1) {
    pos= temp.indexOf(out);
    temp = "" + (temp.substring(0, pos) + add + 
    temp.substring((pos + out.length), temp.length));
    }
    document.subform.texto.value = temp;
  }
  
  // script de busqueda rapida en tabla
  $("#search").keyup(function(){
      _this = this;
      // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
      $.each($("#table tbody tr"), function() {
          if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
             $(this).hide();
          else
             $(this).show();                
      });
  });

  // script para exportar
  document.getElementById('submitExport').addEventListener('click', function(e) {
      e.preventDefault();
      let export_to_excel = document.getElementById('table');
      let data_to_send = document.getElementById('data_to_send');
      data_to_send.value = export_to_excel.outerHTML;
      document.getElementById('formExport').submit();
  });

  </script>   

</body>

</html>
