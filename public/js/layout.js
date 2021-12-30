// Mostrar vista detalle en función al tipo de usuario
const currentUser = localStorage.getItem('currentUser');

const logOut = () => {
  console.log('logout')
  localStorage.clear();
  console.log(currentUser)
  const loginBtnNav = document.querySelector('#loginBtnNav');
  const loginBtnHeader = document.querySelector('#loginBtnHeader');

  loginBtnNav.innerHTML = `<a class="link-login" href="http://localhost/sistema_gestion_entradas/public/login" ><i class="fa fa-user"></i> Login</a>`;
  loginBtnHeader.innerHTML = `<a class="link-login" href="http://localhost/sistema_gestion_entradas/public/login" ><i class="fa fa-user"></i> Login</a>`;
}
const handleLogin = () => {

  const loginBtnNav = document.querySelector('#loginBtnNav');
  const loginBtnHeader = document.querySelector('#loginBtnHeader');
  
  if(currentUser) {
      if(currentUser !== 'admin@mail.com') {
          console.log('curremtUser no es admin')
          loginBtnNav.innerHTML = `<a class="link-login" href="http://localhost/sistema_gestion_entradas/public" onclick="logOut()"><i class="fa fa-user"></i> LogOut</a>
          <a class="link-login" href="http://localhost/sistema_gestion_entradas/public/perfil"><i class="fas fa-user-circle"></i>Perfil</a>`;
          loginBtnHeader.innerHTML = `<a class="link-login" href="http://localhost/sistema_gestion_entradas/public" onclick="logOut()"><i class="fa fa-user"></i> LogOut</a>
          <a class="link-login" href="http://localhost/sistema_gestion_entradas/public/perfil"><i class="fas fa-user-circle"></i>Perfil</a>`;

      } else if (currentUser === 'admin@mail.com') {
          console.log('currentUser es admin')
          loginBtnNav.innerHTML = `<a class="link-login" href="http://localhost/sistema_gestion_entradas/public" onclick="logOut()"><i class="fa fa-user"></i> LogOut</a>
          <a class="link-login" href="http://localhost/sistema_gestion_entradas/public/admin"><i class="fas fa-user-circle"></i>Perfil</a>`;
          loginBtnHeader.innerHTML = `<a class="link-login" href="http://localhost/sistema_gestion_entradas/public" onclick="logOut()"><i class="fa fa-user"></i> LogOut</a>
          <a class="link-login" href="http://localhost/sistema_gestion_entradas/public/admin"><i class="fas fa-user-circle"></i>Perfil</a>`;
          
      };
  };
};