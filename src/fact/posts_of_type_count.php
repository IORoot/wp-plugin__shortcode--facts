<?php

namespace andyp\facts\fact;


class posts_of_type_count
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
        $this->results = wp_count_posts( $this->args['type'] )->publish;
    }


}