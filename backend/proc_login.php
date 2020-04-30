<?php
include "../config/func.php";

//session_start();
global $bapasUser;

$username = $_POST['username'];
$password = $_POST['password'];

$lastLogin = "";

$q = "SELECT * FROM tb_user WHERE username = '$username'";

$res = $bapasDB->prepare($q);
    $res->execute();
    if (($res->rowCount())==1) {
        
        $data = $res->fetch(PDO::FETCH_ASSOC);
        
        if (password_verify($password, $data['password'])) {

            // put user logged in information to userLogin class
            $bapasUser->set_username($data['username']);
            $bapasUser->set_email($data['email']);
            $bapasUser->set_fullName($data['fullname']);
            $bapasUser->set_foto($data['foto']);
            $bapasUser->set_usernameTarget($data['username_target']);
            $bapasUser->set_lastLogin($data['last_login']);
            
            // update last login data
            $lastLogin = date("Y/m/d h:i:sa");
            $lastLogin = str_replace($lastLogin, "/", "-");
            $q_LastLogin = "UPDATE tb_user SET last_login = '".$lastLogin."' WHERE username = '".$username."'";
            $sql_update = $bapasDB->prepare($q_LastLogin);
            $sql_update->execute();

            // store user login information into session
            $_SESSION['username'] = $data['username'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['fullname'] = $data['fullname'];
            $_SESSION['username_target'] = $data['username_target'];
            $_SESSION['foto'] = $data['foto'];
            $_SESSION['email'] = $date['email'];

            // untuk chaining user to pegawai
            if ($data['username'] !== "admin") 
            {
                $pegawaiBapas = $bapasDB->GetData('tb_pegawai', '*', "nip = '".$data['username_target']."'");
                        if($RowPegawai = $bapasDB->GetRow($pegawaiBapas)) {
                            $_SESSION['nip'] = $RowPegawai['nip'];
                            $_SESSION['jabatan'] = $RowPegawai['jabatan'];
                            $_SESSION['golongan'] = $RowPegawai['golongan'];
                        }
            } else {
                $_SESSION['jabatan'] = "Administrator";
                $_SESSION['golongan'] = "NaN";
            }

            header("location:../dashboard.php");
        } else {
            echo "
            <script>
            eval(\"location='../index.php '\");
             alert('Something error while logged in, please re-check your username or password!')
            </script>";
        }
    
    } else {
       // header("location:../login.php");
    }
?>