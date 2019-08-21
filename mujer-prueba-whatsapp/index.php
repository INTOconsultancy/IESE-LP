<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="HandheldFriendly" content="true" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="canonical" href="https://emeritus.iese.edu/Mujer-Liderazgo/" />

    <title>IESE | Mujer y liderazgo</title>
    
    <meta property="og:title" content="IESE | Mujer y Liderazgo" />
    <meta property="og:description" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://emeritus.iese.edu/Mujer-Liderazgo/" />
    <meta property="og:image" content="../assets/img/jpg/IESE.jpg" />
    <meta property="og:image:type" content="image/jpg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="500" />
    <meta property="og:image:alt" content="Mujer y Liderazgo" />
    <meta property="fb:app_id" content="467662454062015" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png" />
    <link rel="shortcut icon" type="image/png" href="../assets/img/png/favicon.png" />



    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link rel="stylesheet" href="../assets/scss/stylesheet.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">


    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="crossorigin="anonymous"></script> <!-- jQuery -->



</head>

<body>

    <!-- Getting the querystring -->
    <?php
$queryStringArray = array();
foreach ($_GET as $key => $value) {
    $parameter = $key . "=" . $value;
    array_push($queryStringArray, $parameter);
}
$queryString = implode("&", $queryStringArray);
?>

    <!-- Getting the current url (used in the retURL in the form.) -->
    <?php
if (isset($_SERVER["HTTPS"]) && ($_SERVER["HTTPS"] == "on" || $_SERVER["HTTPS"] == 1) || isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") {
    $protocol = "https://";

} else {
    $protocol = "http://";
}

$current_link = $protocol . $_SERVER["HTTP_HOST"] . parse_url($_SERVER["REQUEST_URI"])['path'];

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
    <div class="hero-container banner-ML">
        <div class="hero-title padding-ML">
            <div class="course-information">
                <div class="title grapBo fs30 negro19">Prueba WhatsApp</div>
                <div class="details">
                    <div class="date-hours">
                        <div class="date grapRe fs18 negro23">
                            XX / XXXXXX / XXXX
                        </div>
                        <div class="hours grapRe fs14 negro23">
                            XX Lorem | X Lorem ipsum
                        </div>
                    </div>
                    <div class="price-fees">
                        <div class="price grapBo fs16 negro19">
                            Lorem: $ X,XXX USD
                        </div>
                        <div class="fees grapMe fs14 negro23">
                        Lorem ipsum dolor : $X,XXX USD
                        </div>
                        <div class="flexible-payments grapBo fs14 rojo39">
                            <a class="rojo39">
                                <img class="lazyload" data-src="../assets/img/svg/info-circle-solid.svg"
                                    alt="información">
                                    Lorem ipsum dolor sit
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
                    Las siguientes opciones de pago están disponibles para el programa de Mujer y liderazgo:
                </div>
                <div class="pagos">
                    <div class="pagos-title fs16 grapBo negro19">
                        Pago total
                    </div>
                    <div class="precio-pago fs14 robotoRe negro23">
                        <div class="dot-pagos"></div>
                        La cuota completa del programa $1,950 USD.
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
                        La segunda parcialidad de $935 USD
                        a pagar del 25 de octubre del 2019.
                    </div>
                </div>
                <div class="pagos no-border">
                    <div class="pagos-title fs16 grapBo negro19">
                        Pago en tres parcialidades
                    </div>
                    <div class="precio-pago fs14 robotoRe negro23">
                        <div class="dot-pagos"></div>
                        La primera parcialidad de $778 USD
                        se paga al inicio.
                    </div>
                    <div class="precio-pago">
                        <div class="dot-pagos"></div>
                        La segunda parcialidad de $635 USD
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
            <div class="form-title grapRe fs16 negro23">Lorem ipsum dolor sit amet consectetur, adipisicing</div>
            <form class="form-cont" action="http://www2.emeritus.org/l/134351/2019-06-11/545njl" method="post"
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
                    <select id="Country" name="Country" class="mdl-textfield__input Country" required>
                    </select>
                    <label class="grapRe mdl-textfield__label" for="Country">País</label>
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
                    <input type="hidden" name="course" id="course" value="IESE - Mujer y Liderazgo">
                    <input type="hidden" name="retURL"
                        value="<?php echo $current_link . 'Thanks.php?' . $queryString ?>">
                    <button class="grapBo fs16 blanco" type="submit" id="btn-download-brochure">
                        DESCARGAR EL FOLLETO
                        <img class="descargar" src="../assets/img/svg/icon-descargar.svg" alt="Download">
                    </button>
                </div>
            </form>
            <div class="private-data">
                <div class="grapRe fs11 data negro23">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti impedit sequi 
                    non eius accusamus, praesentium harum similique dolorem quae totam ea sint quo 
                    quis consequatur, quibusdam repudiandae? Et, deserunt fugiat. Libero officiis 
                    provident eos eligendi, veniam voluptatem impedit, dolor sapiente vel explicabo, 
                    laudantium hic? Vero enim et, sunt earum, delectus accusamus repellat provident 
                    nisi non obcaecati, illum quam. Similique, autem?
                </div>
                <div>
                    <a class="grapBo fs14 rosaFB">
                        Lorem ipsum dolor
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Sección Nuevo Mundo -->
    <div class="new-world-container">
        <div class="new-world-title grapBo fs32 negro3D">
            Lorem ipsum dolor sit amet 
        </div>
        <div class="new-world-subtitle grapRe fs20 negro19">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet quaerat 
            obcaecati enim laboriosam officia, commodi excepturi ea odit ipsa, 
            eaque maxime repellendus? Quaerat veniam quae totam. Minus saepe non 
            eaque?
        </div>
        <div class="choose-efforts-container">
            <div class="choose-efforts-title grapSe-Bo fs18 negro19">
                Lorem ipsum dolor sit amet consectetur, adipisicing :
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
                        Lorem ipsum dolor sit amet consectetur
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
                        Lorem ipsum dolor sit amet consectetur
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
                        Lorem ipsum dolor sit amet consectetur
                    </div>
                </div>
            </div>
            <div class="efforts-source grapRe fs14 negro3D">
                (Lorem ipsum dolor sit amet consectetur, adipisicing)
            </div>
        </div>
    </div>
    <!-- Sección colaboración -->
    <div class="colaboration-container">
        <div class="description grapMe fs14 blanco">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Iste qui praesentium debitis sapiente optio fugiat saepe 
            dolorem inventore laudantium molestias
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
                    Lorem ipsum dolor sit amet consectetur
                    <?php echo date('Y'); ?>
                </div>
            </div>
            <div class="right">
                <div class="terminos-politicas-cont blanco">
                    <a class="grapRe fs12 blanco">
                        Lorem ipsum dolor
                        </a>
                    |
                    <a class="grapRe fs12 blanco">
                        Lorem ipsum dolor
                        </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Script to handle the form population -->
    <script type="text/javascript" src="../assets/js/form-input-manager.js"></script>

    <!-- Script to prevent user from typing letters in the phone number -->
    <script type="text/javascript" src="../assets/js/onkeypress.js"></script>


    <script async type="text/javascript" src="https://latam.emeritus.org/programas/assets/js/countries-latam-update.js"></script>
    <script type="text/javascript">
        populateCountries("Country");
    </script>
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script defer type="text/javascript" src="../assets/js/logs.js"></script>
    <script type="text/javascript" src="../assets/js/lazysizes.min.js"></script>
    <script async type="text/javascript" src="../assets/js/utm_populate.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <script async type="text/javascript" src="../assets/js/main.js"></script>


</body>


</html>