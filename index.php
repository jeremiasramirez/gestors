<!DOCTYPE html>
<html lang="es" ng-app="rout">
<head>
	<!-- set all character  -->
	<meta charset="UTF-8">

	<!-- title of page -->
	<title>Static Gestor</title>

	<!-- viewport mobile -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<!-- library angularJS -->
	<script src="node_modules/angular/angular.min.js"></script>

	<!-- library angularJS > routes -->
	<script src="public/js/lib/angular.routes.js"></script>
	

	<!-- library my property -->
	<script src="public/css/lib/jeremias-lib/jeremias-lib.js"></script>

	<!-- main js -->
	<script src="public/js/main.js"></script>

	<!-- config angularJS -->
	<script src="public/js/config.js"></script>

	<!-- my library css-->
	<link rel="stylesheet" href="public/css/lib/jeremias-lib/jeremias-lib.css">
	
	<!-- main css-->
	<link rel="stylesheet" href="public/css/main.css">

	<!-- library extern css for animation-->
	<link rel="stylesheet" href="public/css/lib/animate/animate.css">

</head>
<body>


<!-- menu of navigation -->
	<div>
		<ul class="navigation">

			
			<!-- redirect to public/js/config.js -->
			<li class="list--item">
				<a href="#!/home">Home</a>
			</li>


			<li class="list--item">
				<a href="#!/buscar">Buscar</a>
			</li>


			<li class="list--item">
				<a href="#!/notification">Notification</a>
			</li>


			<li class="list--item">
				<a href="#!/todos">Todos los usuarios</a>
			</li>



			<li class="list--item">
				<a href="#!/remover">Eliminar</a>
			</li>


			<li class="list--item">
				<a href="#!/editar">Editar</a>
			</li>


		</ul>
	</div>



<!-- view of page navigation (routes) -->
	<div ng-view>
		
	</div>



	
</body>
</html>