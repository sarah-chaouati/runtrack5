<?php 
require ('config/db.php');



class  Utilisateurs_model{
public $db;
 function __construct()
{
    require ('config/db.php');
            try
            {
                $db = new PDO ('mysql:host='.$host.';dbname='.$dbname, $user , $pass);
                $this->connect=$db;
            }
            catch (PDOException $error)
            {
                die('Connection failed :'.$error->getMessage());
            }
}
public function connect()
{
    return $this->connect;
}

public function getUsers()
{
    
    $db=$this->connect();
    $select=$db->prepare("SELECT * FROM utilisateurs ");
    $select->execute();
    $result=$select->fetchAll();
    return $result;
    
    
    
   
}

public function addUser($firstname, $lastname, $email)
{
    $db=$this->connect();
    $request=$db->prepare("INSERT INTO `utilisateurs`(`id`, `firstname`, `lastname`, `email`) VALUES (NULL,'$firstname','$lastname','$email')");
    //possible de remplacer les variables par '?' puis  execute(array($variable)) afin d'eviter injection.
    $request->execute();
    
}

}

?>