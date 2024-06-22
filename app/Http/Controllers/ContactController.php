<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected function getContacts(){
    
        return [
            1=>['name' =>'name1', 'phone'=>'111111'],
            2=>['name' =>'name2', 'phone'=>'222222'],
            3=>['name' =>'name3', 'phone'=>'333333'],
        ];
    }
    

    function ContactController(){
        $companies = [
            1 => ['name' => 'company One','contacts' => 3], 
            2 => ['name' => 'company two','contacts' => 4], 
            3 => ['name' => 'company three','contacts' => 4] 
        ];
        $contacts = $this->getContacts();
        return view('contacts.index',compact('contacts','companies'));
    }

    function create(){
        return view('contacts.creates');
    }

    function show($id){
        $contacts = $this->getContacts();
        // abort_unless(isset($contacts[$id],mess));
        $contact = $contacts[$id];
        return view('contacts.show')->with('contact',$contact);
    }

    function companies($name = null){
        if($name){
            return $name;
        }
        else{
            return "All companies";
        }
    }
}
