<?php

class User {
    //Atributos
    private $user;
    private $email;
    private $pass;
    private $country;
    private $gender;

    //Método construtor
    public function __construct($n, $p) {
        $this->user = $n;
        $this->pass = $p;
    }

    //Método para validar o login
    public function login() {
        //Criando objeto da classe Database
        $db = new Database();

        //Selecionar todos os registros da tabela
        //users
        $listUsers = $db->select(
            "SELECT * FROM usuarios"
        );
        
        //Criando variável booleana para controlar se o
        //login deu certo ou não
        $check = false;

        foreach($listUsers as $u) {
            if($this->user  == $u->usuario) {
                //Só entra aqui se encontrar um nome de usuário válido
                if($this->pass == $u->senha) {
                    //Só entra aqui se a pass do user encontrado for
                    //a mesma que a digitada
                    $check = true;
                }
            } 
        }
        return $check;
    }
   
    //Função para retornar o objeto inteiro
    public function getObject() {
        return $this;
    }

    /**
     * Get the value of user
     */
    public function getuser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setuser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pass
     */
    public function getSenha()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     */
    public function setSenha($pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of country
     */
    public function getPais()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     */
    public function setPais($country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of gender
     */
    public function getgender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     */
    public function setgender($gender): self
    {
        $this->gender = $gender;

        return $this;
    }
}