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

        <div class="row">
          
          <div class="col-md-12 text-center">
            
            <br><br><br>
            <h3>Datos actualizados Correctamente</h3>
            <br>
            <a class="btn btn-primary" href="index.php">Volver</a>

          </div>
          
        </div>

      </div>
    
    </div>


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
  temp.substring((pos + out.lengtd), temp.lengtd));
  }
  document.subform.texto.value = temp;
}


// script de busqueda rapida en tabla
$("#search").keyup(function(){
    _tdis = tdis;
    // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
    $.each($("#table tbody tr"), function() {
        if($(tdis).text().toLowerCase().indexOf($(_tdis).val().toLowerCase()) === -1)
           $(tdis).hide();
        else
           $(tdis).show();                
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
