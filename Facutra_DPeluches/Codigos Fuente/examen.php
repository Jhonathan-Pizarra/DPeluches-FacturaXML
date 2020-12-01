<?php
$xml=simplexml_load_file("https://elvismpq.github.io/examen1/Tienda.xml");
foreach ($xml->fecha as $d) {
echo 'adssadasd';


        $db_host = "localhost";
        $db_nombrebdd = "examen1";
        $db_usuario = "root";
        $db_contra = "elvismar123";
        $conexion = mysqli_connect($db_host, $db_usuario, $db_contra);

        if (mysqli_connect_errno()) {
            echo "COMPRUEBA LA CONEXIÓN A LA BDD";
            exit();
        }
        mysqli_set_charset($conexion, "utf8");

        mysqli_select_db($conexion, $db_nombrebdd) or die("LA BDD NO SE ENCUENTRA");

        $consulta = "INSERT INTO factura(codigo,ruc,cedula,nombre,apellido,fecha,telefono,direccion,cantidad,detalle,formaDePago,Total) VALUES  ('$xml->codigo','$xml->ruc','$xml->cedula','$xml->nombre','$xml->apellido','$d->dia de $d->mes de $d->anio','$xml->telefono','$xml->direccion','$xml->cantidad','$xml->detalle','$xml->forma_pago','$xml->total');";
        $resultado = mysqli_query($conexion, $consulta);

}
if ($resultado == true) {
    echo "<br>";
    echo "REGISTRO GUARDADO CON EXITO";
} else {
    echo "REGISTRO NO GUARDADO";
}
mysqli_close($conexion);
header("Location:https://elvismpq.github.io/examen1/Tienda.xml");
