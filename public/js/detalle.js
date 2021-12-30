// Mostrar vista detalle en función al tipo de usuario
const currentUser = localStorage.getItem('currentUser');
console.log(currentUser)
const showView = () => {
console.log('estoy en show')
    const editarEvento = document.querySelector('#editarEventoBtn');
    const verEvento = document.querySelector('#verEvento');
    
    if (currentUser === 'admin@mail.com') {
        editarEvento.classList.add('showMessage');
        verEvento.classList.add('hideMessage');
        console.log('soy admin')
    } else {
        editarEvento.classList.remove('showMessage');
        verEvento.classList.remove('hideMessage');
        console.log('no soy admin')
    }
}