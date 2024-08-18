<section class="h-100 gradient-form" style="
  background-image: url('design/home.jpg'); 
  background-size: cover; 
  background-position: center; 
  background-color: #f0f2f5; /* Light grey background for better contrast */
">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-4 col-lg-6 col-md-8">
        <div class="card rounded-4 shadow-lg">
          <div class="card-body p-4">

            <div class="text-center mb-4">
              <img src="design/logo.png" style="width: 120px;" alt="logo">
            </div>

            <form id="loginForm" method="POST">
              <p class="text-center mb-4"><b>LOGIN</b></p>

              <div class="form-outline mb-3">
                <input type="number" id="form2Example11" name="student_id" class="form-control" placeholder="Student Number" 
                       style="border: 2px solid gray; -moz-appearance: textfield; appearance: textfield;">
                <label class="form-label" for="form2Example11">Student ID</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="form2Example22" name="password" class="form-control" placeholder="Password" 
                       style="border: 2px solid gray;" />
                <label class="form-label" for="form2Example22">Password</label>
                <div class="form-check">
                  <input type="checkbox" id="showPassword" class="form-check-input">
                  <label class="form-check-label" for="showPassword">Show Password</label>
                </div>
              </div>

              <div>
              <a href="config/index.html" id="loginLink" style="text-decoration: none;">
  <button class="btn btn-primary btn-block w-100" type="button" id="loginButton" style="
    background-color: #1877f2; 
    border: none; 
    border-radius: 24px; 
    padding: 12px; 
    font-size: 16px; 
    color: #fff;
  ">Log in</button>
</a>
</div>



<div style="text-align: center;">
  <a class="text-muted d-block mt-2" href="#!">Forgot password?</a>
</div>

<!-- Add margin to create space between the two sections -->
<div style="margin-top: 20px; text-align: center;">
  <p class="mb-2">New Student?</p>
  <!-- Button to trigger the modal -->
  <button type="button" class="btn btn-outline-primary w-100" style="
    border-radius: 24px; 
    padding: 8px 16px;
  " data-bs-toggle="modal" data-bs-target="#createAccountModal">Click Here</button>
</div>


            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

