particlesJS("particles-js", {"particles":{"number":{"value":50,"density":{"enable":true,"value_area":1100}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":4},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.8,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3.945738208161363,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":false,"mode":"bubble"},"onclick":{"enable":true,"mode":"repulse"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":183.8161838161838,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});;

function rulesOpen() {
  document.getElementById('rules').style.display = 'block';
  document.getElementById('changelog').style.display = 'none';
  document.getElementById('terms').style.display = 'none';
}

function changelogOpen() {
  document.getElementById('changelog').style.display = 'block';
  document.getElementById('rules').style.display = 'none';
  document.getElementById('terms').style.display = 'none';
}

function termsOpen() {
  document.getElementById('terms').style.display = 'block';
  document.getElementById('changelog').style.display = 'none';
  document.getElementById('rules').style.display = 'none';
}

function rulesClose() {
  document.getElementById('rules').style.display = 'none';
}

function changelogClose() {
  document.getElementById('changelog').style.display = 'none';
}

function termsClose() {
  document.getElementById('terms').style.display = 'none';
}

/* RESPONSIVE */

function mobileMenuOpen() {
  document.getElementById('mobileMenu').style.width = '200pt';
  document.getElementById('mobileMenu').style.transition = '0.3s';
}

function mobileMenuClose() {
  document.getElementById('mobileMenu').style.width = '0';
  document.getElementById('mobileMenu').style.transition = '0.1s';
}

function menuCloseTerms() {
  document.getElementById('mobileMenu').style.width = '0';
  document.getElementById('mobileMenu').style.transition = '0.1s';
  document.getElementById('terms').style.display = 'block';
  document.getElementById('changelog').style.display = 'none';
  document.getElementById('rules').style.display = 'none';
}

function menuCloseChangelog() {
  document.getElementById('mobileMenu').style.width = '0';
  document.getElementById('mobileMenu').style.transition = '0.1s';
  document.getElementById('changelog').style.display = 'block';
  document.getElementById('rules').style.display = 'none';
  document.getElementById('terms').style.display = 'none';
}

function menuCloseRules() {
  document.getElementById('mobileMenu').style.width = '0';
  document.getElementById('mobileMenu').style.transition = '0.1s';
  document.getElementById('rules').style.display = 'block';
  document.getElementById('changelog').style.display = 'none';
  document.getElementById('terms').style.display = 'none';
}

new Clipboard('.ip');

$(document).ready(function(){
    $("#Info").click(function(){
        $("#copiedIP").fadeIn(1500);
        $("#copiedIP").fadeOut(3500);
    });
});
