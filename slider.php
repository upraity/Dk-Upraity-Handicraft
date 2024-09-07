<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Image Slider</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: #f3f3f3;
    }

    .slider {
      width: 80%;
      max-width: 800px;
      /* position: relative; */
      overflow: hidden;
      border: 2px solid #ddd;
      border-radius: 10px;
    }

    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }

    .slide img {
      width: 100%;
      border-radius: 10px;
    }

    .slider-nav {
      /* position: absolute; */
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .slider-nav button {
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 50%;
    }

    .slider-nav button:hover {
      background-color: rgba(0, 0, 0, 0.8);
    }

  </style>
</head>
<body>

  <div class="slider">
    <div class="slides">
      <div class="slide"><img src="https://via.placeholder.com/800x400?text=Image+1" alt="Image 1"></div>
      <div class="slide"><img src="https://via.placeholder.com/800x400?text=Image+2" alt="Image 2"></div>
      <div class="slide"><img src="https://via.placeholder.com/800x400?text=Image+3" alt="Image 3"></div>
    </div>
    <div class="slider-nav">
      <button id="prev">&lt;</button>
      <button id="next">&gt;</button>
    </div>
  </div>

  <script>
    const slides = document.querySelector('.slides');
    const slide = document.querySelectorAll('.slide');
    let currentIndex = 0;
    const totalSlides = slide.length;

    document.getElementById('next').addEventListener('click', () => {
      moveToNextSlide();
    });

    document.getElementById('prev').addEventListener('click', () => {
      moveToPreviousSlide();
    });

    function updateSlidePosition() {
      slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
    }

    function moveToNextSlide() {
      if (currentIndex === totalSlides - 1) {
        currentIndex = 0;
      } else {
        currentIndex++;
      }
      updateSlidePosition();
    }

    function moveToPreviousSlide() {
      if (currentIndex === 0) {
        currentIndex = totalSlides - 1;
      } else {
        currentIndex--;
      }
      updateSlidePosition();
    }

    setInterval(moveToNextSlide, 3000);
  </script>

</body>
</html>
