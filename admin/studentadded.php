<html>
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>
<?php

if(isset($_POST['submit'])){

    $data_missing = array();

    if(empty($_POST['first_name'])){
        $data_missing[] = 'First Name';
    }else{
        $f_name=trim($_POST['first_name']);
    }


    if(empty($_POST['last_name'])){
        $data_missing[] = 'Last Name';
    }else{
        $l_name=trim($_POST['last_name']);
    }


    if(empty($_POST['email'])){
        $data_missing[] = 'Email';
    }else{
        $email=trim($_POST['email']);
    }


    if(empty($_POST['street'])){
        $data_missing[] = 'Street';
    }else{
        $street=trim($_POST['street']);
    }


    if(empty($_POST['city'])){
        $data_missing[] = 'City';
    }else{
        $city=trim($_POST['city']);
    }


    if(empty($_POST['state'])){
        $data_missing[] = 'State';
    }else{
        $state=trim($_POST['state']);
    }


    if(empty($_POST['zip'])){
        $data_missing[] = 'Zip Code';
    }else{
        $zip=trim($_POST['zip']);
    }


    if(empty($_POST['birth_date'])){
        $data_missing[] = 'Birth Day';
    }else{
        $b_date=trim($_POST['birth_date']);
    }


    if(empty($_POST['phone'])){
        $data_missing[] = 'Phone Number';
    }else{
        $phone=trim($_POST['phone']);
    }


    if(empty($_POST['sex'])){
        $data_missing[] = 'Sex';
    }else{
        $sex=trim($_POST['sex']);
    }

    if(empty($_POST['lunch'])){
        $data_missing[] = 'Lunch Cost';
    }else{
        $lunch=trim($_POST['lunch']);
    }


    if (empty($data_missing)){

        require_once('../mysqli_connect.php');

        $query = "INSERT INTO students (first_name, last_name,
                  email, street, city, state, zip, phone, birth_date,
                  sex, date_entered, lunch_cost, student_id) VALUES (?, ?,
                  ?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NULL) ";

        $stmt = mysqli_prepare($dbc, $query);

        mysqli_stmt_bind_param($stmt,"ssssssisssd", $f_name, $l_name,
                                $email, $street, $city, $state, $zip,
                                $phone, $b_date, $sex, $lunch);
        mysqli_stmt_execute($stmt);


        $affected_rows = mysqli_stmt_affected_rows($stmt);

        if($affected_rows == 1){
            echo 'Student Entered';
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }else {

            echo 'Error Ocurred <br />';
            echo mysql_error();
            mysqli_stmt_close($stmt);
            mysqli_close($dbc);
        }

    }else{

        echo 'You need to enter the following data <br/>';
       foreach($data_missing as $missing){
           echo "$missing <br />";
       }

    }

}

?>
</body>
</html>