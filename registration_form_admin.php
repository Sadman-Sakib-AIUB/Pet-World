<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
<fieldset>
    <legend> <h2>Customer Registration Form</h2> </legend>
    <form action="action.php" method="post" target="_blank">
        <table>
            <tr>
                <td><img src ="../images/user.png" width="15px">&nbsp Full Name:</td>
                <td><input type="text" name="fullname" placeholder = "John Doe" autofocus required></td>
            </tr>
            <tr>
                <td><img src ="../images/gmail.png" width="15px">&nbsp E-mail Address:</td>
                <td><input type="email" name="email" placeholder="john.doe@gmail.com" required></td>
            </tr>

            <tr>
                <td><img src ="../images/password.png" width="15px">&nbspPassword:</td>
                <td><input type="password" name="password" pattern="[0-9A-Za-z]{8,}" title="Password must contain minimum 8 character" required></td>
            </tr>

            <tr>
                <td><img src ="../images/phone.png" width="15px">&nbspPhone Number:</td>
                <td>
                    <select name="country">
                        <option value="BD">BD(+880)</option>
                        <option value="IND">IND(+91)</option>
                        <option value="PAK">PAK(+92)</option>
                        <option value="NPL">NPL(+977)</option>
                    </select>
                 <input type="number" name="phone" placeholder="01700000000" required>
                </td>
            </tr>

            <tr>
                <td><img src ="../images/identity.png" width="15px">&nbspNID Number:</td>
                <td><input type="number" name="nid" required></td>
            </tr>

            <tr>
                <td><img src ="../images/calendar.png" width="15px">&nbspDate of Birth:</td>
                <td><input type="date" name="dob" required></td>
            </tr>

            <tr>
                <td><img src ="../images/gender.png" width="15px">&nbspGender:</td>
                <td>
                    <select name="Gender">
                        <option value="chooseGender">Choose Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><img src ="../images/pet.png" width="15px">&nbspPreferred Pet:</td>
                <td>
                    <input type="checkbox" name="dog" value="dog"> Dog
                    <input type="checkbox" name="cat" value="cat"> Cat
                    <input type="checkbox" name="rabbit" value="rabbit"> Rabbit
                    <input type="checkbox" name="Bird" value="Bird"> Bird
                    <input type="checkbox" name="others_pet" value="others_pet"> Others
                </td>
            </tr>

            <tr>
                <td><img src ="../images/pet-exp.png" width="15px">&nbspExperienced with pet:</td>
                <td>
                    <select name=experience>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><img src ="../images/address.png" width="15px">&nbspAddress:</td>
                <td><textarea name="address" rows="4" cols="40" required></textarea></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</fieldset>
</body>
</html>