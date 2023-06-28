
<section class="vh-100">
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block" style='background: #00b09b;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #96c93d, #00b09b);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #96c93d, #00b09b); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            '>
          <div class="px-4 py-5 px-md-5 text-left text-lg-start">
            <h1 class="my-5 display-6 fw-bold ls-tight">
              What is <br />
              <span class="text-success-emphasis">PCBMS</span>
            </h1>
            <p class='text-light'>
            The Pasalubong Center Business Management Web Application is a secure platform that simplifies business operations for pasalubong centers. It offers streamlined login access for authorized personnel, cashiers, and managers. Users can efficiently manage inventory, track sales, process transactions, generate reports, and oversee overall operations. With a user-friendly interface, the application enhances efficiency, optimizes inventory, and enables data-driven decision-making for sustainable growth.
            </p>  
          </div>
          
          </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login/UserLogin.php" method="post">

                  <div class="d-flex flex-column align-items-center mb-5 pb-1" >
                    <img class='mb-2' src="../images/vsu.png" alt="" style='width:100px;'>
                    <span class="h3 fw-bold mb-0">Pasalubong Center Business Management Web Application</span>
                  </div>
                  
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <?php
                    if (@$_GET['Invalid'] == 1) {
                        ?>
                        <div class="mdi mdi-do-not-disturb mr-1 alert alert-danger text-center my-3" role="alert">
                            Incorrect email and/or password.
                        </div>
                        <?php
                    }
                    ?>
                    <?php
                    if (@$_GET['Invalid'] == 2) {
                        ?>
                        <div class="mdi mdi-do-not-disturb mr-1 alert alert-danger text-center my-3" role="alert">
                            Role is incorrect, please try again.
                        </div>
                        <?php
                    }
                    ?>

                  <div class="form-outline mb-4">
                    <input type="text"  class="form-control form-control-lg" name="username" required />
                    <label class="form-label" for="form2Example17" >Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" required/>
                    <label class="form-label" for="form2Example27"  >Password</label>
                  </div>

                  <label for="role">Role:</label>
                    <select id="role" name="role" required>
                        <option value="" disabled selected>Select a role</option>
                        <option value="Personnel">Personnel</option>
                        <option value="Cashier">Cashier</option>
                        <option value="Manager">Manager</option>
                    </select>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="../login/Signup.php"
                      style="color: #393f81;">Register here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
