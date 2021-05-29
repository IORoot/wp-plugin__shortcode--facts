<?php

namespace andyp\facts\fact;


class taxonomy_parents_count
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
        $terms = get_terms([ 
            'taxonomy'   => $this->args['tax'],
            'count'      => true,
            'parent'     => 0,
            'hide_empty' => false,
        ]);

        $this->results = count($terms);
    }


}