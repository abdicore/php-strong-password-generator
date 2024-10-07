

<?php 
$saluto = "ciao";

if(isset($_GET["numberUser"])){
$numberLenght = $_GET["numberUser"];
}
    
function generatePassword($passwordLength){
    $letters = 'abcdefghilmnopqrstvz0123456789@ABCDILMNEOPQRSTVZ!"#$%&()*+,-./:;=?@[\]^_{|}~';
    $password = '';
    for($i = 0; $i < $passwordLength; $i++){
        $selectedCharacter = $letters[rand(0,strlen($letters)-1)];
        $password .= $selectedCharacter;
    }
    return $password;
}
 
 function getRundomNumber($min,$max){
     return rand(1,5);

 }

?>
