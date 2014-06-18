<?php
  $page = '-1';

  if (isset($_GET['page'])) {
    $page = $_GET['page'];
  }

  if ($page == '-1') {
    include ('inc/meta/home.php');

  } else if ($page == 'about') {
    include('inc/meta/about.php');

  } else if ($page == 'contact') {
    include ('inc/meta/contact.php');

  } else if ($page == 'services') {
    include ('inc/meta/services.php');
    
  } else {
    include ('inc/meta/home.php');
  }
  // Edit or add pages as needed.
  ?>