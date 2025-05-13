let pontosTime1 = 0;
let pontosTime2 = 0;

function atualizarPlacar() {
  document.getElementById('pontosTime1').textContent = pontosTime1;
  document.getElementById('pontosTime2').textContent = pontosTime2;
}

function incrementarPontos(time) {
  if (time === 'time1') {
    pontosTime1++;
  } else if (time === 'time2') {
    pontosTime2++;
  }
  atualizarPlacar();
}

function diminuirPontos(time) {
  if (time === 'time1' && pontosTime1 > 0) {
    pontosTime1--;
  } else if (time === 'time2' && pontosTime2 > 0) {
    pontosTime2--;
  }
  atualizarPlacar();
}

function reiniciarJogo() {
  pontosTime1 = 0;
  pontosTime2 = 0;
  atualizarPlacar();
}

function atualizarNome(time) {
  let novoNome;
  
  if (time === 'time1') {
    novoNome = document.getElementById('inputTime1').value;
    if (novoNome) {
      document.getElementById('nomeTime1').textContent = novoNome;
      document.getElementById('inputTime1').style.display = 'none';  // Esconde o input após mudar o nome
    }
  } else if (time === 'time2') {
    novoNome = document.getElementById('inputTime2').value;
    if (novoNome) {
      document.getElementById('nomeTime2').textContent = novoNome;
      document.getElementById('inputTime2').style.display = 'none';  // Esconde o input após mudar o nome
    }
  }
}
