<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Login</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      /* ✅ Fixed Background Image Path (spaces encoded) */
      background: url("ChatGPT%20Image%20Aug%205%2C%202025%2C%2001_13_22%20AM.png") no-repeat center center fixed;
      background-size: cover;
    }

    .container {
      display: flex;
      height: 100vh;
      width: 100%;
      background-color: rgba(255, 255, 255, 0.95); /* semi-transparent white overlay */
    }

    .left-side {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px;
    }

    .students-img {
      width: 90%;
      max-width: 700px;
    }

    .right-side {
      flex: 1;
      padding: 80px 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }

    .right-side h2 {
      color: #005da3;
      text-decoration: underline;
      font-size: 42px;
      margin-bottom: 50px;
    }

    .input-group {
      margin-bottom: 30px;
    }

    .input-group label {
      display: flex;
      align-items: center;
      border-bottom: 3px solid #ccc;
      padding: 10px;
      background: transparent;
    }

    .icon {
      margin-right: 15px;
      font-size: 24px;
    }

    input[type="email"],
    input[type="password"] {
      border: none;
      outline: none;
      flex: 1;
      font-size: 20px;
      background: transparent;
      color: #333;
    }

    .login-btn {
      background-color: #006db5;
      color: white;
      padding: 15px 30px;
      border: none;
      border-radius: 40px;
      font-size: 20px;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 20px;
      width: 200px;
      align-self: flex-start;
    }

    .login-btn:hover {
      background-color: #005494;
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
      }

      .right-side, .left-side {
        padding: 40px 20px;
      }

      .right-side h2 {
        font-size: 32px;
      }

      .login-btn {
        width: 100%;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left-side">
      <img src="https://i.imgur.com/Xgjrxmt.png" alt="Students Image" class="students-img">
    </div>
    <div class="right-side">
      <h2>STUDENT LOGIN</h2>
      <form>
        <div class="input-group">
          <label>
            <span class="icon">👤</span>
            <input type="email" placeholder="Email Address" required>
          </label>
        </div>
        <div class="input-group">
          <label>
            <span class="icon">🔒</span>
            <input type="password" placeholder="Password" required>
          </label>
        </div>
        <button type="submit" class="login-btn">LOG IN</button>
      </form>
    </div>
  </div>
</body>
</html>
