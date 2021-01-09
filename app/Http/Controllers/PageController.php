<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function show(){
        $pages = Page::all();
        
        return view('content.page', compact('pages') );
    }


    public function create( Request $request ){

        function test($request, $page) {
            $page->judul = $request->judul;
            $page->jumlah_pembaca = $request->jumlah_pembaca;
            $page->save();
        }

        $page = new Page;
        test($request, $page);

        return redirect('/home');
    }

    public function delete($id){
        $page = Page::find($id);
        $page->delete();
        return redirect('/home');
    }

    public function update($id, Request $request){
        // dd($id, $request->judul, $request->jumlah_pembaca);
        $page = Page::find($id);
        $page->judul = $request->judul;
        $page->jumlah_pembaca = $request->jumlah_pembaca;
        $page->save();
        return redirect('/home');

    }

    

}
