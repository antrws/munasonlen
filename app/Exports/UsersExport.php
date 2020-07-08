<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function map($user): array
    {
        return [
            $user->name,
            $user['biodata']['nim'],
            $user->email,
            $user->kontak,
            $user['biodata']['ttl'],
            $user['biodata']['jk'],
            $user['biodata']['alamat'],
            $user['biodata']['jurusan'],
            $user['biodata']['prodi'],
            $user['biodata']['perguruan'],
        ];
    }
    public function headings(): array
    {
        return [
            'Nama',
            'Nim',
            'Email',
            'Kontak',
            'Tanggal Lahir',
            'Jenis Kelamin',
            'Alamat',
            'Jurusan',
            'Prodi',
            'Perguruan',
        ];
    }
}
