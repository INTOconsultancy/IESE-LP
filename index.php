<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IESE | Business School</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://emeritus.iese.edu/Mindset-Digital/" />
    <link rel="stylesheet" href="assets/scss/stylesheet.css">
    <script type="text/javascript" src="assets/libs/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/logs.js"></script>
    <script type="text/javascript" src="assets/js/countries-latam.js"></script>
    <!-- MATERIAL DESIGN LITE -->
    <link rel="stylesheet" href="assets/libs/mdl/material.min.css">
    <script src="assets/libs/mdl/material.min.js"></script>
    <!-- MATERIALIZE -->
    <script type="text/javascript" src="assets/js/materialize.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <!-- Jquery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <!-- Slick -->
    <link rel="stylesheet" href="assets/libs/slick/slick.css">
    <link rel="stylesheet" href="assets/libs/slick/slick-theme.css">
    <script type="text/javascript" src="assets/libs/slick/slick.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <!-- AOS animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="assets/img/png/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="assets/img/png/favicon.png" />
</head>

<body>
    <!-- Getting the querystring -->
    <?php
        $queryStringArray = array();
        foreach($_GET as $key=>$value){
        $parameter = $key."=".$value;
            array_push($queryStringArray, $parameter);
        }
        $queryString = implode("&", $queryStringArray);
    ?>
    <!-- Header Fixed -->
    <header>
        <div class="header-container">
            <img class="Logo-one" src="assets/img/svg/IESE-Business-School.svg" alt="IESE">
            <img class="Logo-two" src="assets/img/svg/Executive-Education.svg" alt="Executive Education">
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
    <!-- Hero Image -->
    <div class="hero-container">
        <div class="hero-title">
            <div class="title grapRe fs18 rojoFF">NUEVO PROGRAMA ONLINE</div>
            <div class="title grapBo fs32 negro19">Mindset Digital</div>
            <div class="title grapBo fs20 negro19">Innovación y liderazgo en la era digital</div>
            <div class="title grapRe fs24 negro23">01 / 04 / 2019</div>
            <div class="hero-title-time">
                <div class="desc grapRe fs16 negro19">8 SEMANAS</div>
                <div class="desc movil grapRe fs16 negro19">6-8 HORAS POR SEMANA</div>
                <div class="desc desktop grapRe fs16 negro19">6-8 HORAS POR SEMANA</div>
                <div class="desc grapBo fs16 negro19">PRECIO: $ 1,950 USD</div>
            </div>
        </div>
        <div class="form-container" id="form">
            <div class="form-title grapRe fs18 negro23">Para obtener más información, llena el formulario</div>
            <form class="form-cont" action="https://www2.emeritus.org/l/134351/2019-02-12/4wws45" method="post" id="formDesk">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="grapRe mdl-textfield__input" type="text" id="first_name" name="first_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+">
                    <label class="grapRe mdl-textfield__label" for="first_name">Nombre(s)</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="grapRe mdl-textfield__input" type="text" id="last_name" name="last_name" pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+">
                    <label class="grapRe mdl-textfield__label" for="last_name">Apellido(s)</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="grapRe mdl-textfield__input" type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,3}$">
                    <label class="grapRe mdl-textfield__label" for="email">Email</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <select id="country" name="Country" class="mdl-textfield__input Country" required>
                    </select>
                    <label class="grapRe mdl-textfield__label" for="country">País</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <select id="work_experience" name="work_experience" class="grapRe mdl-textfield__input work_experience" required>
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
                    <input class="grapRe mdl-textfield__input" type="tel" id="mobile" name="mobile" maxlength="15" minlength="5"
                        onkeypress="return valida(event)" pattern="[0-9]+">
                    <label class="grapRe mdl-textfield__label" for="mobile">Teléfono Movíl</label>
                </div>
                <div class="button-container">
                    <input type="hidden" name="lead_source" id="lead_source" value="Web">
                    <input type="hidden" name="utm_source" id="utm_source" value="">
                    <input type="hidden" name="utm_medium" id="utm_medium" value="">
                    <input type="hidden" name="utm_term" id="utm_term" value="">
                    <input type="hidden" name="utm_content" id="utm_content" value="">
                    <input type="hidden" name="utm_campaign" id="utm_campaign" value="">
                    <input type="hidden" name="browser" id="browser" value="">
                    <input type="hidden" name="course" id="course" value="IESE - Mindset Digital">
                    <input type="hidden" name="retURL" value="https://emeritus.iese.edu/Mindset-Digital/Thanks.php?<?php echo $queryString; ?>">
                    <button class="grapBo fs16 blanco" type="submit">
                        DESCARGAR EL FOLLETO
                        <img src="assets/img/svg/icon-descargar.svg" alt="Download">
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
                    <a class="grapBo fs14 rosaFB" href="https://latam.emeritus.org/politica-de-privacidad.php" target="_blank">
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
            estánderribando barreras de entrada a los mercados, cambiando de arriba abajo modelos de negocio 
            consolidados, y proponiendo nuevas formas de relacionarse con clientes y empleados. Para identificar 
            y dar una respuesta efectiva a las oportunidades y retos digitales, es crucial desarrollar una 
            mentalidad verdaderamente digital.
        </div>
        <div class="new-world-dates-container">
            <div class="new-world-date-cont" data-aos="fade-right" data-aos-offset="50" data-aos-delay="100"
                data-aos-duration="400" data-aos-easing="ease-in-out">
                <div class="new-world-date-img">
                    <img src="assets/img/svg/icono-destacado-1.svg" alt="Icono Destacado">
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
                    <img src="assets/img/svg/icono-destacado-2.svg" alt="Icono Destacado">
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
                    <img src="assets/img/svg/icono-destacado-3.svg" alt="Icono Destacado">
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
                        <img src="assets/img/svg/icono-aprender-1.svg" alt="icono aprender 1">
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
                        <img src="assets/img/svg/icono-aprender-3.svg" alt="icono aprender 3">
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
                        <img src="assets/img/svg/icono-aprender-2.svg" alt="icono aprender 2">
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
                        <img src="assets/img/svg/icono-aprender-4.svg" alt="icono aprender 4">
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
        <iframe  src="https://www.youtube.com/embed/N_qqHFE7c5A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                            tecnológicas</div>
                        <div class="collapsible-header-img hide"></div>
                    </div>
                    <div class="collapsible-body grapRe negro23 hide"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li class="active modulo-cont">
                    <div class="collapsible-header grapRe fs16">
                        <div class="No grapMe negro19">Módulo 2</div>
                        <div class="module-title grapRe negro23">Renconfiguración de sectores y adaptación de modelos de
                            negocio</div>
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
                        <div class="module-title grapRe negro23">Mindset Digital - creando organizaciones diseñadas para
                            cambiar</div>
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
        <div class="tu-viaje-subtitle grapRe fs16 gris66">Un estimulante itinerario de aprendizaje que te llevará desde la reflexión sobre los retos a la definición de un plan de acción para alcanzarlos.</div>
        <div class="tu-viaje-cont">

            <div class="aprendizaje">
                <div class="aprendizaje-img">
                    <img src="assets/img/jpg/viaje-aprendizaje-1.jpg" alt="CONOCIMIENTO PUNTERO">
                </div>
                <div class="aprendizaje-desc">
                    <div class="aprendizaje-desc-title grapBo fs18 negro19">CONOCIMIENTO PUNTERO:</div>
                    <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                        Descubre lo conceptos más relevantes y actuales a través de 
                        video-conferencias, presentaciones interactivas y otros 
                        contenidos completamente adaptados al consumo online.
                    </div>
                </div>
            </div>

            <div class="aprendizaje">
                <div class="aprendizaje-img">
                    <img src="assets/img/jpg/viaje-aprendizaje-2.jpg" alt="CONOCIMIENTO PUNTERO">
                </div>
                <div class="aprendizaje-desc">
                    <div class="aprendizaje-desc-title grapBo fs18 negro19">DISCUSIONES EN DIRECTO:</div>
                    <div class="aprendizaje-desc-subtitle grapRe fs16 gris66">
                        Participa en vivo en debates sobre alternativas y decisiones 
                        de negocio, basadas en casos reales, de la mano de nuestros 
                        profesores y a través de nuestra vanguardista 
                        <a class="rojoFF" href="https://www.youtube.com/watch?v=Nk35vcV4jaI&t=1s" target="_blank" rel="noopener noreferrer">
                            Aula Virtual.
                        </a>
                    </div>
                </div>
            </div>

            <div class="aprendizaje">
                <div class="aprendizaje-img">
                    <img src="assets/img/jpg/viaje-aprendizaje-3.jpg" alt="CONOCIMIENTO PUNTERO">
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
                    <img src="assets/img/jpg/viaje-aprendizaje-4.jpg" alt="CONOCIMIENTO PUNTERO">
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
                    <img src="assets/img/jpg/viaje-aprendizaje-5.jpg" alt="CONOCIMIENTO PUNTERO">
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
                        <img src="assets/img/jpg/Sandra-Sieber.jpg" alt="PROF. SANDRA SIEBER">
                    </div>
                    <div class="tutor-data">
                        <div class="grapBo fs18 negro19">PROF. SANDRA SIEBER</div>
                        <div class="grapMe fs14 gris66">
                            Profesora ordinaria y directora del Departamento
                            de Sistemas de Información del IESE Business
                            School.
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
                        <img src="assets/img/jpg/Pilar-barrio.jpg" alt="Pilar Barrio">
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
                data-aos-easing="ease-in-out" src="assets/img/png/Ranking-FT-Custom-1.png" alt="First">
            <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="200" data-aos-duration="500"
                data-aos-easing="ease-in-out" src="assets/img/png/Ranking-FT-ExecEd.png" alt="Second">
            <img data-aos="zoom-in-up" data-aos-offset="50" data-aos-delay="300" data-aos-duration="500"
                data-aos-easing="ease-in-out" src="assets/img/jpg/Ranking-FT-Open-Programs-1.jpg" alt="Thir">
        </div>
    </div>
    <!-- Sección Certificado -->
    <div class="certificado-container">
        <div class="certificado-cont">
            <!-- Link to open the modal -->
            <a class="certificado-img" href="#ex1" rel="modal:open">
                <div>
                    <img src="assets/img/jpg/certificado-IESE-abril-2019.jpg" alt="Certificado">
                </div>
            </a>
            <!-- Modal HTML embedded directly into document -->
            <div id="ex1" class="modal">
                <img src="assets/img/jpg/certificado-IESE-abril-big.jpg" alt="Certificado">
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
                    <a class="grapBo fs16 blanco" href="#" target="_blank" rel="noopener noreferrer">
                        INSCRÍBETE
                        <img src="assets/img/svg/long-arrow-alt-right-solid.svg" alt="arrow">
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
        <div class="slide-testimonio">
            <div class="testimonio">
                <div class="testimonio-img">
                    <img src="assets/img/jpg/Photo Salvador Valderas Campos.jpg" alt="Persona">
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
                    <img src="assets/img/svg/IESE-Business-School-footer.svg" alt="IESE Logo">
                </div>
                <div class="copyright grapRe fs12 blanco">
                    IESE Business School Universidad de Navarra
                    <?php echo date('Y'); ?>
                </div>
            </div>
            <div class="right">
                <div class="terminos-politicas-cont blanco">
                    <a href="https://emeritus.iese.edu/Mindset-Digital/terminos-de-servicio.php" target="_blank" rel="noopener noreferrer" class="grapRe fs12 blanco">Términos de
                        servicio</a>
                        |
                    <a href="https://latam.emeritus.org/politica-de-privacidad.php" target="_blank" rel="noopener noreferrer" class="grapRe fs12 blanco">Política de
                        privacidad</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            //offset: 120, // offset (in px) from the original trigger point
            //delay: 0, // values from 0 to 3000, with step 50ms
            //duration: 400, // values from 0 to 3000, with step 50ms
            //easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
</body>
<!-- Script para select de países -->
<script type="text/javascript">
    populateCountries("country");
</script>
<!-- Script para evitar strings en campos de numeros -->
<script type="text/javascript" src="assets/js/onkeypress.js"></script>

</html>