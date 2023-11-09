<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .dropdown-item-text {
      font-weight: bold;
      font-size: 18px;
    }

    .dropdown-item-text.link {
      color: #007BFF;
    }

    .dropdown-item-text.just-text {
      color: #DC3545;
    }

    .dropdown-item-text:hover.link {
      background-color: #007BFF;
      color: #fff;
    }

    .dropdown-item-text:hover.just-text {
      background-color: #DC3545;
      color: #fff;
    }

    .dropdown-item-text, .dropdown-item-text:focus {
      background-color: transparent;
      border: none;
      box-shadow: none;
      outline: none;
    }
  </style>
</head>
<body>

<div class="container">
    <div class="container" style="background-color:aqua;">
  <h2 style="font-size: 30px;">Dropdown Text</h2>
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Dropdown button
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item link" href="#">Link 1</a>
      <a class="dropdown-item link" href="#">Link 2</a>
      <a class="dropdown-item-text link" href="#">Link Berupa Text</a>
      <span class="dropdown-item-text just-text">Hanya Text</span>
    </div>
  </div>
</div>

</body>

<body style="background-color: #f0f0f0;">

    <div class="container" style="background-color:aquamarine;">
      <h2 style="font-size: 30px;">Grouped Buttons with a Dropdown</h2>
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Tas</button>
        <button type="button" class="btn btn-primary">Sepatu</button>
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="background-color: #ff9900;">
            Alat Tulis
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Pensil</a>
            <a class="dropdown-item" href="#">Pena</a>
          </div>
        </div>
      </div>
    </div>

    </body>
</html>
