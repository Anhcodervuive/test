<?php

namespace App\Http\Controllers;

use App\Mail\CreateChirp;
use App\Models\Chirp;
use App\Models\ChirpGuest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class ChirpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        //
        return view('chirps.index');
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
        //  : RedirectResponse
        // $validated = $request->validate([
        //     'message' => 'required|string|max:255',
        // ]);

        // $request->user()->chirps()->create($validated);

        // $chirp = new Chirp($validated);

        // Mail::to($request->user())->send(new CreateChirp($chirp));

        // return redirect(route('chirps.index'));

        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);

        $example = new ChirpGuest(1, $validated['message']);

        $example2 = new ChirpGuest(2, $validated['message'] . '2');

        

        $exampleArr = [
            $example,
            $example2,
        ];

        $request->session()->put('exampleArr', $exampleArr);

        // $chirps = session('exampleArr');
        // echo($chirps[0]->message);
        // echo($chirps[1]->message);
        return view('chirps.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Chirp $chirp)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        //
    }
}
