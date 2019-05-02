<?php
    class AvisManager {

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }

        //Ajoute un avis dans la bdd
        public function insert(Avis $avis) {
            $req = $this->_db->prepare('INSERT INTO avis(name, title, message, id_profil, date_time) VALUES(:name, :title, :message, :id_profil, :date_message)');
            $req->bindValue(':name', strtolower($avis->getName()));
            $req->bindValue(':title', strtolower($avis->getTitle()));
            $req->bindValue(':message', $avis->getMessage());
            $req->bindValue(':id_profil', strtolower($avis->getId_profil()));
            $req->bindValue(':date_message', $avis->getDate_time());
            $req->execute();
        }

        //Sélectionne les commentaires dans la bdd
        public function get($info) {
            $avisList = [];

            if(is_int($info)) {
                $req = $this->_db->query('SELECT * FROM avis WHERE id = '.$info);
            } else {
                $req = $this->_db->prepare('SELECT * FROM avis WHERE name = :name');
                $req->bindValue(':name', $info, PDO::PARAM_STR);
                $req->execute();
            }

            while($data = $req->fetch(PDO::FETCH_ASSOC)) {
                $avisList[] = new Avis($data);
            }

            return $avisList;
        }

        // Récupère le dernier message
        public function getDateLastMessage() {
            $req = $this->_db->query('SELECT MAX(date_time) AS "Max Date" FROM avis');
            $data = $req->fetch(PDO::FETCH_ASSOC);

            return $data['Max Date'];

        }
    }
?>