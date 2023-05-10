import {cargarPagina} from "./files.js"

export function CargarOption1()
{

  const btn1 = document.getElementById('Material')
  btn1.addEventListener('change', () => {
    if(btn1.value != "")
    {
      const selectedOption = btn1.value;
      cargarPagina("valueEntry1");
    }
  })
}