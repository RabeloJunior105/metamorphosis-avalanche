<?php
require('app/core/login.class.php');
require('app/core/password.class.php');

$login = new Login();
$password = new Password();

if (isset($_SESSION['id'])) {
  $url->redirect('home');
}



if (!empty($_POST['email']) && !empty($_POST['password'])) {

  $login->email = $login->filter($_POST['email']);
  $login->password = $password->encrypt($login->filter($_POST['password']));
  $response = $login->join();
}

?>


<body class="login">
  <div class="container sm:px-10">
    <div class="block xl:grid grid-cols-2 gap-4">
      <!-- BEGIN: Login Info -->
      <div class="hidden xl:flex flex-col min-h-screen">
        <div class="my-auto">
          <img alt="logo" class="-intro-x w-1/2 -mt-16" src="dist/images/illustration.svg">
          <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
            Para iniciar sua nova
            <br>
            jornada no
            <br>
            Metamorphosie Avalanche
          </div>
          <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Efetue o login ou cadastre-se</div>
        </div>
      </div>
      <!-- END: Login Info -->
      <!-- BEGIN: Login Form -->
      <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
        <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
          <h2 class="intro-x font-bold text-center text-2xl xl:text-3xl ">
            Entrar
          </h2>
          <?php
          if (!empty($response["error"])) {
            print("
            <p class='ml-3 font-medium text-theme-6  text-center'>
                login inválido, tente novamente
            </p>
            ");
          }
          ?>
          <form method="POST">
            <div class="intro-x mt-8">
              <input type="email" name="email" class="intro-x login__input input input--lg border border-gray-300 block" placeholder="Email" require>
              <input type="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" require>
            </div>
            <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
              <a href="user/register">Clique aqui para se cadastrar</a>

            </div>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
              <input type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top" value="Login" />
            </div>
          </form>
          <div class="intro-x mt-10 xl:mt-24 text-gray-700 dark:text-gray-600 text-center xl:text-left">

            Ao se inscrever, você concorda com nossos
            <br>
            <a class="text-theme-1 dark:text-theme-10" href="">Termos e condições</a> & <a class="text-theme-1 dark:text-theme-10" href="">Privacidade Politica</a>
          </div>
        </div>
      </div>
      <!-- END: Login Form -->
    </div>
  </div>
</body>