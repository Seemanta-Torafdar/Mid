<!DOCTYPE html>

<head>
    
    <title>Donation Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            display: flex;
            justify-content: center;
            align-items: center;
           
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 350px;
        }

        h2 {
            text-align: center;
            margin-top: 20px;
        }

        form label {
            display: block;
            margin-top: 15px;
        }

        input{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .radio-group {
            margin-top: 5px;
            display: flex;
            justify-content: space-between;
        }

        button {
            margin-top: 20px;
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Donation Form</h2>
        <form id="donationForm">
            <label>Name:</label>
            <input type="text" id="name" name="name" required>

            <label>Email:</label>
            <input type="email" id="email" name="email" required>

            <label>Phone:</label>
            <input type="text" id="phone" name="phone" required>

            <label>Password:</label>
            <input type="password" id="password" name="password" required>

            <label>Donation Amount:</label>
            <input type="number" id="amount" name="amount" required>

            <label>Payment Method:</label>
            <div class="radio-group">
                <input type="radio" name="payment" value="Card" required> Card
                <input type="radio" name="payment" value="Bkash"> Bkash
                <input type="radio" name="payment" value="Nagad"> Nagad
            </div>

            <label>
            <br>
                <input type="checkbox" id="terms" name="terms"> I agree to the terms & conditions
            </label>

            <button type="submit">Donate</button>
        </form>
    </div>

    <script>
        document.getElementById("donationForm").addEventListener("submit", function(e) {
            e.preventDefault();

            let name = document.getElementById("name").value.trim();
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let password = document.getElementById("password").value;
            let amount = document.getElementById("amount").value.trim();
            let terms = document.getElementById("terms").checked;
            let payment = document.querySelector('input[name="payment"]:checked');

            if (!name || !email || !phone || !password || !amount || !payment || !terms) {
                alert("All fields must be filled and terms accepted.");
                return;
            }

            if (!/^[a-zA-Z\s]+$/.test(name)) {
                alert("Name should contain only alphabets.");
                return;
            }

            if (!/^\d{11}$/.test(phone)) {
                alert("Phone number must be exactly 11 digits.");
                return;
            }

            if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/.test(password)) {
                alert("Password must contain uppercase, lowercase, number, and special character.");
                return;
            }

            alert("Donation submitted successfully!");
            this.reset();
        });
    </script>
</body>
</html>
