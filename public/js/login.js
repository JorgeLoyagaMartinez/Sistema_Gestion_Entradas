const loginSubmit = document.querySelector('#loginSubmit');

const getUser = (e) => {
    e.preventDefault();
    const currentUser = document.querySelector('#userEmail').value;
    localStorage.setItem('currentUser', currentUser) || '';    
}

loginSubmit.addEventListener('click', getUser);


//Boton LogOut-limpiar localstorage