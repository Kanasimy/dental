<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class SingleService extends Controller
{
    function getId() {
        $terms = wp_get_object_terms(get_queried_object_id(), 'services');
        return $terms[0] -> parent;
    }


    public function service_slider()
    {
        return carbon_get_term_meta( $this->getId(), 'service_slider' );
    }

    public function staff_service()
    {
        return carbon_get_term_meta( $this->getId(), 'staff_service' );
    }
}
