<?php
	include "./include/header.php"
?>

<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  header {
    background-color: lightgreen;
    color: whitesmoke;
    text-align: center;
    padding: 10px;
  }
  .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
  }
  .news-item {
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid darkgreen;
    border-radius: 5px;
  }
  .event-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .event-image {
    width: 20%;
    margin-bottom: 20px;
    border: 1px solid darkgreen;
    border-radius: 5px;
    overflow: hidden;
    text-align: center;
}
  .event-image img {
    max-width: 100%;
    height: auto;
  }
  
</style>
<div class="page-wrapper">
</head>
<body>

<div class="section-box text-center">
  
  <p><h4>Exploring Our School Gallery:</h4> A Visual Journey Through Excellence

Welcome to our School Gallery, where moments, memories, and milestones come alive through captivating visuals. Immerse yourself in the vibrant tapestry of our educational journey, as we showcase the heartwarming, inspiring, and remarkable experiences that define our school community.</p>
  </div>
  
  <div class="event-gallery">
    <div class="event-image">
      <img src="rccg logo.png" alt="Event 1">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/curriculum/9.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/curriculum/121.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/curriculum/bookss.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/curriculum/download.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/events/images_1.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/curriculum/images.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/events/images_2.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/testimonial/pst EA.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <div class="event-image">
      <img src="./assets/image/board/php.png" alt="Event 2">
      <a class="download-link" href="image1.jpg" download>Download Image</a>
    </div>
    <!-- Add more event images as needed -->
  </div>
</div>
</body>

<?php
	include "./include/footer.php"
?>
