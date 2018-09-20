<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>wysihtml5/src/bootstrap-wysihtml5.css">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>openSans.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>admin.css?v=<?php echo time();?>">
</head>
<body>
    <div class="js-header">
        <div class="js-header__left">
            <img src="<?php echo RUTA_IMG?>logo/logo-aruba.png">
        </div>
        <div class="js-header__right">
            <img src="<?php echo RUTA_IMG?>logo/logo-heroes.png">
        </div>
    </div>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
        <?php
        $dato['active']="Compartir";
        $this->load->view('template/left-menu', $dato); 
        ?>

        <main class="mdl-layout__content">
            <section class="js-section">
                <div class="row">
                    <?php 
                    $this->load->view('template/puntuaciones'); 
                    ?>
                    <div class="col-xs-12">
                        <div class="js-card">
                            <div>
                                <div class="js-title">
                                    <h2>Boletín de Heroes</h2>
                                    <p>Utiliza esta herramienta para comunicar un anuncio que deseas compartir con el resto de heroes. Luego de aprobado el contenido por los administradores del site, aparecerá en el dashboard de cada héroe.</p>
                                </div>
                                <hr>
                                <form action="">
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <label for="titulo">Titulo</label>
                                        <input class="mdl-textfield__input form-control" type="text" id="titulo" name="titulo">
                                    </div>
                                    <div>
                                        <textarea class="textarea form-control" name="txtpublicacion" id="txtpublicacion" cols="30" rows="10"></textarea>
                                    </div>
                                </form>
                                <div class="js-subtitle">
                                    <h2>¿Qué premios tendré por ser un Heroe ClearPass?</h2>
                                </div>

                                <div class="row">

                                    <div class="col-md-6">
                                        <div class="js-title">
                                            <h2>Premio Trimestral Q4FY17 Y Q4FY18</h2>
                                            <p>premio a los 3 primeros en la sumatoria Trimestral</p>
                                            <table class="table table-bordered table-grey"> 
                                                <tbody>
                                                    <tr>
                                                        <td>Top 1</td>
                                                        <td>Pre-Changed Cards USD 250</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top 1</td>
                                                        <td>Pre-Changed Cards USD 150</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top 1</td>
                                                        <td>Pre-Changed Cards USD 100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table table-bordered table-grey"> 
                                                <tbody>
                                                    <tr>
                                                        <td>Q4FY17</td>
                                                        <td>Q4FY18</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Top Ganadores 3</td>
                                                        <td>Top Ganadores 3</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">Campaña h1 (Q4FY17+Q4FY18)</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">Campaña h1 (Q4FY17+Q4FY18)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="js-title">
                                            <h2>Premio Semestral Q1Fy18 Y Q3Fy18</h2>
                                            <p>premio a los 2 primeros en la sumatoria Semestral</p>
                                            <table class="table table-bordered table-red"> 
                                                <tbody>
                                                    <tr>
                                                        <th>Top 1</th>
                                                        <th>viaje al HQ de aruba Santa Clara, CA.</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Top 1</th>
                                                        <th>Pre-Changed Cards USD 500</th>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                            <ul>
                                                <li>Tres dias al HQ de aruba en Santa CLara, CA.</li>
                                                <li>El ganar TOP 1 no puede repetir premio semestral (viaje) en H2</li>
                                                <li>Los ganadores deben tener VISA Americana vigente</li>
                                                <li>Si hay dos Heroes por el mismo Partner, deberán reportar negocios y actividades</li>
                                            </ul>
                                            <table class="table table-bordered table-red"> 
                                                <tbody>
                                                    <tr>
                                                        <th>Q1FY18</th>
                                                        <th>Top Ganadores 3</th>
                                                    </tr>
                                                    <tr>
                                                        <th>Q3FY18</th>
                                                        <th>Top Ganadores 3</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Campaña H2 (Q4FY17+Q4FY18)</th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="2">Sumatoria Total - TOP 2 Ganadores</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> 
                        
                    </div>
                    

                </div>
            </div>
        </main>
    </div>
    <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>wysihtml5/lib/js/wysihtml5-0.3.0.min.js"></script>
    <script src="<?php echo RUTA_PLUGINS?>wysihtml5/src/bootstrap-wysihtml5.js"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
    </script>
    <script>
        $('.textarea').wysihtml5();
    </script>
</body>
</html>