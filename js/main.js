(function() {

  var tl = new TimelineMax();

  var hexes = document.querySelectorAll('.home-header__graphic > defs path');
  console.log(hexes);

  tl.staggerFrom(hexes, 0.5, {
    scaleX: 0,
    scaleY: 0,
    transformOrigin: "center",
    ease: Power2.easeOut
  }, 0.1);

})();