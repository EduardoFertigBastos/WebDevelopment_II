<?php

class Authenticacion
{
    private $username;
    private $password;

    public function authenticate($conn)
    {
        $sSql = "  SELECT *
                     FROM usuario
                    WHERE Email = :email
                      AND Senha = md5(:senha)";
                        
        $stmt = $conn->prepare($sSql);

        $stmt->bindParam(':email', $_POST['inputEmail']);
        $stmt->bindParam(':senha', $_POST['inputSenha']);
        
        $stmt->execute();
        
        $oUsuario = $stmt->fetchAll();

        if (!is_null($oUsuario)) {
            $_SESSION['usuarioLogado'] = true;
            
        } else {
            $_SESSION['erroLogin'] = true;
        }

        
    }


}