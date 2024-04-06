<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // ni untuk display semua user
        $users = [
            [
                'name' => 'Seri',
                'email' => 'info@kelas.com',
                'course' => 'PHP'
            ],

            [
                'name' => 'Nurul',
                'email' => 'info@kelas.com',
                'course' => 'JAVA'
            ],

            [
                'name' => 'Fitriah',
                'email' => 'info@kelas.com',
                'course' => 'CSS'
            ],

        ];

        $html_content = '<h1>Hi</h1>';

        //$user = null
         return view('admin.user', [
             'users' => [],
             'html_content' => $html_content
         ]);

        // ni untuk display satu user
        // $users = [
        //     'name' => 'Seri',
        //     'email' => 'info@kelas.com',
        //     'course' => 'PHP'
        // ];

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
