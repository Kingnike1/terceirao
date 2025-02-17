var i = 0
var txt =
  'Olá, calouros! Aqui quem fala são os terceiros de Maio Ambientes. Sejam bem-vindos ao nosso calendário oficial de eventos! 🎉 Fiquem atentos, porque este será o nosso canal para divulgar todas as atividades, desafios e momentos épicos que preparamos para vocês ao longo do ano. Desde trotes inesquecíveis até eventos temáticos, tudo estará registrado aqui com datas e detalhes. Preparem-se para muita diversão, integração e, claro, surpresas! Não deixem de acompanhar para não perder nada. 🚀🔥' /* The text */
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

function toggleMenu() {
  var menu = document.querySelector("nav");
  menu.classList.toggle("open");
}

// Fechar o menu quando o clique for fora dele
document.addEventListener("click", function(event) {
  var menu = document.querySelector("nav");
  var toggleButton = document.querySelector(".menu-toggle");

  // Verifica se o clique foi fora do menu e do botão de menu
  if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
      menu.classList.remove("open");
  }
});


function startCountdown(targetDate) {
  function updateCountdown() {
      let now = new Date().getTime();
      let timeLeft = targetDate - now;

      if (timeLeft < 0) {
          document.querySelector(".countdown-container").innerHTML = "<h2>🎉 O grande dia chegou! 🎉</h2>";
          clearInterval(interval);
          return;
      }

      let days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
      let hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

      document.getElementById("days").textContent = days < 10 ? "0" + days : days;
      document.getElementById("hours").textContent = hours < 10 ? "0" + hours : hours;
      document.getElementById("minutes").textContent = minutes < 10 ? "0" + minutes : minutes;
      document.getElementById("seconds").textContent = seconds < 10 ? "0" + seconds : seconds;
  }

  let interval = setInterval(updateCountdown, 1000);
  updateCountdown();
}

// Verifica se há uma data salva no LocalStorage
let savedDate = localStorage.getItem("eventDate");

if (!savedDate) {
  let eventDate = new Date("2025-02-28T08:00:00").getTime(); // Defina a data do evento
  localStorage.setItem("eventDate", eventDate); // Salva no LocalStorage
} else {
  eventDate = parseInt(savedDate);
}

startCountdown(eventDate);
