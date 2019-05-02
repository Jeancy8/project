<?php

    class ProfilManager {

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }

         //Ajoute le profil dans la bdd
        public function insert(Profil $profil) {
            $req = $this->_db->prepare('INSERT INTO profil(pseudo, password, email, date_time_registration) VALUES(:pseudo, :password, :email, :dateInscription)');
            $req->bindValue(':pseudo', strtolower($profil->getPseudo()));
            $req->bindValue(':password', $profil->getPassword());
            $req->bindValue(':email', strtolower($profil->getEmail()));
            $req->bindValue(':dateInscription', $profil->getDate_time_registration());
            $req->execute();
        }

        //Sélectionne le profil dans la bdd
        public function get($info) {
            if(is_int($info)) {
                $req = $this->_db->query('SELECT * FROM profil WHERE id = '.$info);
                $data = $req->fetch(PDO::FETCH_ASSOC);
                return new Profil($data);
            } else {
                $req = $this->_db->prepare('SELECT * FROM profil WHERE pseudo = :pseudo');
                $req->bindValue(':pseudo', $info, PDO::PARAM_STR);
                $req->execute();
                return new Profil($req->fetch(PDO::FETCH_ASSOC));
            }
        }

        public function pseudoExist($pseudo) {
            $req = $this->_db->prepare('SELECT pseudo FROM profil WHERE pseudo = ?');
            $req->execute(array($pseudo));
            $count = $req->rowCount();
            if($count >= 1)
                return true;
            else
                return false;
        }

        public function emailExist($email) {
            $req = $this->_db->prepare('SELECT email FROM profil WHERE email = ?');
            $req->execute(array($email));
            $count = $req->rowCount();
            if($count >= 1)
                return true;
            else
                return false;
        }

        public function loginCompte($identifiant, $mdp) {
            if(filter_var($identifiant, FILTER_VALIDATE_EMAIL)) {
                $req = $this->_db->prepare('SELECT * FROM profil WHERE email = ? AND password = ?');
            } else {
                $req = $this->_db->prepare('SELECT * FROM profil WHERE pseudo = ? AND password = ?');
            }
            $req->execute(array(strtolower($identifiant), $mdp));
            $count = $req->rowCount();
            $row = $req->fetch(PDO::FETCH_BOTH);
            if($count == 1) {
                $_SESSION['pseudo'] = $row['pseudo'];
                $_SESSION['avatar'] = $row['avatar'];
                $_SESSION['email'] = $row['email'];
                return true;
            } else {
                return false;
            }
        }

        public function getRegisteredCount() {
            $req = $this->_db->prepare('SELECT * FROM profil');
            $req->execute();
            return $req->rowCount();
        }
    }
?>