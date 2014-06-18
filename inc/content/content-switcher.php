<?php
  $page = '-1';

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  if ($page == '-1') {
    include ('inc/content/home.php');

  } else if ($page == 'about') {
    include('inc/content/about.php');

  } else if ($page == 'contact') {
    include ('inc/content/contact.php');

  } else if ($page == 'services') {
    include ('inc/content/services.php');
    
  } else {
    include ('inc/content/home.php');
  }
  // Edit or add pages as needed.
  ?>