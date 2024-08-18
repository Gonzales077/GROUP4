<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Modal for Creating New Account -->
    <div class="modal fade" id="createAccountModal" tabindex="-1" aria-labelledby="createAccountModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" id="createAccountModalLabel">Create Account</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- Modal Body -->
          <div class="modal-body">
            <form id="createAccountForm">
              <div class="mb-3">
                <label class="form-label" for="newStudentID">Student ID</label>
                <input type="number" id="newStudentID" name="student_id" class="form-control" placeholder="Student Number" style="border: 2px solid gray;">
              </div>
              <div class="mb-3">
                <label for="newPassword" class="form-label">Password:</label>
                <input type="password" class="form-control" id="newPassword" placeholder="Enter Password" style="background-color: white; border: 1px solid gray;">
              </div>
              <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password:</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" style="background-color: white; border: 1px solid gray;">
              </div>
              <button type="submit" id="createAccountButton" class="btn btn-primary w-100">Create Account</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <!-- Modal Header -->
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <!-- Modal Body -->
          <div class="modal-body">
            <form id="loginForm">
              <div class="mb-3">
                <label class="form-label" for="loginStudentID">Student ID</label>
                <input type="number" id="loginStudentID" name="student_id" class="form-control" placeholder="Student Number" style="border: 2px solid gray;">
              </div>
              <div class="mb-3">
                <label for="loginPassword" class="form-label">Password:</label>
                <input type="password" class="form-control" id="loginPassword" placeholder="Enter Password" style="background-color: white; border: 1px solid gray;">
              </div>
              <button type="submit" id="loginButton" class="btn btn-primary w-100">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Error Messages -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="errorModalLabel">Login Error</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p id="errorMessage">Invalid login credentials. Please try again.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal for Confirmation -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Student Info Confirmed</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script>
      // Function to get user data from local storage
      function getUserData() {
        return JSON.parse(localStorage.getItem('users')) || {};
      }

      // Function to set user data to local storage
      function setUserData(users) {
        localStorage.setItem('users', JSON.stringify(users));
      }

      const createAccountForm = document.getElementById('createAccountForm');
      const loginForm = document.getElementById('loginForm');
      const errorMessageElement = document.getElementById('errorMessage');
      const createAccountButton = document.getElementById('createAccountButton');
      const loginButton = document.getElementById('loginButton');

      createAccountForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission for demo

        const studentID = document.getElementById('newStudentID').value;
        const password = document.getElementById('newPassword').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if (password === confirmPassword) {
          // Save the user data
          const users = getUserData();
          users[studentID] = password;
          setUserData(users);

          // Close the create account modal and show the confirmation modal
          const createAccountModal = new bootstrap.Modal(document.getElementById('createAccountModal'));
          createAccountModal.hide();

          const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
          confirmationModal.show();
        } else {
          // Show error message
          alert('Passwords do not match!');
        }
      });

      loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission for demo

        const studentID = document.getElementById('loginStudentID').value;
        const password = document.getElementById('loginPassword').value;

        const users = getUserData();

        if (users[studentID] === password) {
          // Show confirmation modal
          const confirmationModal = new bootstrap.Modal(document.getElementById('confirmationModal'));
          confirmationModal.show();
        } else {
          // Show error message
          errorMessageElement.textContent = 'Invalid login credentials. Please try again.';
          const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
          errorModal.show();
        }
      });
    </script>
</body>
</html>
