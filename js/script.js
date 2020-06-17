// Inicializado
let tabla = document.getElementById('tabla');
document.getElementById('btnMaestros').classList.add('active');
tabla.innerHTML = `
  <tr>
    <td>Datos:</td>
    <td>Brayan Durán</td>
    <td>Escuela Básica Romulo Gallegos</td>
  </tr>
  <tr>
    <td></td>
    <td>Carlos Matute</td>
    <td>Escuela Publica Teresa Heredia</td>
  </tr>
  <tr>
    <td></td>
    <td>Cecilia García</td>
    <td>Instituto Simon Rodriguez</td>
  </tr>
  <tr>
    <td></td>
    <td>Milagros Velásquez</td>
    <td>Escuela Básica Romulo Gallegos</td>
  </tr>
  `;

  // btns

document.getElementById('btnMaestros').addEventListener('click', () => {

    document.getElementById('btnDoctores').classList.remove('active');
    document.getElementById('btnMaestros').classList.add('active');

    tabla.innerHTML = `
        <tr>
            <td>Datos:</td>
            <td>Brayan Durán</td>
            <td>Escuela Básica Romulo Gallegos</td>
        </tr>
        <tr>
            <td></td>
            <td>Carlos Matute</td>
            <td>Escuela Publica Teresa Heredia</td>
        </tr>
        <tr>
            <td></td>
            <td>Cecilia García</td>
            <td>Instituto Simon Rodriguez</td>
        </tr>
        <tr>
            <td></td>
            <td>Milagros Velásquez</td>
            <td>Escuela Básica Romulo Gallegos</td>
        </tr>
        `;

})

document.getElementById('btnDoctores').addEventListener('click', () => {
    document.getElementById('btnMaestros').classList.remove('active');
    document.getElementById('btnDoctores').classList.add('active');

    tabla.innerHTML = `
        <tr>
            <td>Datos:</td>
            <td>Nikolas Jimenez</td>
            <td>Hospital Manuel Nuñez Tovar</td>
        </tr>
        <tr>
            <td></td>
            <td>Merida Calzadilla</td>
            <td>CDI Viento Colao II</td>
        </tr>
        <tr>
            <td></td>
            <td>Luis García</td>
            <td>Hospital de Buenos Vientos</td>
        </tr>
        <tr>
            <td></td>
            <td>Carmen Sanabria</td>
            <td>Clínica La Libertadora</td>
        </tr>
        <tr>
            <td></td>
            <td>Miguel Montes</td>
            <td>Clinica Rosa Mistica</td>
        </tr>
        `;
})