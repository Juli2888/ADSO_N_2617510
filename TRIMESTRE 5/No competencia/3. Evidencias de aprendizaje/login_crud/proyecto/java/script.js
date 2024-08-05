let loadMoreBtn = document.querySelector('#load-more');
let currentItem = 8;

loadMoreBtn.onclik = () => {
    let boxes = [...document.querySelectorAll('.box-container .box')];
    for(var i = currentItem; i < currentItem + 4; i++) {
        boxes[i].style.display = 'inline-block';    
    }
    currentItem += 4;
    if(currentItem >= boxes.length) {
        loadMoreBtn.style.display ='none'
    }
}

//carrito

const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarcarritoBtn = document.getElementById('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click',eliminarElemento);

    vaciarcarritoBtn.addEventListener('clik',vaciarcarrito);
}

function comprarElemento (e){
    e.preventDefault();
    if(e.target.classlist.contains('agregar-carrito')) {
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento){
    const infoElemento = {
        imagen: elemento-querySelector('img').src,
        titulo: elemento.querySelector('h3').textcontent,
        precio: elemento.querySelector('.precio').textcontent,
        id: elemento.querySelector('a').getAttribute(data-id)

    }
    insertarCarrito(infoElemento);
}

function insertarCarrito(elemento){
    const row = document.createElement('tr');
    row.innerHTML = `
    <td>
       <img src="${elemento.imagen}" width=100 height=150px>
       </td>
       <td>
         ${elemento.titulo}
         </td>
         <td>
         ${elemento.precio}
         </td>
         <td>
           <a herf="#" class="borrar" data-id="${elemento.id}">X</a>
       </td>
    `;
    lista.appendChild(row);
}

function eliminarElemento(e){
    e.preventDefault();
    let elemento,
    elementoId;
    if(e.target.classList.contains('borrar')){
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elemntoId = elemento.querySelector('a').getAttribute('data-id');
    }
}

function vaciarcarrito() {
    while(lista.firstElementChild)(lista.firstChild);{
        lista.removeChild(lista.firstChild);
    }

}
  