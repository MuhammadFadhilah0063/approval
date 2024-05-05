<table style="border-collapse: collapse; width: 100%;">
  <thead>
    <tr>
      <th colspan="8" style="text-align: center;">
        <h1>ADMINISTRASI</h1>
      </th>
    </tr>
    <tr>
      <th></th>
    </tr>
    <tr>
      <th style="text-align: center; border: 1px solid black;">No.</th>
      <th style="text-align: center; border: 1px solid black;">NRP</th>
      <th style="text-align: center; border: 1px solid black;">Nama</th>
      <th style="text-align: center; border: 1px solid black;">Departemen</th>
      <th style="text-align: center; border: 1px solid black;">Jabatan</th>
      <th style="text-align: center; border: 1px solid black;">Perusahaan</th>
      <th style="text-align: center; border: 1px solid black;">Tanggal Penandatanganan</th>
      <th style="text-align: center; border: 1px solid black;">Status Arsip</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $item)
    <tr>
      <td style="text-align: center; border: 1px solid black;">{{ $loop->iteration }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->nrp }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->nama }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->departemen }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->jabatan }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->perusahaan }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->tgl }}</td>
      <td style="text-align: center; border: 1px solid black;">{{ $item->status_arsip }}</td>
    </tr>
    @endforeach
  </tbody>
</table>