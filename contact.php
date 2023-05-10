<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La Quinquenal - Contacto</title>
        <link rel="icon" type="image/x-icon" href="./mfavicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.html">La empresa</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="post.html">Productos</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="presupuesto.html">Presupuesto</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contactanos</h1>
                            <span class="subheading"></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Cualquier duda y/o consulta llena el siguiente formulario, y nos pondremos en contacto con usted.</p>
                        <div class="my-5">
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <form method="post" id="contactForm" action="contact.php">
                                <div class="form-floating">
                                    <input name = "nombre" id="nombre" onBlur="if(this.value=='') this.value='Nombre'" onClick="if(this.value=='Nombre') this.value=''" class="form-control" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Un nombre es necesario.</div>
                                </div>
                                <div class="form-floating">
                                    <input name= "email" id="email" onBlur="if(this.value=='') this.value='Email'" onClick="if(this.value=='Email') this.value=''" class="form-control" type="email" placeholder="Enter your email..." />
                                    <label for="email">Email</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Un email es necesario.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">El email ingresado no es valido.</div>
                                </div>
                                <div class="form-floating">
                                    <input name="tel" class="form-control"  id="tel" onblur="if(this.value=='') this.value='Telefono'" onclick="if(this.value=='Telefono') this.value=''"  type="tel" placeholder="Enter your phone number..."  />
                                    <label for="phone">Numero de telefono</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Un numero de telefono es necesario.</div>
                                </div>
                                <div class="form-floating">
                                <!--textarea  cols="70" rows="2" class="imput2" id="usermsg" onfocus="if(this.value == 'Envíenos su consulta.') this.value='';" onblur="if(this.value == '') this.value='Envíenos su consulta.';" >Envíenos su consulta.</textarea-->
                                    <textarea name="mensaje" class="form-control" onfocus="if(this.value == 'Envíenos su consulta.') this.value='';" onblur="if(this.value == '') this.value='Envíenos su consulta.';" id="message" placeholder="Enter your message here..." style="height: 12rem"></textarea>
                                    <label for="message">Mensaje</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">Un mensaje es necesario</div>
                                </div>
                                <br />
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                                <!-- Submit Button-->
                                <input name="submit" type="submit" class="btn btn-primary text-uppercase"  id="submitButton" value="Enviar" onClick="javascript:Validar();" />
                                <br/>
                                <br/>
                                <p class="text-center mb-3"><?php
                                    if(isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["mensaje"]) && isset($_POST["tel"])){
                                    $to = "no-reply@c1452060.ferozo.com";
                                    $subject = "Mensaje Enviado";
                                    $contenido .= "Nombre: ".$_POST["nombre"]."\n";
                                    $contenido .= "Email: ".$_POST["email"]."\n\n";
                                    $contenido .= "Tel: ".$_POST["tel"]."\n\n";
                                    $contenido .= "Mensaje: ".$_POST["mensaje"]."\n\n";
                                    $header = "From:no-reply@c1452060.ferozo.com\nReply-To:".$_POST["email"]."\n";
                                    $header .= "Mime-Version: 1.0\n";
                                    $header .= "Content-Type: text/plain";
                                    if(mail($to, $subject, $contenido ,$header)){
                                        echo "Su consulta fue recibida en breve nos pondremos en contacto.";
                                    }
                                    }
                                ?></p>
                                <br/>
                            </form>
                        </div>
                    </div>
                </div>
                <div>

                </div>
                <div class="map">
                    
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <a href = "https://api.whatsapp.com/send?phone=+54%209%2011%203294-2622&text=Hola"><span class="fa-stack fa-lg">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-whatsapp fa-stack-1x fa-inverse"></i>
                            </span></a>
                        </ul>
                        <div class="small text-center text-muted fst-italic">
                            <p class="small text-center text-muted fst-italic"><a class="small text-center text-muted fst-italic" href="index.html">Inicio</a> | <a class="small text-center text-muted fst-italic" href="about.html">La Empresa</a> | <a class="small text-center text-muted fst-italic" href="post.html">Productos</a> | <a class="small text-center text-muted fst-italic" href="presupuesto.html">Presupuesto</a> | <a class="small text-center text-muted fst-italic" href="contact.php">Contacto</a>
                            </br>LA QUINQUENAL SAIC | Av. E. J. Crovara 1601/49 | (1768) Villa Madero | BUENOS AIRES | ARGENTINA | (54 11) 4652-6966 | (54 11) 4655-1934 / 1826 / 1215
                            </br>Cel: +54 9 11 3294-2622
                            </br>info@laquinquenal.com | ventas@laquinquenal.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script type="module" src="js/scripts.js"></script>
        <!--script type="module" src="js/contact.js"></script-->
        <script type="module" src="js/map.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->

    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="js/jquery-2.2.4.min.js"></script>

    </body>
</html>
