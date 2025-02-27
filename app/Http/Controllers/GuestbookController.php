<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveGuestbookEntryRequest;
use App\Models\GuestbookEntry;
use Illuminate\Http\Request;

class GuestbookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entries = GuestbookEntry::orderBy('created_at', 'desc')->paginate(5);
        return view('guestbook.index', compact('entries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SaveGuestbookEntryRequest $request)
    {
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, GuestbookEntry $guestbook)
    {
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GuestbookEntry $guestbook)
    {
        $guestbook->delete();
        return back();
    }

    public function unapproved()
    {
        $entries = GuestbookEntry::paginate(5);
        return view('guestbook.unapproved', compact('entries'));
    }
}