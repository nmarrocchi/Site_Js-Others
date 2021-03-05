<?php

class User 
{
    private $Username;
    private $RegisterDate;


    // -- Construct de l'objet User
    public function __construct($_Username, $Register)
    {
        $this->Username = $_Username;
        $this->RegisterDate = $Register;
            
    }
   








    //-- Print du nom d'utilisateur
    public function PrintUsername()
    {
        echo $this->Username;
    }
    // -- Récupère la date d'inscription de l'utilisateur
    public function PrintRegisterDate()
    {
        echo $this->RegisterDate;
    }
}

?>