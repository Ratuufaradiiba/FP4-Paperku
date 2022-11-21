<?php

namespace App\Exports;

use App\Models\Jurnal;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class jurnalExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $ar_jurnal = DB::table('jurnal')
        ->join('profile', 'profile.id', '=', 'jurnal.id_profile')
        ->join('kategori', 'kategori.id', '=', 'jurnal.id_kategori')
        ->select('profile.nama','jurnal.judul','jurnal.ket','kategori.nama_kategori',)
        ->get();
        return $ar_jurnal;
        
    }
    public function headings(): array
    {
        return ["nama", "judul", "keterangan", "Kategori"];
    }
}
