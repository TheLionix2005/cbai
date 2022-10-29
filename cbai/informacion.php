<!DOCTYPE html PUBLIC "-//W3B//DTD HTML 5//EN">
<html>
<head><title> Informacion </title>
<link rel="stylesheet" type="text/css" href="registro2.css">
</head>

<body>
    <center><font color="Black"  face="comic sans ms"><h1 class="titulo2"> C.B.A INTERNACIONAL <img src="logos/newcascos.jpg" width="80" height="80"></h1></center>
<body bgcolor="#E9D3F3">
<table width="100%" border="0">
    <tr align="center"> 
    <td><font size="6" color="Black" face="comic sans ms"><marquee direction="left"> La informacion que ingresaste!
<br>
<tr>
<th>
    <center>
    <body>
    <form name="Tick" id="Tick">
        <p align="center">
            <input type="text" size="6" name="Clock" />
</p>
</form>
<script>
    function show() {
        var Digital = new Date()
        var hours = Digital.getHours()
        var minutes = Digital.getMinutes()
        var seconds = Digital.getSeconds()
        var dn = "AM"
        if (hours > 12) {
            dn = "PM"
            hours = hours - 12
        }
        if (hours == 0)
            hours = 12
        if(minutes <= 9)
           minutes = "0" + minutes
        if (seconds <= 9)
            seconds = "0" + seconds
        document.Tick.Clock.value = hours + ":" + minutes + ":" +
        seconds + " " + dn
        setTimeout("show()",1000)
    }
    show();
</script>
<center>
<table class="tabla1" width="70%" border="4" bordercolor="black" cellpadding="10" cellspacing="10" >
<tr>
<td>Nombre: <?php $nombre = $_POST["nombre"]; echo $nombre?>
<td>Apellidos: <?php $apellidos = $_POST['apellidos']; echo $apellidos?> 
<tr>
<td>Tipo de documento: <?php $fecha = $_POST['Date']; echo $fecha?>
<td>Numero de identificacion: <?php $usuario = $_POST['usuario']; echo $usuario?> 
<tr>
<td>Contraseña: <?php $contraseña = $_POST['contraseña']; echo $contraseña ?>
<td>Correo electronico: <?php $correo = $_POST['e-mail']; echo $correo?>
</tr></td><table>
<br>
GRACIAS POR REGISTRARTE! 
<bt><br><br><br><br><a class="boton1" href="index2.php">Inicia sesion.</a>