<?php

namespace App\Exports;

use App\Models\Administrasi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AdministrasiExport implements FromView, ShouldAutoSize
{

  public function view(): View
  {
    $data = Administrasi::orderBy("id", "ASC")->get();
    return view('administrasi.export', compact('data'));
  }
}
