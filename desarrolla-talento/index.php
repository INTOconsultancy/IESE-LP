<?php
header('Location: https://online-em.iese.edu/desarrolla-talento-digital', true, 301);
?>

<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P5X7WH8');
    </script>
    <!-- End Google Tag Manager -->


    <meta charset="utf-8">
    <title>IESE | Desarrolla el talento en la era digital</title>


    <meta property="og:title" content="IESE | Desarrolla el talento en la era digital"/>
    <meta property="og:description"
          content="Diseña un plan estratégico para transformar la gestión de RH en el mundo digital."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://emeritus.iese.edu/desarrolla-talento/"/>
    <meta property="og:image" content="https://emeritus.iese.edu/assets/img/png/iese-share-logo.png"/>
    <meta property="og:image:type" content="image/png"/>
    <meta property="og:image:width" content="500"/>
    <meta property="og:image:height" content="500"/>
    <meta property="og:image:alt" content="Desarrolla el talento en la era digital"/>
    <meta property="fb:app_id" content="467662454062015"/>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://emeritus.iese.edu/desarrolla-talento/"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png"/>


    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="../assets/scss/stylesheet.css">
    <link rel="stylesheet" href="../assets/libs/mdl/material.min.css">


    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
            integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>


    <script src="../assets/js/filterSelect.js" async></script>


    <!-- Enrollment Engine Script -->
    <script
            src="https://fast.emeritus.org/scripts/custom_forms/431.js" async>
    </script>

</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P5X7WH8" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->


<!-- Getting the querystring -->
<?php
/*
    // Commented as it is no longer necessary to pass the querystring to the thank you page.
    $queryStringArray = array();
    foreach($_GET as $key=>$value){
    $parameter = $key."=".$value;
        array_push($queryStringArray, $parameter);
    }
    $queryString = implode("&", $queryStringArray);
*/
?>
<!-- Sección Header Fixed -->
<header>
    <div class="header-container">
        <img class="Logo-one" src="../assets/img/svg/IESE-Business-School.svg" alt="IESE">
        <img class="Logo-two" src="../assets/img/svg/Executive-Education.svg" alt="Executive Education">
        <div class="dinamic">
            <div class="header-button">
                <a target="_blank" rel="noopener noreferrer" class="grapBo fs16 blanco">
                    MÁS INFORMACIÓN
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Body -->
<div class="space"></div>

<!-- Sección Hero Image -->
<div class="hero-container banner-desarrolla-talento">

    <div class="hero-title padding-desarrolla-talento">


        <div class="course-information">
            <div class="new-program grapSe-Bo rojoFF">NUEVO PROGRAMA ONLINE</div>
            <div class="title grapBo fs30 negro19">Desarrolla el talento en la era digital</div>
            <div class="details">
                <div class="date-hours">
                    <div class="date grapRe fs18 negro23">
                        15 / Febrero / 2021
                    </div>
                    <div class="hours grapRe fs14 negro23">
                        7 SEMANAS | 6-8 HORAS POR SEMANA
                    </div>
                </div>
                <div class="price-fees">
                    <div class="price grapBo fs16 negro19">
                        PRECIO: $ 2,150 USD
                    </div>
                    <div class="fees grapMe fs14 negro23">
                        Cuota Miembros del IESE: $1,935 USD
                    </div>
                    <div class="price-fees" style="padding: 0;">
                        <a class="price grapBo fs16 negro19" href="#specialFee" rel="modal:open"
                           style="text-transform: uppercase;">
                            Precio especial para grupos
                        </a>
                    </div>
                    <div class="flexible-payments grapBo fs16 rojo39">
                        <a class="rojo39" href="#ex2" rel="modal:open">
                            <img class="lazyload" src="../assets/img/svg/info-circle-solid.svg" alt="información">
                            Pagos flexibles disponibles
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal pagos flexibles -->
        <div id="ex2" class="modal modal-pagos-flexibles">
            <div class="modal-pagos-title fs24 grapBo negro19">
                Plan de pagos flexibles
            </div>
            <div class="modal-pagos-descripcion fs18 grapBo negro19">
                Esta opción permite al alumno pagar la cuota del programa en parcialidades.
                Está disponible en la solicitud de inscripción y deberá seleccionarse
                antes de realizar el pago.
            </div>
            <div class="modal-pagos-subtitle fs16 grapRe negro19">
                Las siguientes opciones de pago están disponibles para el Desarrolla el talento en la era digital:
            </div>
            <div class="pagos">
                <div class="pagos-title fs16 grapBo negro19">
                    Pago total
                </div>
                <div class="precio-pago fs14 robotoRe negro23">
                    <div class="dot-pagos"></div>
                    La cuota completa del programa $2,150 USD.
                </div>
            </div>
            <div class="pagos">
                <div class="pagos-title fs16 grapBo negro19">
                    Pago en dos parcialidades
                </div>
                <div class="precio-pago fs14 robotoRe negro23">
                    <div class="dot-pagos"></div>
                    La primera parcialidad de $1,163 USD
                    se paga al inicio.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La segunda parcialidad de $1,030 USD
                    a pagar del 7 de marzo de 2021.
                </div>
            </div>
            <div class="pagos no-border">
                <div class="pagos-title fs16 grapBo negro19">
                    Pago en tres parcialidades
                </div>
                <div class="precio-pago fs14 robotoRe negro23">
                    <div class="dot-pagos"></div>
                    La primera parcialidad de $859 USD
                    se paga al inicio.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La segunda parcialidad de $699 USD
                    a pagar del 7 de marzo de 2021.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La tercera parcialidad se paga de $699 USD a pagar el 27 de marzo de 2021.
                </div>
            </div>
        </div>

        <!-- Program special fee -->
        <div id="specialFee" class="modal special-modal-container">

            <div class="special-modal-cont">

                <div class="special-modal-title robotoBo">
                    PRECIO ESPECIAL PARA INSCRIPCIÓN EN GRUPO
                </div>

                <div class="special-modal-subtitle robotoBo">
                    El programa ofrece un descuento hasta de 20% si te inscribes con tus colegas.
                </div>

                <form class="special-modal-form" action="https://www2.emeritus.org/l/134351/2020-03-27/5db1dl"
                      id="formSpecialFee" method="POST">

                    <div class="special-modal-flex">

                        <div class="input-group-special-modal mdInput">

                            <label for="" class="special-label-title robotoBo">Nombre*</label>
                            <input type="text" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required name="first_name"
                                   id="firstName" class="special-input" style="text-transform: capitalize;">

                        </div>

                        <div class="input-group-special-modal mdInput">

                            <label for="" class="special-label-title robotoBo">Email*</label>
                            <input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" required
                                   name="email" id="Email" class="special-input">

                        </div>

                    </div>

                    <div class="special-modal-flex">

                        <div class="input-group-special-modal mdInput">

                            <label for="" class="special-label-title robotoBo">Compañía*</label>
                            <input type="text" name="Company" id="Company" class="special-input">

                        </div>

                        <div class="input-group-special-modal mdInput">

                            <label for="" class="special-label-title robotoBo">Puesto*</label>
                            <input type="text" name="job_title" id="jobTitle" class="special-input">

                        </div>

                    </div>

                    <div class="input-group-special-modal lgInput">

                        <label for="" class="special-label-title robotoBo">¿Cuántas personas te interesa
                            inscribir?*</label>
                        <select class="special-input" name="Group_Enrol_No_of_Enrolments" id="groupEnrol" required>
                            <option value=""></option>
                            <option value="3">3</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="More than 10">Mas de 10</option>
                        </select>

                    </div>

                    <div class="input-group-special-modal lgInput">

                        <label for="" class="special-label-title robotoBo">Comentarios y preguntas</label>
                        <textarea class="special-input __textarea" name="Group_Enrol_Query" id="groupEnrolQuery"
                                  cols="30" rows="5"></textarea>

                    </div>

                    <div class="input-group-button">
                        <input type="hidden" name="lead_source" id="lead_source" value="">
                        <input type="hidden" name="utm_source" id="utm_source" value="">
                        <input type="hidden" name="utm_medium" id="utm_medium" value="">
                        <input type="hidden" name="utm_term" id="utm_term" value="">
                        <input type="hidden" name="utm_content" id="utm_content" value="">
                        <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                        <input type="hidden" name="browser" id="Browser" value="">
                        <input type="hidden" name="course" id="Course" value="programSpecialFee">
                        <input type="hidden" name="retURL" value="<?php echo $current_link . $queryString ?>">
                        <button type="submit" class="button-special-fee-submit robotoBo">
                            Confirmar
                        </button>

                    </div>

                </form>

            </div>

        </div>

    </div>

    <div class="form-container" id="form">
        <div class="form-title grapRe fs14 negro23">Para obtener más información, rellena el formulario</div>

        <!-- Enrollment Engine Form -->
        <div class="ee-iframe-431"></div>
        <?php
        /*
        ?>
        <form class="form-cont" action="https://www2.emeritus.org/l/134351/2019-02-12/4wws45" method="post"
            id="formDesk">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="grapRe mdl-textfield__input" type="text" id="first_name" name="first_name"
                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required style="text-transform: capitalize;">
                <label class="grapRe mdl-textfield__label" for="first_name">Nombre(s)</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="grapRe mdl-textfield__input" type="text" id="last_name" name="last_name"
                    pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+" required style="text-transform: capitalize;">
                <label class="grapRe mdl-textfield__label" for="last_name">Apellido(s)</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="grapRe mdl-textfield__input" type="email" id="email" name="email"
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$" required>
                <label class="grapRe mdl-textfield__label" for="email">Email</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <select id="country" name="Country" class="mdl-textfield__input Country" required>
                </select>
                <label class="grapRe mdl-textfield__label" for="country">País</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <select id="work_experience" name="work_experience"
                    class="grapRe mdl-textfield__input work_experience" required>
                    <option value=""></option>
                    <option value="Less than 5 Years">Menos de 5 años</option>
                    <option value="5-10 Years">5-10 años</option>
                    <option value="10-15 Years">10-15 años</option>
                    <option value="15-20 Years">15-20 años</option>
                    <option value="> 20 Years">&gt; 20 años</option>
                </select>
                <label class="grapRe mdl-textfield__label" for="work_experience">Experiencia Profesional</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <!-- <input class="grapRe mdl-textfield__input" type="tel" id="mobile" name="mobile" maxlength="14" minlength="5"
                onkeypress="return valida(event)" pattern="[\+][0-9]+" required title="Agrega el simbolo (+) antes del número teléfonico"> -->
                <input class="grapRe mdl-textfield__input" type="tel" id="mobile" name="mobile" maxlength="14"
                    minlength="5" onkeypress="return valida(event)" pattern="[0-9]+" required>
                <label class="grapRe mdl-textfield__label" for="mobile">Teléfono Móvil</label>
            </div>
            <!-- <div class="mdc-text-field-helper-text fs12 grapRe gris70" aria-hidden="true" style="margin: 0 0 0 10px;">Ej: +55 555 555 5555</div> -->
            <div class="">
                <div class="form-group" id="gdpr-consent" style="display:none;">
                    <label class="checkbox-inline fs14 grapRe negro23">
                        <input type="checkbox" value="Yes I Agree" name="agree" id="agree">
                        Recibir un correo electrónico y otras comunicaciones de IESE y
                        Sus socios universitarios sobre este programa y otros programas relevantes.
                    </label>
                </div>
            </div>
            <div class="button-container">
                <input type="hidden" name="lead_source" id="lead_source" value="">
                <input type="hidden" name="utm_source" id="utm_source" value="">
                <input type="hidden" name="utm_medium" id="utm_medium" value="">
                <input type="hidden" name="utm_term" id="utm_term" value="">
                <input type="hidden" name="utm_content" id="utm_content" value="">
                <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                <input type="hidden" name="browser" id="browser" value="">
                <input type="hidden" name="course" id="course" value="IESE - Mindset Digital">
                <input type="hidden" name="retURL" value="https://emeritus.iese.edu/Mindset-Digital/Thanks.php">
                <button class="grapBo fs16 blanco" type="submit" id="btn-download-brochure">
                    DESCARGAR EL FOLLETO
                    <img class="descargar" src="../assets/img/svg/icon-descargar.svg" alt="Download">
                </button>
            </div>
        </form>
        */
        ?>

        <?php
        /*
        ?>
        <div class="private-data">
            <div class="grapRe fs11 data negro23">
                Tus datos personales no serán compartidos con terceros. Los datos facilitados en el
                presente formulario serán tratados exclusivamente por EMERITUS, sin que IESE tenga
                acceso a ellos, salvo que opte por matricularse en alguno de sus programas, en cuyo
                caso, se le informará debidamente de nuestra política de privacidad en su condición
                de alumnos. Para obtener información sobre el tratamiento de sus datos para la descarga
                del folleto, acceda a:
            </div>
            <div>
                <a class="grapBo fs14 rosaFB" href="https://latam.emeritus.org/politica-de-privacidad"
                   target="_blank">
                    Política de Privacidad
                </a>
            </div>
        </div>
        <?php
        */
        ?>
    </div>

</div>

<!-- Counter -->
<div class="counter-container desktop">
    <div class="counter">
        <div class="counter-number grapMe fs36 negro19">
            60
        </div>
    </div>
    <div class="counter-title grapMe fs28 negro19">
        Plazas máximo en el grupo
    </div>
</div>
<!-- Sección Nuevo Mundo -->
<div class="new-world-container desarrolla-talento">
    <div class="new-world-title grapBo fs36 negro3D">
        Dirigir personas con inteligencia, ¿artificial?
    </div>
    <div class="new-world-subtitle larger-container grapRe fs28 negro507">
        El Covid-19 acelera la transformación digital y el uso de la Inteligencia Artificial como una vía efectiva para
        responder a nuevas formas de trabajo, hábitos de consumo y maneras de ejercer un liderazgo resiliente desde la
        dirección de Recursos Humanos.
    </div>
</div>

<!-- Separador de secciones -->
<hr class="linea-separadora desktop">

<!-- Sección Con Certificado... -->
<div class="con-certificado-container desarrolla-talento">
    <div class="con-certificado-title grapBo fs32 negro3D">
        Con este programa aprenderás a:
        <div class="con-certificado-cont">
            <div class="con-certificado-beneficios" data-aos="zoom-out-right" data-aos-offset="50"
                 data-aos-delay="100" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img larger-icon">
                    <img src="../assets/img/png/desarrolla-talento/gestionar_capital_humano.png" alt="icono aprender 1">
                </div>
                <div class="con-certificado-beneficios-description shorter-container grapRe fs16 gris66">
                    <div class="title grapBo fs20 negro19">
                        GESTIONAR EL CAPITAL HUMANO
                    </div>
                    con una perspectiva distinta y en un ambiente volátil, incierto, complejo y ambiguo (VUCA por sus
                    siglas en inglés).
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-left" data-aos-offset="50"
                 data-aos-delay="200" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img larger-icon">
                    <img src="../assets/img/png/desarrolla-talento/introducir_gestionar_herramientas.png"
                         alt="icono aprender 3">
                </div>
                <div class="con-certificado-beneficios-description shorter-container grapRe fs16 gris66">
                    <div class="title grapBo fs18 negro19">
                        INTRODUCIR Y GESTIONAR LAS HERRAMIENTAS
                    </div>
                    de digitalización y automatización (IA) adecuadas para tu empresa. Así como aplicar metodologías
                    como agile, scrum y lean-startup.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-right" data-aos-offset="50"
                 data-aos-delay="300" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img larger-icon">
                    <img src="../assets/img/png/desarrolla-talento/disenar_plan_estrategico.png" alt="icono aprender 2">
                </div>
                <div class="con-certificado-beneficios-description shorter-container grapRe fs16 gris66">
                    <div class="title grapBo fs18 negro19">
                        DISEÑAR UN PLAN ESTRATÉGICO
                    </div>
                    para transformar la gestión de RH en respuesta al mundo digital.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-left" data-aos-offset="50"
                 data-aos-delay="400" data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img  larger-icon">
                    <img src="../assets/img/png/desarrolla-talento/disenar_puestos.png" alt="icono aprender 4">
                </div>
                <div class="con-certificado-beneficios-description shorter-container grapRe fs16 gris66">
                    <div class="title grapBo fs18 negro19">
                        DISEÑAR LOS NUEVOS PUESTOS DE TRABAJO
                    </div>
                    que, a través de la digitalización, impulsen la internacionalización de la organización (Equipos
                    Virtuales Globales de Alto Rendimiento).
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="linea-separadora">

<!-- Sección Plan de estudios -->
<div class="plan-de-estudios-container desarrolla-talento">
    <div class="plan-de-estudios-title grapBo fs30 negro3D">
        Plan de estudios
    </div>
    <div class="modulos-container">
        <ul class="collapsible">
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 1</div>
                    <div class="module-title grapRe negro23">
                        Transformación hacia el mundo digital y la cultura agile
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 2</div>
                    <div class="module-title grapRe negro23">Liderar a los millennials: retribución y carreras
                        profesionales
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 3</div>
                    <div class="module-title grapRe negro23">Cómo introducir las herramientas digitales y de
                        comunicación en el departamento de RRHH
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 4</div>
                    <div class="module-title grapRe negro23">El diseño del puesto de trabajo en un mundo globalizado
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 5</div>
                    <div class="module-title grapRe negro23">Los nuevos puestos de trabajo en el mundo digital</div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 6</div>
                    <div class="module-title grapRe negro23">Atraer y retener talento en la era de la Inteligencia
                        Artificial
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 7</div>
                    <div class="module-title grapRe negro23">Gestión integral del DRH: ética y liderazgo</div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
        </ul>
    </div>
</div>

<hr class="linea-separadora">

<!-- El programa es para ti, si -->
<div class="el-certificado-container desarrolla-talento">
    <div class="el-certificado-title grapBo fs32 negro3D">
        El programa Desarrolla el talento en la era digital es para ti si:
    </div>
    <div class="el-certificado-cont">
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="100" data-aos-duration="500">
            Eres director de RH y te interesa acelerar los procesos de transformación digital en la empresa.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="200" data-aos-duration="500">
            Estás interesado en mejorar la gestión del talento humano para adecuarlo a la era digital.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="300" data-aos-duration="500">
            Te interesa lograr que la función de RH adquiera un perfil estratégico en el negocio.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="400" data-aos-duration="500">
            Eres un emprendedor en busca de nuevos esquemas para impulsar el proceso de digitalización de tu empresa.
        </div>
    </div>
</div>
<hr class="linea-separadora">

<!-- Sección Video -->
<div class="video-container desarrolla-talento">
    <div class="title grapBo fs32 negro3D">
        Aula Virtual
    </div>
    <iframe src="https://www.youtube.com/embed/Nk35vcV4jaI" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="subtitle grapBo fs18 negro19">
        En donde estés, estás adentro
    </div>
    <div class="description grapRe fs18 negro19">
        Participa en debates en vivo e interactúa con los profesores de manera directa.
        Rompe las barreras entre el aprendizaje presencial y online.
    </div>
</div>
<hr class="linea-separadora">

<!-- Sección Metodología -->
<div class="metodology-container" style="padding: 30px 0!important;">
    <div class="title grapSe-Bo fs24 negro19">
        Metodología
    </div>
    <div class="subtitle grapRe fs18 negro19">
        Un estimulante itinerario de aprendizaje que te llevará desde la reflexión
        sobre los retos a la definición de un plan de acción para alcanzarlos.
    </div>
    <div class="metodology-cont">
        <div class="metodology">
            <div class="img">
                <img src="../assets/img/svg/icono-aprendizaje-interactivo.svg" alt="Aprendizaje-interactivo">
            </div>
            <div class="metodology-title grapBo fs28 negro19">
                Aprendizaje interactivo
            </div>
            <div class="metodology-subtitle grapRe fs16 negro23">
                Video-conferencias, entrevistas con expertos, presentaciones interactivas y sesiones en vivo.
            </div>
        </div>
        <div class="metodology">
            <div class="img">
                <img src="../assets/img/png/IAI/icon-chat.png" alt="Voces expertas">
            </div>
            <div class="metodology-title grapBo fs28 negro19">
                Voces expertas
            </div>
            <div class="metodology-subtitle grapRe fs16 negro23">
                Entrevistas con los expertos en la gestión de talento.
            </div>
        </div>
        <div class="metodology">
            <div class="img">
                <img src="../assets/img/svg/icono-plan-accion.svg" alt="Plan-de-acción">
            </div>
            <div class="metodology-title grapBo fs28 negro19">
                Plan de acción
            </div>
            <div class="metodology-subtitle grapRe fs16 negro23">
                Aplica lo aprendido en un plan de acción para ti y para tu empresa.
            </div>
        </div>
    </div>
</div>
<hr class="linea-separadora">

<!-- Sección Tutores Expertos -->
<div class="tutores-expertos-container desarrolla-talento">
    <div class="tutores-expertos-title grapBo fs32 negro3D">
        Profesores
    </div>
    <div class="tutor-container">


        <div class="tutor-cont">

            <!-- Jose Ramón -->
            <div class="tutor-desc">
                <div class="tutor-imagen">
                    <img src="../assets/img/png/desarrolla-talento/jose_ramon_pin.png" alt="JOSÉ RAMÓN PIN">
                </div>
                <div class="tutor-data">
                    <div class="grapBo fs18 negro19">JOSÉ RAMÓN PIN</div>
                    <div class="grapMe fs15 gris66">
                        Profesor Emérito del Departamento de Dirección de Personas en las Organizaciones.
                        Miembro del Comité Académico de Barna Business School.
                    </div>
                </div>
            </div>

            <!-- Guido -->
            <div class="tutor-desc">
                <div class="tutor-imagen">
                    <img src="../assets/img/png/desarrolla-talento/stein_guido.png" alt="GUIDO STEIN">
                </div>
                <div class="tutor-data">
                    <div class="grapBo fs18 negro19">GUIDO STEIN</div>
                    <div class="grapMe fs15 gris66">
                        Profesor del Departamento de Dirección de Personas en las Organizaciones.
                        <br><br>
                        Director de la Unidad de Negociación y socio de Inicia Corporate, compañía de fusiones y
                        adquisiciones y finanzas corporativas.
                    </div>
                </div>
            </div>
        </div>

    </div>


</div>
<hr class="linea-separadora">

<!-- Sección Certificado -->
<div class="certificado-container">
    <div class="certificado-cont">
        <!-- Link to open the modal -->
        <a class="certificado-img" href="#ex1" rel="modal:open">
            <div>
                <img src="../assets/img/png/desarrolla-talento/certificado-desarrolla-el-talento-ESE-oct2020.png" alt="Certificado">
            </div>
        </a>
        <!-- Modal HTML embedded directly into document -->
        <div id="ex1" class="modal modal-certificado">
            <img src="../assets/img/png/desarrolla-talento/certificado-desarrolla-el-talento-ESE-oct2020.png" alt="Certificado">
        </div>
        <div class="certificado-datos">
            <div class="certificado-title grapBo fs32 blanco">
                Certificado
            </div>
            <div class="certificado-subtitle grapRe fs20 blanco">
                Al concluir satisfactoriamente el programa, los participantes
                son reconocidos con un certificado oficial de conclusión de
                estudios respaldado por IESE Business School.
            </div>
            <div class="certificado-button">
                <a class="grapBo fs16 blanco anchor_apply" target="_blank"
                   rel="noopener noreferrer" id="btn-apply-now" style="cursor: pointer;">
                    REGÍSTRATE
                    <img src="../assets/img/svg/long-arrow-alt-right-solid.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Sección Rankings -->
<div class="rankings-container desarrolla-talento">
    <div class="rankings-title grapBo fs32 negro19">Rankings</div>
    <div class="ranking-cont">
        <div class="ranking">
            <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="100" data-aos-duration="500"
                 data-aos-easing="ease-in-out" src="../assets/img/png/M&L/1st-Ranking-FT-Executive-Edudcation.png"
                 alt="First">
            <!-- <div class="title grapMe fs24 gris66">
            in world
        </div>
        <div class="year grapBo fs18 negro19">
            2019
        </div>
        <div class="subtitle grapRe fs18 gris66">
            Executive Education Programs
        </div>
        <div class="source grapRe fs18 gris66">
            <i>
                Financial Times
            </i>
        </div> -->
        </div>
        <div class="ranking">
            <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="200" data-aos-duration="500"
                 data-aos-easing="ease-in-out" src="../assets/img/png/M&L/1st-Ranking-FT-Custom-Programs.png"
                 alt="Second">
            <!-- <div class="title grapMe fs24 gris66">
            in world
        </div>
        <div class="year grapBo fs18 negro19">
            2019
        </div>
        <div class="subtitle grapRe fs18 gris66">
            Open Enrollment Programs
        </div>
        <div class="source grapRe fs18 gris66">
            <i>
                Financial Times
            </i>
        </div> -->
        </div>
        <div class="ranking">
            <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="300" data-aos-duration="500"
                 data-aos-easing="ease-in-out" src="../assets/img/png/M&L/3rd-Ranking-FT-Open-Programs.png"
                 alt="Thir">
            <!-- <div class="title grapMe fs24 gris66">
            in world
        </div>
        <div class="year grapBo fs18 negro19">
            2019
        </div>
        <div class="subtitle grapRe fs18 gris66">
            Custom Programs
        </div>
        <div class="source grapRe fs18 gris66">
            <i>
                Financial Times
            </i>
        </div> -->
        </div>
    </div>
</div>

<!-- Sección colaboración -->
<div class="colaboration-container">
    <div class="description grapMe fs14 blanco">
        IESE Business School colabora con el proveedor de formación online, EMERITUS
        Institute of Management para ofrecer un portafolio de programas online de alto
        impacto.
    </div>
</div>

<!-- Footer -->
<footer>
    <div class="footer-cont">
        <div class="left">
            <div class="footer-logo">
                <img src="../assets/img/svg/IESE-Business-School-footer.svg" alt="IESE Logo">
            </div>
            <div class="copyright grapRe fs12 blanco">
                IESE Business School Universidad de Navarra
                <?php echo date('Y'); ?>
            </div>
        </div>
        <div class="right">
            <div class="terminos-politicas-cont blanco">
                <a href="https://latam.emeritus.org/terminos-de-servicio" target="_blank" rel="noopener noreferrer"
                   class="grapRe fs12 blanco">Términos de
                    servicio</a>
                |
                <a href="https://latam.emeritus.org/politica-de-privacidad" target="_blank"
                   rel="noopener noreferrer" class="grapRe fs12 blanco">Política de
                    privacidad</a>
            </div>
        </div>
    </div>
</footer>


<!-- Script to handle the form population -->
<!-- <script type="text/javascript" src="../assets/js/form-input-manager.js"></script> -->
<!-- <script src="https://latam.emeritus.org/programas/assets/js/countries-latam-update.js"></script> -->

<!-- Script to prevent user from typing letters in the phone number -->
<script type="text/javascript" src="../assets/js/onkeypress.js"></script>

<!-- AOS Animations -->
<script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script defer src="../assets/js/aos-animations-manager.js"></script>
<script type="text/javascript" src="../assets/js/lazysizes.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script defer type="text/javascript" src="../assets/js/logs.js"></script>
<script async type="text/javascript" src="../assets/js/utm_populate.js"></script>
<!-- <script asyn type="text/javascript" src="../assets/js/check_input_values.js"></script> -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script async type="text/javascript" src="../assets/js/main.js"></script>


</body>


</html>