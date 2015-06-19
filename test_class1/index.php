   <?php 
       include './class.php'; 
         
      echo '<br>';
      $cls1 = new o();
      processClass($cls1);        

class Foo {
    public function sneeze() { echo 'achoooo'; }
}

abstract class Bar extends Foo {
    public abstract function hiccup();
}

class Baz extends Bar {
    public function hiccup() { echo 'hiccup!'; }
}

$baz = new Baz();
$baz->sneeze();
$baz->hiccup();


class person {
    function person(){
        $this->msg = "hello";
    }
}
$obj = new person();
echo $obj->msg;