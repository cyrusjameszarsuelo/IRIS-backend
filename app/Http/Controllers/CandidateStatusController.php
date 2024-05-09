<?php

namespace App\Http\Controllers;

use App\Models\CandidateStatus;
use Illuminate\Http\Request;

class CandidateStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.pages.adminUtilities.candidateStatus.index');
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
    public function show(CandidateStatus $candidateStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CandidateStatus $candidateStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CandidateStatus $candidateStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CandidateStatus $candidateStatus)
    {
        //
    }
}
