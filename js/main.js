function init() {
  "use stric";

  let teste = document.getElementById("teste");

  teste.onclick = function() {
    if ($(".nav-menu").hasClass("mystyle")) {
      console.log("essa classe ja foi chamada");
      $(".nav-menu").removeClass("mystyle");
    } else {
      $(".nav-menu").addClass("mystyle");
    }
  };
}

init();
