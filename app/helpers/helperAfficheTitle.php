<?php

if(! function_exists('affiche_title')){

    function affiche_title($title){
        $base_title = 'Laracarte-List of artisans';

        if ($title === '') {
            return $base_title;
        }
        else{
            return $title.' | '.'Laracarte-List of artisans';
        }
    }
}

if(! function_exists('set_active_route')){
    function set_active_route($route){

        return Route::currentRouteName() === $route ? 'active' : '';
    }
}


