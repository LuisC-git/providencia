//funciones añadir usuario Login
function addUsuario() {
  let email = document.querySelector("#email").value;
  re = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  if (!re.exec(email)) {
    mensajesFormularios(
      "Error, Este correo / numero de telefono  no son valido"
    );
  } else {
    const formConCliente = document.querySelector("#addUsuario");
    let datos = new FormData(formConCliente);
    fetch(`../funciones/funciones.php?tipo=addCliente`, {
      method: "POST",
      body: datos,
    })
      .then((res) => res.json())
      .then((data) => {
        console.log(data);

        if (data == "1") {
          formConCliente.reset();
          window.location.assign(
            "http://localhost/providencia/usuario/login.php"
          );
          mensajesFormularios("todo funciono bien", data);
        } else if (data == "2") {
          formConCliente.reset();
          mensajesFormularios("Error,Esta cuenta ya existe", data);
        } else if (data == "3") {
          mensajesFormularios("Error,Contraseñas no son iguales", data);
        } else {
          mensajesFormularios("Error,Las credenciales no son correctas", data);
        }
      })
      .catch(() => {
        console.log("error");
      });
  }
}
//funcion para cerar sesion
function cerrarSesion() {
  fetch(`logout1.php`, {
    // method: 'GET',
    //body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);

      if (data == "1") {
        window.location.assign(
          "http://localhost/providencia/usuario/login.php"
        );
        mensajesFormularios("todo funciono bien", data);
        //window.location.reload();
      } else if (data == "2") {
        // btncerrarSesion.classList.remove("opacity-75", "pe-none");
        mensajesFormularios("Error,Hubo un problema al serrar la sesión", data);
      } else {
        mensajesFormularios("Error,Hubo un problema al serrar la sesión", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}
//funcion para cerar sesion
function cerrarSesion2() {
  fetch(`../logout1.php`, {
    // method: 'GET',
    //body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);

      if (data == "1") {
        window.location.assign(
          "http://localhost/providencia/usuario/login.php"
        );
        mensajesFormularios("todo funciono bien", data);
        //window.location.reload();
      } else if (data == "2") {
        // btncerrarSesion.classList.remove("opacity-75", "pe-none");
        mensajesFormularios("Error,Hubo un problema al serrar la sesión", data);
      } else {
        mensajesFormularios("Error,Hubo un problema al serrar la sesión", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}

function conIngresar() {
  const formConCliente = document.querySelector("#formConCliente");
  let datos = new FormData(formConCliente);

  fetch(`../login.php`, {
    method: "POST",
    body: datos,
  })
    .then((res) => res.json())
    .then((data) => {
      console.log(data);

      if (data == "1") {
        window.location.assign("http://localhost/providencia/");

        mensajesFormularios("todo funciono sssbien", data);
      } else if (data == "2") {
        window.location.assign("http://localhost/providencia/admin");

        mensajesFormularios("todo funciono bien", data);
      } else if(data == "4") {
        mensajesFormularios("Error, Credenciales incorrectas",data);
      }else{
        mensajesFormularios("Error, Credenciales incorrectas",data);

      }
    })
    .catch(() => {
      console.log("error");
    });
}

//funciones añadir usuario Login
function addOrden(idOrden, idUsuario) {
  fetch(
    `funciones/funciones.php?tipo=addOrden&idOrden=${idOrden}&idUsuario=${idUsuario}`
  )
    .then((res) => res.json())
    .then((data) => {
      console.log(data);

      if (data == "1") {
        mensajesFormularios("Tu pedido estara listo pronto, GRACIAS !!", data);
      } else if (data == "2") {
        mensajesFormularios("Error,Esta cuenta ya existe", data);
      } else {
        mensajesFormularios("Error,Las credenciales no son correctas", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}

function modRecervacion(recId) {
  fetch(`../funciones/funciones.php?tipo=modOrden&idOrden=${recId}`)
    .then((res) => res.json())
    .then((data) => {
      console.log(data);

      if (data == "1") {
        mensajesFormularios("Pedido aceptado", data);
      } else if (data == "2") {
        mensajesFormularios("Error,Esta cuenta ya existe", data);
      } else {
        mensajesFormularios("Error,Las credenciales no son correctas", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}

function delRecervacion(recId) {
  fetch(`../funciones/funciones.php?tipo=delRecervacion&idOrden=${recId}`)
    .then((res) => res.json())
    .then((data) => {
      console.log(data);

      if (data == "1") {
        mensajesFormularios("Pedido elimonado", data);
      } else if (data == "2") {
        mensajesFormularios("Error,No se puedo eliminar", data);
      } else {
        mensajesFormularios("Error,Las credenciales no son correctas", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}

function conVendidos(mes) {
  const topVendidos = document.querySelector("#contVentas");

  fetch(`../funciones/funciones.php?tipo=conFecha&mes=${mes}`)
    .then((res) => res.text())
    .then((data) => {
      console.log(data);

      if (data != "") {
        topVendidos.innerHTML = data;
      }else{
        mensajesFormularios("Este mes no vendiste", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}

function conGenero(mes) {
  const conGenero = document.querySelector("#contGenero");
;

  fetch(`../funciones/funciones.php?tipo=conGenero&mes=${mes}`)
    .then((res) => res.text())
    .then((data) => {
      console.log(data);

      if (data != "") {
        conGenero.innerHTML = data;
         let h = document.getElementById("HOMBRE").innerText;
         let m = document.querySelector("#MUJER").innerText;

        //console.log(m);
        // console.log(m);

        suma= h+m;
        let porcientoh = h*suma/100;
        let porcientom = m*suma/100;

        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        
        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        
        var myPieChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
            labels: ["Direct", "Referral", "Social"],
            datasets: [{
              data: [porcientoh,porcientom],
              backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
              hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
              hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
          },
          options: {
            maintainAspectRatio: false,
            tooltips: {
              backgroundColor: "rgb(255,255,255)",
              bodyFontColor: "#858796",
              borderColor: '#dddfeb',
              borderWidth: 1,
              xPadding: 15,
              yPadding: 15,
              displayColors: false,
              caretPadding: 10,
            },
            legend: {
              display: false
            },
            cutoutPercentage: 80,
          },
        });
        
      }else{
        mensajesFormularios("Este mes no tuviste visitas", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}

// LISTA de edades usaurio

function edadA(mes) {
  const conEdadesA = document.querySelector("#conEdadesA");

  fetch(`../funciones/funciones.php?tipo=conEdadesA&mes=${mes}`)
    .then((res) => res.text())
    .then((data) => {
      console.log(data);

      if (data != "") {
        conEdadesA.innerHTML = data;
      }else{
        mensajesFormularios("Este mes no tuviste visitas", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}
function edadJ(mes) {
  const conEdadesJ = document.querySelector("#conEdadesJ");

  fetch(`../funciones/funciones.php?tipo=conEdadesJ&mes=${mes}`)
    .then((res) => res.text())
    .then((data) => {
      console.log(data);

      if (data != "") {
        conEdadesJ.innerHTML = data;
      }else{
        mensajesFormularios("Este mes no tuviste visitas", data);
      }
    })
    .catch(() => {
      console.log("error");
    });
}
function edadM(mes) {
  const conEdadesM = document.querySelector("#conEdadesM");

  fetch(`../funciones/funciones.php?tipo=conEdadesM&mes=${mes}`)
    .then((res) => res.text())
    .then((data) => {
      console.log(data);

      if (data != "") {
        conEdadesM.innerHTML = data;
      }else{
        mensajesFormularios("Este mes no tuviste visitas", data);

      }
    })
    .catch(() => {
      console.log("error");
    });
}

function conGanancia() {
  const formConGanacia = document.querySelector("#conGanancia");
  let intTotatal = document.querySelector("#total");
  let datos = new FormData(formConGanacia);
  fetch(`../funciones/funciones.php?tipo=conGanancia`, {
    method: "POST",
    body: datos,
  })
    .then((res) => res.text())
    .then((data) => {
      console.log(data);

      if (data != "") {
        intTotatal.innerHTML = "$" + data;
      }else{
        mensajesFormularios("Este dia no ganaste nada", data);
        
      }
    })
    .catch(() => {
      console.log("error");
    });
}

// funcion de mensajes
function mensajesFormularios(mensaje, tipo) {
  if (tipo == "1") {
    //Mensaje de tofdo bien
    Swal.fire(
      `${mensaje}`,
      "Se guardaron los cambios correctamente",
      "success"
    );
  } else {
    //mensaje de error
    Swal.fire({
      icon: "error",
      title: `${mensaje}`,
      text: "escribweujh",
      footer: '<a href="">Why do I have this issue?</a>',
    });
  }
}
