<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller
{
    public function slider()
    {
        return carbon_get_post_meta( get_the_ID(), 'home_slider' );
    }
    public function staff()
    {
        return carbon_get_post_meta( '63', 'staff' );
    }
}
