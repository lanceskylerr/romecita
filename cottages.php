<!DOCTYPE html>
<html>
<head>
	<title>Cottages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- add viewport meta tag -->
	<link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
	<style>
		/* CSS style for the image container */
		.img-container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			align-items: center;
			margin: 20px auto;
			max-width: 800px;
		}

		/* CSS style for each individual image */
		.img-container img {
			max-width: 100%;
			height: auto;
			margin: 5px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
		}

		/* CSS style for the background image */
		body {
			background-image: url('resort.jpg');
			background-size: cover;
			background-position: center;
            padding-top: 50px; /* add some space on top */
		}
    .back-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 10px; 
            width: 60px;
            height:42px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 20px;
            z-index: 1;
            position: absolute;
  top: 100%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
        }
        
        .back-button:hover {
            background-color: #0069d9;
            z-index: inherit;
            position: absolute;
 
        }
        
        .back-button a {
            color: #fff;
            text-decoration: none;
            z-index: inherit;
            position: absolute;

        }
        
        .back-button a:hover {
            text-decoration: underline;
            z-index: inherit;
            position: absolute;
 
        }

		/* media query for smaller screens */
		@media screen and (max-width: 480px) {
			.img-container {
				flex-direction: column;
				max-width: 300px;
				margin: 10px auto;
			}

			.img-container img {
				margin: 5px 0;
			}

      
		}
	</style>
</head>
<body>
<header>
	
<div class="container mt-3">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
	<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Picture 1</h5>
        <p>Lorem Ipsum</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image2.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Picture 2</h5>
        <p>Lorem Ipsum</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="image3.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Picture 3</h5>
        <p>Lorem Ipsum</p>
      </div>
    </div>
	<div class="carousel-item">
      <img src="image4.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Picture 4</h5>
        <p>Lorem Ipsum</p>
      </div>
    </div>
	<div class="carousel-item">
      <img src="image5.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Picture 5</h5>
        <p>Lorem Ipsum</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="back-button">
                <a href="index.php" onclick="history.back()">Back</a>
            </div>
</body>
</html>
