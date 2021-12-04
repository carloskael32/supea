<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->                
              <h5>ALTA PRODUCTOS</h5>
		        <hr size=1>		        
		        <br><center>
                <table>
                <tr>
                  <td>
                <form name="regPRO" action="pregusr.php"
                      method="POST">
                  Codigo de Producto:</td><td><input type="text" name="qcod"></td></tr>
                <tr>
                  <td>Descripcion:</td><td><input type="text" name="qdesc" size=10></td></tr>
                <tr><td>Precio</td><td><input type="text" name="qprec" size=50></td></tr>
                <tr><td>Linea:</td><td><input type="text" name="qlin" size=10></td></tr>
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