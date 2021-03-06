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
     $dato['active']="Puntos";
     $this->load->view('template/left-menu', $dato); 
     ?>
     <main class="mdl-layout__content">
        <div class="row  pd-top-15">
          <?php 
          $this->load->view('template/puntuaciones'); 
          ?>
      </div>
      <section class="js-section">

        <div class="js-container">

            <div class="js-card">
                <div class="panel-body ">
                    <div class="js-title">
                        <h2>Gu&iacute;a de Puntos</h2>
                        <p>Conoce el puntaje correspondiente a las actividades del programa.</p>
                    </div>
                    <div class="js-subtitle">
                        <h2>Medici&oacute;n Trimestral y Semestral</h2>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="js-bg-gris">ITEM</th>
                                    <th class="js-bg-gris">DESCRIPCI&Oacute;N</th>
                                    <th class="js-bg-gris">PUNTAJE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Reporte Negocio Clearpass</td>
                                    <td>
                                        <ul>
                                            <li>Reportar el # de oportunidad de SFDC donde haya Clearpass incluido</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="js-color-red">
                                            <li>50 Puntos</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cierre Negocio Clearpass*</td>
                                    <td>
                                        <ul>
                                            <li>Apoyar el cierre del negocio reportado donde Clearpass estuvo presente (Won SFDC)</li>
                                            <li>Puntaje depende tama&ntilde;o del monto cerrado</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="js-color-red">
                                            <li>200 Puntos</li>
                                            <li>250 Puntos</li>
                                            <li>300 Puntos</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Publicaciones de informaci&oacute;n**</td>
                                    <td>
                                        <ul>
                                            <li>Posteo en el idioma nativo en Airheads</li>
                                            <li>Video b&aacute;sico en Youtube Demo Clearpass</li>
                                            <li>Video avanzado en Youtube Demo Clearpass</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="js-color-red">
                                            <li>25 Puntos</li>
                                            <li>50 Puntos</li>
                                            <li>75 Puntos</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pruebas de Conocimiento</td>
                                    <td>
                                        <ul>
                                            <li>Responder las trivias, quizzes o retos propuestos por los especialistas de Clearpass</li>
                                            <li>Premio a los tres primeros en contestar</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="js-color-red">
                                            <li>50 Primero</li>
                                            <li>25 Segundo</li>
                                            <li>10 Tercero</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Webinars y Entrenamiento</td>
                                    <td>
                                        <ul>
                                            <li>Participar al webinar > 80%</li>
                                            <li>Mantener Atenci&oacute;n en el Webinar > 80% (Pantalla Activa)</li>
                                            <li>Contestar preguntas conocimientos (m&iacute;nimo 5, m&aacute;ximo 10 con valor de 5 puntos cada una)</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="js-color-red">
                                            <li>20 Puntos</li>
                                            <li>30 Puntos</li>
                                            <li>50 Puntos</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="js-observaciones">
                        <p>*El monto del negocio depende de la geograf&iacute;a  y el tama&ntilde;o del mismo Market A: Brasil, M&eacute;xico, Market B: Argetina, Chile, Colombia, Per&uacute; Market C: Rest of LAC countries.</p>
                        <p>**Los Postings y videos ser&aacute;n evaluados por los especialistas para determinar el puntaje.</p>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th class="js-bg-gris">BÁSICO</th>
                                    <th class="js-bg-gris">MEDIO</th>
                                    <th class="js-bg-gris">ALTO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td rowspan="3" class="td-center">MERCADO A <br> <strong>Brasil y México</strong></td>
                                    <td>0 < WON > 30k </td>
                                    <td>200</td>
                                    <td></td>
                                    <td></td>
                                </tr>  
                                <tr>

                                    <td>30k < WON > 100k </td>
                                    <td></td>
                                    <td>250</td>
                                    <td></td>
                                </tr> 
                                <tr>

                                    <td>100k < WON > ∞ </td>
                                    <td></td>
                                    <td></td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" class="td-center">MERCADO B <br><strong> Argentina, Chile, Colombia y Perú</strong></td>
                                    <td>0 < WON > 20k </td>
                                    <td>200</td>
                                    <td></td>
                                    <td></td>
                                </tr>  
                                <tr>

                                    <td>20k < WON > 70k </td>
                                    <td></td>
                                    <td>250</td>
                                    <td></td>
                                </tr> 
                                <tr>

                                    <td>70k < WON > ∞ </td>
                                    <td></td>
                                    <td></td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" class="td-center">MERCADO B <br> <strong>Resto de países</strong></td>
                                    <td>0 < WON > 10k </td>
                                    <td>200</td>
                                    <td></td>
                                    <td></td>
                                </tr>  
                                <tr>

                                    <td>10k < WON > 50k </td>
                                    <td></td>
                                    <td>250</td>
                                    <td></td>
                                </tr> 
                                <tr>

                                    <td>50k < WON > ∞ </td>
                                    <td></td>
                                    <td></td>
                                    <td>300</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="pd-top-15">
                        la sumatoria es de las siguientes PL's: VL, VM, VN Y VR -> sumatoria de todo el componente de Clearpass
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