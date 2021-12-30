const loginSubmit = document.querySelector('#loginSubmit');

const getUser = (e) => {
    const currentUser = document.querySelector('#userEmail').value;
    localStorage.setItem('currentUser', currentUser) || '';
    console.log(currentUser);
}

loginSubmit.addEventListener('click', getUser);



//Boton LogOut-limpiar localstorage
