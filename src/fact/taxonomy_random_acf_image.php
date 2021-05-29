<?php

namespace andyp\facts\fact;


class taxonomy_random_acf_image
{

    private $args;
    private $results;

    public function get_results()
    {
        return $this->results;
    }

    public function set_config($args)
    {
        $this->args = $args;
    }

    public function run()
    {
        if( ! class_exists('ACF') ) { return; }

        $terms = get_terms([ 
            'taxonomy'   => $this->args['tax'],
            'count'      => true,
            'parent'     => 0,
            'hide_empty' => false,
        ]);

        shuffle( $terms );

        $acf = get_fields( $terms[0] );

        $this->results = $acf['featured_image']['url'];
    }


}