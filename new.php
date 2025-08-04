<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      background-color:lightskyblue;
      font-family: Arial, sans-serif;
      font-size: 20px;
    }

    h2 {
      text-align: center;
      color: black;
      margin-top: 30px;
    }

    .form-container {
      background-color: whitesmoke;
      max-width: 500px;
      margin: 100px auto;
      padding: 100px;
      border-radius: 20px;
    }

   

    input, select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 5px;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h2>Welcome to Registration! Please fill out the form</h2>

  <div class="form-container">
    <form onsubmit="showAlert(event)">
      <label for="name">Name:</label>
      <input type="text" id="name" required>

      <label for="id">ID:</label>
      <input type="text" id="id" required>

      <label for="age">Age:</label>
      <input type="number" id="age" required>

      <label for="department">Department:</label>
      <select id="department" required>
        <option value="">Select a department</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="ME">ME</option>
        <option value="BBA">BBA</option>
      </select>

      <button type="submit">Submit</button>
    </form>
  </div>

  <script>
    function showAlert(event) {
      event.preventDefault(); // Prevents page reload
      alert("Registration complete");
    }
  </script>

</body>
</html>
