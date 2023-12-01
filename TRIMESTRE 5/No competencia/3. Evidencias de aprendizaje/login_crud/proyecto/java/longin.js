//variable acceder a registro
//inicio de sesión
const btnSignIn = document.getElementById("sign-in"),
  //registro usuario
  btnSignup = document.getElementById("sign-up");
//clase register del formulario registro
(formRegister = document.querySelector(".register")),
  //clase login del formulario inicio de sesión
  (formLogin = document.querySelector(".login"));

//cada vez que de click va a  inicio de sesión
btnSignIn.addEventListener("click", (e) => {
  //sube el formulario de register
  formRegister.classList.add("hide");
  //a este login le quitamos la clase hide anterior mente para que haya la trancisión
  formLogin.classList.remove("hide");
});

//cada vez que de click va a  para el form login
btnSignup.addEventListener("click", (e) => {
  //sube el formulario de register
  formLogin.classList.add("hide");
  //a este login le quitamos la clase hide anterior mente para que haya la trancisión
  formRegister.classList.remove("hide");
});
