<?php
namespace Core;

final class Router
{
  private $href;

  public function __construct()
  {
    $this->href = $_SERVER["PATH_INFO"] ?? Null;
  }

  public function run(){
    if ($this->href) {
      $classNameSpace = 'App\Controllers\\' . ucfirst(ltrim($this->href, '/'));

      if (class_exists($classNameSpace)) {
        $classObj = new $classNameSpace;
      } else {
        $classObj = new \App\Controllers\Page_404();
      }
    } else {
      $classObj = new \App\Controllers\Page_404();
    }
    $classObj -> index();
  }
}
?>
