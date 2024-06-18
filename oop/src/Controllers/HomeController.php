<?php

namespace Hauhn\PhpOop\Controllers;

use Hauhn\PhpOop\Commons\Controller;
use Hauhn\PhpOop\Commons\Helper;
use Hauhn\PhpOop\Models\Product;
use Rakit\Validation\Validator;

class HomeController extends Controller
{
  public function index()
  {

    // $product = new Product();

    // Helper::debug($product->getAll('*'));

    $arr = [

      [
        'name' => 'heloWorld',
        'price' => 5000
      ],
      [
        'name' => 'heloWorld1',
        'price' => 5030
      ]
    ];

    $data = [
      'HTML' => "<h1>alert('helloword')</h1>",
      'arr' => $arr
    ];

    $this->renderClient('home', $data);
  }
  public function testValidation()
  {

    $validator = new Validator;

    // make it
    $validation = $validator->make($_POST, [
      'name'                  => 'required',
      'email'                 => 'required|email',
    ]);

    $validation->validate();

    if ($validation->fails()) {
      // handling errors
      $_SESSION['errors'] = $errors = $validation->errors()->firstOfAll();
    } else {
      // validation passes
      $_SESSION['success'] = "Success !";
    }
    header('location: '.$_ENV['BASE_URL']);
    exit;
  }
}
