<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PostController extends Controller
{

    public function homepage() {
        $imag = [
            [
                "name" => "titolo1", "description" => "1", "img" => "https://"],
            [
                "name" => "titolo2", "description" => "2", "img" => "https://"],
            [
                "name" => "titolo3", "description" => "3", "img" => "https://"],
            ];
        return view('homepage');
    }
    
    public function show($id)
    {
        $post = Post::find($id); // Recupera un articolo specifico dal database
        $imag2 = [
            [
                "name" => "titolo1", "description" => "1"],
            [
                "name" => "titolo2", "description" => "2"],
            [
                "name" => "titolo3", "description" => "3"],
            ];

        return view('articolo.dettaglio', compact('post'));
    }
    
    

}

?>