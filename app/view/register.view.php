<?php
include('app/controller/user.controller.php');

$userController = new UsersDAO($db);

if (isset($_POST['name'], $_POST['email'], $_POST['password'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    try {
        $userController->insert($name, $email, $password);

        $url->redirect("login?msg=opa");
    } catch (Exception $error) {
    }
}
?>

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Register Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <div class="my-auto">
                    <img alt="Midone Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16" src="./public/assets/images/logo 1280x.png">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">

                        Mais alguns cliques para
                        <br>
                        criar sua conta.
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white dark:text-gray-500">Preencha o fomulario para finalizar seu cadastro</div>
                </div>
            </div>
            <!-- END: Register Info -->
            <!-- BEGIN: Register Form -->
            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
                <div class="my-auto mx-auto xl:ml-20 bg-white xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-center text-2xl xl:text-3xl ">
                        Quero me cadastrar
                    </h2>
                    <?php
                    if (isset($error) && !empty($error->getMessage())) {
                        print("<p class='ml-3 font-medium text-theme-6  text-center'>");
                        print($error->getMessage());
                        print("</p>");;
                    }
                    ?>
                    <form method="POST">
                        <div class="intro-x mt-8">
                            <input type="text" name="name" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Nome" require>
                            <input type="email" name="email" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Email" require>
                            <input type="password" name="password" class="intro-x login__input input input--lg border border-gray-300 block mt-4" placeholder="Password" require>
                        </div>

                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <input type="submit" class="button button--lg w-full xl:w-32 text-white bg-theme-1 xl:mr-3 align-top" value="Registrar" />
                            <a href="login">
                                <input type="button" class="button button--lg w-full xl:w-32 text-gray-700 border border-gray-300 dark:border-dark-5 dark:text-gray-300 mt-3 xl:mt-0 align-top" value="Login" />
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>