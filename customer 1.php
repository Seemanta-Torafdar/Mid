<?php
session_start();
include 'control/action.php'; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Registration</title>
    <link rel="stylesheet" type="text/css" href="customer.css">
</head>
<body>

<form name="customerForm" class="customer" action="" method="post">
    <h1>Customer Registration Form</h1>
    <fieldset>
        <legend><h3>Personal Information</h3></legend>
        <table>
            <tr>
                <td>First Name:</td>
                <td><input type="text" name="firstname" value="<?php echo $firstname ?? '' ?>"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $fnameError; ?></span></td></tr>

            <tr>
                <td>Last Name:</td>
                <td><input type="text" name="lastname" value="<?php echo $lastname ?? '' ?>"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $lnameError; ?></span></td></tr>

            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" value="<?php echo $email ?? ''?>"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $emailError; ?></span></td></tr>

            <tr>
                <td>Phone:</td>
                <td><input type="tel" name="phone" value="<?php echo $phone ?? ''?>"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $phoneError; ?></span></td></tr>

            <tr>
                <td>Customer ID:</td>
                <td><input type="text" name="customer_id" value="<?php echo $customer_id ?? '' ?>"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $customerIdError; ?></span></td></tr>

            <tr>
                <td>Date of Birth:</td>
                <td><input type="date" name="dob" value="<?php echo $dob ?? '' ?>"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $dobError; ?></span></td></tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" name="gender" value="male" <?php if (($gender ?? '') == "male") echo "checked"; ?>> Male
                    <input type="radio" name="gender" value="female" <?php if (($gender ?? '') == "female") echo "checked"; ?>> Female
                </td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $genderError; ?></span></td></tr>

            <tr>
                <td>Address:</td>
                <td><textarea name="address"><?php echo $address ?? '' ?></textarea></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $addressError; ?></span></td></tr>

            <tr>
                <td>Password:</td>
                <td><input type="password" name="pass"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $passError; ?></span></td></tr>

            <tr>
                <td>Re-Enter Password:</td>
                <td><input type="password" name="repass"></td>
            </tr>
            <tr><td><span style="color:red;"><?php echo $repassError; ?></span></td></tr>
        </table>

        <input type="submit" name="customer_submit" value="submit">
        <input type="reset" value="Reset">
    </fieldset>
</form>

</body>
</html>