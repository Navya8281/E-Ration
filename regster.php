<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
  body {
  background-color: skyblue;
   background-image: url('.jpg'); /* Change 'regbg.jpg' to your cover background image file */
   background-size: cover;
   background-position: center;
   background-repeat: no-repeat;
 }
 .header {
      background-image: url('regbg.jpg');  /* Blue header background color */
      color: #fff; /* White text color */
      background-position: center;
      background-repeat: no-repeat;
      padding: 100px 0;
      width: 100%;
      text-align: center;
    }

    .container {
      margin-top: 50px;
      background-color: #fff; /* White background color */
      border-radius: 10px;
      box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow for container */
      padding: 40px;
    }

    h2 {
      color: #007bff; /* Blue heading color */
    }

    label {
      color: #495057; /* Dark gray label color */
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    input[type="date"],
    input[type="number"],
    input[type="password"],
    select,
    textarea {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ced4da; /* Light gray border */
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="file"] {
      margin-top: 8px;
    }

    .btn-primary {
      background-color: #007bff; /* Blue button background color */
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3; /* Darker blue button background color on hover */
    }
  </style>
</head>
<body>
<div class="header">
</div>
<div class="container">
  <h2>Registration Form</h2>
  <form>
    <div class="form-group">
      <label for="cardNo">Card Number</label>
      <input type="text" class="form-control" id="cardNo" placeholder="Enter card number" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="cardType">Card Type</label>
        <select id="cardType" class="form-control" required>
          <option value="">Choose...</option>
          <option value="Ration">Ration Card</option>
          <option value="Other">Other</option>
        </select>
      </div>
      <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" class="form-control" id="dob" required>
      </div>
      <div class="form-group col-md-6">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" placeholder="Enter your age" required>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="income">Annual Income</label>
        <input type="number" class="form-control" id="income" placeholder="Enter annual income" required>
      </div>
      <div class="form-group col-md-6">
        <label for="familyMembers">Number of Family Members</label>
        <input type="number" class="form-control" id="familyMembers" placeholder="Enter number of family members" required>
      </div>
    </div>
    <div class="form-group">
      <label for="address">Address</label>
      <textarea class="form-control" id="address" rows="3" required></textarea>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="mobileNo">Mobile Number</label>
        <input type="tel" class="form-control" id="mobileNo" placeholder="Enter mobile number" required>
      </div>
      <div class="form-group col-md-6">
        <label for="aadharNo">Aadhar Number</label>
        <input type="text" class="form-control" id="aadharNo" placeholder="Enter Aadhar number" required>
      </div>
    </div>
    <div class="form-group">
      <label for="profilePhoto">Profile Photo</label>
      <input type="file" class="form-control-file" id="profilePhoto" required>
    </div>
    <div class="form-group">
      <label for="identityProof">Identity Proof</label>
      <input type="file" class="form-control-file" id="identityProof" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
      </div>
      <div class="form-group col-md-6">
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector('form');

    form.addEventListener('submit', function(event) {
      // Prevent the form from submitting
      event.preventDefault();

      // Perform validation
      let isValid = true;

      // Card Number validation
      const cardNoInput = document.getElementById('cardNo');
      if (!cardNoInput.value.trim()) {
        isValid = false;
        alert('Please enter your card number.');
      }

      // Card Type validation
      const cardTypeSelect = document.getElementById('cardType');
      if (!cardTypeSelect.value.trim()) {
        isValid = false;
        alert('Please select a card type.');
      }

      // Name validation
      const nameInput = document.getElementById('name');
      if (!nameInput.value.trim()) {
        isValid = false;
        alert('Please enter your name.');
      }

      // Date of Birth validation
      const dobInput = document.getElementById('dob');
      if (!dobInput.value.trim()) {
        isValid = false;
        alert('Please enter your date of birth.');
      }

      // Age validation
      const ageInput = document.getElementById('age');
      if (!ageInput.value.trim()) {
        isValid = false;
        alert('Please enter your age.');
      }

      // Annual Income validation
      const incomeInput = document.getElementById('income');
      if (!incomeInput.value.trim()) {
        isValid = false;
        alert('Please enter your annual income.');
      }

      // Number of Family Members validation
      const familyMembersInput = document.getElementById('familyMembers');
      if (!familyMembersInput.value.trim()) {
        isValid = false;
        alert('Please enter the number of family members.');
      }

      // Address validation
      const addressInput = document.getElementById('address');
      if (!addressInput.value.trim()) {
        isValid = false;
        alert('Please enter your address.');
      }

      // Mobile Number validation
      const mobileNoInput = document.getElementById('mobileNo');
      if (!mobileNoInput.value.trim()) {
        isValid = false;
        alert('Please enter your mobile number.');
      }

      // Aadhar Number validation
      const aadharNoInput = document.getElementById('aadharNo');
      if (!aadharNoInput.value.trim()) {
        isValid = false;
        alert('Please enter your Aadhar number.');
      }

      // Profile Photo validation
      const profilePhotoInput = document.getElementById('profilePhoto');
      if (!profilePhotoInput.value.trim()) {
        isValid = false;
        alert('Please upload your profile photo.');
      }

      // Identity Proof validation
      const identityProofInput = document.getElementById('identityProof');
      if (!identityProofInput.value.trim()) {
        isValid = false;
        alert('Please upload your identity proof.');
      }

      // Password validation
      const passwordInput = document.getElementById('password');
      const confirmPasswordInput = document.getElementById('confirmPassword');
      if (!passwordInput.value.trim()) {
        isValid = false;
        alert('Please enter a password.');
      } else if (passwordInput.value !== confirmPasswordInput.value) {
        isValid = false;
        alert('Passwords do not match.');
      }

      // If all inputs are valid, submit the form
      if (isValid) {
        form.submit();
      }
    });
  });
</script>
</body>
</html>
