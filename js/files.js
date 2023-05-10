import {CargarOption1} from "./opcion1.js"
import {CargarOption2} from "./opcion2.js"
import {cargarValueEntry1} from "./renderer.js"
const btn1 = document.getElementById('opcion1')
const btn2 = document.getElementById('opcion2')
const contenido = document.getElementById('contenido')
const subcontenido = document.getElementById('subcontenido')
const sub2contenido = document.getElementById('sub2contenido')


btn1.addEventListener('click', () => {
  cargarPagina("opcion1");
})

btn2.addEventListener('click', () => {
  cargarPagina("opcion2");
})


export function cargarPagina(pagina) {
  const xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      switch (pagina) {
        case "opcion1":
          subcontenido.innerHTML = "";
          sub2contenido.innerHTML = "";
          contenido.innerHTML = this.responseText;
          CargarOption1();
          break;
        case "opcion2":
          subcontenido.innerHTML = "";
          sub2contenido.innerHTML = "";
          contenido.innerHTML = this.responseText;
          CargarOption2();
          break;
        case "valueEntry1":
          subcontenido.innerHTML = this.responseText;
          cargarValueEntry1();
          break;
        case "valueEntry2":
          subcontenido.innerHTML = this.responseText;
          cargarValueEntry1();
          break;
        default:
          subcontenido.innerHTML = "";
          sub2contenido.innerHTML = "";
          contenido.innerHTML = this.responseText;
          break;
      }
    }
  };
  console.log(xhttp.open("GET", `paginas/${pagina}.html`, true));
  xhttp.send();
}