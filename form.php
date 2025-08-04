<!DOCTYPE html>
<html>
    <head>
        <title> login Page</title>
        <style> 
            body
            {
              font-family: Arial, Helvetica, sans-serif;
              background-color: antiquewhite;
              text-align: center;

            }
            h1
            {
                text-align: center;
                color: Black;
                margin-top: 100px;
            }
            form
            {
                background-color:cornflowerblue;
                color: white;
                padding: 20px;
                width: 500px;
                margin: 60px auto;
                border-radius: 10px;
            }
            input,style
            {
                color:blue;
                width: 90%;
                padding: 8px auto;
                margin: 10px 0;
                border: none;
                border-radius:5px;

            }
            input[type="submit"]
            {
                background-color: white;
                color: blue;
                font-weight: bold;
                cursor: pointer;

            }
            
             input[type="submit"]:hover 
            {
                 background-color: lightgray;
            }
         
    
        </style>
    </head>
    <body>
        <h1> Welcome To KCI</h1>
        <form>
        <input type="text" id="name" placeholder="Your Name"required><br>
        <input type="text" id="id" placeholder="ID" required><br>
        <input type="number" id="age" placeholder="Age" required><br>
        <select name="Depertment"required>
            <option value="">Select Depertment</option>
             <option value="CSE">CSE</option>
             <option value="EEE">EEE</option>
             <option value="BBA">BBA</option>
             <option value="LOW">LOW</option>

        </select>
        <br>
        <input type="submit" value="Submit">
        </form>
        <script> 
            function handleSubmit(event)
            {
                event.preventDefult();
                alert("Registration Confirm ")
            }
            alert( "registration confirm ")
        </script>



    </body>
</html>