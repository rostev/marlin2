<?php

    namespace App\controllers;

    use PDO;

    class HomeController
    {
        private PDO $db;

        public function __construct()
        {
//            $this->db = $db;
        }

        public function index()
        {
            echo __METHOD__;
        }

        public function about()
        {
            echo __METHOD__;
        }
    }