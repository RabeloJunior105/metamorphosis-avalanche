<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="pt-br" class="light">
<!-- BEGIN: Head -->

<head>
  <meta charset="utf-8">
  <link href="./public/assets/images/logo 32x.png" rel="shortcut icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="LEFT4CODE">
  <title>Metamorphosis Avalanche</title>
  <base href="http://<?= $_SERVER['SERVER_NAME'] ?>/site-jogo/">
  <!-- BEGIN: CSS Assets-->
  <link rel="stylesheet" href="./public/assets/css/app.css" />
  <!-- END: CSS Assets-->
</head>
<!-- END: Head -->
<?php if (isset($_SESSION['id'])) { ?>

  <body class="app">

    <!-- BEGIN: Mobile Menu -->
    <div class="mobile-menu md:hidden">
      <div class="mobile-menu-bar">

        <a href="" class="flex mr-auto">
          <img alt="Midone Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg">
        </a>


        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
      </div>
      <ul class="border-t border-theme-24 py-5 hidden">
        <li>
          <a href="index.html" class="menu menu--active">
            <div class="menu__icon"> <i data-feather="home"></i> </div>
            <div class="menu__title"> Dashboard </div>
          </a>
        </li>
      </ul>
    </div>

    <!-- END: Top Bar -->
    <div class="border-b border-theme-24 mb-10">
      <div class="top-bar-boxed flex items-center">

        <div class="-intro-x breadcrumb breadcrumb--light mr-auto"> <a href="" class="">Metamorphosis Avalanche</a> <i data-feather="chevron-right" class="breadcrumb__icon"></i> <a href="" class="breadcrumb--active">Start</a> </div>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
          <div class="dropdown-toggle notification notification--light notification--bullet cursor-pointer"> <i data-feather="bell" class="notification__icon dark:text-gray-300"></i> </div>
          <div class="notification-content pt-2 dropdown-box">
            <div class="notification-content__box dropdown-box__content box dark:bg-dark-6">
              <div class="notification-content__title">Notifications</div>
              <div class="cursor-pointer relative flex items-center ">
                <div class="w-12 h-12 flex-none image-fit mr-1">
                  <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-9.jpg">
                  <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-2 overflow-hidden">
                  <div class="flex items-center">
                    <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                  </div>
                  <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
              </div>
              <div class="cursor-pointer relative flex items-center mt-5">
                <div class="w-12 h-12 flex-none image-fit mr-1">
                  <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-5.jpg">
                  <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-2 overflow-hidden">
                  <div class="flex items-center">
                    <a href="javascript:;" class="font-medium truncate mr-5">Robert De Niro</a>
                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                  </div>
                  <div class="w-full truncate text-gray-600">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                </div>
              </div>
              <div class="cursor-pointer relative flex items-center mt-5">
                <div class="w-12 h-12 flex-none image-fit mr-1">
                  <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-15.jpg">
                  <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-2 overflow-hidden">
                  <div class="flex items-center">
                    <a href="javascript:;" class="font-medium truncate mr-5">Hugh Jackman</a>
                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                  </div>
                  <div class="w-full truncate text-gray-600">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem </div>
                </div>
              </div>
              <div class="cursor-pointer relative flex items-center mt-5">
                <div class="w-12 h-12 flex-none image-fit mr-1">
                  <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                  <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-2 overflow-hidden">
                  <div class="flex items-center">
                    <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                  </div>
                  <div class="w-full truncate text-gray-600">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                </div>
              </div>
              <div class="cursor-pointer relative flex items-center mt-5">
                <div class="w-12 h-12 flex-none image-fit mr-1">
                  <img alt="Midone Tailwind HTML Admin Template" class="rounded-full" src="dist/images/profile-4.jpg">
                  <div class="w-3 h-3 bg-theme-9 absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                </div>
                <div class="ml-2 overflow-hidden">
                  <div class="flex items-center">
                    <a href="javascript:;" class="font-medium truncate mr-5">Kevin Spacey</a>
                    <div class="text-xs text-gray-500 ml-auto whitespace-no-wrap">01:10 PM</div>
                  </div>
                  <div class="w-full truncate text-gray-600">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
          <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110">
            <img alt="Midone Tailwind HTML Admin Template" src="dist/images/profile-13.jpg">
          </div>
          <div class="dropdown-box w-56">
            <div class="dropdown-box__content box bg-theme-38 dark:bg-dark-6 text-white">
              <div class="p-4 border-b border-theme-40 dark:border-dark-3">
                <div class="font-medium">Johnny Depp</div>
                <div class="text-xs text-theme-41 dark:text-gray-600">Frontend Engineer</div>
              </div>
              <div class="p-2">
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
              </div>
              <div class="p-2 border-t border-theme-40 dark:border-dark-3">
                <a href="" class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md"> <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Account Menu -->
      </div>
    </div>
    <!-- BEGIN: Top Menu -->

    <nav class="top-nav">
      <ul>
        <li>
          <a href="top-menu-light-dashboard.html" class="top-menu top-menu--active">
            <div class="top-menu__icon"> <i data-feather="home"></i> </div>
            <div class="top-menu__title"> Dashboard </div>
          </a>
        </li>
      </ul>

    </nav>



  <?php } ?>