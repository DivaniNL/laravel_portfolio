<?php
use Illuminate\Support\Facades\Input;
namespace App\Http\Controllers;
use Validator, Redirect, Response;
use App\Models\Werk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $werken = Werk::orderBy('created_at', 'desc')->get();
        return view('projects', compact('werken'));
        

    }
    public function desc($id)
    {
        $werk = Werk::find($id);
        return view('/description', compact('werk'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('werken.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([ 
            'title'=>'required', 
            'description'=>'required',
            'url'=>'required',
            'file'=>'required',
        ]);

        $werk = new Werk([
            'title'=> $request->get('title'), 
            'description'=> $request->get('description'),
            'url'=> $request->get('url'),
            'file'=> $request->file('file')->getClientOriginalName(),
        ]);
        $request->file->storeAs('images', $request->file->getClientOriginalName());
        $werk->save();
        return redirect('/werken')->with('success', 'Werk opgeslagen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return __METHOD__ . ':' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $werk = Werk::find($id);
        return view('werken.edit', compact('werk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        {
        $request->validate([
            'title'=>'required',
            'description'=>'required', 
            'url'=>'required', 
            'file'=>'required', 
        ]);

        $werk = Werk::find($id);
        $werk->title = $request->get('title'); 
        $werk->description = $request->get('description'); 
        $werk->file = $request->get('file'); 
        $werk->url = $request->get('url');

        
        $werk->save();
        return redirect('/werken.addimage')->with('success', 'Werk updated!'); }
        }
        

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        {
            $werk = Werk::find($id); $werk->delete();
            return redirect('/werken')->with('success', 'Werk deleted!');
        }
    }
}
