<center>
<style type="text/css">

			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:500px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:black;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:black;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}
			
		</style>
	</head>
	<body>
		<div id="header">
			<ul class="nav">
				<li><a href="iniciar.php">Inicio.</a></li>
				<li><a href="Clasificación.php">Generos.</a>
					<ul>
						<li><a href="suspenso.php"> Suspenso.  </a></li>
						<li><a href="terror.php">Terror</a></li>
						<li><a href="comedia.php">Comedia</a></li>
						<li> <a href="educacion.php">Educación</a>
							<ul>
								<li><a href="matematicas.php">Matematicas</a></li>
								<li><a href="ciencias.php">Ciencias</a></li>
								<li><a href="español.php">Español</a></li>
								<li><a href="ingles.php">Ingles</a></li>
							</ul>
						</li>
                        <li><a href="romance.php">Romance</a></li>
                        <li><a href="ficcion.php">Ciencia Ficcion</a></li>
						<li><a href="drama.php">Drama.</a></li>
						
					</ul>
				</li>
				<li><a href="">Contacto</a></li>
			</ul>
		</div>
	</body>
</html>