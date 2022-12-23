<?php

class ContactForm
{
    public $database;
    public $name;
    public $email;
    public $message;

    public function __construct( $name = '', $email = '', $message = '' )
    {
        $this->database = new Database();

        $this->name = $name;
        $this->email = $email;
        $this->message = $message;
    }

    /**
     * Submit form
     */
    public function submit()
    {

        // Only change code below this line 

            // instruction: check if all the fields are not empty


            // instruction: check if email is valid


            // instruction: if all the fields are valid, insert the data into database


            // instruction: return status=success if the data is inserted into database


        // Only change code above this line

    }

    /**
     * [bonus point] Send message to admin email via SMTP API (postmark, mailgun, etc.)
     */
    public function sendMessage()
    {   
        // Only change code below this line 

            // instruction: send email to admin email via SMTP API (postmark, mailgun, etc.)


            // instruction: return status=success if the email is sent
            

        // Only change code above this line
    }

}