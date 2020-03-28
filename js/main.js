function init() {
  "use stric";

  let teste = document.getElementById("teste");

  teste.onclick = function() {
    console.log("fui clicado");
    document.getElementById("teste2").classList.add("mystyle");
  };

  console.log(teste);
}

init();
