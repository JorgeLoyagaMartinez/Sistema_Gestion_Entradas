const products = JSON.parse(localStorage.getItem('tickets')) || [];

//Guardar items en el localStorage
const setCartItems = (id) => {
  const name = document.querySelector('#eventoNombre').textContent;
  const quantityValue = Number(document.querySelector('#eventoCantidad').value);
  const img = document.querySelector('#eventoPortada').textContent;
  const priceString = document.querySelector('#eventoPrecio').textContent;
  const price = Number(priceString.slice(priceString.length - 10, -6));
  const stock = Number(document.querySelector('#eventoStock').textContent);
  
  products.push({
    id,
    name,
    img, 
    price,
    stock,
    quantity: quantityValue ? quantityValue : 1
  });

  localStorage.setItem('tickets', JSON.stringify(products));
  showMessage();
}

// Eliminar items del carrito
const handleDeleteItem = (id) => {
  const products = JSON.parse(localStorage.getItem('tickets'));
  const newCart = products.filter((item)=>item.id !== id);
  localStorage.setItem('tickets', JSON.stringify(newCart));
  showProducts(newCart);
  showTotal();

}

// HTML a renderizar de carrito
const productList = (product)=>{

  const productToShow = product.map((item) => 
    `<tr>
      <td class="shoping__cart__item">
          <img src=${item.img} alt=${item.name} style="width: 150px; height: 150px; object-fit: cover">
          <h5>${item.name}</h5>
      </td>
      <td class="shoping__cart__price">
          $${item.price}
      </td>
      <td class="shoping__cart__quantity">
          <div class="quantity">
          
              <div class="pro-qty">
                  <input type="text" value=${item.quantity}>
              </div>
          </div>
      </td>
      <td class="shoping__cart__total">
          $${item.price * item.quantity}
      </td>
      <td class="shoping__cart__item__close">
          <span class="icon_close" onclick='handleDeleteItem(${item.id})'></span>
      </td>
    </tr>`
  )

  return (
    `<table>
      <thead>
          <tr>
              <th class="shoping__product">Productos</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Total</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
          ${productToShow}
      </tbody>
  </table>`

  )
};

// calculo del total de items del carrito
const totalItems = () => {
  const cartIcon = document.querySelector('#cartIcon');
  const cartItems = JSON.parse(localStorage.getItem('tickets'));
  console.log(cartItems)
  console.log (cartItems.reduce((ac, item) => ac + item.quantity, 0))
  cartIcon.innerHTML = cartItems.reduce((ac, item) => ac + item.quantity, 0);
}

// Renderizar HTMl
const showProducts = (productArray) => {
  const productsDiv = document.querySelector('#shopping__cart__products');
  const totalList = document.querySelector('#totalList')
  if (products.length !== 0) {
    productsDiv.innerHTML = productList(productArray);
    totalList.innerHTML = showTotal();
    totalItems();
  } else {
    productsDiv.textContent = 'No hay productos en el carrito';
    totalItems();
  }
};

// Calculo del monto total del carrito
const showTotal = () => {
  const subtotal = () => {
    const cartItems = JSON.parse(localStorage.getItem('tickets'));
    const calcSubtotal = cartItems.reduce((ac, item) => ac + item.price * item.quantity, 0);
    return calcSubtotal;
  };
  
  const total = () => {
    return subtotal() * 1.21;
  };

  return (
    `<li>Subtotal <span onclick=''>$${subtotal()}</span></li>
    <li>Total <span onclick=''>$${total()}</span></li>`
  )
};

// Mensaje agregar al carrito exitoso
const showMessage = () => {
  const addedSuccess = document.querySelector('.onAdd');
  console.log(addedSuccess)
  addedSuccess.classList.add('showMessage');
}


window.onload = showProducts(products);