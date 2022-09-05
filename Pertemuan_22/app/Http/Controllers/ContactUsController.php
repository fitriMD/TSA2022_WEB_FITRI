<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return '<a href="https://www.educastudio.com/contact-us">
        https://www.educastudio.com/contact-us</a>';
    }
}
