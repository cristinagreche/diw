<?PHP 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
echo "El method  usado fué: ",$_SERVER["REQUEST_METHOD"],"<br>"; 
echo  $_POST['nombre'],"<br>"; 
echo  $_POST['clave'],"<br>"; 
echo  $_POST['pago'],"<br>"; 
echo  $_POST['camara'],"<br>"; 
echo  $_POST['objetivo60'],"<br>"; 
echo  $_POST['objetivo20'],"<br>"; 
echo  $_POST['precio'],"<br>"; 
echo  $_POST['texto'],"<br>"; 
echo  $_POST['oculto'],"<br>"; 

echo'<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario_dint</title>
    <style>
        h1 {
             font-family: 'arial narrow';
             text-align:center;
             background:#440b69;
             color:#ffc046;
             border: 2px solid#6668d0;
         } 
         form {
             color:#5e055e;
             background:rgb(198, 181, 245);
             
         } 
         body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 14px;
            padding:10%;
            background-position-x: center;
            color:#030c88;
        
             background-image:url(img/mastil.jpg);
             border: 1px solid#6668d0;
             padding:25px;
         }
         </style>
</head>
<body>
    <form name name='mi_formulario' action='index.php' method='post'>
    Usuario:
    <input type='text' name='nombre' value='' size=15><br> 
    <br>
    Contraseña:<input type='password' name='clave' value='' size=15><br>
    Forma de pago:<br>
    <input type='radio' name='pago' value='contado'>Al contado</br> 
    <input type='radio' checked name='pago'value='3meses'>3 meses</br> 
    <input type='radio' name='pago' value='6meses'>6 meses<br>
    Pedido<br>
    <input type='checkbox' checked name="camara" value="compracamara">Cámara fotográfica<br> 
    <input type='checkbox' name="objetivo60" value="compraobjetivo60"> Objetivo 60 mm<br>
    <input type='checkbox' name="objetivo20" value="compraobjetivo20"> Objetivo 20 mm<br> 
    ¿Cual es el precio máximo que estarías dispuesto a pagar?
        
        <select name="precio">
            <Option>Menos de 3.000 euros</option>
            <Option>3.001 - 4.000 euros</option>
            <Option selected>4.001 - 6.000 euros</option>
            <Option>6.001 - 8.000 euros</option>
            <Option>Más de 8.000 euros</option>
        </select>
        <br> 
        Sugerencias de mejora del servicio</br> 
        <textarea rows=5 cols=50 name='texto'></textarea>
            <br> 
            
            <input type="hidden" name='oculto' value='Esto iría oculto'><br> 
            
            <input type="submit" value="enviar"> 
            
            <input type="reset" value="borrar"> 
            
        </form> 
        
        </body>
    </html>';

    
?>

    