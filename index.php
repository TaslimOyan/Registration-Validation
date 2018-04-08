<?php
/**
 * Created by PhpStorm.
 * User: oyyon o
 * Date: 4/7/2018
 * Time: 5:18 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>



</head>
<body>




                <form class="form-inline" action="index.php"  method="post" name="Register" onsubmit="return validateForm()">

                <p><b>Use tab key to move from one to another</b></p>

                <p>user_id:</p><input type="text" id="id" name="uid"><br/>
                <p>password:</p><input type="password"  id="pwd" name="pass"><br/>

                <p>Name:</p><input type="text"  id="usr" name="name"><br/>
                <p>Address:</p><input type="text"  id="add" name="address"><br/>
                <p>Country:</p>


                <select id="country" name="country" title="">
                <option value="0" selected disabled>Please Select a country:</option>
                <option value="1">Bangladesh</option>
                <option value="2">Japan</option>
                <option value="3">England</option>

                </select><br/>
                <p>Zip Code:</p><input type="text"  id="zip" name="zipcode">




                <p>Email:</p><input type="email"  id="usr" name="email">


                <p>Sex:</p>

                <input type="radio" name="gender" value="female" id="female">Female

                <input type="radio" name="gender" value="male" id="male">Male <br/>
                <p>Language:</p>
                <input type="checkbox" name="lang" value="English" id="eng">English

                <input type="checkbox" name="lang" value="Non_English" id="noneng">Non_English <br/>
                <p>About:</p><br/>
                <textarea rows="4" cols="20" name="about"  id="abt"></textarea><br/>



                <input type="submit"  id="pwd" value="Submit">







        </form>

</body>

</html>

<script>


    function validateForm()
    {

        var uid = document.forms["Register"]["uid"].value;
        if (uid == "") {

            alert("please fill it up");
            return false;
        } if (isNaN(uid)) {

        alert("input should be a number");
        return false;
    }



        var passWord = document.forms["Register"]["pass"].value;
        if (passWord == "") {
            alert("Enter a password");
            return false;
        }


        var fullName = document.forms["Register"]["name"].value;
        var nameRegex = /^[A-Za-z\s]+$/;

        if (fullName == "") {
            alert("Name must be filled out");
            return false;
        }
        if (!nameRegex.test(fullName))
    {
        alert("Name can only hold (A-Z) or (a-z)");
        return false;
    }


        var address = document.forms["Register"]["address"].value;

        if (address == "") {
            alert("address must be filled out");
            return false;
        }
        var country = document.forms["Register"]["country"].value;

        if (country=="0") {

            alert("please select a value");
            return false;

        }


        var Mgender = document.getElementById("female").checked;
        var Fgender = document.getElementById("male").checked;

        if (!Mgender && !Fgender) {
            alert("Choose gender");
            return false;
        }


        var non = document.getElementById("noneng").checked;
        var eng = document.getElementById("eng").checked;

        if (!non && !eng) {
            alert("Choose at least one");
            return false;
        }







        var Email = document.forms["Register"]["email"].value;
        if (!Email) {
            alert("Enter Email");
            return false;
        }



        var zip = document.forms["Register"]["zip"].value;
        if (!zip) {

            alert("Enter zip code");
            return false;
        }  if (!/^\d{4}$/.test(zip)){

        alert("invalid zip code, use 4 digits");
        return false;}




    }
</script>