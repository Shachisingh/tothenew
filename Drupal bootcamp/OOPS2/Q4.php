

<?php
echo '<h2>Example of traits</h2>';
trait Traita {
    public function traita() {
        echo "Trait One<br/>";
    }
}
trait Traitb {
    public function traitb() {
        echo "Trait Two<br/>";
    }
}
trait Traitc {
    public function traitc() {
        echo "Trait Three <br/>";
    }
}
class Traits {
    use Traita, Traitb, Traitc;
}
$obj = new Traits();
$obj->traita();
$obj->traitb();
$obj->traitc();
?>
