var i = 0
var txt =
  'Olá, calouros! Aqui quem fala são os terceiros de Informática. Sejam bem-vindos ao nosso calendário oficial de eventos! 🎉 Fiquem atentos, porque este será o nosso canal para divulgar todas as atividades, desafios e momentos épicos que preparamos para vocês ao longo do ano. Desde trotes inesquecíveis até eventos temáticos, tudo estará registrado aqui com datas e detalhes. Preparem-se para muita diversão, integração e, claro, surpresas! Não deixem de acompanhar para não perder nada. 🚀🔥' /* The text */
var speed = 50 /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  document.getElementById("typeWriter").style.display = "none";
  if (i < txt.length) {
    document.getElementById('demo').innerHTML += txt.charAt(i)
    i++
    setTimeout(typeWriter, speed)
  }
}
// Get the button to show/hide
let mybutton = document.getElementById('myBtn')

// Function to handle scroll visibility of the button
window.onscroll = function () {
  scrollFunction()
  updateProgressBar()
}

function scrollFunction() {
  if (
    document.body.scrollTop > 2 ||
    document.documentElement.scrollTop > 2
  ) {
    mybutton.style.display = 'block'
  } else {
    mybutton.style.display = 'none'
  }
}

// Scroll to top function
function topFunction() {
  document.body.scrollTop = 0 // For Safari
  document.documentElement.scrollTop = 0 // For Chrome, Firefox, IE and Opera
}

// Progress bar update function
function updateProgressBar() {
  var winScroll =
    document.body.scrollTop || document.documentElement.scrollTop
  var height =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight
  var scrolled = (winScroll / height) * 100
  document.getElementById('myBar').style.width = scrolled + '%'
}

// Carregar conteúdo do arquivo claro_escuro.html
fetch('../Templates/claro_escuro.html')
  .then(response => response.text())
  .then(data => {
    document.getElementById('claroEscuro').innerHTML = data
  })
  .catch(error =>
    console.log('Erro ao carregar claro_escuro.html:', error)
  )

// Reloader for pageshow event
window.onpageshow = function (event) {
  if (event.persisted) {
    window.location.reload()
  }
}

