<?php

    class Contact{

        private $_id;
        private $_who;
        private $_name;
        private $_lastName;
        private $_email;
        private $_subject;
        private $_message;
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

        public function getWho()
        {
            return $this->_who;
        }

        public function setWho($who)
        {
            $this->_who = $who;
        }

        public function getName()
        {
            return $this->_name;
        }

        public function setName($name)
        {
            $this->_name = $name;
        }

        public function getLastName()
        {
            return $this->_lastName;
        }

        public function setLastName($lastName)
        {
            $this->_lastName = $lastName;
        }


        public function getEmail()
        {
            return $this->_email;
        }

        public function setEmail($email)
        {
            $this->_email = $email;
        }

        public function getSubject()
        {
            return $this->_subject;
        }

        public function setSubject($subject)
        {
            $this->_subject = $subject;
        }

        public function getMessage()
        {
            return $this->_message;
        }

        public function setMessage($message)
        {
            $this->_message = $message;
        }

        public function getDate_time()
        {
            return $this->_date_time;
        }

        public function setDate_time($date_time)
        {
            $this->_date_time = $date_time;
        }



    }
?>