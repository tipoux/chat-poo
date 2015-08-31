<?php

namespace Models;

class ViewsGenerator
{   
    public function __construct($view)
    {
        include "Views/".$view.".phtml";
    } 
}
