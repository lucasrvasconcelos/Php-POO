var imgs = document.querySelectorAll('img')
var body = document.querySelector('body')
var btnClose = document.createElement('button')

var btnDiv = document.querySelector('.btn')

btnClose.innerHTML = 'Fechar'
imgs.forEach((e) => {
    e.addEventListener('click', () => {
        e.classList.toggle("view")
    })
})

body.addEventListener('click', () => {
    imgs.forEach((e) => {
        if(e.getAttribute('class') == 'view'){
            body.addEventListener('click', () =>{
                e.classList.toggle("view")
            })
        }
    })
})
