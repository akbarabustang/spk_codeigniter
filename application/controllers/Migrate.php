<?php

class Migrate extends CI_Controller
{

        public function index()
        {

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                }
        }

}