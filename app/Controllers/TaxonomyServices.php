<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class TaxonomyServices extends Controller
{
    public function service_slider()
    {
        return carbon_get_term_meta( get_queried_object_id(), 'service_slider' );
    }

    public function staff_service()
    {
        return carbon_get_term_meta( get_queried_object_id(), 'staff_service' );
    }

    public function description()
    {
        return carbon_get_term_meta( get_queried_object_id(), 'description' );
    }
}
