function myFunction() {
    var x = document.getElementById("inicio");
    if (x.className === "barra") {
        x.className += " responsive";
    } else {
        x.className = "barra";
    }
}

const btnCart = document.querySelector('.iconocarrito')
const containercarritoproductos = document.querySelector('.containercarritoproductos')
const contadorProductos = document.getElementById('contadorproductos'); // Seleccionar el contador de productos

btnCart.addEventListener('click', () => {
    containercarritoproductos.classList.toggle('ocultarcarrito')
})

let carrito = [];

document.addEventListener('DOMContentLoaded', () => {
    const botonesAgregarCarrito = document.querySelectorAll('.agregarcarrito');

    botonesAgregarCarrito.forEach(boton => {
        boton.addEventListener('click', () => {
            const productoId = boton.parentElement.getAttribute('datoproductoid');
            const nombreProducto = boton.parentElement.querySelector('h2').textContent;
            const precioProducto = boton.parentElement.querySelector('.precio').textContent;
            agregarAlCarrito(productoId, nombreProducto, precioProducto);
        });
    });

    // No necesitas inicializar los botones eliminar producto aquí

    // Inicializar la interfaz de usuario
    actualizarInterfazDeUsuario();
});

function eliminarDelCarrito(productoId) {
    // Buscar el producto en el carrito
    const index = carrito.findIndex(producto => producto.id === productoId);
    
    if (index !== -1) {
        // Si se encuentra el producto en el carrito
        if (carrito[index].cantidad > 1) {
            // Si la cantidad del producto es mayor que uno, decrementar la cantidad en uno
            carrito[index].cantidad--;
        } else {
            // Si la cantidad del producto es uno, eliminar el producto del carrito
            carrito.splice(index, 1);
        }
        
        // Decrementar el contador de productos
        contadorProductos.textContent = parseInt(contadorProductos.textContent) - 1;
        
        // Actualizar la interfaz de usuario después de modificar el carrito
        actualizarInterfazDeUsuario();
    }
}

function agregarAlCarrito(productoId, nombreProducto, precioProducto) {
    // Verificar si el producto ya está en el carrito
    const productoExistente = carrito.find(producto => producto.id === productoId);
    
    if (productoExistente) {
        // Si el producto ya está en el carrito, incrementar su cantidad
        productoExistente.cantidad++;
    } else {
        // Si el producto no está en el carrito, agregarlo con cantidad 1
        carrito.push({ id: productoId, nombre: nombreProducto, precio: precioProducto, cantidad: 1 });
    }
    
    // Incrementar el contador de productos
    contadorProductos.textContent = parseInt(contadorProductos.textContent) + 1;
    
    // Actualizar la interfaz de usuario
    actualizarInterfazDeUsuario();
}

function actualizarInterfazDeUsuario() {
    const contenedorCarritoProductos = document.querySelector('.carritoproductos');
    const contenedorTotalPagar = document.querySelector('.totalpagar');

    // Limpiar el contenido actual del contenedor de productos del carrito
    contenedorCarritoProductos.innerHTML = '';

    // Inicializar el total a pagar
    let totalPagar = 0;

    // Recorrer todos los productos en el carrito y crear elementos para cada uno
    carrito.forEach(producto => {
        // Crear un nuevo div para el producto
        const productoElemento = document.createElement('div');
        productoElemento.classList.add('infoproductocarrito');

        // Calcular el subtotal del producto (precio * cantidad)
        const subtotalProducto = parseFloat(producto.precio.replace('€', '')) * producto.cantidad;

        // Agregar el contenido del producto al nuevo div
        productoElemento.innerHTML = `
            <span class="cantidadproductocarrito">${producto.cantidad}</span>
            <p class="tituloproductocarrito">${producto.nombre}</p>
            <span class="precioproductocarrito">${producto.precio}</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="iconoclose eliminarproducto" data-producto-id="${producto.id}">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        `;

        // Agregar el evento de clic para eliminar producto
        const iconoEliminarProducto = productoElemento.querySelector('.eliminarproducto');
        iconoEliminarProducto.addEventListener('click', () => {
            const productoId = iconoEliminarProducto.getAttribute('data-producto-id');
            eliminarDelCarrito(productoId);
        });

        // Agregar el nuevo div del producto al contenedor de productos del carrito
        contenedorCarritoProductos.appendChild(productoElemento);

        // Sumar el subtotal del producto al total a pagar
        totalPagar += subtotalProducto;
    });

    // Actualizar el total a pagar en la interfaz de usuario
    contenedorTotalPagar.textContent = `${totalPagar.toFixed(2)}€`;
}