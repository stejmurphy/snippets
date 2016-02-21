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


///Inheritance

class TextBoxHeader extends TextBoxSimple{

    var $header_text;

    //constructor
    function __construct($header_text_in, $body_text_in){

        $this->header_text = $header_text_in;
        $this->body_text = $body_text_in;
    }

    // Main display function
    function display(){
        $header_html = $this->make_header($this->header_text);
        $body_html   = $this->make_body($this->body_text);

        print("<table border=1><tr><td>$header_html</td></tr><tr><td>$body_html</td></tr></table>");
    }

    //Header functions
    function make_header($text){
        return $text;

    }

    //body
    function make_body($text){
        return($text);
    }


}

$box = new TextBoxHeader('Custom Header Text', 'Custom Body Text');
$box->display();
