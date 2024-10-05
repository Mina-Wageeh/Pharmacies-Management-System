<?php

namespace App\Http\Controllers;

use App\DataTables\PharmaciesDataTable;
use App\Models\Branch;
use App\Models\Pharmacy;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BranchController extends Controller
{
    public function index()
    {
        $branches = Branch::get();
        return view('branch.index' , compact('branches'));
    }

    public function create()
    {
        return view('branch.create');
    }

    public function store(Request $request)
    {


        Branch::create
        ([
          'name' => $request->branch_name,
          'phone' => $request->branch_phone,
          'address' => $request->branch_address,
        ])->save();

        return redirect()->route('branch.index')->with('success', 'Pharmacy has been Created Successfully!')->with('timeout', 5000);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        if($post)
        {
            return view('posts.edit' , compact('post'));
        }
    }

    public function update(Request $request , $id)
    {
        $post = Post::find($id);
        if($post)
        {
            $post -> update
            ([
                'description' => $request -> description,
            ]);
            return redirect() -> route('posts.index');
        }
    }
//
    public function delete(Request $request)
    {
        $post = Post::find($request -> post_id);

        if($post)
        {
            $delete = $post -> delete();
            if($delete)
            {
                $posts_count = Post::count();
                return response() -> json(['status' => 'ok' , 'posts_count' => $posts_count]);
            }
        }
    }

    public function deleteNotAjax($id)
    {
        $post = Post::find($id);

        if($post)
        {
            $delete = $post -> delete();
            if($delete)
            {
                return redirect() -> route('posts.index');
            }
        }
    }

    public function deleteAll()
    {
        Post::select('*') -> delete();
        $posts_count = Post::count();
        return response() -> json(['status' => 'ok' , 'posts_count' => $posts_count]);
    }
}
