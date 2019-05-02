<?php

    class Profil {

        private $_id;
        private $_pseudo;
        private $_password;
        private $_email;
        private $_date_time_registration;
        private $_role;

        public function __construct(array $data) {
            $this->hydrate($data);
        }

        public function hydrate(array $data) {
            foreach($data as $key => $value) {
                $method = 'set'.ucfirst($key);
                if(method_exists($this, $method)) {
                    $this->$method($value);
                }
            }
        }

        public function setId($id) {
            $this->_id = $id;
        }
        public function setPseudo($pseudo) {
            $this->_pseudo = $pseudo;
        }
        
        public function setPassword($password) {
            $this->_password = $password;
        }

        public function setEmail($email) {
            $this->_email = $email;
        }

        public function setDate_time_registration($dateInscription) {
            $this->_date_time_registration = $dateInscription;
        }

        public function getId() {
            return $this->_id;
        }
        public function getPseudo() {
            return ucfirst(strtolower($this->_pseudo));
        }
        public function getPassword() {
            return $this->_password;
        }
        public function getEmail() {
            return $this->_email;
        }

        public function getDate_time_registration() {
            return $this->_date_time_registration;
        }

        public function getRole()
        {
            return $this->_role;
        }

        public function setRole($role)
        {
            $this->_role = $role;
        }


    }
?>