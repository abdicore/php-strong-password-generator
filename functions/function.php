

<?php 
$saluto = "ciao";

if(isset($_GET["numberUser"])){
$numberLenght = $_GET["numberUser"];
}
    
function generatePassword($passwordLength){
    $letters = 'abcdefghilmnopqrstvz0123456789';
    $capLetters = 'ABCDILMNEOPQRSTVZ';
    $numbers = '0123456789';
    $password = '';
    for($i = 0; $i < ($passwordLength / 3); $i++){
        $selectedCharacter = $letters[rand(0,strlen($letters)-1)];
        $selectedCapCharacter = $capLetters[rand(0,strlen($capLetters)-1)];
        $selectedNumbers = $capLetters[rand(0,strlen($numbers)-1)];


        $password .= $selectedCharacter.$selectedCapCharacter.$selectedNumbers;
    }
    return $password;
}
 
 function getRundomNumber($min,$max){
     return rand(1,5);

 }

?>
