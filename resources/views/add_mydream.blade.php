<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>mydream</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/addmypage.css') }}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">BucketList</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Dream">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <!-- dream -->
    <div class="container">
      <div class="form-group">
        <label for="addYourDream"><h1>Add your dreams</h1></label>
        <input class="form-control form-control-lg" id="addYourDream" type="text" placeholder="Your Dream">
      </div>
      <div class="form-group">
        <label for="dreamDetail"><h2>Detail</h2></label>
        <textarea class="form-control" id="dreamDetail" rows="10"></textarea>
      </div>
      <div class="float-right mb-3">
        <a class="btn btn-outline-secondary" href="#">add</a>
      </div>
    </div>

  </body>
</html>
