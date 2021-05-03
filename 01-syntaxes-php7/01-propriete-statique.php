<?php

declare(strict_types=1);

class Foo
{
  // version PHP 7.3
  private string $baz;

  public static string $bar = 'salut';

  public function __construct(string $baz = "")
  {
    $this->baz = $baz;
  }

  // version PHP 8
  //public function __construct(private string $baz = "") {}

  /**
   * Get the value of baz
   */
  public function getBaz() :string
  {
    return $this->baz;
  }

  /**
   * Set the value of baz
   */
  public function setBaz(string $baz): void
  {
    $this->baz = $baz;
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

print_r($instance2->getBaz());
echo '<br>';
print_r(Foo::$bar); // bar est une propriété statique, elle n'appartient pas aux instances mais à la classe
echo '<br>';
print_r($instance2->useStaticProp());