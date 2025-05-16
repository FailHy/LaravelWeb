<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Pengguna;

class StorePenggunaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:penggunas',
            'password' => 'required|min:6|confirmed',
            'phone' => 'nullable|numeric|digits_between:10,13',
            'file_upload' => 'required|file|mimes:jpg,jpeg,png,HEIC,pdf|max:2048'
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'Nama Diisi Kocak',
        'email.unique' => 'Email Juga Diisi',
        'password.required' => 'Password Lu Mana',
        'password.min' => 'Password minimal 6 karakter, Masa iya cuma segitu?',
        'password.confirmed' => 'Password konfirmasi tidak cocok, Fokus dong!',
        'phone.numeric' => 'Nomor Telepon Harus Angka bukan tanda',
        'phone.digits_between' => 'Nomor Telepon Harus Nomor Lu Bukan Nomor Tukang WC',
        'file_upload.required' => 'File Upload Harus Diisi',
        'file_upload.file' => 'File Upload Harus File',
        'file_upload.mimes' => 'File Upload Harus JPG, JPEG, PNG',
        'file_upload.max' => 'File Upload Maksimal 2MB, Lu mau upload apa?',
        'file_upload.uploaded' => 'File Upload Gagal Diupload, Coba Lagi Nanti',
        'file_upload.image' => 'File Upload Harus Gambar, Bukan File Lain'
    ];
}
}
