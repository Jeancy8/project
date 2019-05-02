<?php

    class ContactManager{

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }

        //Ajoute le profil dans la bdd
        public function insert(Contact $contact) {
            $req = $this->_db->prepare('INSERT INTO contact(
                                        who, 
                                        name, 
                                        lastname, 
                                        email, 
                                        subject, 
                                        message,
                                        date_time) 
                                        VALUES(
                                        :who, 
                                        :name, 
                                        :lastname, 
                                        :email,
                                        :subject,
                                        :message,
                                        :date_time)');
            $req->bindValue(':who', strtolower($contact->getWho()));
            $req->bindValue(':name', $contact->getName());
            $req->bindValue(':lastname', strtolower($contact->getLastName()));
            $req->bindValue(':email', $contact->getEmail());
            $req->bindValue(':subject', $contact->getSubject());
            $req->bindValue(':message', $contact->getMessage());
            $req->bindValue(':date_time', $contact->getDate_time());
            $req->execute();
        }

    }
?>