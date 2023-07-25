<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class TaskController extends Controller
{
   public function validation(Request $request){
   
    $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'long_description' => 'required'
    ]);
    
    echo "Entered Details" . "<br>";
    echo "Title: ". $data['title']. "<br>";
    echo "Description: ". $data['description']."<br>";
    echo "Long Description: ". $data['long_description']."<br>";
    die;

}
}
