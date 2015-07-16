 <!DOCTYPE html>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Jonathan Price</title>

    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="/css/style.css">

    <script async src="/js/master.js"></script>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
  </head>

  <body>

    <?php include_once("analyticstracking.php"); ?>
    <div class="wrapper">
      <div class="navbar-fixed">
        <!-- Dropdown for Computing -->
        <ul id="computingDropdown" class="dropdown-content">
          <li><a href="/computing/">Summary</a></li>
          <li><a href="/computing/articles/">Articles</a></li>
        </ul>
        <ul id="computingDropdownMob" class="dropdown-content">
          <li><a href="/computing/">Summary</a></li>
          <li><a href="/computing/articles/">Articles</a></li>
        </ul>


        <nav class="white lighten-1">
          <div class="nav-wrapper container">
            <a id="logo-container" href="/" class="brand-logo blue-grey-text text-darken-4 thin">Jonathan Price</a>
            <ul class="right hide-on-med-and-down">
              <li id="homeLink">
                <a href="/" class="blue-grey-text text-darken-4">Home</a>
              </li>
              <li id="musicLink">
                <a href="/music" class="blue-grey-text text-darken-4">Music</a>
              </li>
              <li id="computingLink">
                <a href="/computing" class="dropdown-button blue-grey-text text-darken-4" data-activates="computingDropdown">Computing
                  <i class="mdi-navigation-arrow-drop-down right"></i>
                </a>
              </li>
              <li id="aboutLink">
                <a href="/about" class="blue-grey-text text-darken-4">About Me</a>
              </li>
              <li id="contactLink">
                <a href="/contact" class="blue-grey-text text-darken-4">Contact</a>
              </li>
            </ul>

            <ul id="nav-mobile" class="side-nav white z-depth-5">
              <div id="nav-mobile-header">
                <div class="container">
                  <p class="blue-grey-text text-darken-4 ">Jonathan Price</p>
                </div>
              <li id="homeLinkMob" class="blue-grey-text text-darken-4">
                <a href="/">
                  <i class="tiny mdi-action-home left blue-grey-text text-darken-4"></i>Home
                </a>
              </li>
              <li id="musicLinkMob" class="blue-grey-text text-darken-4">
                <a href="/music">
                  <i class="tiny mdi-av-volume-up left 1  blue-grey-text text-darken-4"></i>Music
                </a>
              </li>
              <li id="computingLinkMob" class="blue-grey-text text-darken-4">
                <a href="/computing" class="dropdown-button blue-grey-text text-darken-4" data-activates="computingDropdownMob">
                  <i class="tiny mdi-hardware-desktop-windows left blue-grey-text text-darken-4"></i>Computing
                </a>
              </li>
              <li id="aboutLinkMob" class="blue-grey-text text-darken-4">
                <a href="/about">
                  <i class="tiny mdi-social-person left blue-grey-text text-darken-4"></i>About Me
                </a>
              </li>
              <li id="contactLinkMob" class="blue-grey-text text-darken-4">
                <a href="/contact">
                  <i class="tiny mdi-communication-email left blue-grey-text text-darken-4"></i>Contact
                </a>
              </li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse blue-grey-text text-darken-4"><i class="mdi-navigation-menu"></i></a>
          </div>
        </nav>
      </div>

      <script>
        setSelectedPage();
      </script>
