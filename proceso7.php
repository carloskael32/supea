<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->                
              <h5>VENTA DE PRODUCTOS</h5>
		        <hr size=1>		        
		        <br><center>
                <table>
                <tr>
                  <td>
                <form name="regPRO" action="vregusr.php"
                      method="POST">
                Fecha:</td><td><input type="date" name="qfec"</td></tr>
                <tr><td>


                  Codigo de Producto:</td><td><input type="text" name="qcod"></td></tr>
                <tr>
                  <td>Cantidad:</td><td><input type="text" name="qcan" size=10></td></tr>
                <tr><td>Que Usuario</td><td><input type="text" name="qusr" size=50></td></tr>
                
                <tr><td colspan=2><br><hr><br></td></tr>
                <tr><td><input type="submit" value="Procesar"></td><td><input type="reset" value="Cancelar">
                </form>
                </td></tr>
                </table>
                <br>                
	<!-- HASTA AQUI VA TU CODIGO ---->
<?php
include 'pie.php';
?>