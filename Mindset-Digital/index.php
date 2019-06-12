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
        })(window, document, 'script', 'dataLayer', 'GTM-TPB62D3');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <title>IESE | Mindset Digital</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://emeritus.iese.edu/Mindset-Digital/"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png"/>



    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="../assets/scss/stylesheet.css">
    <link rel="stylesheet" href="../assets/libs/mdl/material.min.css">


    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
            integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>



</head>

<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TPB62D3" height="0" width="0"
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
<div class="hero-container">
    <div class="hero-title">
        <div class="title grapRe fs18 rojoFF">NUEVO PROGRAMA ONLINE</div>
        <div class="title grapBo fs32 negro19">Mindset Digital</div>
        <div class="title grapBo fs20 negro19">Innovación y liderazgo en la era digital</div>
        <div class="title grapRe fs24 negro23">03 / junio / 2019</div>
        <div class="hero-title-time">
            <div class="desc grapRe fs16 negro19">8 SEMANAS</div>
            <div class="desc movil grapRe fs16 negro19">6-8 HORAS POR SEMANA</div>
            <div class="desc desktop grapRe fs16 negro19">6-8 HORAS POR SEMANA</div>
            <div class="desc grapBo fs16 negro19">PRECIO: $ 1,950 USD</div>
        </div>
        <div class="notas grapBo fs16 rojo39">
            <a class="rojo39" href="#ex2" rel="modal:open">
                <img src="../assets/img/svg/info-circle-solid.svg" alt="información">
                Pagos flexibles disponibles
            </a>
        </div>
        <!-- Modal pagos flexibles -->
        <div id="ex2" class="modal modal-pagos-flexibles">
            <div class="modal-pagos-title fs24 grapBo negro19">
                Plan de pagos flexibles
            </div>
            <div class="modal-pagos-descripcion fs18 grapBo negro19">
                Esta opción permite al alumno pagar la cuota del curso en parcialidades.
                Está disponible en la solicitud de inscripción y deberá seleccionarse
                antes de realizar el pago.
            </div>
            <div class="modal-pagos-subtitle fs16 grapRe negro19">
                Las siguientes opciones de pago están disponibles para el Curso de Mindset Digital:
            </div>
            <div class="pagos">
                <div class="pagos-title fs16 grapBo negro19">
                    Pago total
                </div>
                <div class="precio-pago fs14 robotoRe negro23">
                    <div class="dot-pagos"></div>
                    La cuota completa del curso $1,950 USD.
                </div>
            </div>
            <div class="pagos">
                <div class="pagos-title fs16 grapBo negro19">
                    Pago en dos parcialidades
                </div>
                <div class="precio-pago fs14 robotoRe negro23">
                    <div class="dot-pagos"></div>
                    La primera parcialidad de $,1055 USD
                    se paga al inicio.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La segunda parcialidad de $934 USD.
                    a pagar del 28 de junio del 2019.
                </div>
            </div>
            <div class="pagos no-border">
                <div class="pagos-title fs16 grapBo negro19">
                    Pago en 3 parcialidades
                </div>
                <div class="precio-pago fs14 robotoRe negro23">
                    <div class="dot-pagos"></div>
                    La primera parcialidad de $778 USD.
                    se paga al inicio.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La segunda parcialidad de $635 USD.
                    a pagar del 28 de junio del 2019.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La tercera parcialidad se paga a más tardar el 13 de julio: $635 USD.
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <div class="form-container" id="form">
        <div class="form-title grapRe fs18 negro23">Para obtener más información, llena el formulario</div>
        <form class="form-cont" action="https://www2.emeritus.org/l/134351/2019-02-12/4wws45" method="post"
              id="formDesk">
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="grapRe mdl-textfield__input" type="text" id="first_name" name="first_name"
                       pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                       required style="text-transform: capitalize;">
                <label class="grapRe mdl-textfield__label" for="first_name">Nombre(s)</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="grapRe mdl-textfield__input" type="text" id="last_name" name="last_name"
                       pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+"
                       required style="text-transform: capitalize;">
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
                <select id="work_experience" name="work_experience" class="grapRe mdl-textfield__input work_experience"
                        required>
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
                        Me gustaría recibir un correo electrónico y otras comunicaciones de EMERITUS y
                        Sus socios universitarios sobre este curso y otros cursos relevantes.
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
                <a class="grapBo fs14 rosaFB" href="https://latam.emeritus.org/politica-de-privacidad.php"
                   target="_blank">
                    Política de Privacidad
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Sección Nuevo Mundo -->
<div class="new-world-container">
    <div class="new-world-title grapBo fs32 negro3D">
        Nuevo mundo, nueva mentalidad
    </div>
    <div class="new-world-subtitle grapRe fs20 gris70">
        Los constantes cambios del mundo digital –ya sean sociales, móviles o de cualquier otra índole–
        están derribando barreras de entrada a los mercados, cambiando de arriba abajo modelos de negocio
        consolidados, y proponiendo nuevas formas de relacionarse con clientes y empleados. Para identificar
        y dar una respuesta efectiva a las oportunidades y retos digitales, es crucial desarrollar una
        mentalidad verdaderamente digital.
    </div>
    <div class="new-world-dates-container">
        <div class="new-world-date-cont" data-aos="fade-right" data-aos-offset="50" data-aos-delay="100"
             data-aos-duration="400" data-aos-easing="ease-in-out">
            <div class="new-world-date-img">
                <img src="../assets/img/svg/icono-destacado-1.svg" alt="Icono Destacado">
            </div>
            <p class="grapBo fs30 negro19">
                En el 2020
            </p>
            <p class="grapRe fs18 negro19">
                el 75% de los profesionales
                que usen aplicaciones
                empresariales tendrán
                asistentes inteligentes.
            </p>
            <p class="grapRe fs14 negro3D">
                Fuente: IDC FutureScape
            </p>
        </div>
        <div class="new-world-date-cont" data-aos="fade-right" data-aos-offset="50" data-aos-delay="300"
             data-aos-duration="400" data-aos-easing="ease-in-out">
            <div class="new-world-date-img">
                <img src="../assets/img/svg/icono-destacado-2.svg" alt="Icono Destacado">
            </div>
            <p class="grapBo fs30 negro19">
                Para 2021
            </p>
            <p class="grapRe fs18 negro19">
                el 50% del PIB mundial será digital.
            </p>
            <p class="grapRe fs14 negro3D">
                Fuente: “IDC FutureScape
            </p>
        </div>
        <div class="new-world-date-cont" data-aos="fade-right" data-aos-offset="50" data-aos-delay="300"
             data-aos-duration="400" data-aos-easing="ease-in-out">
            <div class="new-world-date-img">
                <img src="../assets/img/svg/icono-destacado-3.svg" alt="Icono Destacado">
            </div>
            <p class="grapBo fs30 negro19">
                En el 2022
            </p>
            <p class="grapRe fs18 negro19">
                el 72% de las
                interacciones con
                consumidores se realizarán
                por medio de tecnologías
                emergentes como chatbots.
            </p>
            <p class="grapRe fs14 negro3D">
                Fuente: Dimension Data
            </p>
        </div>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Con Certificado... -->
<div class="con-certificado-container">
    <div class="con-certificado-title grapBo fs32 negro3D">
        Con un Certificado en Mindset Digital aprenderás a:
        <div class="con-certificado-cont">
            <div class="con-certificado-beneficios" data-aos="zoom-out-right" data-aos-offset="50" data-aos-delay="100"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img src="../assets/img/svg/icono-aprender-1.svg" alt="icono aprender 1">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Emplear las dimensiones del Mindset Digital
                    </div>
                    Determinar cómo la digitalización está afectando a tu sector, industria y negocio.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-left" data-aos-offset="50" data-aos-delay="200"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img src="../assets/img/svg/icono-aprender-3.svg" alt="icono aprender 3">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Identificar las competencias necesarias
                    </div>
                    Replantear propuestas de valor y ejecutar una visión de futuro.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-right" data-aos-offset="50" data-aos-delay="300"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img src="../assets/img/svg/icono-aprender-2.svg" alt="icono aprender 2">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Incorporar metodologías y procesos ágiles e iterativos
                    </div>
                    Contribución a la transformación de tu cultura organizacional.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-left" data-aos-offset="50" data-aos-delay="400"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img src="../assets/img/svg/icono-aprender-4.svg" alt="icono aprender 4">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Identificar las cualidades, prácticas y enfoques
                    </div>
                    Los que forman a un líder con mentalidad digital.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sección Video -->
<div class="video-container">
    <iframe src="https://www.youtube.com/embed/S8FTljd0wVk" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div>
<!-- Sección Plan de estudios -->
<div class="plan-de-estudios-container">
    <div class="plan-de-estudios-title grapBo fs30 negro3D">
        Plan de estudios
    </div>
    <div class="modulos-container">
        <ul class="collapsible">
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 1</div>
                    <div class="module-title grapRe negro23">Entendiendo el contexto más allá de las tendencias
                        tecnológicas
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 2</div>
                    <div class="module-title grapRe negro23">Reconfiguración de sectores y adaptación de modelos
                        de
                        negocio
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 3</div>
                    <div class="module-title grapRe negro23">Impactos de densidad digital</div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 4</div>
                    <div class="module-title grapRe negro23">Pasos hacia tu transformación digital</div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 5</div>
                    <div class="module-title grapRe negro23">Cómo conseguir nuevos modelos de negocio</div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 6</div>
                    <div class="module-title grapRe negro23">Aptitudes y capacidades para un Mindset Digital</div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 7</div>
                    <div class="module-title grapRe negro23">Mindset Digital - creando organizaciones diseñadas
                        para
                        cambiar
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
        </ul>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección El Certificado... -->
<div class="el-certificado-container">
    <div class="el-certificado-title grapBo fs32 negro3D">
        El programa Mindset Digital es para ti si:
    </div>
    <div class="el-certificado-cont">
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="100" data-aos-duration="500">
            Necesitas llevar a cabo la
            transición entre viejas y nuevas
            formas de trabajo dentro de tu
            empresa u organización.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="200" data-aos-duration="500">
            Por tus responsabilidades
            debes aplicar estrategias
            efectivas para la implementación de cambios
            en tu cultura organizacional.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="300" data-aos-duration="500">
            Eres emprendedor y necesitas
            claves estratégicas para
            desarrollar o competir con
            modelos de negocio disruptivos.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="400" data-aos-duration="500">
            Necesitas complementar tus
            conocimientos para poder
            plantear modelos de negocio y
            propuestas de valor adecuadas
            para la era digital.
        </div>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Tu viaje de aprendizaje -->
<div class="tu-viaje-container">
    <div class="tu-viaje-title grapBo fs32 negro3D">Tu viaje de aprendizaje</div>
    <div class="tu-viaje-subtitle grapRe fs16 gris66">Un estimulante itinerario de aprendizaje que te llevará desde
        la reflexión sobre los retos a la definición de un plan de acción para alcanzarlos.
    </div>
    <div class="tu-viaje-cont">

        <div class="aprendizaje">
            <div class="aprendizaje-img">
                <img src="../assets/img/jpg/viaje-aprendizaje-1.jpg" alt="CONOCIMIENTO PUNTERO">
            </div>
            <div class="aprendizaje-desc">
                <div class="aprendizaje-desc-title grapBo fs18 negro19">CONOCIMIENTO PUNTERO:</div>
                <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                    Descubre lo conceptos más relevantes y actuales a través de
                    vídeo-conferencias, presentaciones interactivas y otros
                    contenidos completamente adaptados al consumo online.
                </div>
            </div>
        </div>

        <div class="aprendizaje">
            <div class="aprendizaje-img">
                <img src="../assets/img/jpg/viaje-aprendizaje-2.jpg" alt="CONOCIMIENTO PUNTERO">
            </div>
            <div class="aprendizaje-desc">
                <div class="aprendizaje-desc-title grapBo fs18 negro19">DISCUSIONES EN DIRECTO:</div>
                <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                    Participa en vivo en debates sobre alternativas y decisiones
                    de negocio, basadas en casos reales, de la mano de nuestros
                    profesores y a través de nuestra vanguardista
                    <a class="rojoFF" href="https://www.youtube.com/watch?v=Nk35vcV4jaI&t=1s" target="_blank"
                       rel="noopener noreferrer">
                        Aula Virtual.
                    </a>
                </div>
            </div>
        </div>

        <div class="aprendizaje">
            <div class="aprendizaje-img">
                <img src="../assets/img/jpg/viaje-aprendizaje-3.jpg" alt="CONOCIMIENTO PUNTERO">
            </div>
            <div class="aprendizaje-desc">
                <div class="aprendizaje-desc-title grapBo fs18 negro19">INSPIRACIÓN DE DIRECTIVOS DE PRIMER NIVEL:</div>
                <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                    Escucha las experiencias que comparten altos directivos de
                    compañías líderes, en video-entrevistas realizadas con ellos.
                </div>
            </div>
        </div>

        <div class="aprendizaje">
            <div class="aprendizaje-img">
                <img src="../assets/img/jpg/viaje-aprendizaje-4.jpg" alt="CONOCIMIENTO PUNTERO">
            </div>
            <div class="aprendizaje-desc">
                <div class="aprendizaje-desc-title grapBo fs18 negro19">NUEVOS PUNTOS DE VISTA:</div>
                <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                    Cuestiona tus propias ideas compartiéndolas con otros
                    participantes, a través de foros de debate o trabajos
                    en equipo.
                </div>
            </div>
        </div>

        <div class="aprendizaje">
            <div class="aprendizaje-img">
                <img src="../assets/img/jpg/viaje-aprendizaje-5.jpg" alt="CONOCIMIENTO PUNTERO">
            </div>
            <div class="aprendizaje-desc">
                <div class="aprendizaje-desc-title grapBo fs18 negro19">PLAN DE ACCIÓN:</div>
                <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                    Traslada tus aprendizajes a un plan de acción concreto
                    – para ti y para tu empresa, con la ayuda de un tutor
                    que te guiará con ejercicios específicos.
                </div>
            </div>
        </div>

    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Tutores Expertos -->
<div class="tutores-expertos-container">
    <div class="tutores-expertos-title grapBo fs32 negro3D">
        Claustro y tutores expertos
    </div>
    <div class="tutor-container">
        <div class="tutor-cont">
            <div class="tutor-desc">
                <div class="tutor-imagen">
                    <img src="../assets/img/jpg/Sandra-Sieber.jpg" alt="PROF. SANDRA SIEBER">
                </div>
                <div class="tutor-data">
                    <div class="grapBo fs18 negro19">PROF. SANDRA SIEBER</div>
                    <div class="grapMe fs14 gris66">
                        Directora Académica, Profesora ordinaria y directora 
                        del Departamento de Sistemas de Información del IESE 
                        Business School.
                    </div>
                </div>
            </div>
            <div class="tutor-description grapRe fs16 gris66">
                La profesora Sieber ha dedicado mucho tiempo al estudio del
                impacto de las TIC en las prácticas de trabajo de las
                organizaciones y las personas, desde una variedad de
                perspectivas. En la actualidad, sus investigaciones se centran
                en el análisis del impacto de la digitalización en las personas,
                empresas, sectores y para la sociedad en su conjunto.
                <br>
                <br>
                Desde una perspectiva sectorial, la Prof. Sieber está
                especialmente interesada en aquellos sectores que están
                siendo transformados por los avances tecnológicos recientes,
                como las telecomunicaciones, la banca, el sector salud y los
                medios de comunicación y el entretenimiento.
                <br>
                <br>
                La profesora Sieber tiene amplia experiencia de trabajo con
                audiencias ejecutivas en Europa, el Norte y el Sur de América,
                Asia, Medio Oriente y Africa. Ha impartido clases, dirigido
                Custom Programs y ha hecho consultas con empresas
                multinacionales tales como Oracle, BBVA, La Caixa, Banco
                Santander, Telefónica, Vodafone, BMW, Volkswagen, Bonfiglioli,
                Renta Corporación, Komatsu, Olympus, RTE, Henkel, Erste
                Bank, Boehringer Ingelheim, Boston Scientific o Desigual.
                Realiza de forma regular funciones de mentoría con empresas
                de nueva creación (start-ups), incubadoras y fondos
                tecnológicos.
            </div>
        </div>
        <div class="tutor-cont">
            <div class="tutor-desc">
                <div class="tutor-imagen">
                    <img src="../assets/img/jpg/Alex-lago.jpg" alt="ALEX LAGO">
                </div>
                <div class="tutor-data">
                    <div class="grapBo fs18 negro19">ALEX LAGO</div>
                    <div class="grapMe fs14 gris66">
                        Profesor Ordinario y director del departamento de Dirección de 
                        Producción, Tecnología y Operaciones, y codirector de The Africa 
                        Initiative en el IESE.
                    </div>
                </div>
            </div>
            <div class="tutor-description grapRe fs16 gris66">
            Alejandro Lago es Profesor Ordinario y director del departamento de 
            Dirección de Producción, Tecnología y Operaciones, y codirector de 
            The Africa Initiative en el IESE. Cuenta con un PhD en Ingeniería 
            por la University of California en Berkeley, donde obtuvo la Gordon 
            F. Newell Fellow. También es Ingeniero de Caminos, Canales y Puertos 
            por la Universitat Politècnica de Catalunya y cursó el Program for 
            Management Development en el IESE.
            <br>
            <br>
            Los intereses del profesor Lago se centran en la dirección de sistemas 
            de operaciones complejas, tanto en el sector industrial como en el ámbito 
            de los servicios. Actualmente se está centrando en el estudio del diseño 
            de sistemas de servicios, especialmente en el estudio de la implicación 
            de proveedores y clientes en las operaciones mediante el uso de nuevas 
            tecnologías. También tiene un interés especial en la gestión de sistemas 
            de operaciones que tengan que ver con la economía colaborativa (Bicing, 
            Avancar, Uber, etc).
            <br>
            <br>
            Cuenta también con una amplia experiencia como consultor en el campo de 
            la gestión de operaciones y servicios, al haber trabajado para grandes 
            empresas industriales y distribuidoras, compañías aéreas y autoridades 
            aeroportuarias y, más recientemente, bancos y compañías aseguradoras, 
            entre otras.
            <br>
            <br>
            El profesor Lago ha desarrollado su espíritu emprendedor al incorporarse 
            en el año 2000 a una start-up californiana en plena burbuja de Internet. 
            En la actualidad es socio de varias iniciativas relacionadas con el uso 
            de nuevas tecnologías móviles, con interés especial en “mobile money”. 
            </div>
        </div>
        <div class="tutor-cont">
            <div class="tutor-desc">
                <div class="tutor-imagen">
                    <img src="../assets/img/jpg/Pilar-barrio.jpg" alt="Pilar Barrio">
                </div>
                <div class="tutor-data">
                    <div class="grapBo fs18 negro19">Pilar Barrio</div>
                    <div class="grapMe fs14 gris66">
                        Tutora del programa
                    </div>
                </div>
            </div>
            <div class="tutor-description grapRe fs16 gris66">
                Pilar ha destacado como consultora y
                formadora de equipos de marketing digital.
                Directora de Barrio Digital, comunidad de
                expertos que da servicios de estrategia
                digital a startups y negocios a nivel mundial,
                ha colaborado con grandes empresas como
                Coca Cola, GM, Nestlé, Sony y la BBC.
                <br>
                <br>
                Pilar se desempeña también como
                facilitadora de las masterclasses de la Google
                Digital Academy en Europa, en temas como
                marketing programático, estrategia de
                móviles y soluciones creativas para marcas.
            </div>
        </div>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Rankings -->
<div class="rankings-container">
    <div class="rankings-title grapBo fs32 negro19">Rankings</div>
    <div class="ranking-cont">
        <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="100" data-aos-duration="500"
             data-aos-easing="ease-in-out" src="../assets/img/png/Ranking-FT-Custom-1.png" alt="First">
        <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="200" data-aos-duration="500"
             data-aos-easing="ease-in-out" src="../assets/img/png/Ranking-FT-ExecEd.png" alt="Second">
        <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="300" data-aos-duration="500"
             data-aos-easing="ease-in-out" src="../assets/img/jpg/Ranking-FT-Open-Programs-1.jpg" alt="Thir">
    </div>
</div>
<!-- Sección Certificado -->
<div class="certificado-container">
    <div class="certificado-cont">
        <!-- Link to open the modal -->
        <a class="certificado-img" href="#ex1" rel="modal:open">
            <div>
                <img src="../assets/img/jpg/certificado-IESE-abril-2019.jpg" alt="Certificado">
            </div>
        </a>
        <!-- Modal HTML embedded directly into document -->
        <div id="ex1" class="modal modal-certificado">
            <img src="../assets/img/jpg/certificado-IESE-abril-big.jpg" alt="Certificado">
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
                <a class="grapBo fs16 blanco" href="https://bit.ly/2Ue0RND" target="_blank" rel="noopener noreferrer"
                   id="btn-apply-now">
                    INSCRÍBETE
                    <img src="../assets/img/svg/long-arrow-alt-right-solid.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Sección Slider -->
<div class="slider-container">
    <div class="silder-container-title grapBo fs32 negro19">
        Testimonios de estudiantes
    </div>
    <div class="slide-testimonio-MD">
        <div class="testimonio">
            <div class="testimonio-img">
                <img src="../assets/img/jpg/Photo Salvador Valderas Campos.jpg" alt="Persona">
            </div>
            <div class="testimonio-desc grapRe fs15 negro19">
                Este curso iluminó un terreno antes desconocido para mí, y creo que va a tener un gran impacto en
                mi carrera profesional.
                Quedé muy satisfecho y lo recomiendo ampliamente.
            </div>
            <div class="testimonio-name grapBo fs20 gris66">
                Salvador Valderas Campos
            </div>
            <div class="testimonio-work grapRe fs14 negro3D">
                National Account Manager Bacardi
            </div>
        </div>
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
                <a href="https://latam.emeritus.org/terminos-de-servicio.php" target="_blank" rel="noopener noreferrer"
                   class="grapRe fs12 blanco">Términos de
                    servicio</a>
                |
                <a href="https://latam.emeritus.org/politica-de-privacidad.php" target="_blank"
                   rel="noopener noreferrer"
                   class="grapRe fs12 blanco">Política de
                    privacidad</a>
            </div>
        </div>
    </div>
</footer>


<!-- Script to handle the form population -->
<script type="text/javascript" src="../assets/js/form-input-manager.js"></script>

<!-- Script to prevent user from typing letters in the phone number -->
<script type="text/javascript" src="../assets/js/onkeypress.js"></script>

<!-- AOS Animations -->
<script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script defer src="../assets/js/aos-animations-manager.js"></script>

<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script defer type="text/javascript" src="../assets/js/logs.js"></script>
<script async type="text/javascript" src="../assets/js/utm_populate.js"></script>
<!-- <script asyn type="text/javascript" src="../assets/js/check_input_values.js"></script> -->
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script async type="text/javascript" src="../assets/js/main.js"></script>


</body>


</html>