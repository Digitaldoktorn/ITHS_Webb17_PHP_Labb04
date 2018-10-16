<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Media;
use Illuminate\Support\Facades\Gate;
class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {

    //   $media = Media::orderBy('title', 'asc')->paginate(20);
    //   return view('media.index', ['media' => $media ]);

    // }

    public function loggedIn() {
        if (Gate::allows('logged-in-only', auth()->user())){
            $media = Media::all();
            return view('media.index', [
                'media' => $media
            ]);
        }
        return 'You are not logged in!';
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('media.create');//return view('movies.create');//
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      $this->validate($request, [
      'title' => 'required',
      'author' => 'required',
      'genre' => 'required',
      'ISBN' => 'required'
      ]);

      Media::create($request->all());
      return redirect('media');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Media $medium)
    {

      return view('media.show', ['medium' => $medium ]);

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    /*public function mbq ($firstYear, $lastYear) {
    $movies = Movie::mbq($firstYear, $lastYear);
    return view('moviesByQuery', $movies);
  }*/
}
