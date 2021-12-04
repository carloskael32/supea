<?php
include 'cabecera.php';
?>
<!--  DESDE AQUI VA TU CODIGO -->                
              <h5>PRODUCTOS</h5>
		        <hr size=1>		        
		        <br><center>
                <table>
                <tr>
                  <td>
                <form name="regusr" action="regusr.php"
                      method="POST">
                  Login:</td><td><input type="text" name="qlog"></td></tr>
                <tr>
                  <td>Clave:</td><td><input type="password" name="qcla" size=10></td></tr>
                <tr><td>Usuario</td><td><input type="text" name="qusr" size=50></td></tr>
                <tr><td>Nivel:</td><td><input type="text" name="qniv" size=10></td></tr>
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