<body><h1>Abstract class code</h1>

<?php
include './class.php';
$charlie = new house("Charlieaa",133);
$catage = $charlie -> getage();
$catname = $charlie -> getname();
$catname = $charlie -> getvalue();
print "$catname is $catage years old!<br><br>";

if ($charlie instanceof pet) print ("charlie is a pet<br>");
if ($charlie instanceof animal) print ("charlie is an animal<br>");
if ($charlie instanceof house) print ("charlie is a house<br>");
if ($charlie instanceof insurable) print ("charlie is insurable<br>");

?>
<hr>
</body>
