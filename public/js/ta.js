// Substituindo o PHP com JavaScript
const eventos = [
  { data: '24/02/2025', evento: 'Trote da Fantasia' },
  { data: '25/02/2025', evento: 'Dia do Pijama' },
  { data: '26/02/2025', evento: 'Gincana dos Terceiros' },
  { data: '27/02/2025', evento: 'Festa Junina' },
  { data: '28/02/2025', evento: 'Calourada' }
];

const eventosLista = document.getElementById('eventos-lista');

eventos.forEach(evento => {
  const tr = document.createElement('tr');
  tr.innerHTML = `<td>${evento.data}</td><td class="event">${evento.evento}</td>`;
  eventosLista.appendChild(tr);
});

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
