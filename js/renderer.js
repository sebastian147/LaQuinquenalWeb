export async function cargarValueEntry1()
{
    const calcularBtn = document.getElementById('calcularBtn');
    const espesor = document.getElementById('Espesor');
    const largo = document.getElementById('Largo');
    const ancho = document.getElementById('Ancho');
    const espesorUnidad = document.getElementById('EspesorUnit');
    const largoUnidad = document.getElementById('LargoUnit');
    const anchoUnidad = document.getElementById('AnchoUnit');
    const material = document.getElementById('Material');
    const resultadoPeso = document.getElementById('resultadoPeso');
    const resultadoPrecioKg = document.getElementById('resultadoPrecioKg');
    const resultadoPrecioUSD = document.getElementById('resultadoPrecioUSD');
    const FlejeOChapa = document.getElementById('FlejeOChapa');
    const divisorRes = document.getElementById('divisorRes');

    calcularBtn.addEventListener('click', () => {
        const espesorN = convertirAMilimetros(espesor.value, espesorUnidad.value);
        //try {
            //const valorDolar = await dolar();
            //console.log(`Valor de venta: $${valorDolar}`);
          //} catch (error) {
            //console.error(error);
          //}
        divisorRes.removeAttribute("hidden", false)
        if(ancho != null)
        {
            const largoN = convertirAMilimetros(largo.value, largoUnidad.value);
            const anchoN = convertirAMilimetros(ancho.value, anchoUnidad.value);
            const materialValor = convertirMaterial(material.value)/1000000;
            const resultadoVol = Math.ceil(espesorN * largoN * anchoN * materialValor*100)/100;
            const precioKg = Math.ceil(precio(espesorN, anchoN, largoN)*100)/100;
            const resultadoKg = precioKg;
            const resultadoUSD = Math.ceil(resultadoVol * precioKg*100)/100;
            if(resultadoVol == 0)
            {
                resultadoPeso.innerHTML = `No puedo otorgar precio por este producto, deberias conversarlo telefonicamente`;
                //  resultadoPrecioKg.innerHTML = `Precio ${resultadoKg} USD/Kg`;
                resultadoPrecioUSD.innerHTML = ``;
            }
            else
            {
                resultadoPeso.innerHTML = `Pesa ${resultadoVol} Kg`;
                //  resultadoPrecioKg.innerHTML = `Precio ${resultadoKg} USD/Kg`;
                resultadoPrecioUSD.innerHTML = `Precio ${resultadoUSD} USD`;
            }
        }
        else
        {
            const resultadoKg = fleje(espesorN);
            if(resultadoVol == 0)
            {
                resultadoPeso.innerHTML = `No puedo otorgar precio por este producto, deberias conversarlo telefonicamente`;
                //  resultadoPrecioKg.innerHTML = `Precio ${resultadoKg} USD/Kg`;
                resultadoPrecioUSD.innerHTML = ``;
            }
            else
            {
                resultadoPeso.innerHTML = `Pesa ${resultadoVol} Kg`;
                //  resultadoPrecioKg.innerHTML = `Precio ${resultadoKg} USD/Kg`;
                resultadoPrecioUSD.innerHTML = ``;
            }
        }
        console.log(dolar());
    });
}
function convertirMaterial(material) {
  console.log(material);
  switch (material) {
    case 'Cobre':
      return 9;
    case 'Laton':
      return 8.8;
  }
}
function convertirAMilimetros(medida, unidad) {
    switch (unidad) {
      case 'mm':
        return medida;
      case 'cm':
        return medida * 10;
      case 'm':
        return medida * 1000;
      default:
        return medida;
    }
}
function precio(espesor, ancho, largo) {
    if(ancho>600 && ancho <= 1150 && largo <= 3200)
    {    
        switch (true) 
        {
            case espesor<0.5:
                return 0;
            case espesor<0.6:
                return 50.17;
            case espesor<0.7:
                return 48.7;
            case espesor<0.8:
                return 48.25;
            case espesor<0.9:
                return 47.63;
            case espesor<1:
                return 47.56;
            case espesor<2:
                return 47.06;
            case espesor<3:
                return 47.01;
            case espesor<4:
                return 47.01;
            case espesor<5:
                return 47.01;
            case espesor==5:
                return 46.97;
            default:
                return 51.88;
        }
    }
    else if(ancho<=600 && largo <= 3200)
    {    
        switch (true) 
        {
            case espesor<0.3:
                return 0
            case espesor < 0.4:
                return 35.55;
            case espesor<0.5:
                return 34.62;
            case espesor<0.6:
                return 33.81;
            case espesor<0.7:
                return 33.57;
            case espesor<0.8:
                return 33.23;
            case espesor<0.9:
                return 32.84;
            case espesor<1:
                return 32.78;
            case espesor<2:
                return 32.58;
            case espesor<3:
                return 32.52;
            case (2<espesor && espesor<=3):
                return 36.06;
            case (3<espesor && espesor<=4):
                return 38.77;
            case (4<espesor && espesor<=5):
                return 38.69;
            default:
                return 51.88;
        }
    }
    else
    {
        return 0;
    }
}
function fleje(espesor)
{
    switch (true) 
    {
        case espesor<0.1:
            return 0
        case espesor < 0.2:
            return 33.85;
        case espesor<0.3:
            return 32.4;
        case espesor<0.4:
            return 31.65;
        case espesor<0.5:
            return 31.13;
        case espesor<0.6:
            return 31.02;
        case espesor<0.7:
            return 30.46;
        case espesor<0.8:
            return 30.37;
        case espesor<0.9:
            return 30.35;
        case espesor<1:
            return 30.24;
        case espesor == 1:
            return 30.05;
        default:
            return 0;
    }
}
function dolar ()
{
    var venta;
    const url2 = "https://www.dolarsi.com/api/api.php?type=valoresprincipales"
    fetch(url2, {
      method: 'GET',
      //headers: {
        //'Authorization': `Bearer ${token}`
//}
    }).then(response => response.json())
        .then(data => {
          const ventas = data[0].casa.venta.split(',').join('.'); // Obtiene el valor de venta del primer diccionario y reemplaza ',' por '.'
          console.log(ventas); // Imprime el valor de venta en la consola
        })
        .catch(error => console.error(error));
}