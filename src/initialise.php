<?php

namespace andyp\facts;


class initialise
{

    private $config;
    private $results;


    public function set_config($config)
    {
        $this->config = $config;
    }


    public function register()
    {
        add_shortcode( 'facts', [$this, 'run'] );
    }

    public function run($atts = array())
    {
        $ns = 'andyp\\facts\\fact\\' . $atts['fact'];
        if ( !class_exists($ns) ){ return "fact does not exist"; }

        $fact = new $ns;
        $fact->set_config($atts);
        $fact->run();
        $this->results = $fact->get_results();

        return $this->results;
    }
}