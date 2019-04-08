<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Font awesome -->
  <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>

  <title><?= $data['title']; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="<?= base_url('Welcome/index'); ?>">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="<?= base_url('Welcome/menu'); ?>">Menus</a>
          <a class="nav-item nav-link" href="<?= base_url('Welcome/order'); ?>">Order</a>
          <a class="nav-item nav-link" href="<?= base_url('Welcome/help'); ?>">Help</a>
          <a class="nav-item nav-link" href="<?= base_url('Welcome/about'); ?>">About</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Fixed botton -->
  <nav class="navbar-light fixed-bottom">
    <div class="container mb-3">
      <a class="btn btn-primary" href="#">Chat me</a>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Contact with Email
      </button>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <i class="fas fa-smile"></i>
          <h4>Hello.</h4>
          <p>Tolong masukan nama dan alamat email kamu, maka kami akan menghubungi kamu secepatnya</p>
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Naama</label>
              <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Nama lengkap">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Email kamu">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>