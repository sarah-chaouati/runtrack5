<!-- Formulaire d'ajout d'user -->

<form action="" method="post">

<label>Firstname</label>
<input type="text" name="first">
<label>Lastname</label>
<input type="text" name="last">
<label>Email</label>
<input type="email" name="mail">

<input type="submit" value="Envoyer" name="envoyer">
</form>

<?php 
if(isset($_POST['envoyer']))
{
    $firstname = $_POST['first'];
    $lastname = $_POST['last'];
    $email = $_POST['mail'];


    $user->addUser($firstname,$lastname,$email);
}

?>