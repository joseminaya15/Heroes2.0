<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
<!-- <<<<<<< HEAD -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible"  content="IE=edge">
		<meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta name="description"            content="Aruba Heroes">
		<meta name="keywords"               content="Aruba Heroes">
		<meta name="robots"                 content="Index,Follow">
		<meta name="date"                   content="Septiembre 11, 2018"/>
		<meta name="language"               content="es">
		<meta name="theme-color"            content="#000000">
		<title>Aruba Heroes</title>
		<link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
		<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_FONTS?>openSans.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
		<link rel="stylesheet"    href="<?php echo RUTA_CSS?>admin.css?v=<?php echo time();?>">
	</head>
	<body>
		<section class="js-height">
			<div class="ri-logos" style="background-image: url('<?php echo base_url("public/img/logo/Recurso 2.png"); ?>')">
				<div class="ri-logo-left">
					<img src="<?php echo base_url("public/img/logo/Aruba_logo_white.svg"); ?>" alt="" >
				</div>
				<div class="ri-logo-right">
					<img src="<?php echo base_url("public/img/logo/logo-heroes.png"); ?>" alt="" >
				</div>
			</div>
			<div class="js-fondo" style="background: red;">
				<img src="<?php echo base_url("public/img/fondo/917C7088C9B2B0B8.jpg"); ?>" alt="" >
			</div>
			<div class="ri-login js-flex">
				<div class="js-login">
					<div class="js-login__title">
						<h2>Heroes 2.0</h2>
						<p>Bienvenido de vuelta H&eacute;roe</p>
					</div>
					<div class="js-login__contenido">
						<div class="js-input">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="text" id="correo">
								<label class="mdl-textfield__label" for="correo">Correo</label>
							</div>
						</div>
						<div class="js-input">
							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
								<input class="mdl-textfield__input" type="password" id="password">
								<label class="mdl-textfield__label" for="password">Contrase&ntilde;a</label>
							</div>
						</div>
						<div class="js-login__contenido--flex">
							<div class="js-radio text-left">
								<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
									<input type="checkbox" id="remember" class="mdl-checkbox__input">
									<span class="mdl-checkbox__label">Recu&eacute;rdame</span>
								</label>
							</div>
							<a href="">Olvid&eacute; mi contrase&ntilde;a</a>
						</div>
					</div>
					<div class="js-login__actions">
						<button id="registry" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default" onclick="ingresar()">
							Registrase
						</button>
						<button id="login" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="ingresar()">Iniciar sesi&oacute;n</button>
					</div>
				</div>
			</div>
		</section>
	   
		<script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
		<script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
		<script type="text/javascript">
			if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
				$('select').selectpicker('mobile');
			} else {
				$('select').selectpicker();
			}
			$(document).ready(function(){
			let CHECK = sessionStorage.getItem('CHECK');
			let USERNAME = sessionStorage.getItem('USERNAME');
			let PASS = sessionStorage.getItem('PASS');
		   if(CHECK == 1) {
				$('#checkbox-2').prop('checked', true);
				$('#usuario').val(USERNAME);
				$('#password').val(PASS);
		   }else {
				$('#checkbox-2').prop('checked', false);
				$('#usuario').val('');
				$('#password').val('');
		   }
		});
			function ingresar(){
				console.log($(this));

			}
		</script>
	</body>
=======
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Aruba Heroes">
        <meta name="keywords"               content="Aruba Heroes">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="Septiembre 11, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
        <title>Aruba Heroes</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>openSans.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>admin.css?v=<?php echo time();?>">
    </head>
    <body>
        <!-- <div class="js-header">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hpe-intel.png">
            </div>
            <div class="js-header--right">
                <p>HPE LAC Value & Growth Channels Warriors</p>
            </div>
        </div> -->
        <section class="js-height">
            <div class="js-fondo"></div>
            <div class="js-container js-flex">
                <div class="js-login">
                    <div class="js-login__title">
                        <h2>Heroes 2.0</h2>
                        <p>Bienvenido de vuelta H&eacute;roe</p>
                    </div>
                    <div class="js-login__contenido">
                        <div class="js-input">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="text" id="correo">
                                <label class="mdl-textfield__label" for="correo">Correo</label>
                            </div>
                        </div>
                        <div class="js-input">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <input class="mdl-textfield__input" type="password" id="password">
                                <label class="mdl-textfield__label" for="password">Contrase&ntilde;a</label>
                            </div>
                        </div>
                        <div class="js-login__contenido--flex">
                            <div class="js-radio text-left">
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                                    <input type="checkbox" id="remember" class="mdl-checkbox__input">
                                    <span class="mdl-checkbox__label">Recu&eacute;rdame</span>
                                </label>
                            </div>
                            <a href="">Olvid&eacute; mi contrase&ntilde;a</a>
                        </div>
                    </div>
                    <div class="js-login__actions">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--default"><a href="#register">Registrarse</a></button>
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="ingresar()">Iniciar sesi&oacute;n</button>
                    </div>
                </div>
            </div>
        </section>
        <footer class="js-section">
            <div class="js-container">
                
            </div>
        </footer>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            $(document).ready(function(){
            let CHECK = sessionStorage.getItem('CHECK');
            let USERNAME = sessionStorage.getItem('USERNAME');
            let PASS = sessionStorage.getItem('PASS');
           if(CHECK == 1) {
                $('#checkbox-2').prop('checked', true);
                $('#usuario').val(USERNAME);
                $('#password').val(PASS);
           }else {
                $('#checkbox-2').prop('checked', false);
                $('#usuario').val('');
                $('#password').val('');
           }
        });
        </script>
    </body>
>>>>>>> d8d079462eb7613a8391d67785f4f79d8f146af1
</html>