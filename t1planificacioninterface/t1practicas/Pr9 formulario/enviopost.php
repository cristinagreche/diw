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
?>
