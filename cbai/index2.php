<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 5//EN">
<html>
    <body bgcolor="#E8DAEF">

    <head><title>Iniciar Sesion</title>
     <link rel="stylesheet" type="text/css" href="estiloiniciar.css" >
     <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@700&display=swap" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <script type="text/javascript" >
        function validar() {
    var usuario = document.getElementById("usuario").value;
    var contra = document.getElementById("pass").value;
    if (usuario == "cba" && contra == "contraseña" ) {
        alert("Usuario y Contraseña validos");
        window.location='iniciar.php';
    }
    else {
        alert("Verifique que los campos esten llenos.");
    }
}


    </script>

</head>


<body >
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
</script><br><br>
    <center>
    <form name="formulario"  action="iniciar.php">
    <table class="tabla1" bordercolor="black" border="5" cellspacing="12" cellpadding="30" >
        <td align="center">
        <center>
    <div class="container" ><br>
        <h1 class="neon1">Iniciar Sesión</h1><br>    
    </div><br><br>
            <img src="Imagenes/new cascos.jpg" width="120" height="120"/><br><br>
                <table class="datos" cellpadding="5" cellspacing="5" border="2" width="60%">

                <tr><td align="center"><font color="#4A235A">Usuario<p><input type="text" name="usuario" id="usuario">
                <tr>
                    <tr><td align="center"><font color="#4A235A">contraseña<p><input type="password" name="pass" id="pass">

                <table class="continuar">    
                    <td>            
                    <tr><td align="center">   
                            <td colspan="2"><input type="button" name="btnVerifivaca" id="btnVerifica" onclick="validar()" value="verificar" > </td>
                        </tr>
                    </table>
                </center>

</body>
