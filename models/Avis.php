<?php

    class Avis {

        private $_id;
        private $_name;
        private $_title;
        private $_message;
        private $_id_profil;
        private $_date_time;

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

        public function getId()
        {
            return $this->_id;
        }


        public function setId($id)
        {
            $this->_id = $id;
        }


        public function getName()
        {
            return $this->_name;
        }


        public function setName($name)
        {
            $this->_name = $name;
        }

        public function getTitle()
        {
            return $this->_title;
        }

        public function setTitle($title)
        {
            $this->_title = $title;
        }


        public function getMessage()
        {
            return $this->_message;
        }


        public function setMessage($message)
        {
            $this->_message = $message;
        }


        public function getId_profil()
        {
            return $this->_id_profil;
        }


        public function setId_profil($idProfil)
        {
            $this->_id_profil = $idProfil;
        }


        public function getDate_time()
        {
            return $this->_date_time;
        }


        public function setDate_time($dateMessage)
        {
            $this->_date_time = $dateMessage;
        }


    }
?>