<?php

class Customer {
    protected $name;
    protected $lastname;
    protected $age;
    protected $email;
    protected $level;
    	
    // CONSTURCT
    function __construct($_name, $_lastname, $_age, $_email = 'NA',  $_level = 1) {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
        $this->email = $_email;
        $this->level = $_level;
    }

    // METHODS

    // setters
    public function setName($_name) {
        $this->name = $_name;
    }

    public function setLastname($_lastname) {
        $this->name = $_lastname;
    }

    public function setAge($_age) {
        if(is_numeric($_age) && $_age > 0 && $_age < 130) {
            $this->age = $_age;
        }elseif (!is_numeric($_age)) {
            throw new Exception( $_age . ' non è un numero' );
        } else {
            throw new Exception( $_age . ' non è un numero valido' );
        }
    }
    
    public function setEmail($_email) {
        $this->email = $_email;
    }
    public function setLevel($_level) {
        $this->level = $_level;
    }

    //getters
    public function getName() {
        return $this->name . ' ' . $this->lastname;
    }

    public function getAge() {
        return $this->age;
    }

    public function getEmail() {
        return $this->email;
    }
}

class PremiumCustomer extends Customer {
    protected $discount;

    // CONSTRUCT
    function __construct($_name, $_lastname, $_age, $_email = 'NA', $_level = 10, $_discount = 5) {
        parent::__construct($_name, $_lastname, $_age, $_email, $_level);

        $this->discount = $_discount;
    }

    /**
     * set discount: 30% se ha più di 50 anni e ha anche registrato una mail, 10% se ha meno di 50 anni ma ha registrato una mail (5% di default)
     */
    public function setDiscount() {
        if ($this->email != 'NA' && $this->age > 50) {
            $this->discount = 30;
        } elseif ($this->email != 'NA') {
            $this->discount = 10;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}

   
