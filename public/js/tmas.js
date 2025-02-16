// Código JavaScript para carregar o claro e escuro
fetch('../Templates/claro_escuro.html')
  .then(response => response.text())
  .then(html => {
    document.getElementById('claro-escuro').innerHTML = html;
  })
  .catch(error => console.error('Erro ao carregar o template:', error));
  window.onpageshow = function(event) {
        if (event.persisted) {
            window.location.reload();
        }
    };
