<!DOCTYPE html PUBLIC "-//W3B//DTD HTML 5//EN">
<html>
    <head>
    <title> C.B.A INTERNACIONAL </title>
    <link rel="stylesheet" type="text/css" href="estiloprincipal.css">
</head>
    <body>
    <header>

<?php include ("index/menu.php");?>

<table width="100%" border="0">
<tr>
<th><?php include("inicios/contenido1.php"); ?></th>
</tr></table><p>

</header>

<script>
// preguntar si quiero ingresar a una pagina web
function checkAcceptation(){
    if (!confirm("Preciona aceptar para ingresar a la pagina web o cancelar"))
    history.go(-1);
    return " "
}
checkAcceptation()
</script>


