<?php

class PagesController
{
    function home()
    {
        $champions = App::get('database')->selectAll('champions');

        view('index', ['champions' => $champions]);
    }

    function about()
    {
        view('about');
    }

    function contact()
    {
        view('contact');
    }

    function aboutCulture()
    {
        view('about-culture');
    }

    function addName()
    {

        App::get('database')->insert('users', [
            'name' => $_POST['name']
        ]);

        view('index');
    }

    function updateName()
    {
        App::get('database')->update('users', [
            'name' => $_POST['name'],
            'id' => $_POST['id']
        ]);

        view('index');
    }

    function deleteName()
    {
        App::get('database')->delete('users', [
            'id' => $_POST['id']
        ]);

        view('index');
    }

}
