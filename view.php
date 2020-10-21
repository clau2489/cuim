<!DOCTYPE html>
<html lang="en">
<?php
$id = $_GET['id'];
?>
<?php include('layout/head.php') ?>

<body>

  <div class="d-flex" id="wrapper">

    <?php include('layout/sidebar.php') ?>

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <?php include('layout/nav.php') ?>

      
      <div class="container-fluid">

        <?php
        require_once ("conexion/db.php");
        require_once ("conexion/conexion.php");
        $query_ped=mysqli_query($conn,"select * from cuari where id_reclamo='$id'");  
        while($rw=mysqli_fetch_array($query_ped)) {  
        ?>

        <div class="row">
          <br>
          <div class="col-md-12">
            <div style="float: right;">
              <br>
              <a class="btn btn-success btn-sm" href="modifystatus.php?id=<?php echo $rw['id_reclamo']; ?>"><i class="fa fa-refresh"></i> Actualizar Registro</a>
              <a class="btn btn-info btn-sm" href="javascript:imprSelec('seleccion')" onclick="printDiv('areaImprimir')"><i class="fa fa-print"></i> Imprimir Registro</a>
              <!--<a class="btn btn-primary btn-sm" href="procesos/inprocess.php?id=<?php echo $rw['id_reclamo']; ?>">En Proceso</a>
              <a class="btn btn-success btn-sm" href="procesos/success.php?id=<?php echo $rw['id_reclamo']; ?>">Finalizado</a>-->
              <a class="btn btn-danger btn-sm" href="procesos/delete.php?id=<?php echo $rw['id_reclamo']; ?>" onclick="return confirm('Pulce ACEPTAR para confirmar la eliminacion o CANCELAR la eliminacion');"><i class="fa fa-trash-o"></i> Borrar Registro</a>               
            </div>
          </div> 
        </div>

        <div id="areaImprimir">
          <div class="container-fluid">
            <div class="table-responsive">
              <table class="table table-bordered table-hover bg-light" id="table">
                  <br>
                      <thead class="bg-secondary text-white">
                        <tr>
                          <th width="20%">Reclamo N°</th> 
                          <th><?php echo $rw['id_reclamo']; ?></th>
                        </tr>                                    
                      </thead>                                  
                      <tbody>
                        <tr>
                          <td>Fecha del Reclamo:</td>
                          <td><?php echo $rw['fecha']?></td>
                        </tr>                    
                        <tr>
                          <td>Apellido y nombre</td>
                          <td><?php echo $rw['apellido']; ?> <?php echo $rw['nombre']; ?></td>
                        </tr>
                        <tr>
                          <td>Documento</td>
                          <td><?php echo $rw['documento']; ?></td>
                        </tr>
                        <tr>
                          <td>Telefono</td>
                          <td><?php echo $rw['telefono']; ?></td>
                        </tr>
                        <tr>
                          <td>Tipo de Reclamo</td>
                          <td><?php echo $rw['tipo_reclamo']; ?></td>
                        </tr>                                    
                        <tr>
                          <td>Calle</td>
                          <td><?php echo $rw['calle']; ?></td>
                        </tr>                    
                        <tr>
                          <td>Altura</td>
                          <td><?php echo $rw['altura']; ?></td>
                        </tr> 
                        <tr>
                          <td>Entre Calles</td>
                          <td><?php echo $rw['entrecalle1']; ?> y <?php echo $rw['entrecalle2']; ?></td>
                        </tr> 
                        <tr>
                          <td>Barrio</td>
                          <td><?php echo $rw['barrio']; ?></td>
                        </tr>
                        <tr>
                          <td>localidad</td>
                          <td><?php echo $rw['localidad']; ?></td>
                        </tr>
                        <tr>
                          <td>Observaciones: </td>
                          <td><?php echo $rw['comentario']; ?></td>
                        </tr>                                                                                             
                        <tr id="celda" style="color: #271b1b; font-weight: 700; font-size: 14px;">
                          <td>Estado de Reclamo</td>
                          <td><text id="texto"><?php echo $rw['estadoreclamo']; ?></text></td>
                        </tr> 
                  </tbody>
                  <iframe id="txtArea1" style="display:none"></iframe>
              </table>
            </div>
            <hr>
            <?php
            }
            ?>               
          </div>     
          <div class="container-fluid">
            <div class="row">
              <br>
              <div class="col-md-12">
                <br>
                <h3>Seguimiento del Reclamo</h3> 
              </div> 
            </div>
            <div class="table-responsive">
              <table class="table table-bordered table-hover bg-light" id="table">
                  <br>

                      <thead class="bg-secondary text-white">
                        <tr>
                          <th width="20%">Fecha:</th> 
                          <th>Pasado a: </th>
                          <th>Seguimiento: </th>
                        </tr>                                    
                      </thead>                                  
                      <tbody>

                        <?php
                        require_once ("conexion/db.php");
                        require_once ("conexion/conexion.php");
                        $query_ped=mysqli_query($conn,"select * from estados_reclamos where id_reclamo='$id' order by fecha DESC");  
                        while($rw=mysqli_fetch_array($query_ped)) {  
                        ?>
                        <tr>
                          <td><?php echo $rw['fecha']; ?></td>
                          <td><?php echo $rw['estado'];?></td>
                          <td><?php echo $rw['seguimiento']; ?></td>
                        </tr>
                        <?php
                        }
                        ?>      
     
                      </tbody>
                  <iframe id="txtArea1" style="display:none"></iframe>
              </table>
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

  // funcion que cambia celda de color
  var x;   
  x = document.getElementById("texto").textContent;   
  if(x == "Finalizado"){
    document.getElementById("celda").style.backgroundColor = "#28a745";
  }
  if(x == "En Proceso"){
    document.getElementById("celda").style.backgroundColor = "#17a2b8";
  } 
  if(x == "Pendiente"){
    document.getElementById("celda").style.backgroundColor = "#fd7e14";
  } 


function printDiv(nombreDiv) {
     var contenido= document.getElementById(nombreDiv).innerHTML;
     var contenidoOriginal= document.body.innerHTML;

     document.body.innerHTML = contenido;

     window.print();

     document.body.innerHTML = contenidoOriginal;
}


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
