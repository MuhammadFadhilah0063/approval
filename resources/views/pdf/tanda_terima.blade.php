<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="data:image/png;base64,{{ base64_encode(file_get_contents('assets/img/ppa.ico')) }}" rel="icon"
    type="image/png">
  <title>{{ $title }}</title>

  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      background-color: transparent !important;
    }

    .page-break {
      page-break-after: always;
    }

    .wrap {
      margin-top: 30px;
    }

    table {
      margin-left: 50px;
      padding-right: 50px;
      padding-left: 50px;
      font-size: 13px;
    }

    .title {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .td-first {
      width: 80px;
    }

    .td-second {
      width: 10px;
    }

    .td-third {
      width: 450px;
    }

    /* CSS untuk membuat garis titik pada elemen p */
    /* span.dotted {
      border-bottom: 1px dotted black;
    } */

    /* Isi End */
  </style>
</head>

<body>
  <div class="body">
    <div class="wrap">
      <div class="text-center title">
        <p>{{ $title }}</p>
        <p style="margin-top: -10px;">TANDA TERIMA</p>
      </div>

      <div class="row" style="margin-top: 0px;">
        <table>
          <tr>
            <td colspan="3" style="padding-bottom: 10px;">Yang bertanda tangan di bawah ini:</td>
          </tr>

          <tr>
            <td class="td-first">Nama</td>
            <td class="td-second">:</td>
            <td class="td-third">{{ $data->nama }}</td>
          </tr>
          <tr>
            <td class="td-first">NRP</td>
            <td class="td-second">:</td>
            <td>{{ $data->nrp }}</td>
          </tr>
          <tr>
            <td class="td-first">Jabatan</td>
            <td class="td-second">:</td>
            <td>{{ $data->jabatan }}</td>
          </tr>
          <tr>
            <td class="td-first">Departemen</td>
            <td class="td-second">:</td>
            <td>{{ $data->departemen }}</td>
          </tr>

          <tr>
            <td colspan="3" style="padding-top: 15px; padding-bottom: 30px;">Dengan ini menyatakan bahwa saya telah
              menerima dan memahami
              seluruh Peraturan Perusahaan
              Periode 2024-2026.</td>
          </tr>
          <tr>
            <td colspan="3" style="padding: 0;">
              Hati'if,<span class="dotted">&nbsp;&nbsp;{{ $tgl }}&nbsp;&nbsp;</span>
            </td>
          </tr>

          {{-- TTD --}}
          <tr>
            <td colspan="3">
              @if ($ttd)
              <img height="150px;" src="data:image/png;base64, {{ base64_encode(base64_decode($ttd)) }}">
              @else
              <br>
              <br>
              <br>
              <br>
              @endif
            </td>
          </tr>
          <tr>
            <td colspan="3">
              <hr style="margin: 0; padding: 0; width: 180px; border-bottom: 1px solid black;">
            </td>
          </tr>
          <tr>
            <td colspan="3">{{ $data->nama }}</td>
          </tr>

          <tr>
            <td colspan="3" style="padding-top: 30px;">
              Note : Setelah tanda terima ini ditandatangani agar dikembalikan ke HCGA.
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</body>

</html>