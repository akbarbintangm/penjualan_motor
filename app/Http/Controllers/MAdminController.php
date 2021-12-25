<?php

namespace App\Http\Controllers;

use App\Models\MAdmin;
use App\Models\MDAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = DB::table('m_admins')
            ->join('m_d_admins', 'm_d_admins.id_m_admins', 'm_admins.id_m_admins')
            ->select('m_admins.*')
            ->orderBy('m_admins.created_at', 'DESC')->get();
        return view('master.admin.index', compact('admin'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_m_admins' => 'required',
            'username_m_admins' => 'required',
            'email_m_admins' => 'required',
            'password_m_admins' => 'required',
            'profile_m_admins' => 'required',
            'role_m_admins' => 'required'
        ],[
            'nama_m_admins.required' => 'The Nama field is required',
            'username_m_admins.required' => 'The Username field is required',
            'email_m_admins.required' => 'The Email field is required',
            'password_m_admins.required' => 'The Password field is required',
            'profile_m_admins.required' => 'The Profile field is required',
            'role_m_admins.required' => 'The Role field is required'
        ]);
        if ($validator->fails()) {
            return redirect('master.admin.create')->withErrors($validator)->withInput();
        }
        else {
            DB::table('m_admins')
            ->insert([
                'nama_m_admins' => $request->nama_m_admins,
                'username_m_admins' => $request->username_m_admins,
                'email_m_admins' => $request->email_m_admins,
                'password_m_admins' => $request->password_m_admins,
                'profile_m_admins' => $request->profile_m_admins,
                'role_m_admins' => $request->role_m_admins
            ]);
            return redirect('master.admin.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MAdmin  $mAdmin
     * @param  \App\Models\MDAdmin  $mDAdmin
     * @return \Illuminate\Http\Response
     */
    public function show($id, MAdmin $mAdmin, MDAdmin $mDAdmin)
    {
        $dataAdmin = [
            'm_admins' => DB::table('m_admins')->where('id_m_admins', '=', $id)->first(),
            'm_d_admins' => DB::table('m_d_admins')->where('id_m_admins', '=', $id)->orderBy('id_m_admins', 'ASC')->get(),
        ];
        return view('master.admin.detail', compact('dataAdmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MAdmin  $mAdmin
     * @param  \App\Models\MDAdmin  $mDAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit($id, MAdmin $mAdmin, MDAdmin $mDAdmin)
    {
        $dataAdmin = [
            'm_admins' => DB::table('m_admins')->where('id_m_admins', '=', $id)->first(),
            'm_d_admins' => DB::table('m_d_admins')->where('id_m_admins', '=', $id)->orderBy('id_m_admins', 'ASC')->get(),
        ];
        return view('master.admin.edit', compact('dataAdmin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MAdmin  $mAdmin
     * @param  \App\Models\MDAdmin  $mDAdmin
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request, MAdmin $mAdmin, MDAdmin $mDAdmin)
    {
        $validator = Validator::make($request->all(), [
            'nama_m_admins' => 'required',
            'username_m_admins' => 'required',
            'email_m_admins' => 'required',
            'password_m_admins' => 'required',
            'profile_m_admins' => 'required',
            'role_m_admins' => 'required'
        ],[
            'nama_m_admins.required' => 'The Nama field is required',
            'username_m_admins.required' => 'The Username field is required',
            'email_m_admins.required' => 'The Email field is required',
            'password_m_admins.required' => 'The Password field is required',
            'profile_m_admins.required' => 'The Profile field is required',
            'role_m_admins.required' => 'The Role field is required'
        ]);
        if ($validator->fails()) {
            return redirect('master.admin.create')->withErrors($validator)->withInput();
        }
        else {
            DB::table('m_admins')
            ->where('id_m_admins', '=', $id)
            ->update([
                'nama_m_admins' => $request->nama_m_admins,
                'username_m_admins' => $request->username_m_admins,
                'email_m_admins' => $request->email_m_admins,
                'password_m_admins' => $request->password_m_admins,
                'profile_m_admins' => $request->profile_m_admins,
                'role_m_admins' => $request->role_m_admins
            ]);
            /* DB::table('m_d_admins')
            ->insert([
                'id_m_admins' => $id,
                'ktp_m_d_admins' => $request->ktp_m_d_admins,
                'nomor_m_d_admins' => $request->nomor_m_d_admins,
                'alamat_m_d_admins' => $request->alamat_m_d_admins,
            ]); */
            return redirect('master.admin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MAdmin  $mAdmin
     * @param  \App\Models\MDAdmin  $mDAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, MAdmin $mAdmin, MDAdmin $mDAdmin)
    {
        DB::table('m_admins')->where('id_m_admins', $id)->delete();
        DB::table('d_m_admins')->where('id_m_admins', $id)->delete();
        return view('master.admin.index');
    }
}
