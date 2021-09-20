<!-- 
10) Comme on a require ce fichier dans MessageController, il a accès à toutes ses variables et inversement.
ici on fait une boucle foreach directement dans le html
pour faire ça on ouvre une balise php (?php), on écrit notre foreach($groupe as $element), 
on ajoute ":" et on ferme la balise
On a une array "$messages" remplie d'objet "Message", et pour chaque élément...
 -->

<?php foreach($messages as $message):?>
    
    <!-- 
        ... on écrit (echo) la valeur de sa caractéristique "content" dans une balise <p>
        ?= dans une balise (<>) équivaut à ?php echo
        On fait pareil pour afficher l'auteur et la date de création
        Tout a été stocké au bon endroit grâce au __construct qu'on a codé avant (partie 8)
     -->
    <p><?=$message->content?></p>
    <p><?=$message->author?></p>
    <p><?=$message->creationDate?></p>
    <!-- 
        ici on fait une boucle if directement dans le html
        pour faire ça on ouvre une balise php (?php), on écrit notre if(condition), on ajoute ":" et on ferme la balise
     -->
    <?php if($this->author = $_SESSION['loggedUser']):?>
        <form action="./index.php?page=editMsg&id=<?=$message->id?>">
        <input type="submit" value="Edit">
        </form>
        <!-- 
            tout ce qui se trouve entre notre "if(condition):" et notre "endif;" ne sera affiché que si condition
            est vrai
            Ici, il faut que le nom de l'auteur du message soit le même que le nom de la personne connectée
         -->
    <?php endif; ?>
    <!-- 
        tout ce qui se trouve entre notre "foreach():" et notre "endforeach;" sera répété autant de fois qu'il
        y a d'éléments.
        Voilà en gros comment ça fonctionne en MVC et en OOP, et "ma" façon de faire un nouvel élément avec cette
        méthode de travail :)
     -->
    <?php endforeach;?>
