<?php

class TextBoxSimple{

    var $body_text = "my text";

    function display(){
        print("<table border=1><tr><td>$this->body_text</td></tr>");
    }
}

//instance
$body = new TextBoxSimple();
//load method aka display the table
$body->display();