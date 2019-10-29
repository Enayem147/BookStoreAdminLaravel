<?php

namespace App\Http\Controllers;
// require __DIR__.'\vendor\autoload.php';
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class BookController extends Controller
{

	public function index(){

		$factory = (new Factory)
	    ->withServiceAccount(__DIR__.'\bookstore_firebase_service.json')
	    // The following line is optional if the project id in your credentials file
	    // is identical to the subdomain of your Firebase project. If you need it,
	    // make sure to replace the URL with the URL of your project.
	    ->withDatabaseUri('https://bookstore-13e40.firebaseio.com/');

	    $database = $factory->createDatabase();

	    $ref = $database->getReference('Sach');

	    $books = $ref->getValue();

	    // $book_list[] = array();
	    foreach ($books as $book) {
	    	$book_list[] = $book;
	    }

	    return view('bookstore_admin/book/book_list',compact('book_list'));
	}
    
}
