<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://unpkg.com/@webpixels/css/dist/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/logos/BLUVARD_FAVICON.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Admin- Bluvard Education Initiative </title>
</head>
<body>

<?php 
if (isset($_SESSION['logged_in'])){
    // redirect to index.php
  echo
    '
  <div class="d-flex flex-column flex-lg-row h-lg-full bg-gray-100">
  <!-- Vertical Navbar -->
  <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 py-lg-0 navbar-light bg-light border-end-lg" id="navbarVertical">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand py-lg-5 mb-lg-5 px-lg-6 me-0 fw-bold" href="#">
        <img src="/assets/logos/bluvard-6.png" alt="..." class="w-10 h-10"> ADMIN
      </a>
      <!-- User menu (mobile) -->
      <div class="navbar-user d-lg-none">
        <!-- Dropdown -->
        <div class="dropdown">
          <!-- Toggle -->
          <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="avatar bg-warning rounded-circle text-white">
              <img alt="..." src="https://images.unsplash.com/photo-1579463148228-138296ac3b98?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" >
            </div>
          </a>
          <!-- Menu -->
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
            <div class="dropdown-item">
              <span class="d-block text-sm text-muted mb-1">Signed in as</span>
              <span class="d-block text-heading font-semibold">Heather Wright</span>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div>
      </div>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidebarCollapse">
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./index.php">
              <i class="bi bi-house"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-bar-chart"></i> Authors
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-chat"></i> Messages
              <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-bookmarks"></i> Events
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-people"></i> Blog
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="navbar-divider my-5 opacity-20">
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-4">
          <li class="nav-item">
            <a class="nav-link" href="./settings.php">
              <i class="bi bi-gear"></i> Settings
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-bell"></i> Notifications
              <span class="badge bg-soft-danger text-danger rounded-pill d-inline-flex align-items-center ms-auto">23</span>
            </a>
          </li>
        </ul>
        <!-- Push content down -->
        <div class="mt-auto"></div>
        <!-- User (md) -->
        <ul class="navbar-nav mb-5">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="bi bi-person-square"></i> Account
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./script/logout.php">
              <i class="bi bi-box-arrow-left"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  ';
}


