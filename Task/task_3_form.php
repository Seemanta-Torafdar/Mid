<!DOCTYPE html>
<html>
    <head>
        <title> Donation Form </title>
        <link rel="stylesheet" href="../Task/task_3_style.css">
    </head>
    <div class="form-container">
        <h1> Donation Form</h1>
        <form>
            <div>
                <label>Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div>
                <label>Email:</label>
                <input type="text" id="email" name="email"required>
            </div>

            <div>
                <label>Phone Number:</label>
                <input type="text" id="phone" name="phone"required>
            </div>

            <div>
                <label>Password:</label>
                <input type="password" id="password" name="password"required>
            </div>

            <div>
                <label>Donation Amount:</label>
                <input type="number" id="ammount" name="ammount"required>
            </div>
            
            <label>Payment Method</label>
            
            <div class="radio-group">
                <input type="radio" name="payment" value="Card"required>Card
                <input type="radio" name="payment" value="Bkash"required>Bkash
                <input type="radio" name="payment" value="Nagad"required>Nagad<br>
            </div>
            <center  
            
            <label>
                <input type="checkbox" id="terms" name ="terms"> I agree the terms and cinditions <br>
            </label>
           
            <button type="submit" >Donate</button>
            </center>
        </form>
    </div>
</html>