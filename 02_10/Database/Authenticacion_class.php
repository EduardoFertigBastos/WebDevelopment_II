<?php

class Authenticacion
{
    private $username;
    private $password;

    public function authenticate($conn, $username, $password)
    {
        $this->username = $username;
        $this->password = $password;
        
        $sSql = " SELECT *
                    FROM usuario
                   WHERE Email = :email
                     AND Senha = md5(:senha)";
                            
        $stmt = $conn->prepare($sSql);

        $stmt->bindParam(':email', $this->username);
        $stmt->bindParam(':senha', $this->password);
        
        $stmt->execute();

        $oUsuario = $stmt->fetchAll();

        if ($oUsuario != NULL) {
            return true;
        } else {
            return false;
        }
        
    }


}