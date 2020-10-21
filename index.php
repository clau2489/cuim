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
                  <th>DNI</th>
                  <th>Clase</th>
                  <th>Apellido/s</th>
                  <th>Nombre/s</th>
                  <th>Direccion</th>
                  <th>Tipo DNI</th>
                  <th>Circuito</th>
                  <th>Mesa</th>
                  <th>Sexo</th>
                  <th>Escuela</th>
                  <th>Direccion Escuela</th>
                  <th>Localidad</th>
                  <th></th>
                </tr>
              </thead>
                  <?php
                  require_once ("conexion/db.php");
                  require_once ("conexion/conexion.php");
                  $query_ped=mysqli_query($conn,"select * from padron order by apellidos");  
                  while($rw=mysqli_fetch_array($query_ped)) {  
                  ?>                
              <tbody>
                <tr>
                    <td><?php echo $rw['dni']; ?></td>
                    <td><?php echo $rw['clase']; ?></td>
                    <td><?php echo $rw['apellidos']; ?></td>
                    <td><?php echo $rw['nombres']; ?></td>
                    <td><?php echo $rw['direccion']; ?></td>
                    <td><?php echo $rw['dnitipo']; ?></td>
                    <td><?php echo $rw['circuito']; ?></td>
                    <td><?php echo $rw['mesa']; ?></td>
                    <td><?php echo $rw['sexo']; ?></td>
                    <td><?php echo $rw['escuela']; ?></td>
                    <td><?php echo $rw['direccionescuela']; ?></td>
                    <td><?php echo $rw['localidad']; ?></td>

                      
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
