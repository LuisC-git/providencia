<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>

<head>
  <title>My Awesome Login Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="../js/funcion.js"></script>

  <?php

  include('../funciones/consultas.php');
  include('../funciones/funciones.php');

  ?>
</head>
<!--Coded with love by Mutiullah Samim-->

<body>

  <div class="container">
    <div class="card">
      <div class="form">
        <div class="left-side">
          <ul class="progres_bar">
            <li>Personal Vitae</li>
            <li>Company Registration Form</li>
            <li>Company Location</li>
            <li>Director's Detail</li>
          </ul>
        </div>
        <div class="right-side ">
          <form class="main active" id="addUsuario">
            <div class="manage">
              <h6>Registrate y realiza tu pedido</h6>
              <!-- <p>Take less than 10 minutes to fill out the information needed to register ypour buisness.</p> -->
            </div>
            <div class="input_div">
              <div class="input_text"> <input class="written_name" type="text" require required name="nombre"> <label>NOMBRE</label> </div>
              <div class="input_text"> <input type="text" required name="correo" id="email"> <label>CORREO</label> </div>
            </div>
            <div class="input_div">
              <!-- <div class="input_text"> <input type="text" require required name="edad"> <label>EMAIL</label> </div> -->
              <div class="input_text"> <input type="number" require required name="telefono"> <label>TELEFON</label> </div>
            </div>
            <div class="input_div">
              <div class="input_text">
                <select class="form-select" aria-label="Default select example" name="sexo">
                  <option selected>SEXO</option>
                  <option value="1">Hombre</option>
                  <option value="2">Mujer</option>
                </select>
              </div>
              <div class="input_text"> <input type="number" require required name="edad"> <label>EDAD</label> </div>
            </div>
            <div class="input_div">
              <div class="input_text"> <input class="pass_type" type="password" name="password2" require required> <label>Password</label> <i class="fa fa-eye-slash password_eye"></i> </div>
              <div class="input_text"> <input class="confirm_pass_type" type="password" name="password3" require required> <label>Confirm Password</label> <i class="fa fa-eye-slash con_eye"></i> </div>
            </div>
            <div class="agree"> <span><i class="fa fa-check"></i></span>
              <p>Recordar contraseña</p>
              </div>
              <a href="http://localhost/providencia/usuario/login.php">Login</a>
            <div class="button step_1 m-0"> <button class="next_btn" onclick="addUsuario(); return false;">Crear</button> </div>
          </form>
          <div class="main">
            <div class="manage">
              <h3>Manage your freelance buisness with us</h3>
              <p>Take less than 10 minutes to fill out the information needed to register ypour buisness.</p>
            </div>
            <div class="input_div">
              <div class="input_text"> <select>
                  <option>Type of entity</option>
                  <option>OPC</option>
                  <option>LLP</option>
                  <option>Private Limited Company</option>
                  <option>Public Limited Company</option>
                </select> </div>
              <div class="input_text"> <input type="text" require required> <label>Name of Company</label> </div>
            </div>
            <div class="input_div">
              <div class="input_text"> <textarea placeholder="Describe Buisness Activity"></textarea> </div>
            </div>
            <div class="input_div">
              <div class="input_text"> <input type="number" required> <label>Share Capital (INR)</label> </div>
              <div class="input_text"> <input type="number" require required> <label>Number of Directors</label> </div>
            </div>
            <div class="button step_2 m_top"> <button class="prev_btn">Previous</button> <button class="next_btn">Next</button> </div>
          </div>
          <div class="main ">
            <div class="manage">
              <h3>Manage your freelance buisness with us</h3>
              <p>Take less than 10 minutes to fill out the information needed to register ypour buisness.</p>
            </div>
            <div class="input_div">
              <div class="input_text"> <input type="text" require required> <label>Company Registered Address</label> </div>
            </div>
            <div class="input_div">
              <div class="input_text"> <input type="text" required> <label>Village</label> </div>
              <div class="input_text"> <input type="text" require required> <label>City</label> </div>
            </div>
            <div class="input_div">
              <div class="input_text"> <input type="text" require required> <label>State</label> </div>
              <div class="input_text"> <input type="text" require required> <label>Country</label> </div>
            </div>
            <div class="button step_2 step_3"> <button class="prev_btn">Previous</button> <button class="next_btn">Next</button> </div>
          </div>
          <div class="main ">
            <div class="manage">
              <h3>Manage your freelance buisness with us</h3>
              <p>Take less than 10 minutes to fill out the information needed to register ypour buisness.</p>
            </div>
            <div class="input_div">
              <div class="input_text"> <input type="text" require required> <label>Name of Director</label> </div>
              <div class="input_text"> <input type="number" require required> <label>Shareholding %</label> </div>
            </div>
            <div class="input_div">
              <div class="input_text"> <input type="number" require required> <label>Phone Number</label> </div>
              <div class="input_text"> <input type="text" require required> <label>Email Id</label> </div>
            </div>
            <div class="agree_submit"> <span><i class="fa fa-check"></i></span>
              <p>I hereby declare that information provided in the online registration form is true to the best of my knowledge and I accept motes,terms,disclaimer and policies by clicking "Submit Form" button.</p>
            </div>
            <div class="button step_2 step_4"> <button class="prev_btn">Previous</button> <button class="sbmt_btn">Submit</button> </div>
          </div>
          <div class="main ">
            <div class="manage">
              <h3>Congratulations <span class="shown_name"></span></h3>
              <p>Your buisness account have been successfully registered.</p>
            </div> <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
              <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
              <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
            </svg>
            <div class="h4_txt">
              <h4>For further querries you can contact us on 011-123456789</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<script src="function.js"></script>

</html>