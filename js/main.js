(function() {

  var tl = new TimelineMax();

  var hexes = document.querySelectorAll('#Layer_1-2 polygon');

  tl.staggerFrom(hexes, 0.7, {
    scaleX: 0,
    scaleY: 0,
    transformOrigin: "center",
    ease: Bounce.easeOut
  }, 0.1);

})();