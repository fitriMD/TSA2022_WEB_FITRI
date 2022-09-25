<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class MahasiswaRequest extends ApiRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->method() == Request::METHOD_POST){
            return true;
        }
        $mahasiswa = $this->route('todo');
        return auth()->user()->id == $mahasiswa->NIM;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'NIM' => 'required|int|max:11',
            'Nama' => 'required|string|max:255',
            'Jurusan' => 'required|string|max:255',
            'No_Handphone' => 'required|string|max:255',
            'Email' => 'required|string|email|max:255|unique:users',
            'Tanggal_lahir' => 'required|date',
            'kelas_id ' => 'required|int|max:20',

        ];
    }
}
