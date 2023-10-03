<?php
   session_start();

   if(isset($_SESSION['logindeslogado'])){
      session_destroy();
   }
   
   ?>
<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
      <meta name="description" content="CENTER BLACK SIDE">
      <meta name="author" content="CENTER BLACK SIDE">
      <title>CENTER DARK SIDE</title>
      <link rel="apple-touch-icon" href="painel/app-assets/images/ico/apple-icon-120.png">
      <link rel="shortcut icon" type="image/x-icon" href="painel/app-assets/images/ico/favicon.ico">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/vendors/css/vendors.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/bootstrap-extended.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/colors.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/components.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/themes/dark-layout.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/themes/bordered-layout.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/themes/semi-dark-layout.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/core/menu/menu-types/horizontal-menu.min.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/plugins/forms/form-validation.css">
      <link rel="stylesheet" type="text/css" href="painel/app-assets/css/pages/page-auth.min.css">
      <link rel="stylesheet" type="text/css" href="painel/assets/css/style.css">
      <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
   </head>
   <body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
      <div class="app-content content ">
         <div class="content-overlay"></div>
         <div class="header-navbar-shadow"></div>
         <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
               <div class="auth-wrapper auth-v1 px-2">
                  <div class="auth-inner py-2">
                     <div class="card mb-0">
                        <div class="card-body">
                           <a href="javascript:void(0);" class="brand-logo">
                              <svg
                                 viewbox="0 0 139 95"
                                 version="1.1"
                                 xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                 height="28"
                                 >
                                 <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                                       <stop stop-color="#000000" offset="0%"></stop>
                                       <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                                       <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                       <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                 </defs>                            
                              </svg>
                              <h2 class="brand-text text-primary ml-1"> CENTER DARK SIDE</h2>
                           </a>
                           <h4 class="card-title mb-1">Bem-Vindos(a)</h4>
                           <p class="card-text mb-2">Não compartilhe seu login com outros usuários</p>
                           <div class="p-30">
                            <?php if(isset($_SESSION["login_error"]))
                            {
                              echo $_SESSION["login_error"];
                              unset($_SESSION["login_error"]);
                              }elseif(isset($_SESSION["login_success"])){
                              echo $_SESSION['login_success']; ?>
                                <script>
                                    setTimeout(function() {
                                        window.location.href = 'painel/';
                                    }, 3500);
                                </script>
                                <?php unset($_SESSION["login_success"]); } ?>
                           <form class="auth-login-form mt-2" action="valida.php" method="POST" class="form login">
                              <div class="form-group">

                              <?php 
                          $token = rand(11111111111111,15111111111111);
 ?>
                              
                              <input type="hidden" id="token" name="token" value="<?php echo $token ?>">
                              

                                 <label for="login-email" class="form-label">Usuário</label>
                                 <input
                                    type="text"
                                    class="form-control"
                                    id="email"
                                    name="usuario"
                                    placeholder="usuário"
                                    aria-describedby="email"
                                    tabindex="1"
                                    autofocus
                                    />
                              </div>
                       <div class="form-group">
                                 <div class="d-flex justify-content-between">
                                    <label for="login-password">Senha</label>
                                 </div>
                                 <div class="input-group input-group-merge form-password-toggle">
                                    <input
                                       type="password"
                                       class="form-control form-control-merge"
                                       id="senha"
                                       name="senha"
                                       tabindex="2"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       aria-describedby="password"
                                       />
                                    <div class="input-group-append">
                                       <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                    </div>
                                 </div>
                              </div>
                      

                              <button type="submit" class="btn btn-primary btn-block" tabindex="4">Conectar</button>
                              <p class="text-center mt-2">

                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="../app-assets/js/src.js"></script>
      <script src="painel/app-assets/vendors/js/vendors.min.js"></script>
      <script src="painel/app-assets/vendors/js/ui/jquery.sticky.js"></script>
      <script src="painel/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
      <script src="painel/app-assets/js/core/app-menu.min.js"></script>
      <script src="painel/app-assets/js/core/app.min.js"></script>
      <script src="painel/app-assets/js/scripts/pages/page-auth-login.js"></script>
      <script>$(window).on('load',  function(){if (feather) {feather.replace({ width: 14, height: 14 });}})</script>
   </body>
</html>

