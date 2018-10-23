<?php

class MessageP
{
    static public function getMessages()
    {
        $bdd = MyPdoP::getPDO();
        $query = $bdd->prepare('SELECT * FROM messages');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_CLASS, "MessageM");

        return $result;
    }

    static public function addMessages($text)
    {
        $bdd = MyPdoP::getPDO();
        $query = $bdd->prepare('INSERT INTO messages(text) VALUES(:text)');
        $query->execute(array(
            'text' => $text
        ));
    }


}