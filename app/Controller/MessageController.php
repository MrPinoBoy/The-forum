<?php

//2) On crée une classe d'objet MessageController. Dans le MVC, c'est elle qui appelle le Model et le View
// au bon moment

class MessageController {

    //3) On va construire la fonction "msgList", qui sera utilisable par les objets de la classe "MessageController",
    // c'est à dire toutes les variables que l'ont crée avec "new MessageController".
    // Les 2 prochaines lignes, je ne suis pas sur à 100% de ce que je dis : 
    // Ici, on veut utiliser la fonction msgList en dehors de ce fichier, en dehors de la class{}. Donc, on crée
    // une fonction publique (public function nomDeLaFonction())
    public function msgList($topic) {

        //4) Pareil qu'au point 1, j'écris déjà le nom de la class d'objet "MessageList", ainsi que la fonction qui
        // va chercher les messages "getMessages avant de les avoir programmés. C'est une préférence personnelle, à vous
        // de voir ce que vous préférez
        // Une fois que la ligne 18 est écrite, on va s'occuper du MODEL "MessageList"
        $messages=(new MessageList())->getMessages($topic);

        //7) Le résultat du fetch se trouve dans l'array $messages, pour chaque message on va créer un objet Message,
        // Le stocker dans une autre array $messages également, à l'index $key 
        foreach($messages as $key=>$message){
            // Lorsque l'on fetch des données comme on l'a fait, le résultat est une array. Les éléments de cette array, sont autant
            // d'arrays que de résultats correspondant à notre query. Les arrays-résultats sont fabriqué avec pour index
            // le nom des colonnes du tableau qu'ont a sélectionnées (ici on a fait *, donc toutes les colonnes), et chaque index
            // a pour valeur la valeur de la colonne de chaque éléments respectant notre requète.
            // new Message(a,b,c,..) équivaut à appeler la fonction __construct de l'objet. On fait ça afin de pouvoir
            // facilement récupérer la valeur des caractéristiques de l'objet dans le View.
            // Allons voir MODEL Message
            $messages[$key]=new Message($message["content"], $message["creationDate"], $message["author"], $message["editionDate"], $message["topic"], $message["deleted"], $message["edited"], $message["ID"]);
        }

        //9) La fonction getMessages() affiche le contenu de "View/topic/messageList.php" sur la page où elle est appelée
        // Allons voir "View/topic/messageList.php"
        require_once "../app/View/topic/messageList.php";
    }

    Public function newMessage($topic){
        if ($_SESSION['loggedUser'] != '' && $_POST['newMessage'] != ''){
            (new NewMessage($_POST['newMessage'], $_SESSION['loggedUser'], $topic))->sendMessage();
            echo '<meta http-equiv="refresh" content="0; URL=index.php?page=Topic&Topic='.$topic.'">';
        }

        require_once '../app/View/topic/sendMessage.php';
    }
}