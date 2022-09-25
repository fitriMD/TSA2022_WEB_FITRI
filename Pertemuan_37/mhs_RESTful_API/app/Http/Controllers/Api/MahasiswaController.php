<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Traits\ApiResponse;
use App\Http\Requests\MahasiswaRequest;


class MahasiswaController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        $mahasiswa = Mahasiswa::with('user')
            ->where('Nim', $user->id)
            ->get();

        return $this->apiSuccess($mahasiswa);
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
    public function store(MahasiswaRequest $request)
    {
        $request->validated();

        $user = auth()->user();
        $mahasiswa = new Mahasiswa($request->all());
        $mahasiswa->user()->associate($user);
        $mahasiswa->save();

        return $this->apiSuccess($mahasiswa->load('user'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return $this->apiSuccess($mahasiswa->load('user'));

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
    public function update(MahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        $request->validated();
        $mahasiswa->Nim = $request->Nim;
        $mahasiswa->Nama = $request->Nama;
        $mahasiswa->Jurusan = $request->Jurusan;
        $mahasiswa->No_Handphone = $request->No_Handphone;
        $mahasiswa->Email = $request->Email;
        $mahasiswa->Tanggal_lahir = $request->Tanggal_lahir;
        $mahasiswa->kelas_id = $request->get('Kelas');

        $kelas = new Kelas;
        $kelas->id = $request->get('Kelas');


        $mahasiswa->save();
        return $this->apiSuccess($mahasiswa->load('user'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        if(auth()->user()->id == $mahasiswa->user_id){
            $mahasiswa->delete;
            return $this->apiSuccess($mahasiswa);
        }

        return $this->apiError(
            'Unauthorized',
            Response::HTTP_UNAUTHORIZED
        );
    }
}
