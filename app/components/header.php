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
  <link href="./public/assets/images/logo.svg" rel="shortcut icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="LEFT4CODE">
  <title>Metamorphosis Avalanche</title>
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

        <!-- //TODO -->
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
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="box"></i> </div>
            <div class="menu__title"> Menu Layout <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="index.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Side Menu </div>
              </a>
            </li>
            <li>
              <a href="simple-menu-light-dashboard.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Simple Menu </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-dashboard.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Top Menu </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="side-menu-light-inbox.html" class="menu">
            <div class="menu__icon"> <i data-feather="inbox"></i> </div>
            <div class="menu__title"> Inbox </div>
          </a>
        </li>
        <li>
          <a href="side-menu-light-file-manager.html" class="menu">
            <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
            <div class="menu__title"> File Manager </div>
          </a>
        </li>
        <li>
          <a href="side-menu-light-point-of-sale.html" class="menu">
            <div class="menu__icon"> <i data-feather="credit-card"></i> </div>
            <div class="menu__title"> Point of Sale </div>
          </a>
        </li>
        <li>
          <a href="side-menu-light-chat.html" class="menu">
            <div class="menu__icon"> <i data-feather="message-square"></i> </div>
            <div class="menu__title"> Chat </div>
          </a>
        </li>
        <li>
          <a href="side-menu-light-post.html" class="menu">
            <div class="menu__icon"> <i data-feather="file-text"></i> </div>
            <div class="menu__title"> Post </div>
          </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="edit"></i> </div>
            <div class="menu__title"> Crud <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-crud-data-list.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Data List </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-crud-form.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Form </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="users"></i> </div>
            <div class="menu__title"> Users <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-users-layout-1.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Layout 1 </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-users-layout-2.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Layout 2 </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-users-layout-3.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Layout 3 </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="trello"></i> </div>
            <div class="menu__title"> Profile <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-profile-overview-1.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Overview 1 </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-profile-overview-2.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Overview 2 </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-profile-overview-3.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Overview 3 </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="layout"></i> </div>
            <div class="menu__title"> Pages <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Wizards <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-wizard-layout-1.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-wizard-layout-2.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-wizard-layout-3.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Blog <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-blog-layout-1.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-blog-layout-2.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-blog-layout-3.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Pricing <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-pricing-layout-1.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-pricing-layout-2.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 2</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Invoice <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-invoice-layout-1.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-invoice-layout-2.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 2</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> FAQ <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-faq-layout-1.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-faq-layout-2.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-faq-layout-3.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="login-light-login.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Login </div>
              </a>
            </li>
            <li>
              <a href="login-light-register.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Register </div>
              </a>
            </li>
            <li>
              <a href="main-light-error-page.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Error Page </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-update-profile.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Update profile </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-change-password.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Change Password </div>
              </a>
            </li>
          </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="inbox"></i> </div>
            <div class="menu__title"> Components <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Grid <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-regular-table.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Regular Table</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-tabulator.html" class="menu">
                    <div class="menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="menu__title">Tabulator</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="side-menu-light-accordion.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Accordion </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-button.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Button </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-modal.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Modal </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-alert.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Alert </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-progress-bar.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Progress Bar </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-tooltip.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Tooltip </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-dropdown.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Dropdown </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-toast.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Toast </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-typography.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Typography </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-icon.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Icon </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-loading-icon.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Loading Icon </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="sidebar"></i> </div>
            <div class="menu__title"> Forms <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-regular-form.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Regular Form </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-datepicker.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Datepicker </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-tail-select.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Tail Select </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-file-upload.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> File Upload </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-wysiwyg-editor.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Wysiwyg Editor </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-validation.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Validation </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="menu">
            <div class="menu__icon"> <i data-feather="hard-drive"></i> </div>
            <div class="menu__title"> Widgets <i data-feather="chevron-down" class="menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="side-menu-light-chart.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Chart </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-slider.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Slider </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-image-zoom.html" class="menu">
                <div class="menu__icon"> <i data-feather="activity"></i> </div>
                <div class="menu__title"> Image Zoom </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>

    <!-- END: Top Bar -->
    <!-- BEGIN: Top Menu -->
    <nav class="top-nav">
      <ul>
        <li>
          <a href="top-menu-light-dashboard.html" class="top-menu top-menu--active">
            <div class="top-menu__icon"> <i data-feather="home"></i> </div>
            <div class="top-menu__title"> Dashboard </div>
          </a>
        </li>
        <li>
          <a href="javascript:;" class="top-menu">
            <div class="top-menu__icon"> <i data-feather="box"></i> </div>
            <div class="top-menu__title"> Menu Layout <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="index.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Side Menu </div>
              </a>
            </li>
            <li>
              <a href="simple-menu-light-dashboard.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Simple Menu </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-dashboard.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Top Menu </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="top-menu">
            <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
            <div class="top-menu__title"> Apps <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Users <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-users-layout-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-users-layout-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-users-layout-3.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Profile <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-profile-overview-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Overview 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-profile-overview-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Overview 2</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-profile-overview-3.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Overview 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="top-menu-light-inbox.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Inbox </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-file-manager.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> File Manager </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-point-of-sale.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Point of Sale </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-chat.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Chat </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-post.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Post </div>
              </a>
            </li>
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Crud <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="side-menu-light-crud-data-list.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Data List</div>
                  </a>
                </li>
                <li>
                  <a href="side-menu-light-crud-form.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Form</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="top-menu">
            <div class="top-menu__icon"> <i data-feather="layout"></i> </div>
            <div class="top-menu__title"> Pages <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Wizards <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-wizard-layout-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-wizard-layout-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-wizard-layout-3.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Blog <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-blog-layout-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-blog-layout-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-blog-layout-3.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Pricing <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-pricing-layout-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-pricing-layout-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 2</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Invoice <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-invoice-layout-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-invoice-layout-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 2</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> FAQ <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-faq-layout-1.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 1</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-faq-layout-2.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 2</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-faq-layout-3.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Layout 3</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="login-light-login.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Login </div>
              </a>
            </li>
            <li>
              <a href="login-light-register.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Register </div>
              </a>
            </li>
            <li>
              <a href="main-light-error-page.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Error Page </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-update-profile.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Update profile </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-change-password.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Change Password </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="top-menu">
            <div class="top-menu__icon"> <i data-feather="inbox"></i> </div>
            <div class="top-menu__title"> Components <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="javascript:;" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Grid <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
              </a>
              <ul class="">
                <li>
                  <a href="top-menu-light-regular-table.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Regular Table</div>
                  </a>
                </li>
                <li>
                  <a href="top-menu-light-tabulator.html" class="top-menu">
                    <div class="top-menu__icon"> <i data-feather="zap"></i> </div>
                    <div class="top-menu__title">Tabulator</div>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="top-menu-light-accordion.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Accordion </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-button.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Button </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-modal.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Modal </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-alert.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Alert </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-progress-bar.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Progress Bar </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-tooltip.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Tooltip </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-dropdown.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Dropdown </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-toast.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Toast </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-typography.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Typography </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-icon.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Icon </div>
              </a>
            </li>
            <li>
              <a href="side-menu-light-loading-icon.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Loading Icon </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="top-menu">
            <div class="top-menu__icon"> <i data-feather="sidebar"></i> </div>
            <div class="top-menu__title"> Forms <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="top-menu-light-regular-form.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Regular Form </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-datepicker.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Datepicker </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-tail-select.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Tail Select </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-file-upload.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> File Upload </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-wysiwyg-editor.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Wysiwyg Editor </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-validation.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Validation </div>
              </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="javascript:;" class="top-menu">
            <div class="top-menu__icon"> <i data-feather="hard-drive"></i> </div>
            <div class="top-menu__title"> Widgets <i data-feather="chevron-down" class="top-menu__sub-icon"></i> </div>
          </a>
          <ul class="">
            <li>
              <a href="top-menu-light-chart.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Chart </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-slider.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Slider </div>
              </a>
            </li>
            <li>
              <a href="top-menu-light-image-zoom.html" class="top-menu">
                <div class="top-menu__icon"> <i data-feather="activity"></i> </div>
                <div class="top-menu__title"> Image Zoom </div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>

  <?php } ?>