<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function greeting()
    {
        return carbon_get_the_post_meta( 'sage_greeting' );
    }
}
