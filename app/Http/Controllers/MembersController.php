<?php

namespace App\Http\Controllers;

use App\Member;
use App\Sector;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!auth()->user()->role == 'admin') {
            return redirect('/home')->with('message', 'you are not  authorised to view this page');
        }
        $members = Member::with('sector')->get();

        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectors = Sector::all();

        return view('members.create', compact('sectors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file("logo");
        $member = New Member;
        $member->fill($request->except('logo'));
        $member->logo = self::upload_pic($image);
        $member->save();

        return redirect()->route('members.links', $member->id);
    }

    public function AddLinks($id)
    {
        $member = Member::find($id);

        return view('members.links', compact('member'))->with('success', 'member saved successfully');
    }

    public function approve($id)
    {
        $member = Member::find($id);
        $member->approved = true;
        $member->save();

        return back()->with('success', 'member saved approved and published');
    }

    public function SaveLinks($id, Request $request)
    {
        $member = Member::find($id);
        $member->website = $request->get('website');
        $member->facebook = $request->get('facebook', null);
        $member->twitter = $request->get('twitter', null);
        $member->google_plus = $request->get('google_plus', null);
        $member->save();

        return redirect()->route('thank.you');
    }

    private function upload_pic($i)
    {
        $fileName = time() . '-' . $i->getClientOriginalName();
        $destination = public_path() . '/uploads/';
        $i->move($destination, $fileName);
        $path = '/uploads/' . $fileName;

        return $path;
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
