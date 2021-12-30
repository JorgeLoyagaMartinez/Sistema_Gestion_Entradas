const subtotal = () => {
  const cartItems = JSON.parse(localStorage.getItem('tickets'));
  const calcSubtotal = cartItems.reduce((ac, item) => ac + item.price * item.quantity, 0);
  return calcSubtotal;
};

const total = () => {
  return `Total (+IVA) <span>$${subtotal()*1.21}</span>`;
};

const showOrder = () => {

  const cartItems = JSON.parse(localStorage.getItem('tickets'));
  
  const checkoutOrder = document.querySelector('#checkout__order');
  const checkoutOrderSubtotal = document.querySelector('.checkout__order__subtotal');
  const checkoutOrderTotal = document.querySelector('.checkout__order__total');

  const cartOrder = cartItems.map(item => `
    <li>${item.name} <span>$${item.price * item.quantity}</span></li>
  `);

  checkoutOrder.innerHTML = cartOrder;
  checkoutOrderSubtotal.innerHTML = `Subtotal <span>$${subtotal()}</span>`;
  checkoutOrderTotal.innerHTML = total();

}


