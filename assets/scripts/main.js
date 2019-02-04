var scroll = new SmoothScroll('a[href*="#"]');

function domReady(fn) {
  // If we're early to the party
  document.addEventListener("DOMContentLoaded", fn);
  // If late; I mean on time.
  if (document.readyState === "interactive" || document.readyState === "complete" ) {
    fn();
  }
}

domReady(gallery);

function gallery() {
  baguetteBox.run('.gallery');
}
