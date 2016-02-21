<?php

// class creation, the blueprint
class TextBoxSimple{
    var $body_text = "my text";
    //constructor function, always called when a new instance is created
    function __construct($text_in)
    {
        $this->body_text = $text_in;
    }
    //Displays our data
    function display(){
        print("<table border=1><tr><td>$this->body_text</td></tr>");
    }
}

//instance
$body = new TextBoxSimple('Custom Text');
//load method aka display the table
$body->display();