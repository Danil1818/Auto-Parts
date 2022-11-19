  // Menu Burger
  let navList = document.querySelector('.nav__list');
  document.querySelector('.nav__btn-burger').addEventListener('click', openMenuBurger)
  document.querySelector('.nav__list-header-img').addEventListener('click', closeMenuBurger)


  function openMenuBurger() {
    navList.style.display = 'block'
    document.body.classList.add('lock')
  }

  function closeMenuBurger() {
    navList.style.display = 'none'
    document.body.classList.remove('lock')
  }

  // Slider
  const sliderImages = document.querySelectorAll(".intro__slider .intro__slider-track img");
  const sliderTrack = document.querySelector(".intro__slider-track");
  let count = 0;
  let width;

  function init() {
    width = document.querySelector(".intro__slider").offsetWidth;
    sliderTrack.style.width = width * sliderImages.length + "px";
    sliderImages.forEach(item => {
      item.style.width = width + "px";
      item.style.height = 'auto';
    });
    rollSlider()
  }

  window.addEventListener('resize', init)
  init();

  // Next
  document.querySelector('.slider__next').addEventListener('click', () => {
    count++;
    if (count >= sliderImages.length) {
      count = 0;
    }
    rollSlider();
  });

  // Prev
  document.querySelector('.slider__prev').addEventListener('click', () => {
    count--;
    if (count < 0) {
      count = sliderImages.length - 1;
    }
    rollSlider();
  });


  // SetInterval
  setInterval(() => {
    count++;
    if (count >= sliderImages.length) {
      count = 0;
    }
    rollSlider();

  }, 5000);

  function rollSlider() {
    sliderTrack.style.transform = 'translate(-' + count * width + 'px)';
  }