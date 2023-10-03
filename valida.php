<?php
session_start();

include_once("conexao.php");


        if((isset($_POST['usuario'])) && (isset($_POST['senha']))){
            $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
            $senha = mysqli_real_escape_string($conn, $_POST['senha']);
            
            

            $result_usuario = "SELECT * FROM usuarios WHERE usuario = '$usuario' && senha = '$senha' LIMIT 1";
            $result_total = "SELECT * FROM `usuarios`";
            $resultado_usuario = mysqli_query($conn, $result_usuario);
            $resultado = mysqli_fetch_assoc($resultado_usuario);


            if(isset($resultado)){
                $_SESSION['usuarioId'] = $resultado['id'];
                $_SESSION['nivelacesso'] = $resultado['nivelacesso'];
                $_SESSION['url'] = $resultado['url'];
                $_SESSION['usuario'] = $usuario;
                $_SESSION['senha'] = $senha;
                $_SESSION['login_success'] = '<div class="demo-spacing-0">
            <div class="alert alert-success mt-1 alert-validation-msg" role="alert">
              <div class="alert-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info mr-50 align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                <span>Usuário Valido <strong>Redirecionando...</strong>.</span>
              </div>
            </div>
          </div>';
                
                header("Location: ./");
            }else{

                $_SESSION['login_error'] = '<div class="demo-spacing-0">
            <div class="alert alert-danger mt-1 alert-validation-msg" role="alert">
              <div class="alert-body">
                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info mr-50 align-middle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                <span><strong>Usuário ou Senha Inválidos</strong>.</span>
              </div>
            </div>
          </div>';
                header("Location: ./");
            }
            

        }



?>