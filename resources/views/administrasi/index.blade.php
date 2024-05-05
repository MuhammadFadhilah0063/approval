<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Approval</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="/assets/img/ppa.ico" type="image/x-icon" />

  {{-- CSRF --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

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

  {{-- Custom CSS --}}
  <style>
    .btn-export:focus {
      color: white;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="blue" style="background-color: #1169DB !important;">
        <a href="/data-administrasi" class="logo">
          <div class="avatar-sm text-center" style="margin-bottom: 20px;">
            <img src="/assets/img/icon.png" alt="logo" class="avatar-img rounded-circle">
          </div>
        </a>
        <button type="button" class="topbar-toggler more btn-vertical"><i class="icon-options-vertical"></i></button>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item dropdown hidden-caret">
              <a class="dropdown-toggle profile-pic" data-toggle="dropdown" aria-expanded="false">
                <div class="avatar-sm">
                  <img src="/assets/img/user.jpg" alt="image profile" class="avatar-img rounded-circle">
                </div>
              </a>
              <ul class="dropdown-menu dropdown-user animated fadeIn">
                <div class="dropdown-user-scroll scrollbar-outer">
                  <li>
                    <div class="user-box">
                      <div class="avatar-lg"><img src="/assets/img/user.jpg" alt="image profile"
                          class="avatar-img rounded"></div>
                      <div class="u-text">
                        <h4>Master</h4>
                        <div class="dropdown-divider"></div>
                        <button type="button" class="btn btn-xs btn-secondary btn-sm btn-change-password"
                          data-toggle="modal" data-target="#modalChangePassword">
                          Ubah Password
                        </button>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/logout">Logout</a>
                  </li>
                </div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <div class="main-panel">
      <div class="content">
        <div class="panel-header bg-primary-gradient">
          <div class="page-inner text-center py-5">
            <h2 class="text-white pb-2 fw-bold h1">Data Administrasi</h2>
          </div>
        </div>

        <div class="page-inner mt--5">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">
                    <button class="btn-filter btn btn-sm fw-bold btn-primary" data-toggle="modal"
                      data-target="#modalFilter">Filter</button>
                  </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="tableData" class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>NO</th>
                          <th>NRP</th>
                          <th>NAMA</th>
                          <th>DEPARTEMEN</th>
                          <th>JABATAN</th>
                          <th>PERUSAHAAN</th>
                          <th>TANGGAL PENANDATANGANAN</th>
                          <th>REVIEW FILE</th>
                          <th>STATUS ARSIP</th>
                          <th>AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="/export/pdf" target="_blank" class="btn fw-bold btn-secondary btn-export">Export Excel</a>
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

  <!-- Modal Filter -->
  <div class="modal fade" id="modalFilter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h2 fw-bold" id="exampleModalLabel">Filter Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="filter_nrp" class="pb-1 fw-bold">NRP</label>
                <select data-column="1" name="filter_nrp" id="filter_nrp" class="form-control selectCanvas">
                  <option value="">Pilih NRP</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row pt-0">
            <div class="col">
              <div class="form-group">
                <label for="filter_nama" class="pb-1 fw-bold">Nama</label>
                <select data-column="2" name="filter_nama" id="filter_nama" class="form-control selectCanvas">
                  <option value="">Pilih Nama</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row pt-0">
            <div class="col">
              <div class="form-group">
                <label for="filter_departemen" class="pb-1 fw-bold">Departemen</label>
                <select data-column="3" name="filter_departemen" id="filter_departemen"
                  class="form-control selectCanvas">
                  <option value="">Pilih Departemen</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row pt-0">
            <div class="col">
              <div class="form-group">
                <label for="filter_jabatan" class="pb-1 fw-bold">Jabatan</label>
                <select data-column="4" name="filter_jabatan" id="filter_jabatan" class="form-control selectCanvas">
                  <option value="">Pilih Jabatan</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row pt-0 pb-2">
            <div class="col">
              <div class="form-group">
                <label for="filter_perusahaan" class="pb-1 fw-bold">Perusahaan</label>
                <select data-column="5" name="filter_perusahaan" id="filter_perusahaan"
                  class="form-control selectCanvas">
                  <option value="">Pilih Perusahaan</option>
                  <option value="PT. PPA">PT. PPA</option>
                  <option value="PT. AMM">PT. AMM</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row pt-0 pb-2">
            <div class="col">
              <div class="form-group">
                <label for="filter_tgl" class="pb-1 fw-bold">Tanggal Tanda Tangan</label>
                <select data-column="6" name="filter_tgl" id="filter_tgl" class="form-control selectCanvas">
                  <option value="">Pilih Tanggal</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row pt-0 pb-2">
            <div class="col">
              <div class="form-group">
                <label for="filter_status_arsip" class="pb-1 fw-bold">Status Arsip</label>
                <select data-column="8" name="filter_status_arsip" id="filter_status_arsip"
                  class="form-control selectCanvas">
                  <option value="">Pilih Status</option>
                  <option value="SELESAI">SELESAI</option>
                  <option value="BELUM">BELUM</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Change Password -->
  <div class="modal fade" id="modalChangePassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h2 fw-bold" id="exampleModalLabel">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class="pb-1 fw-bold">Password Lama</label>
                <input type="text" class="form-control" name="password_lama">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="password_baru" class="pb-1 fw-bold">Password Baru</label>
                <input type="text" class="form-control" id="password_baru" name="password_baru" required>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary btn-change-password"
            data-id="{{ Auth::user()->id }}">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Edit Data -->
  <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title h2 fw-bold" id="exampleModalLabel">Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class="pb-1 fw-bold">NRP</label>
                <input type="text" class="form-control" name="nrp">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label for="nama" class="pb-1 fw-bold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class="pb-1 fw-bold">Departemen</label>
                <input type="text" class="form-control" name="departemen">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class="pb-1 fw-bold">Jabatan</label>
                <input type="text" class="form-control" name="jabatan">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="form-group">
                <label class="pb-1 fw-bold">Perusahaan</label>
                <select class="form-control" name="perusahaan">
                  <option value="PT. PPA">PT. PPA</option>
                  <option value="PT. AMM">PT. AMM</option>
                </select>
              </div>
            </div>
          </div>

          {{-- TTD --}}
          <div class="row d-none ttd">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" class="btn btn-primary btn-update" data-id="">Simpan</button>
        </div>
      </div>
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

  <!-- Datatables -->
  <script src="/assets/js/plugin/datatables/datatables.min.js"></script>

  <!-- Bootstrap Notify -->
  <script src="/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

  <!-- Sweet Alert -->
  <script src="/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

  <!-- Atlantis JS -->
  <script src="/assets/js/atlantis.min.js"></script>

  {{-- Jquery Signature --}}
  <script type="text/javascript" src="/assets/js/jquery.signature.min.js"></script>

  <script>
    $(document).ready(function() {

      // Signature
      var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG', background:'transparent'});
      $('#clear').click(function(e) {
          e.preventDefault();
          sig.signature('clear');
          $("#signature64").val('');
      });

      // Datatable
      var dataTable = $('#tableData').DataTable({
        pageLength: 50,
        processing: true,
        serverSide: true,
        ajax: "{{ url()->current() }}",
        "drawCallback": function() {

          // Fungsi input select
          function inputSelect(kolom, selectName, option) {

            // Setelah DataTables selesai diinisialisasi, lakukan operasi yang Anda inginkan
            var dataNama = dataTable.column(kolom).data();
            var nama = [];
            dataNama.each(function(value, index) {
              nama.push(value);
            });

            var selectNama = $(`select[name="${selectName}"]`);

            // Simpan nilai yang dipilih sebelumnya
            selectedNamaValue = selectNama.val();

            // Kosongkan dulu elemen select jika ada opsi sebelumnya
            selectNama.empty();
            selectNama.append(`<option value="">Pilih ${option}</option>`);

            // Buat objek untuk menyimpan opsi yang unik
            var uniqueNamaOptions = {};

            // Tambahkan opsi nama dari array `nama`
            nama.forEach(function(value, index) {
                 // Jika nilai belum ada dalam objek uniqueNamaOptions, tambahkan ke objek dan juga ke elemen select
                 if (!uniqueNamaOptions[value]) {
                     selectNama.append($('<option>', {
                         value: value,
                         text: value
                     }));
                     // Tandai nilai sebagai sudah ditambahkan
                     uniqueNamaOptions[value] = true;
                 }
            });

            // Pilih kembali nilai yang sebelumnya dipilih, jika ada
            selectNama.val(selectedNamaValue);
          }

          inputSelect(1, "filter_nrp", "NRP");
          inputSelect(2, "filter_nama", "Nama");
          inputSelect(3, "filter_departemen", "Departemen");
          inputSelect(4, "filter_jabatan", 'Jabatan');
          inputSelect(6, "filter_tgl", "Tanggal");
        },
        columns: [{
            data: 'id',
            orderable: false,
            searchable: false,
            render: function(data, type, row, meta) {
                return new Intl.NumberFormat('id-ID').format(meta.row + meta.settings
                    ._iDisplayStart + 1);
            }
          },
          {
              data: 'nrp'
          },
          {
              data: 'nama'
          },
          {
              data: 'departemen'
          },
          {
              data: 'jabatan'
          },
          {
              data: 'perusahaan'
          },
          {
              data: 'tgl',
          },
          {
            data: 'id',
            render: function(data) {
              return `<a href="/data-administrasi/review-file/${data}" class="btnReview btn fw-bold btn-sm btn-primary d-inline" target="_blank">
                  <i class="icon-doc"></i></a>`;
            }
          },  
          {
              data: 'status_arsip',
              render: function(data, type, row) {
                if(data != "belum") {
                  return `<button class="btn-status-arsip btn fw-bold btn-sm btn-success d-inline" data-id="${row.id}">
                    ${data.toUpperCase()}</button>`;
                }else {
                  return `<button class="btn-status-arsip btn fw-bold btn-sm btn-warning d-inline" data-id="${row.id}">
                    ${data.toUpperCase()}</button>`;
                }
            }
          },
          {
              data: 'id',
              render: function(data) {
                  return `<button class="btnHapus btn fw-bold btn-sm btn-danger d-inline" data-id="${data}">
                      <i class="flaticon-cross"></i></button>&nbsp;
                      <button class="btnEdit btn fw-bold btn-sm btn-warning d-inline" data-id="${data}">
                      <i class="flaticon-pencil"></i></button>`;
              }
          },
        ],
        columnDefs: [{
            targets: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
            className: "text-center align-middle text-capitalize text-nowrap"
        }]
      });

      // Button Status Aktif
      $(document).on("click", ".btn-status-arsip", function() {

        var id = $(this).attr("data-id");

        // Mengambil nilai token CSRF dari tag meta
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        var formData = new FormData();
        formData.append("_method", "PUT");
        formData.append("id", id);

        // Melakukan request AJAX
        $.ajax({
            type: "POST",
            url: "/change-status-arsip",
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {

                if (response.status == "success") {

                  // Notify
                  $.notify({
                    icon: 'flaticon-hands',
                    title: 'Berhasil',
                    message: 'Mengubah status arsip',
                  },{
                    type: 'success',
                    placement: {
                      from: "top",
                      align: "right"
                    },
                    time: 1000,
                  });

                  // reload table
                  dataTable.ajax.reload();
                }
            },
            error: function(error) {
            }
        }).always(function() {
        });
      }); 

      // Button Delete
      $(document).on("click", ".btnHapus", function() {

					swal({
						title: 'Yakin hapus?',
						type: 'warning',
						buttons:{
							confirm: {
								text : 'Ya, hapus!',
								className : 'btn btn-success'
							},
							cancel: {
                text : 'Batal',
								visible: true,
								className: 'btn btn-danger'
							}
						}
					}).then((Delete) => {
						if (Delete) {

              var id = $(this).attr("data-id");

              // Mengambil nilai token CSRF dari tag meta
              var csrfToken = $('meta[name="csrf-token"]').attr('content');

              // Melakukan request AJAX
              $.ajax({
                  type: "POST",
                  url: `/data-administrasi/${id}`,
                  headers: {
                      'X-CSRF-TOKEN': csrfToken
                  },
                  data: {
                    "_method": "DELETE"
                  },
                  dataType: "JSON",
                  success: function(response) {

                      if (response.status == "success") {

                        // Notify
                        $.notify({
                          icon: 'flaticon-hands',
                          title: 'Berhasil',
                          message: 'Menghapus data',
                        },{
                          type: 'success',
                          placement: {
                            from: "top",
                            align: "right"
                          },
                          time: 1000,
                        });

                        // reload table
                        dataTable.ajax.reload();
                      }
                  },
                  error: function(error) {
                  }
                  }).always(function() {
                });
						} else {
							swal.close();
						}
					});
      }); 

      // Button Edit
      $(document).on("click", ".btnEdit", function() {

        var id = $(this).attr("data-id");
        // Mengambil nilai token CSRF dari tag meta
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

            // Melakukan request AJAX
            $.ajax({
                type: "GET",
                url: `/data-administrasi/edit/${id}`,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                success: function(response) {

                    if (response.status == "success") {

                      $("#modalEdit .btn-update").attr("data-id", id);
                      $("#modalEdit input[name='nrp']").val(response.data.nrp);
                      $("#modalEdit input[name='nama']").val(response.data.nama);
                      $("#modalEdit input[name='departemen']").val(response.data.departemen);
                      $("#modalEdit input[name='jabatan']").val(response.data.jabatan);
                      $("#modalEdit select[name='perusahaan']").val(response.data.perusahaan);

                      if(!response.data.ttd) {
                        $("#modalEdit .ttd").removeClass("d-none");
                        $("#modalEdit .ttd").addClass("d-block");
                      }

                      $("#modalEdit").modal("show");
                    }
                },
                error: function(error) {
                }
            })
      }); 

      // Button Update
      $(".btn-update").on("click", function() {

        var id = $(this).attr("data-id");
        // Mengambil nilai token CSRF dari tag meta
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        var formData = new FormData();
        formData.append("_method", "PUT");
        formData.append("nrp", $("#modalEdit input[name='nrp']").val());
        formData.append("nama", $("#modalEdit input[name='nama']").val());
        formData.append("departemen", $("#modalEdit input[name='departemen']").val());
        formData.append("jabatan", $("#modalEdit input[name='jabatan']").val());
        formData.append("perusahaan", $("#modalEdit select[name='perusahaan']").val());
        formData.append("ttd", $("#modalEdit textarea[name='ttd']").val());

            // Melakukan request AJAX
            $.ajax({
                type: "POST",
                url: `/data-administrasi/${id}`,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                },
                data: formData,
                dataType: "JSON",
                contentType: false,
                processData: false,
                success: function(response) {

                    if (response.status == "success") {

                      // reload table
                      dataTable.ajax.reload();

                      $('#modalEdit').modal('hide');

                      // Notify
                      $.notify({
                        icon: 'flaticon-hands',
                        title: 'Berhasil',
                        message: 'Mengubah data',
                      },{
                        type: 'success',
                        placement: {
                          from: "top",
                          align: "right"
                        },
                        time: 1000,
                      });
                    }
                },
                error: function(error) {
                }
            })
      });

      // Button Change Password
      $(".btn-change-password").on("click", function() {

        var id = $(this).attr("data-id");

        // Mengambil nilai token CSRF dari tag meta
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        var formData = new FormData();
        formData.append("_method", "PUT");
        formData.append("id", id);
        formData.append("password_lama", $(`#modalChangePassword input[name="password_lama"]`).val());
        formData.append("password_baru", $(`#modalChangePassword input[name="password_baru"]`).val());

          // Melakukan request AJAX
          $.ajax({
            type: "POST",
            url: "/change-password",
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {

                if (response.status == "success") {

                  // Notify
                  $.notify({
                    icon: 'flaticon-hands',
                    title: 'Berhasil',
                    message: 'Mengubah password',
                  },{
                    type: 'success',
                    placement: {
                      from: "top",
                      align: "right"
                    },
                    time: 1000,
                  });

                  $('#modalChangePassword').modal('hide');
                }else {

                  // Notify
                  $.notify({
                    icon: 'icon-dislike',
                    title: 'Gagal mengubah password',
                    message: 'Password lama salah!',
                  },{
                    type: 'danger',
                    placement: {
                      from: "top",
                      align: "right"
                    },
                    time: 1000,
                  });

                  $('#modalChangePassword').modal('hide');
                }
            },
            error: function(error) {
            }
        })
      });

      // Proses tutup modal password
      $('#modalChangePassword').on('hidden.bs.modal', function() {

        $(`#modalChangePassword input[name="password_lama"]`).val("");
        $(`#modalChangePassword input[name="password_baru"]`).val("");
      });

      // Proses tutup modal edit
      $('#modalEdit').on('hidden.bs.modal', function() {

        $(`#modalEdit input[name="nama"]`).val("");
        $(`#modalEdit input[name="nrp"]`).val("");
        $(`#modalEdit input[name="jabatan"]`).val("");
        $(`#modalEdit input[name="departemen"]`).val("");
        $(`#modalEdit textarea[name="ttd"]`).val("");

        $("#modalEdit .ttd").removeClass("d-block");
        $("#modalEdit .ttd").addClass("d-none");
      });

      function filterData(arrayData) {
        arrayData.forEach(item => {
          $(`#${item}`).change(function() {
            dataTable.column($(this).data('column')).search($(this).val()).draw();
          });
        });
      }

      // Filter table
      filterData(["filter_nrp", "filter_nama", "filter_departemen", "filter_jabatan", "filter_perusahaan", "filter_tgl"]);
    
      $('#filter_status_arsip').change(function() {
          // Mendapatkan nilai dari input filter
          var filterValue = $(this).val();

          // Jika nilai select kosong, tidak perlu menerapkan filter
          if (filterValue === "") {
              dataTable.column($(this).data('column')).search("").draw();
          } else {
              // Membuat filter regex yang tepat
              var regex = '^' + filterValue + '$';

              // Melakukan filter pada tabel berdasarkan nilai filter
              dataTable.column($(this).data('column')).search(regex, true, false).draw();
          }
      });
    });
  </script>
</body>

</html>