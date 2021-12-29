const products = [
  {
    id: 1,
    name: 'Bandalos Chinos',
    img: '',
    price: 2500,
    quantity: 3,
    stock: 100,
  },
  {
    id: 2,
    name: 'El kuelgue',
    img: '',
    price: 1500,
    quantity: 2,
    stock: 100,
  },
  {
    id: 3,
    name: '1915',
    img: '',
    price: 2000,
    quantity: 2,
    stock: 100,
  },
  {
    id: 4,
    name: 'Justin Bieber',
    img: '',
    price: 3500,
    quantity: 4,
    stock: 100,
  }
];

const setCartItems = localStorage.setItem('tickets', JSON.stringify(products));

const handleDeleteItem = (id) => {
  const products = JSON.parse(localStorage.getItem('tickets'));
  console.log(products)
  const newCart = products.filter((item)=>item.id !== id);
  localStorage.setItem('tickets', JSON.stringify(newCart));
  showProducts(newCart);
  showTotal();
}

const productList = (product)=>{
  let quantity = 1;

  const handleAddItem = (itemQuantity) => {
    if (itemQuantity < item.stock) {
      console.log(quantity)
      return quantity += 1;
    } 
  }
  
  const handleRemoveItem = (itemQuantity) => {
    if (itemQuantity > 2) {
      return quantity -= 1;
    } 
  }


  const productToShow = product.map((item) => 
    `<tr>
      <td class="shoping__cart__item">
          <img src=${item.img} alt=${item.name}>
          <h5>${item.name}</h5>
      </td>
      <td class="shoping__cart__price">
          $${item.price}
      </td>
      <td class="shoping__cart__quantity">
          <div class="quantity">
          <div onclick='handleRemoveItem(${quantity})'>-</div>
              <div class="pro-qty">
                  <input type="text" value=${quantity}>
                  <div onclick='handleAddItem(${quantity})'>+</div>
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

const totalItems = () => {
  const cartIcon = document.querySelector('#cartIcon');
  const cartItems = JSON.parse(localStorage.getItem('tickets'));
  console.log (cartItems.reduce((ac, item) => ac + item.quantity, 0))
  cartIcon.innerHTML = cartItems.reduce((ac, item) => ac + item.quantity, 0);
}

const showProducts = (productArray) => {
  const productsDiv = document.querySelector('#shopping__cart__products');
  const totalList = document.querySelector('#totalList')
  if (products.length !== 0) {
    productsDiv.innerHTML = productList(productArray);
    totalList.innerHTML = showTotal();
    totalItems();
  } else {
    productsDiv.innerHTML = 'No hay productos en el carrito';
    totalItems();
  }
};


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


window.onload = showProducts(products);