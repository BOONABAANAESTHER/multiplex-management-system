<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> MUltiplex Management System</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
    <style>
        /* Custom CSS for the carousel */
        
        #carouselExampleAutoplaying {
          background-color: white;
          box-shadow: 3px 3px 3px 3px #f47c3c;
          height: 200px;
          margin-left: 50px;
          width: 340px;
          margin-bottom:20px;
          margin-top:50px;
        }
        .carousel-item img {
            height: 170px; /* Adjust the height of carousel images */
            object-position: cover; /* Maintain aspect ratio */
            margin-left:40px;
            margin-top:5px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 10%; /* Adjust the width of control buttons */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgb(209, 166, 114); /* Control button background color */
            border-radius: 50%; /* Make control buttons circular */

        }

        .carousel-control-prev-icon::before,
        .carousel-control-next-icon::before {
            color: white; /* Control button icon color */
        }
    </style>
</head>
<body>
    <div class="row">
      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img\parking.jpg" class="d-block w-75" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img\logo2.jpg" class="d-block w-75" alt="...">
              </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
      
    </div>

    <!-- Link to Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" 
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
    integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
