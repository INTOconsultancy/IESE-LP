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
    <title>IESE | Mujer y liderazgo</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://emeritus.iese.edu/mujer-y-liderazgo/"/>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png"/>



    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css"/>
    <link rel="stylesheet" href="../assets/scss/stylesheet.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">


    <script src="https://code.jquery.com/jquery-3.4.0.min.js"
            integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>



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
        <div class="title grapBo fs32 negro19">Mujer y liderazgo</div>
        <div class="title grapBo fs20 negro19">Refuerza tu estilo de liderazgo</div>
        <div class="title grapRe fs24 negro23">30 / septiembre / 2019</div>
        <div class="hero-title-time">
            <div class="desc grapRe fs16 negro19">10 SEMANAS</div>
            <div class="desc movil grapRe fs16 negro19">6 HORAS POR SEMANA</div>
            <div class="desc desktop grapRe fs16 negro19">6 HORAS POR SEMANA</div>
            <div class="desc grapBo fs16 negro19">PRECIO: $ 1,950 USD</div>
        </div>
        <div class="notas grapBo fs16 rojo39">
            <a class="rojo39" href="#ex2" rel="modal:open">
                <img class="lazyload" data-src="../assets/img/svg/info-circle-solid.svg" alt="información">
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
                Las siguientes opciones de pago están disponibles para el Curso de Mujer y liderazgo:
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
                    La primera parcialidad de $,1054 USD
                    se paga al inicio.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La segunda parcialidad de $935 USD.
                    a pagar del 25 de octubre del 2019.
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
                    a pagar del 25 de octubre del 2019.
                </div>
                <div class="precio-pago">
                    <div class="dot-pagos"></div>
                    La tercera parcialidad se paga a más tardar el 09 de noviembre: $635 USD.
                </div>
            </div>
        </div>
        <!--  -->
    </div>
    <div class="form-container" id="form">
        <div class="form-title grapRe fs14 negro23">Para obtener más información, llena el formulario</div>
        <form class="form-cont" action="http://www2.emeritus.org/l/134351/2019-06-11/545njl" method="post"
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
        Refuerza tu estilo de liderazgo
    </div>
    <div class="new-world-subtitle grapRe fs20 gris70">
        Las organizaciones que cuentan con ejecutivas formadas en alta dirección 
        consiguen mejorar su competitividad y promover competencias que 
        contribuyen a humanizar su organización y a mejorar el compromiso de los 
        equipos.
    </div>
    <div class="choose-efforts-container">
            <div class="choose-efforts-title grapRe fs18 negro19">
                Las mujeres quieren elegir dónde centrar sus esfuerzos:
            </div>
            <div class="efforts-container">
                <div class="effort">
                    <div class="logo-effort">
                        <img src="../assets/img/svg/icon-highlights-1.svg" alt="">
                    </div>
                    <div class="title-effort grapBo fs30 negro19">
                        60%
                    </div>
                    <div class="subtitle-effort grapRe fs18 negro23">
                        Desea compatibilizar el trabajo 
                        con su vida familiar.
                    </div>
                </div>
                
                <div class="effort">
                    <div class="logo-effort">
                        <img src="../assets/img/svg/icon-highlights-2.svg" alt="">
                    </div>
                    <div class="title-effort grapBo fs30 negro19">
                        20%
                    </div>
                    <div class="subtitle-effort grapRe fs18 negro23">
                        Opta, en exclusiva, por atender a su familia.
                    </div>
                </div>
                
                <div class="effort">
                    <div class="logo-effort">
                        <img src="../assets/img/svg/icon-highlights-3.svg" alt="">
                    </div>
                    <div class="title-effort grapBo fs30 negro19">
                        20%
                    </div>
                    <div class="subtitle-effort grapRe fs18 negro23">
                        Tiende a priorizar su trabajo por encima de otros ámbitos.
                    </div>
                </div>
            </div>
            <div class="efforts-source grapRe fs14 negro3D">
                (IESE Business School – Índice de Liderazgo Femenino I-Wil 2018)
            </div>
    </div>
    
    <div class="choose-efforts-container">
            <div class="efforts-container" style="margin: 20px auto; padding: 0 35px">
                <div class="effort-large">
                    <div class="logo-effort">
                        <img src="../assets/img/svg/Trazado.svg" alt="">
                    </div>
                    <div class="title-effort grapBo fs30 negro19">
                        En 2018 menos del 5%
                    </div>
                    <div class="subtitle-effort grapRe fs18 negro23">
                        De las mujeres ocupaban posiciones de alta dirección de las grandes corporaciones.
                    </div>
                    <div class="source-effort grapRe fs14 negro3D">
                        The New Yorker
                    </div>
                </div>
            </div>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Con Certificado... -->
<div class="con-certificado-container">
    <div class="con-certificado-title grapBo fs32 negro3D">
        En el programa Mujer y liderazgo aprenderás a:
        <div class="con-certificado-cont">
            <div class="con-certificado-beneficios" data-aos="zoom-out-right" data-aos-offset="50" data-aos-delay="100"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img class="lazyload" data-src="../assets/img/svg/icon-programa-1.svg" alt="icono aprender 1">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Realizar un diagnóstico personal de competencias
                    </div>
                    Para identificar tus fortalezas y diseñar un plan de mejora.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-right" data-aos-offset="50" data-aos-delay="300"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img class="lazyload" data-src="../assets/img/svg/icon-programa-2.svg" alt="icono aprender 2">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Compartir experiencias y generar una networking
                    </div>
                        Para crear una red de relaciones efectivas con otras mujeres 
                        directivas e identificar tus retos y los factores que 
                        obstaculizan tu progreso.
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-left" data-aos-offset="50" data-aos-delay="200"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img class="lazyload" data-src="../assets/img/svg/icon-programa-3.svg" alt="icono aprender 3">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Mejorar habilidades y capacidades para reforzar el liderazgo
                    </div>
                        Para implementar herramientas de negociación, trabajo en equipo, 
                        gestión de conflictos y toma de decisiones. 
                </div>
            </div>
            <div class="con-certificado-beneficios" data-aos="zoom-out-left" data-aos-offset="50" data-aos-delay="400"
                 data-aos-duration="500" data-aos-easing="ease-in-out">
                <div class="con-certificado-beneficios-img">
                    <img class="lazyload" data-src="../assets/img/svg/icon-programa-4.svg" alt="icono aprender 4">
                </div>
                <div class="con-certificado-beneficios-description grapRe fs16 negro19">
                    <div class="title grapBo fs18 negro19">
                        Equilibrar tu vida personal y profesional
                    </div>
                        Para gestionar tu tiempo con eficacia y emplear estrategias 
                        para lograr un equilibrio entre el trabajo y la familia.
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Video -->
<!-- <div class="video-container">
    <iframe src="https://www.youtube.com/embed/S8FTljd0wVk" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
</div> -->
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
                    <div class="module-title grapRe negro23">
                        Liderazgo y perfil de la mujer directiva.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 2</div>
                    <div class="module-title grapRe negro23">
                        Competencias directivas.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 3</div>
                    <div class="module-title grapRe negro23">
                        Liderazgo y networking.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 4</div>
                    <div class="module-title grapRe negro23">
                        Desarrollo de la competencia de negociación.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 5</div>
                    <div class="module-title grapRe negro23">
                        Delegación y gestión de reuniones.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 6</div>
                    <div class="module-title grapRe negro23">
                        Gestión del conflicto.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 7</div>
                    <div class="module-title grapRe negro23">
                        Análisis y toma de decisiones.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 8</div>
                    <div class="module-title grapRe negro23">
                        Gestión del tiempo.
                    </div>
                    <div class="collapsible-header-img hide"></div>
                </div>
                <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
            </li>
            <li class="active modulo-cont">
                <div class="collapsible-header grapRe fs16">
                    <div class="No grapMe negro19">Módulo 9</div>
                    <div class="module-title grapRe negro23">
                        Conciliación trabajo-familia. 
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
        El programa Mujer y liderazgo es para ti si:
    </div>
    <div class="el-certificado-cont">
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="100" data-aos-duration="500">
            Quieres desarrollar tus competencias gerenciales e incrementar tu valor profesional.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="200" data-aos-duration="500">
            Eres una directora de alto nivel en tu organización.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="300" data-aos-duration="500">
            Ocupas un puesto directivo de nivel medio y deseas progresar en tu vida profesional.
        </div>
        <div class="el-certificado-beneficios grapRe fs18 negro23" data-aos="fade-right" data-aos-offset="50"
             data-aos-delay="400" data-aos-duration="500">
            Eres empresaria o dueña de tu propio negocio y necesitas mejorar tus capacidades de liderazgo.
        </div>
    </div>
</div>
<hr class="linea-separadora">
<!-- Sección Tu viaje de aprendizaje -->
<div class="tu-viaje-container">
    <div class="tu-viaje-title grapBo fs32 negro3D">Tu viaje de aprendizaje</div>
    <div class="tu-viaje-subtitle grapRe fs16 gris66">
        El programa aplica varios métodos docentes dinámicos e interactivos, entre los que se incluyen:
    </div>
    <div class="tu-viaje-cont">

        <div class="aprendizaje">
            <div class="aprendizaje-img">
                <img class="lazyload" data-src="../assets/img/jpg/M&L/viaje-aprendizaje-1.jpg" alt="CONOCIMIENTO PUNTERO">
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
                <img class="lazyload" data-src="../assets/img/jpg/M&L/viaje-aprendizaje-2.jpg" alt="CONOCIMIENTO PUNTERO">
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
                <img class="lazyload" data-src="../assets/img/jpg/M&L/viaje-aprendizaje-3.jpg" alt="CONOCIMIENTO PUNTERO">
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
                <img class="lazyload" data-src="../assets/img/jpg/M&L/viaje-aprendizaje-4.jpg" alt="CONOCIMIENTO PUNTERO">
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
                <img class="lazyload" data-src="../assets/img/jpg/M&L/viaje-aprendizaje-5.jpg" alt="CONOCIMIENTO PUNTERO">
            </div>
            <div class="aprendizaje-desc">
                <div class="aprendizaje-desc-title grapBo fs18 negro19">PLAN DE ACCIÓN:</div>
                <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                    Aplica tus aprendizajes a un plan de acción concreto 
                    -para ti y para tu empresa-, con la ayuda de un tutor 
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
                    <img class="lazyload" data-src="../assets/img/jpg/M&L/Nuria-Chinchilla-IESE.jpg" alt="NURIA-CHINCHILLA">
                </div>
                <div class="tutor-data">
                    <div class="grapBo fs18 negro19">NURIA CHINCHILLA</div>
                    <div class="grapMe fs14 gris66">
                        Profesora Ordinaria de Dirección de Personas en las 
                        Organizaciones; Titular de la Cátedra Carmina Roca 
                        y Rafael Pich Aguilera de Mujer y liderazgo; Doctora 
                        en Dirección de Empresas, IESE, Universidad de 
                        Navarra; MBA, IESE, Universidad de Navarra.
                    </div>
                </div>
            </div>
            <div class="tutor-description grapRe fs16 gris66">
                La doctora Chinchilla es profesora, investigadora y consultora 
                en dirección de personas, está especializada en consejos de 
                administración, competencias de liderazgo, mujer y 
                conciliación trabajo-familia. 
                <br>
                <br>
                Forma parte de varios consejos de administración y de 
                numerosos organismos internacionales y nacionales de impulso 
                a la mujer directiva, como el International Women’s Forum o el 
                consejo asesor de la European Professional Women’s Network. 
                <br>
                <br>
                Asesora a gobiernos y empresas sobre cuestiones relacionadas 
                con el desarrollo profesional de las mujeres. Desde 2012 es la 
                candidata española para el Comité Contra la Discriminación de 
                las Naciones Unidas. Ha escrito numerosos artículos y libros, 
                entre los que destacan: Dueños de nuestro destino, del que es 
                coautora junto con Maruja Moragas (Ariel, 2007); Paradigmas 
                de liderazgo (2002); La ambición femenina (Aguilar, 2004). 
                <br>
                <br>
                La doctora Chinchilla ha sido nombrada “Mejor ejecutiva del 
                año” (2001) por la Federación Española de Mujeres Ejecutivas, 
                Profesionales y Emprendedores (FEDEPE); premio “Most 
                valuable speaker 2007” de Interban Network; y ha sido 
                reconocida durante tres años consecutivos como una de las 
                “100 mujeres españolas del siglo XXI”.
            </div>
        </div>
        <div class="tutor-cont" style="padding: 0!important; background-color: #FFFFFF; border-bottom: none;">
            <div class="tutor-cont small-cont" style="padding: 20px!important;">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img class="lazyload" data-src="../assets/img/jpg/M&L/Miguel-Angel-Arino.jpg" alt="MIGUEL-ÁNGEL-ARIÑO">
                    </div>
                    <div class="tutor-data">
                        <div class="grapBo fs18 negro19">MIGUEL ÁNGEL ARIÑO</div>
                        <div class="grapMe fs14 gris66">
                            Profesor de Análisis de Decisiones 
                            <br>
                            <br>
                            Doctor en Ciencias Matemáticas, Universitat de Barcelona
                        </div>
                    </div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer" class="btn-see-more grapSe-Bo fs16 rojo39">
                    Ver más
                </a>
            </div>
            <div class="tutor-cont small-cont" style="padding: 20px!important;">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img class="lazyload" data-src="../assets/img/jpg/M&L/Esther-Jimenez.jpg" alt="ESTHER-JIMÉNEZ">
                    </div>
                    <div class="tutor-data">
                        <div class="grapBo fs18 negro19">ESTHER JIMÉNEZ</div>
                        <div class="grapMe fs14 gris66">
                            Colaboradora científica de Dirección de Personas en las Organizaciones 
                            <br>
                            <br>
                            Doctora en Economía y Dirección de Empresas, Universidad de Navarra 
                            <br>
                            <br>
                            MBA, Universitat Oberta de Catalunya
                        </div>
                    </div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer" class="btn-see-more grapSe-Bo fs16 rojo39">
                    Ver más
                </a>
            </div>
            <div class="tutor-cont small-cont" style="padding: 20px!important;">
                <div class="tutor-desc">
                    <div class="tutor-imagen">
                        <img class="lazyload" data-src="../assets/img/jpg/M&L/Kandarp-Mehta.jpg" alt="KANDARP-MEHTA">
                    </div>
                    <div class="tutor-data">
                        <div class="grapBo fs18 negro19">KANDARP MEHTA</div>
                        <div class="grapMe fs14 gris66">
                            Senior Lecturer de Iniciativa Emprendedora y Unidad Docente de Negociación 
                            <br>
                            <br>
                            Doctor en Administración, IESE, Universidad de Navarra 
                            <br>
                            <br>
                            MBA K.S. School of Business Management, Gujarat University
                        </div>
                    </div>
                </div>
                <a href="#" target="_blank" rel="noopener noreferrer" class="btn-see-more grapSe-Bo fs16 rojo39">
                    Ver más
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Line -->
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
                <img class="lazyload" data-src="../assets/img/jpg/Certificado ML.jpg" alt="Certificado">
            </div>
        </a>
        <!-- Modal HTML embedded directly into document -->
        <div id="ex1" class="modal modal-certificado">
            <img class="lazyload" data-src="../assets/img/jpg/Certificado ML.jpg" alt="Certificado">
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
                    <img class="lazyload" data-src="../assets/img/svg/long-arrow-alt-right-solid.svg" alt="arrow">
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Sección Slider -->
<div class="slider-container">
    <div class="silder-container-title grapBo fs32 negro3D">
        Testimonios de estudiantes
    </div>
    <div class="slide-testimonio-ML">
        <div class="testimonio">
            <!-- <div class="testimonio-img">
                <img class="lazyload" data-src="../assets/img/jpg/Photo Salvador Valderas Campos.jpg" alt="Persona">
            </div> -->
            <div class="testimonio-desc grapRe fs16 negro3D">
                “Ha sido un programa fantástico, con grandes profesores y compañeras. 
                Muy inspirador, estoy convencida que me ayudará a evolucionar como 
                persona. Este es el inicio de un camino".
            </div>
            <div class="testimonio-name grapBo fs20 gris66">
                MIREUCHU ECHEVERRÍA
            </div>
            <div class="testimonio-work grapMe fs18 gris66">
                ACCENTURE, S.L.U 
                <br>
                Managing Director
            </div>
        </div>
        <div class="testimonio">
            <!-- <div class="testimonio-img">
                <img class="lazyload" data-src="../assets/img/jpg/Photo Salvador Valderas Campos.jpg" alt="Persona">
            </div> -->
            <div class="testimonio-desc grapRe fs16 negro3D">
                “Ha sido un programa fantástico, con grandes profesores y compañeras. 
                Muy inspirador, estoy convencida que me ayudará a evolucionar como 
                persona. Este es el inicio de un camino".
            </div>
            <div class="testimonio-name grapBo fs20 gris66">
                MIREUCHU ECHEVERRÍA
            </div>
            <div class="testimonio-work grapMe fs18 gris66">
                ACCENTURE, S.L.U 
                <br>
                Managing Director
            </div>
        </div>
        <div class="testimonio">
            <!-- <div class="testimonio-img">
                <img class="lazyload" data-src="../assets/img/jpg/Photo Salvador Valderas Campos.jpg" alt="Persona">
            </div> -->
            <div class="testimonio-desc grapRe fs16 negro3D">
                “Ha sido un programa fantástico, con grandes profesores y compañeras. 
                Muy inspirador, estoy convencida que me ayudará a evolucionar como 
                persona. Este es el inicio de un camino".
            </div>
            <div class="testimonio-name grapBo fs20 gris66">
                MIREUCHU ECHEVERRÍA
            </div>
            <div class="testimonio-work grapMe fs18 gris66">
                ACCENTURE, S.L.U 
                <br>
                Managing Director
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<footer>
    <div class="footer-cont">
        <div class="left">
            <div class="footer-logo">
                <img class="lazyload" data-src="../assets/img/svg/IESE-Business-School-footer.svg" alt="IESE Logo">
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
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
<script defer type="text/javascript" src="../assets/js/logs.js"></script>
<script async type="text/javascript" src="../assets/js/utm_populate.js"></script>
<script type="text/javascript" src="../assets/js/lazysizes.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script async type="text/javascript" src="../assets/js/main.js"></script>


</body>


</html>