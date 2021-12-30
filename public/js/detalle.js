// Mostrar vista detalle en función al tipo de usuario
const currentUser = localStorage.getItem('currentUser');

const showView = () => {

    const editarEvento = document.querySelector('#editarEventoBtn');
    const verEvento = document.querySelector('#verEvento');
    
    if (currentUser === 'admin@mail.com') {
        editarEvento.classList.add('showMessage');
        verEvento.classList.add('hideMessage');
        
    } else {
        editarEvento.classList.remove('showMessage');
        verEvento.classList.remove('hideMessage');
        
    }
}