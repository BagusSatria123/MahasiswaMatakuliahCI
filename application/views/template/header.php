<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title><?= $title ?></title>
  <!-- style css -->
  <style>
    .badge {
      margin-left: 3px;
    }
  </style>


  <title><?= $title ?></title>

</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">




      <a class="navbar-brand" href="#">CI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('home'); ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>mahasiswa">Data Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>matakuliah">Mata Kuliah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>Login/Logout">Logout</a>
          </li>
          <li class="nav-item">
          <a class="nav-item nav-link" href="movie">Movie Search</a>
          </li>
          <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
          </li>
        </ul>
      </div>
  </nav>