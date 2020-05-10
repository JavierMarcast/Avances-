<?php
session_start();
require_once "../Controlador/producto.controlador.php";
 if(!isset($_SESSION["validarIngreso"])&&!isset($_SESSION["TipoUsuario"])){
     echo '<script>window.location ="../index.php?pagina=ErrorLogin"; </script>';
     return;

   }
   else{
     if($_SESSION["validarIngreso"]!="ok"&& $_SESSION["TipoUsuario"]!="Administrador"){
       echo '<script>window.location ="../index.php?pagina=registro"; </script>';
       return;
     }
   }
     include "HTML/headerini.html";
		 include "HTML/nav.html";
?>
<section>
    <div class="container products">
        <form class="form-horizontal" id="frm" name="formTablaGral" method="post" action="abcClientes.php">
        <input type="hidden" name="txtClave">
        <input type="hidden" name="txtOpe">
            <div class="table-reponsive">
                <caption>Lista de productos</caption>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Existencia</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Categoria</th>
                            <th scope="col" colspan="2">Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                             $arrProducto=ControladorProducto::ctrSeleccionarProductos(null);
                            if ($arrProducto!=null){
                                foreach($arrProducto as $key => $value){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $value["codigop"]; ?></th>
                            <td><?php echo $value["precio"]; ?></td>
                            <td><?php echo $value["existencia"];?></td>
                            <td><?php echo $value["descripcion"]; ?></td>
                            <td><?php echo $value["categoria"]; ?></td>
                            <td><button type="submit" class="btn btn-primary" name="Submit" value="Modificar" onClick="txtClave.value=<?php echo $oPersHosp->getIdPersonal(); ?>; txtOpe.value='m'">Editar</button></td>
                            <td><button type="submit" class="btn btn-danger" name="Submit" value="Borrar" onClick="txtClave.value=<?php echo $oPersHosp->getIdPersonal(); ?>; txtOpe.value='b'">Eliminar</button></td>
                            </tr>

                        <?php
                                }//foreach
                            }else{
                        ?>
                            <tr>
                                <td colspan="2">No hay datos</td>
                            </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
                <input type="submit" class="btn btn-primary" name="Submit" value="Crear Nuevo" onClick="txtClave.value='-1';txtOpe.value='a'">
            </div>
        </form>
    </div>
</section>
<?php
include "HTML/footer.html";
?>
 </body>
</html>
