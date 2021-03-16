<?php

App::bind('config', require 'config/config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function headerView()
{
    require 'views/partials/header.view.php';
}

function footerView()
{
    require 'views/partials/footer.view.php';
}

function navView()
{
    require 'views/partials/nav.view.php';
}

function view($name, $data_db)
{
    headerView();
    navView();
    $data = $data_db;
    require "views/{$name}.view.php";
    footerView();
}