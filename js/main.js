function init() {
    'use stric'

    let api = 'https://public-api.wordpress.com/rest/v1.1/sites/109720969/posts?number=10&page=1'
    let teste = document.getElementById('teste')

    teste.onclick = function () {
        console.log('fui clicado')
        document.getElementById('teste2').classList.add("mystyle");
    }

    console.log(teste)
}

init()