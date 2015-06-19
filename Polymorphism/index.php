<?php
include './class.php';

$ani = new animal();
$cat1 = new cat();
$dog = new dog();







if(isset($_POST['ani']))
{
$a = $_POST['ani']; 

if($a=='cat')
{
    calling($cat1);
}
if($a == 'Dog')
{
calling($dog);    
}
if($a == 'Animal')
{
    calling($ani);
}

}

?>

<form method="post">
    <select name="ani">
        <option>Animal</option>
        <option>cat</option>
        <option>Dog</option>
    </select>
    <input type="submit" >
</form>