function menu(){
    document.getElementById('menu').style.display = 'block';
    document.getElementById('showcase').style.display = 'none';
}
function cerrar(){
    document.getElementById('showcase').style.display = 'flex';
    document.getElementById('menu').style.display = 'none';
}

$(document).ready(function() {
  ScrollToInit();
  ActiveSectionNavigation();
  InitWaypointAnimations({
      offset: "60%",
      animateClass: "wp-animated",
      animateGroupClass: "wp-animated-group"
  });
  InitCounterWayPointAnimation();
});

function ScrollToInit() {
  $(document).on("click", "a[href^='#']", function(event) {
      var $anchor = $(this);
      $("html, body").stop().animate({
          scrollTop: $($anchor.attr("href")).offset().top
      }, 1500, "easeInOutExpo");
      event.preventDefault();
  });
}

function ActiveSectionNavigation() {
  function getNavItemsMap() {
      const navItemsMap = $("#main-nav").find(".nav-item").map((index, item) => {
          const $item = $(item);
          const name = $item.find(".nav-link").attr("href").substring(1);
          return {
              key: name,
              val: $item
          };
      })
      .toArray()
      .reduce((map, obj) => {
          map[obj.key] = obj.val;
          return map;
      }, {});

      return navItemsMap;
  }

  function deactivateCurrentNavItem() {
      $("#main-nav").find(".nav-item.active").removeClass("active");
  }
  
  const navItemsMap = getNavItemsMap();
  $("section").each((index, element) => {
      const $element = $(element);
      const sectionName = $element.attr("id");
      if(sectionName in navItemsMap) {
          
          $element.waypoint((direction) => {
              if(direction === "down") {
                  deactivateCurrentNavItem();
                  navItemsMap[sectionName].addClass("active");
              }
          },{
              offset: "50%"
          });
          
          $element.waypoint((direction) => {
              if(direction === "up") {
                  deactivateCurrentNavItem();
                  navItemsMap[sectionName].addClass("active");
              }
          },{
              offset: "-20%"
          })
      }
  });
}

function InitCounterWayPointAnimation() {
  $('.counter').each(function () {
      var $this = $(this);
      var stop = parseInt($this.text().replace(/,/g, ""));
      $this.text(0);
      $this.waypoint(function (direction) {
          animateNumbers($this, 0, stop);
          this.destroy();
      },{
          triggerOnce: true,
          offset: "80%"
      });
  });  
}


function animateNumbers(element, start, stop, commas, duration, ease) {
  var $this = element;
  commas = (commas === undefined) ? true : commas;
  $({value: start}).animate({value: stop}, {
      duration: duration == undefined ? 4000 : duration,
      easing: ease == undefined ? "swing" : ease,
      step: function() {
          $this.text(Math.floor(this.value));
          if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
      },
      complete: function() {
         if (parseInt($this.text()) !== stop) {
             $this.text(stop);
             if (commas) { $this.text($this.text().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,")); }
         }
      }
  });
}
/*RECAPTCHA */
$('#form').submit(function (event) {
    event.preventDefault();
    grecaptcha.ready(function () {
        grecaptcha.execute('6Lc_knsgAAAAANk6YT3fIzgVXUSBZqHJiVa74VvT', { action: 'registro' }).then(function (token) {
            $('#form').prepend('<input type="hidden" name="token" value="' + token + '">');
            $('#form').prepend('<input type="hidden" name="action" value="registro">');
            $('#form').unbind('submit').submit();
        });
    });
});


/*DIPPER DE LAS GRÁFICAS PARA MANTENER EL BUCLE*/
var $dipper = $('.dipper'); 
$dipper.waypoint(function(){
    setTimeout(function() {
        $(".content").fadeOut(0);
    },3700);
 
    setTimeout(function() {
        $(".content2").fadeIn(0);
    },3700);
});

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

var pointmexico = document.querySelector('#pointmexico');
var mexico = document.querySelector('#mexico');

pointmexico.addEventListener('mouseenter', function () {
    // this.classList.remove('first');
    mexico.classList.add('second');
})
pointmexico.addEventListener('mouseleave', function () {
    // this.classList.add('first');
    mexico.classList.remove('second');
})

var pointcentro = document.querySelector('#pointcentro');
var centro = document.querySelector('#centro');

pointcentro.addEventListener('mouseenter', function () {
    // this.classList.remove('first');
    centro.classList.add('second');
})
pointcentro.addEventListener('mouseleave', function () {
    // this.classList.add('first');
    centro.classList.remove('second');
})

var pointetopia = document.querySelector('#pointetopia');
var etopia = document.querySelector('#etopia');

pointetopia.addEventListener('mouseenter', function () {
    // this.classList.remove('first');
    etopia.classList.add('second');
})
pointetopia.addEventListener('mouseleave', function () {
    // this.classList.add('first');
    etopia.classList.remove('second');
})

var pointcolombia = document.querySelector('#pointcolombia');
var colombia = document.querySelector('#colombia');

pointcolombia.addEventListener('mouseenter', function () {
    // this.classList.remove('first');
    colombia.classList.add('second');
})
pointcolombia.addEventListener('mouseleave', function () {
    // this.classList.add('first');
    colombia.classList.remove('second');
})

var pointecuador = document.querySelector('#pointecuador');
var ecuador = document.querySelector('#ecuador');

pointecuador.addEventListener('mouseenter', function () {
    // this.classList.remove('first');
    ecuador.classList.add('second');
})
pointecuador.addEventListener('mouseleave', function () {
    // this.classList.add('first');
    ecuador.classList.remove('second');
})

var pointperu = document.querySelector('#pointperu');
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