window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 50) {
      navbar.classList.remove('transparent-bg');
      navbar.classList.add('solid-bg');
    } else {
      navbar.classList.remove('solid-bg');
      navbar.classList.add('transparent-bg');
    }
  });