<?php   
    if(isset($_POST["submit"])){
    include 'insert.php';
    
    $sql = "INSERT INTO tb_bdrf (name, email, gender, age, contact number, alter contact nubmer, blood group type, dolbd, address, country, state, city, area, status)
    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["genderType"]."','".$_POST["age"]."','".$_POST["contactNumber"]."'
    ,'".$_POST["AltcontactNumber"]."'
    ,'".$_POST["bloodGroupType"]."'
    ,'".$_POST["BloodDonateDate"]."'
    ,'".$_POST["address"]."'
    ,'".$_POST["country"]."'
    ,'".$_POST["state"]."'
    ,'".$_POST["city"]."'
    ,'".$_POST["Area"]."'
    ,'".$_POST["statusCheck"]."')";
    
    if ($conn->query($sql) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            alert('New record created successfully');
        </script>";
    } 
    else 
    {
        echo 
        "<script type= 'text/javascript'>
            alert('Error: " . $sql . "<br>" . $conn->error."');
        </script>";
    }
    
    $conn->close();
    }
    ?>

    


