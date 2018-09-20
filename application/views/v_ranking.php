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
       $dato['active']="Ranking";
       $this->load->view('template/left-menu', $dato); 
       ?>
            
            <main class="mdl-layout__content">
                <section class="js-section">
                    <div class="js-container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-sm-6">
                                    <div class="js-card">
                                        <div class="js-card__title js-flex">
                                            <div class="js-flex__left">
                                                <h2>Ranking Trimestral - Q1</h2>
                                            </div>
                                            <div class="js-flex__right">
                                                <div class="js-select">
                                                    <select class="selectpicker" name="" id="" title="General">
                                                        <option>General1</option>
                                                        <option>General2</option>
                                                        <option>General3</option>
                                                    </select>
                                                </div>
                                            </div>                                            
                                        </div>
                                        <div class="js-flex">
                                            <div class="js-">
                                                
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-card">
                                        <div class="js-card__title js-flex">
                                            <div class="js-flex__left">
                                                <h2>Ranking Trimestral - H1</h2>
                                            </div>
                                            <div class="js-flex__right">
                                                <div class="js-select">
                                                    <select class="selectpicker" name="" id="" title="por País">
                                                        <option>País1</option>
                                                        <option>País2</option>
                                                        <option>País3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="js-flex">
                                            <div class="js-">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-sm-6">
                                    <div class="js-card">
                                        <div class="js-card__title js-flex">
                                            <div class="js-flex__left">
                                                <p>&Uacute;ltimas 5 actividades</p>
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Oportunidad</th>
                                                        <th>Actividad</th>
                                                        <th>Puntos</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Quiz resuelt</td>
                                                        <td>Estrategia</td>
                                                        <td>5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Mineria</td>
                                                        <td>Batalla</td>
                                                        <td>5</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-card">
                                        <div class="js-card__title js-flex">
                                            <div class="js-flex__left">
                                                <p>Mis Publicaciones</p>
                                            </div>
                                            <div class="js-flex__right">
                                                
                                            </div>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Documento 01</td>
                                                        <td>PDF</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Documento 02</td>
                                                        <td>Video</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Documento 03</td>
                                                        <td>Excel</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="col-sm-6">
                                    <div class="js-card">
                                        <div class="js-card__title js-flex">
                                            <div class="js-flex__left">
                                                <p>Mis Certificaciones</p>
                                            </div>
                                            <div class="js-flex__right">
                                                <p>Fecha</p>
                                            </div>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Exam HPE6-A15 Aruba</td>
                                                    <td class="text-right">22-02-18</td>
                                                </tr>
                                                <tr>
                                                    <td>Certified ClearPass Professional 6.5</td>
                                                    <td class="text-right">22-04-18</td>
                                                </tr>
                                                <tr>
                                                    <td>Exam HPE6-A15 Aruba</td>
                                                    <td class="text-right">01-06-18</td>
                                                </tr>
                                                <tr>
                                                    <td>Certified ClearPass Professional 6.5</td>
                                                    <td class="text-right">15-06-18</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> 
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-card">
                                        <div class="js-card__title js-flex">
                                            <div class="js-flex__left">
                                                <p>Mis Datos de Contacto</p>
                                            </div>
                                            <div class="js-flex__right">
                                                
                                            </div>
                                        </div>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>País</td>
                                                    <td>Perú</td>
                                                </tr>
                                                <tr>
                                                    <td>Org.</td>
                                                    <td>Merino SAC</td>
                                                </tr>
                                                <tr>
                                                    <td>Sede</td>
                                                    <td>Lima</td>
                                                </tr>
                                                <tr>
                                                    <td>Ciudad</td>
                                                    <td>Lima</td>
                                                </tr>
                                                <tr>
                                                    <td>email</td>
                                                    <td>maurmerino@gmail.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
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
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
        </script>
    </body>
</html>