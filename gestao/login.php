<?php 
    $email = $_POST['email']?? ' ';
    $senha = $_POST['senha'] ?? ' ';

    if($email == "luiggi@gmail.com" && $senha == "123"){
        echo "<script>alert('Senha Correta') </script>";

    }else{
        echo "<script>alert('Senha Incorreta') </script>";
    }

?>