<?php

$router->get('', 'PagesController@home');

$router->get('about', 'PagesController@about');

$router->post('contact', 'PagesController@contact');

$router->get('about-culture', 'PagesController@aboutCulture');

// NAME

$router->post('add-name', 'PagesController@addName');

$router->post('update-name', 'PagesController@updateName');

$router->post('delete-name', 'PagesController@deleteName');

