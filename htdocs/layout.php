<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SpyCat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px;
      }
    </style>
  </head>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">CatSpy</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<iframe src="<?php echo $camServer; ?>/?action=stream"></iframe>
    </div> <!-- /container -->
  </body>
</html>