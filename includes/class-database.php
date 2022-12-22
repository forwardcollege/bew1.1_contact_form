<?php

class Database
{

    public function __construct()
    {
        return  new PDO(
            'mysql:host=mysql;dbname=contact_form', // instruction: change the host to devkinsta_db and insert your own database name
            'root', 
            'password' // instruction: change this to your database password
        );
    }

}