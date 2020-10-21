<!DOCTYPE html>
<html lang="en">
<?php
include('layout/head.php');
?>
<?php
$id = $_GET['id'];
?>

<body>

  <div class="d-flex" id="wrapper">

    <?php include('layout/sidebar.php') ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php include('layout/nav.php') ?>

      <div class="container-fluid">

        <div class="row">
          <div class="col-md-12">
            <br>
            <form action="procesos/changestatus.php" method="post">
              <h3>Actualizar estado del registro: </h3>
              <input class="form-control" type="hidden" id="id_reclamo" name="id_reclamo" value="<?php echo $id ?>">
              <div class="form-group">
                <label>Fecha de cambio de estado: </label>
                <input class="form-control" type="date" id="fecha" name="fecha">
              </div>
              <div class="form-group">
                <label>Cambiar el estado del reclamo a:</label>
                <select class="form-control" id="estado" name="estado">
                  <option disabled>Seleccionar..</option>
                  <option value="Pendiente">Pendiente</option>
                  <option value="En Proceso">En Proceso</option>
                  <option value="Finalizado">Finalizado</option>
                </select>
              </div>              
              <div class="form-group">
                <label>Detalle del seguimiento</label>
                <textarea class="form-control" id="seguimiento" name="seguimiento" rows="5"></textarea>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-success btn-sm">Continuar</button>
              </div>              
            </form>            
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script type="text/javascript">


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
