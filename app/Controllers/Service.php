<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Service extends Controller
{
    public function staff()
    {
        return carbon_get_post_meta( '63', 'staff' );
    }
}
