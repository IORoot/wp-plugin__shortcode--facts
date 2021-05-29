<?php

namespace andyp\facts\fact;


class taxonomy_random_acf_meta
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

        $meta_fields = $acf['meta_fields'];
        
        foreach ($meta_fields as $key => $meta_array)
        {
            if ($meta_array['meta_field_name'] == $this->args['meta'])
            {
                $this->results = $meta_array['meta_field_value'];
            }
        }

    }


}