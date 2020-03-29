const menuMobile = () => {
  "use stric";

  let menuNavbar = document.getElementById("menu-navbar");

  menuNavbar.onclick = function() {
    if ($(".nav-menu").hasClass("showMenu")) {
      $(".nav-menu").removeClass("showMenu");
    } else {
      $(".nav-menu").addClass("showMenu");
    }
  };
};

const carregarNoticias = e => {
  $(".load").show();

  const page = $("#btn-carregar-mais").attr("data-page");

  $.get("noticias.php?page=" + page, function(data) {
    $(data).insertBefore(".button-container");
    $("#btn-carregar-mais").attr("data-page", Number(page) + 1);
    $(".load").hide();
  });
};

$("#btn-carregar-mais").click(carregarNoticias);

menuMobile();
