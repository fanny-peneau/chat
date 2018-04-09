<?php 
 $chatroom_id = $_GET["id"];
 
 //afficher un message sur le tchat
include ("db.php");
 
// on crée la requête SQL 
$sql = "SELECT message.message, message.time, users.username FROM message JOIN users ON users.id = message.user_id WHERE chatroom_id= :id')"; 

$stmt= $dbh->prepare($query);
$stmt->bindParam(":id", $id);
$sth->execute();


// on fait une boucle qui va faire un tour pour chaque enregistrement 
while($data = mysqli_fetch_assoc($req)) 
    {	$emoji_replace = array(':)',':-)','(angry)',':3',":'(",':|',':(',':-(', ';)',';-)');
		$emoji_new = array('<img src ="emojis/emo_smile.png"/>','<img src ="emojis/emo_smile.png"/>','<img src ="emojis/emo_angry.png"/>','<img src ="emojis/emo_cat.png"/>','<img src ="emojis/emo_cry.png"/>','<img src ="emojis/emo_noreaction.png"/>','<img src ="emojis/emo_sad.png"/>','<img src ="emojis/emo_sad.png"/>','<img src ="emojis/emo_wink.png"/>','<img src ="emojis/emo_wink.png"/>');
		$data['message'] = str_replace($emoji_replace, $emoji_new, $data['message']);
    // on affiche les informations de l'enregistrement en cours 
    echo'<div>'.$data['time'].'</div>'; 
    echo'<div>'.$data['username'].'</div>';
    echo'<div><b>'.$data['message'].'</b></div>';
    } 

?> 