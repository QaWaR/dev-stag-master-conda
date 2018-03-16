$('.carousel').carousel({
  interval: 3000
});

$('.owl-one').owlCarousel({
  loop: true,
  autoplay: true,
  dots: false,
  items: 1,
  autoplaySpeed: 3000,
  dragEndSpeed: 1000

});

$('.owl-two').owlCarousel({
  loop: true,
  margin: 10,
  autoplay: true,
  dots: false,
  responsive: {
    0: {
      items: 2
    },
    400: {
      items: 3
    },
    700: {
      items: 4
    },
    1000: {
      items: 5
    }
  }
});


$(document).ready(function () {
  $("body").tooltip({ selector: '[data-toggle=tooltip]' });
});

document.querySelector('.coockie-btn').addEventListener('click', function() {
  document.querySelector('.coockies').style.display = 'none';
})