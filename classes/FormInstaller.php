<?php 

use builder\Database\DB;


class FormInstaller{


    static public $form;
    

    /**
     * constructor
     *
     * @return void
     */
    static private function constructor()
    {
        self::$form = form();
    }

    
    /**
     * run
     *
     * @return mixed
     */
    static public function run()
    {
        self::constructor();

        self::$form->submit([
            'string:app_name' => 'APP Name is required',
        ])->error(function($response){
            
        })->success(function($response){


            // do not forget to disconnect from database, then update your env variables
            // Then after reconnect to database, before using the import() helpers function

            $response->message = 'Import of Database Completed';


            // header('Location: ' . domain('views/welcome.php'));
        });
    }

}