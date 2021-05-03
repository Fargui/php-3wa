<?php

class Foo
{

  private $baz;

  public static $bar = 'salut';

  public function __construct($value = "")
  {
    $this->baz = $value;
  }


  /**
   * Get the value of baz
   */
  public function getBaz()
  {
    return $this->baz;
  }

  /**
   * Set the value of baz
   *
   * @return  self
   */
  public function setBaz($baz)
  {
    $this->baz = $baz;

    return $this;
  }

  public function useStaticProp()
  {
    // on appelle baz avec l'instance courante
    // on appelle bar (prop. statique) avec la classe
    return $this->baz . self::$bar;
  }
}


$instance1 = new Foo("hello");
$instance2 = new Foo("coucou");

$instance2->setBaz("yo");

var_dump($instance1);
var_dump($instance2);

print_r($instance1->getBaz());
echo '<br>';
print_r(Foo::$bar); // bar est une propriété statique, elle n'appartient pas aux instances mais à la classe
echo '<br>';
print_r($instance2->useStaticProp());