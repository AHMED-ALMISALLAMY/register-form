<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        background-color: powderblue;
        width: 50%;
        height: 360px;
        margin: auto;
    }

    div {
        margin-left: 30px;
        margin-top: 10px;
        padding-top: 10px;
    }

    input {
        width: 80%;
        height: 25px;
    }

    #fn {
        margin-bottom: 15px;
    }

    #sn {
        margin-bottom: 15px;
    }

    #country {
        width: 81%;
        height: 30px;
        margin-bottom: 30px;
    }

    #bt {
        background-color: cyan;
        border: 0;
        width: 40%;
        height: 30px;
        border-radius: 50px;
        margin-left: 200px;
        margin-top: 25px;
    }
</style>
<body>
    
<?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $firstname = ""; $lastname = ""; $country = "";

        if ( isset($_POST['FirstName']) ) {
            $firstname = "FirstName: " .strip_tags( $_POST['FirstName'] ).'<br>';
        }

        // if ( !preg_match( " /^[A-Z][a-z]+$/" , $firstname )) {
        //     $firstname = "<span style=color:red > Error First Name </span>";
        // }


        if (isset($_POST['LastName'])) {
            $lastname = "LastName: " .strip_tags( $_POST['LastName'] ).'<br>';
        }

        if ( isset($_POST['country']) ) {
            $country = "Country: " .strip_tags( $_POST['country'] ).'<br>';
        }
       
        $data = "$firstname<br>$lastname<br>$country";
        echo $data;
    }



?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <h1 style="color:navy; margin:auto; text-align:center">Registeration</h1>

        <label for="firstname">FirstName</label><br>
        <input type="text" name="FirstName" id="fn" placeholder="FirstName"><br>

        <label for="lastname">LastName</label><br>
        <input type="text" name="LastName" id="sn" placeholder="SecondName"><br>

        <label for="country">Country</label><br>
        <select name="country" id="country">
            <option value="Egypt">Egypt</option>
            <option value="United State">United State</option>
            <option value="Canada">Canada</option>
        </select><br>

        <button id="bt" name="submit">Submit</button>
    </div>
</form>


</body>
</html>