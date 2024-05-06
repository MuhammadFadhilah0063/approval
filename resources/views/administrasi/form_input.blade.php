<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Approval</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="/assets/img/ppa.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="/assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['/assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/atlantis.min.css">

  {{-- Jquery Signature --}}
  <link rel="stylesheet" type="text/css" href="/assets/css/jquery.signature.css">
</head>

<body>
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue" style="background-color: #1169DB !important;">
        <a href="" class="logo">
          <div class="avatar-sm text-center" style="margin-bottom: 20px;">
            <img src="/assets/img/icon.png" alt="logo" class="avatar-img rounded-circle">
          </div>
        </a>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <div class="main-panel">
      <div class="content">
        <div class="panel-header bg-primary-gradient">
          <div class="page-inner text-center py-5">
            <h2 class="text-white pb-2 fw-bold h1">Tanda Terima Peraturan Perusahaan</h2>
          </div>
        </div>

        <div class="page-inner mt--5">
          <div class="row justify-content-center">
            <div class="col" style="max-width: 590px;">
              <div class="card">
                <div class="card-body">
                  @if (session()->has("gagal"))
                  <div class="alert alert-danger" role="alert">
                    {{ session("gagal") }}
                  </div>
                  @endif

                  <span style="display: block; margin-left: 8px;">Silahkan mengisi data dibawah.</span>

                  <form action="" method="POST">
                    @csrf
                    <div class="row mt-3">
                      <div class="col">
                        <div class="form-group">
                          <label for="nrp">NRP Karyawan</label>
                          <input type="text" class="form-control" id="nrp" name="nrp" placeholder="NRP Karyawan"
                            required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="nama">Nama Karyawan</label>
                          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Karyawan"
                            required>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="departemen">Departemen</label>
                          <select name="departemen" id="departemen" class="form-control select3" required>
                            <option value="">Pilih Departemen</option>
                            <option value="PRODUKSI">PRODUKSI</option>
                            <option value="PLANT">PLANT</option>
                            <option value="ENGINEERING">ENGINEERING</option>
                            <option value="COE">COE</option>
                            <option value="FA & LOGISTIK">FA & LOGISTIK</option>
                            <option value="SHE">SHE</option>
                            <option value="HCGA">HCGA</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="jabatan">Jabatan</label>
                          <select name="jabatan" id="jabatan" class="form-control" required>
                            <option value="">Pilih Jabatan</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="perusahaan">Perusahaan</label>
                          <select name="perusahaan" id="perusahaan" class="form-control" required>
                            <option value="">Pilih Perusahaan</option>
                            <option value="PT. PPA">PT. PPA</option>
                            <option value="PT. AMM">PT. AMM</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <div class="form-group">
                          <label for="ttd">Tanda Tangan</label>
                          <div>
                            <div id="sig" class="d-flex mb-2" style="height: 170px"></div>
                            <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                            <textarea id="signature64" name="ttd" style="display: none"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row mt-3">
                      <div class="col">
                        <div class="form-check d-flex">
                          <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="check" value="" required>
                            <span class="form-check-sign" style="font-size: 13px;"></span>
                          </label>

                          <span>
                            Saya telah menerima dan memahami isi tanda terima Peraturan perusahaan 2024-2026 dengan
                            seksama, dan mengetahui isinya.
                          </span>
                        </div>
                      </div>
                    </div>

                    <div class="text-center mt-3">
                      <button class="btn btn-primary fw-bold btn-simpan" type="submit" disabled>Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class="text-center">
          2024, made with <i class="fa fa-heart heart text-danger"></i>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="/assets/js/core/jquery.3.2.1.min.js"></script>
  <script src="/assets/js/core/popper.min.js"></script>
  <script src="/assets/js/core/bootstrap.min.js"></script>

  <!-- jQuery UI -->
  <script src="/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
  <script src="/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

  <!-- jQuery Scrollbar -->
  <script src="/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

  {{-- Jquery Signature --}}
  <script type="text/javascript" src="/assets/js/jquery.signature.min.js"></script>

  <!-- Atlantis JS -->
  <script src="/assets/js/atlantis.min.js"></script>

  <script>
    $(document).ready(function()  {

      // Signature
      var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG', background:'transparent'});
      $('#clear').click(function(e) {
          e.preventDefault();
          sig.signature('clear');
          $("#signature64").val('');
      });

      // Checkbox
      $(`input[name="check"]`).on("click", function() {
        if($(this).is(':checked')){
            $('.btn-simpan').removeAttr('disabled');
        } else {
            $('.btn-simpan').attr('disabled', 'disabled');
        }
      });

      // Select Jabatan
      $("#departemen").on("change", function() {

        var departemen = $(this).val();
        var jabatanSelect = $("#jabatan");

        // Kosongkan Option Select Jabatan
        jabatanSelect.empty();
        jabatanSelect.append("<option value="">Pilih Jabatan</option>");

        // Inisiasi jabatan sesuai departemen
        if (departemen === 'PRODUKSI') {
            var jabatans = ['PRODUCTION SECTION HEAD', 'OPERATOR DT 30 - 50', 'PRODUCTION GL', 'OPERATOR HD 785', 'OPERATOR GD 825', 'PRODUCTION GL (ACT)', 'PRODUCTION SECTION HEAD (ACT)', 'PIT SERVICE GL', 'OPERATOR D155', 'OPERATOR HD 465', 'OPERATOR BW 211D', 'MANPOWER GL', 'OPERATOR PC 2000', 'OPERATOR PC 1250', 'HRM SECTION HEAD (ACT)', 'PRODUCTION DEPT HEAD', 'DRILL & BLAST GL', 'OPERATOR DT 20T', 'OPERATOR CAT 777', 'OPERATOR WATER TRUCK', 'OPERATOR DT 20', 'OPERATOR D85', 'OPERATOR GD 705', 'OPERATOR PC 500', 'OPERATOR PC 200', 'OPERATION INSTRUCTOR', 'DRILL & BLAST SECTION HEAD (ACT)', 'OPERATOR A2B'];

        } else if (departemen === 'PLANT') {
            var jabatans = ['MECHANIC WHEEL', 'PLANT WHEEL EQUIPMENT GL', 'PLANT FABRICATION GL', 'PLANT ADMIN', 'MECHANIC TRACK', 'OPERATOR MANITOU', 'OPERATOR LUBE TRUCK', 'TYRE MAN', 'PLANT TRACK EQUIPMENT SECTION HEAD', 'WELDER', 'PLANT SUPPORT EQUIPMENT GL', 'OPERATOR CT 50T', 'MECHANIC SUPPORT', 'PLANT DEPT HEAD', 'PLANT TRACK EQUIPMENT GL', 'PLANT FABRICATION GL (ACT)', 'PLANT HEAVY EQUIPMENT GL', 'PLANT ENGINEER GL', 'PLANT FABRICATION SECTION HEAD', 'PLANT PEOPLE DEVELOPMENT GL', 'PLANT TRACK EQUIPMENT GL (ACT)', 'PLANT SUPPORT EQUIPMENT SECTION HEAD (ACT)', 'PLANT WHEEL EQUIPMENT GL (ACT)', 'OPERATOR WATER TRUCK', 'OPERATOR LOWBOY', 'OPERATOR CT 10T', 'OPERATOR FORKLIFT', 'PLANT GL', 'PLANT PLANNER GL', 'PLANT TYRE GL', 'PLANT SUPPORT EQUIPMENT GL (ACT)', 'PLANT SUPPORT EQUIPMENT SECTION HEAD', 'PLANT TYRE SECTION HEAD', 'PLANT TRACK EQUIPMENT SECTION HEAD (ACT)', 'OPERATOR MERLO', 'PLANT ENGINEER GL (ACT)', 'PLANT TYRE GL (ACT)', 'PLANT WHEEL EQUIPMENT SECTION HEAD', 'PLANT ENGINEER SECTION HEAD', 'PLANT PEOPLE DEVELOPMENT SECTION HEAD', 'PLDP PLANT'];

        } else if (departemen === 'HCGA') {
            var jabatans = ['RECRUITMENT & DEVELOPMENT GL', 'GENERAL SERVICE GL', 'CHIEF SECURITY', 'SECURITY', 'GENERAL AFFAIRS SECTION HEAD', 'COMBEN ADMIN', 'TRANSPORTATION GL', 'GENERAL SERVICE GL (ACT)', 'GA ELECTRICIAN', 'CORPORATE SOCIAL RESPONSIBILITY GL', 'COMPENSATION & BENEFIT GL', 'INDUSTRIAL RELATION GL', 'HUMAN CAPITAL SECTION HEAD', 'PLDP HCGA', 'HCGA DEPT HEAD', 'RECRUITMENT & DEVELOPMENT GL (ACT)'];

        } else if (departemen === 'SHE') {
            var jabatans = ['K3P SECTION HEAD', 'K3P GL', 'SHE DEPT HEAD', 'SHE ADMIN', 'EMERGENCY RESPONSE CREW', 'SHE HELPER', 'KOP SECTION HEAD', 'KOP GL', 'EMERGENCY RESPONSE GL (ACT)', 'K3P SECTION HEAD (ACT)', 'PARAMEDIC', 'EMERGENCY RESPONSE GL', 'SHE GL', 'ENVIRONMENT GL', 'DOCTOR', 'PLDP SHE'];

        } else if (departemen === 'COE') {
            var jabatans = ['ICT GL', 'OPERATION DISPATCH GL', 'CENTER OF EXCELLENCE SECTION HEAD', 'DATA PROCESSOR', 'CENTER OF EXCELLENCE SECTION HEAD (ACT)', 'MANAGEMENT DEVELOPMENT GL', 'SYSTEM DEVELOPER', 'ICT GL (ACT)', 'DISPATCH ANALYST GL', 'ICT TECHNICIAN', 'DISPATCH ANALYST GL (ACT)', 'PLDP COE'];

        } else if (departemen === 'ENGINEERING') {
            var jabatans = ['MINE PLAN SECTION HEAD', 'MINE PLAN GL', 'SURVEY GL', 'PIT CONTROL GL', 'MINE PLAN SECTION HEAD (ACT)', 'ENGINEERING DEPT HEAD', 'SURVEY SECTION HEAD', 'SURVEY SECTION HEAD (ACT)', 'MINEPLAN DRAFTER', 'SURVEY DRAFTER', 'CIVIL ENGINEER GL', 'DRILL & BLAST ENGINEER GL', 'GEOTECHNOLOGY & DEVELOPMENT ENGINEER GL', 'PLDP ENGINEERING', 'SURVEY INSTRUMENT MAN'];

        } else if (departemen === 'FA & LOGISTIK') {
            var jabatans = ['FUEL ADMIN', 'FUEL GL', 'OPERATOR FUEL TRUCK', 'FALOG DEPT HEAD', 'FUEL MAN', 'LOGISTIC GL', 'LOGISTIC ADMIN', 'LOGISTIC GL (ACT)', 'FUEL GL (ACT)', 'FINANCE & ACCOUNTING SECTION HEAD (ACT)', 'PURCHASING ADMIN', 'LOGISTIC SECTION HEAD (ACT)', 'PURCHASING GL', 'FINANCE & ACCOUNTING GL', 'PURCHASING GL (ACT)', 'PLDP FALOG', 'FINANCE & ACCOUNTING GL (ACT)'];
        }

        // Loop jabatan dan append ke select jabatan
        jabatans.forEach(function(jabatan) {
          jabatanSelect.append(`<option value="${jabatan}">${jabatan}</option>`);
        });
      });

    });
  </script>
</body>

</html>