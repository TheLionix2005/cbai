<!DOCTYPE html PUBLIC "-//W3B//DTD HTML 5//EN">
<html>
<head><title> Registro </title>
<link rel="stylesheet" type="text/css" href="registro2.css">
</head>
<body>
    <center><font size="6" face="comic sans ms"><h1 class="titulo5"> REGISTRATE AQUI! 
        <img src="Imagenes/new cascos.jpg" width="90" height="90"></center>
<body bgcolor="#E9D3F3">
<table width="100%" border="0">
    <tr align="center"> 
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
        <form name="formulario" method="post" action="informacion.php">
            
<table  class="tabla1" width="50%" border="4" bordercolor="black" cellpadding="5" cellspacing="5" >
    <tr>
    <th> Ingrese sus nombres <input type="text" name="nombre" size="25" maxlength="50" placeholder="Ingresa Tus Nombres">
        <th> Ingrese sus apellidos <input type="text" name="apellidos" size="25" maxlength="50" placeholder="Ingresa Tus Apellidos">
        <tr>
        <th> Fecha De Nacimiento <input type="text" name="Date" maxlength="50" placeholder="Ingresa tu fecha de nacimiento en numero">
        <th> Ingrese su nombre de Usuario <br><input type="text" name="usuario" size="25" maxlength="50" placeholder="Ingresa su usuario">
        <tr>
        <th> Ingrese su contraseña <input type="password" name="contraseña" size="25" maxlength="50">
        <th>Correo electronico <input type="text" name="e-mail" value="@" size="25" maxlength="50">
        </tr>
<tr>
        <th colspan="2"><input class="boton1"type="submit" value="enviar">
        <input class="boton2"type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
</tr>

</form></table></center>

</body></html>