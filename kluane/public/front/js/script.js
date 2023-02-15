window.addEventListener("scroll", function(){
    var menu = document.querySelector("header");
    menu.classList.toggle("down", window.scrollY>0)
})

//CARROUSEL DE TRABAJADORES
$('.custom-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
   responsive: [
      {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
      {
          breakpoint: 900,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
      {
          breakpoint: 550,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        }
      ]
  });

// MAPA
var pointcanada = document.querySelector('#pointcanada');
        var canada = document.querySelector('#canada');

        pointcanada.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            canada.classList.add('second');
        })
        pointcanada.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            canada.classList.remove('second');
        })

        var pointcanada = document.querySelector('#pointmexico');
        var mexico = document.querySelector('#mexico');

        pointmexico.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            mexico.classList.add('second');
        })
        pointmexico.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            mexico.classList.remove('second');
        })

        var pointcanada = document.querySelector('#pointcentro');
        var centro = document.querySelector('#centro');

        pointcentro.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            centro.classList.add('second');
        })
        pointcentro.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            centro.classList.remove('second');
        })

        var pointcanada = document.querySelector('#pointetopia');
        var etopia = document.querySelector('#etopia');

        pointetopia.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            etopia.classList.add('second');
        })
        pointetopia.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            etopia.classList.remove('second');
        })

        var pointcanada = document.querySelector('#pointcolombia');
        var colombia = document.querySelector('#colombia');

        pointcolombia.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            colombia.classList.add('second');
        })
        pointcolombia.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            colombia.classList.remove('second');
        })

        var pointcanada = document.querySelector('#pointecuador');
        var ecuador = document.querySelector('#ecuador');

        pointecuador.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            ecuador.classList.add('second');
        })
        pointecuador.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            ecuador.classList.remove('second');
        })

        var pointcanada = document.querySelector('#pointperu');
        var peru = document.querySelector('#peru');

        pointperu.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            peru.classList.add('second');
        })
        pointperu.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            peru.classList.remove('second');
        })

        var pointchile = document.querySelector('#pointchile');
        var chile = document.querySelector('#chile');

        pointchile.addEventListener('mouseenter', function () {
            // this.classList.remove('first');
            chile.classList.add('second');
        })
        pointchile.addEventListener('mouseleave', function () {
            // this.classList.add('first');
            chile.classList.remove('second');
        })