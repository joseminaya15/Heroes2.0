 <div class="mdl-layout__drawer">
 	<div class="js-perfil">
 		<div class="js-perfil__title">
 			<img src="<?php echo base_url("public/img/fondo/background-blue-perfil.png"); ?>">
 		</div>
 		<div class="js-perfil__contenido">
 			<img src="<?php echo base_url("public/img/fondo/user.png"); ?>">
 			<div class="js-perfil__idioma">
 				ENG
 			</div>
 		</div>

 	</div>
 	<span class="mdl-layout-title">Perú</span>
 	<nav class="mdl-navigation">
 		<h2>Tyler Wain</h2>
 		<a class="mdl-navigation__link <?php echo active($active,"Dashboard") ?>" href="Dashboard" ><i class="mdi mdi-equalizer"></i>Dashboard</a>
 		<a class="mdl-navigation__link <?php echo active($active,"Actividades") ?>" href="Actividades"><i class="mdi mdi-event_note"></i>Actividades</a>
 		<a class="mdl-navigation__link <?php echo active($active,"Puntos") ?>" href="Puntos"><i class="mdi mdi-assignment"></i>Gu&iacute;a de puntos</a>
 		<a class="mdl-navigation__link <?php echo active($active,"Premios") ?>" href="Premios"><i class="mdi mdi-stars"></i>Premios</a>
 		<a class="mdl-navigation__link <?php echo active($active,"Compartir") ?>" href="Compartir"><i class="mdi mdi-share"></i>Compartir</a>
 		<a class="mdl-navigation__link <?php echo active($active,"Ranking") ?>" href="Ranking"><i class="mdi mdi-trending_up"></i>Ranking</a>
 		<a class="mdl-navigation__link <?php echo active($active,"Noticias") ?>" href="Noticias"><i class="mdi mdi-drafts"></i>What's New!</a>
 	</nav>

 </div>
 
 <?php 
 function active($dato, $menu){
 	if($dato==$menu){
 		return "active";
 	}
 }
 ?>