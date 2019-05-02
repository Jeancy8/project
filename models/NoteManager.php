<?php

    class NoteManager {

        private $_db;

        public function __construct($db) {
            $this->setDb($db);
        }
        public function setDb(PDO $db) {
            $this->_db = $db;
        }


        //Ajoute une note dans la bdd
        public function insert(Note $note) {
            $req = $this->_db->prepare('INSERT INTO note(restaurant, note, id_profil, date_time) VALUES(:restaurant, :note, :id_profil, :date_time)');
            $req->bindValue(':restaurant', strtolower($note->getRestaurant()));
            $req->bindValue(':note', $note->getNote());
            $req->bindValue(':id_profil', $note->getIdProfil());
            $req->bindValue(':date_time', $note->getDate_time());
            $req->execute();
        }

        public function getNote($restaurant) {
            $count = 0;
            $totalNote = 0;

            $req = $this->_db->prepare('SELECT * FROM note WHERE restaurant = :restaurant');
            $req->bindValue(':restaurant', strtolower($restaurant), PDO::PARAM_STR);
            $req->execute();

            if($req->rowCount() > 0) {
                while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
                    $totalNote+=$data['note'];
                    $count++;
                }

                return $this->averageCalculation($totalNote, $count);
            }else {
                return 1;
            }
        }

        public function averageCalculation($total, $count) {
           $result = $total/$count;

           return intval($result);
        }
    }