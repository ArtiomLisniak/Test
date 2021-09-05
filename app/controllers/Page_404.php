<?php
namespace App\Controllers;

class Page_404
{
  public function index() {
    http_response_code(404);
  }
}
 ?>
