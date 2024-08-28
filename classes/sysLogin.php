<?php

session_start();

class Login {

    public PDO $con;

    function __construct(PDO $con){
        $this->con = $con;
    }

    function logIn($email, $senha): void {
        
        $query = "SELECT * FROM users WHERE email = $email AND senha = $senha";

        $stmt = $this->con->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();

        if($stmt->rowCount()!=0 && $result['2fa_enabled'] == 1) {
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            $_SESSION['2fa'] = 1;
            header("location: index.php");
        } elseif($stmt->rowCount()!=0 && $result['2fa_enabled'] != 1) {
            $_SESSION["email"] = $email;
            $_SESSION["senha"] = $senha;
            header("location: verify.php?");
        } else {
            header("location: login.php?error=Email ou senha incorretos");
        }

    }

    function logOut(): void {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        unset($_SESSION['2fa']);
        header('location: login.php');
    }

    function verifyLogIn(): void {
        if(!isset($_SESSION['email']) && !isset($_SESSION['senha']) && !isset($_SESSION['2fa'])) {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['2fa']);
            header('location: login.php');
        }
        $this->aunthy();
    }

    function aunthy(): void {
        //Depois, precisa de admin pra functionar
        $_SESSION['2fa'] = 1;
        header("location: index.php");
    }

}

?>