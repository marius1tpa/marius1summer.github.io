document.addEventListener("DOMContentLoaded", function() {
  const navLinks = document.querySelectorAll("nav a");

  navLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {
      event.preventDefault();

      const target = document.querySelector(this.getAttribute("href"));
      const offset = target.offsetTop;
      const scrollOptions = {
        top: offset,
        behavior: "smooth"
      };

      window.scrollTo(scrollOptions);
    });
  });
});