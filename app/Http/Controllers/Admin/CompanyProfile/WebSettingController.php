<?php

namespace App\Http\Controllers\Admin\CompanyProfile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ambil semua data
        $item = Banner::findOrFail($id);
        return view('pages.admin.cp.banner.form-setting', [
            'item' => $item
        ]);
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
        // insert semuanya jika sudah divalidasi oleh ProductRequest
        $data = $request->all();
        // cari data
        $item = Banner::findOrFail($id);
        // cek gambar
        if ($request->file('image')) {
            unlink('storage/' . $item->image);
            $data['image'] = $request->file('image')->store(
                'assets/image/banner',
                'public'
            );
        } else {
            $data['image'] = $item->image;
        }

        if (!isset($data['status'])) {
            $data['status'] = 0;
        }
        // update data
        $item->update($data);
        return redirect()->route('banners.index');
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
}
