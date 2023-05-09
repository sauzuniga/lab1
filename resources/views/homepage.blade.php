<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>lab1</title>

@vite(['resources/js/app.js', 'resources/css/app.scss'])
  </head>
  <body>

    <header>
        <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">CRUD con Laravel y Bootstrap</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Agregar datos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Visualizar datos</a>
                  </li
              </div>
            </div>
          </nav>
    </header>


      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://www.devopsschool.com/blog/wp-content/uploads/2020/01/Webp.net-compress-image.jpg" class="d-block w-100" alt="..." height="auto">
          </div>
          <div class="carousel-item">
            <img src="https://d1tlzifd8jdoy4.cloudfront.net/wp-content/uploads/2020/08/Immerzone-960x504.png" class="d-block w-100" alt="..." height="auto">
          </div>
          <div class="carousel-item">
            <img src="https://cdn.pixabay.com/photo/2019/06/16/11/02/turtle-4277518_960_720.jpg" class="d-block w-100" alt="..." height="auto">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


  </body>
</html>