<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Timeline</title>

  
  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- AdminLTE css -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body>
<!-- Site wrapper -->
<div class="container">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light ml-0">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="galery" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a data-toggle="modal" data-target="#modalUpload" href="#" class="nav-link btn btn-primary">Upload Foto<i class="fa fa-upload"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-">
        <a class="nav-link" href="logout" role="button">
          <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  

  <!-- Content Wrapper. Contains page content -->
  <div class="container">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Galery Foto</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Timeline</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Timelime example  -->
        <div class="row">
          @foreach ($galerys as $galery)
            
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-green" name="tanggal">{{ $galery->tanggal }}</span>
              </div>
             
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <div class="timeline-item">
                  <span class="time" name="tanggal" {{ $galery->tanggal }}></span>
                </div>
              </div>
              

              <!-- END timeline item -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-camera bg-purple"></i>
                <div class="timeline-item">
                  <span class="time"><i class="fa fa-clock"></i>11:23</span>
                  <h3 class="timeline-header"><a href="#">{{ $galery->judul }}</a></h3>
                  <div class="timeline-body">
                    <p>{{ $galery->deskripsi }}</p>
                    <div class="post">
                      <!--/.user-block -->
                      <div class="row mb-3">
                        <div class="col-sm-6">
                          <img class="img-fluid" src="{{ asset('images/'.$galery->foto) }}" height="200" width="200" alt="photo">
                        </div>
                      </div>
                    </div>

                    <!--/.col -->
                  </div>
                  <div class="timeline-footer col-sm-7">
                    <a href="#" data-toggle="modal" data-target="#modalEdit{{ $galery->id }}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{ asset('images/'.$galery->foto) }}"  class="btn btn-secondary" download>Dowload</a>
                    <a href="" data-toggle="modal" data-target="#hapusfoto{{ $galery->id }}" class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            

        <div>
          <div class="modal fade" id="modalEdit{{ $galery->id }}" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">upload foto</h3>
                </div>
              <form action="{{ route('galery.update',$galery->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                  <div class="form-group">
                    <label for="judul">judul</label>
                    <input type="text" value="{{ $galery->judul }}" name="judul" class="form-control">
                  </div>
                    <div class="form-group">
                      <label for="deskripsi">deskripsi</label>
                      <input type="text" value="{{ $galery->deskripsi }}" name="deskripsi" class="form-control">
                    </div>
                      <div class="form-group">
                        <label for="foto">foto</label>
                        <input type="file" name="foto" class="form-control">
                        <img src="{{ asset('images/'.$galery->foto) }}" height="200" width="200" alt="">
                      </div>
                </div>
             
                
                <div class="modal-footer">
                  <button class="btn btn-primary" type="submit">Upload</button>
                  <button class="btn btn-secondary" data-dismiss="modal">close</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
        <div>
             
           
          <!-- /.col -->
        

          <div class="modal fade" id="hapusfoto{{ $galery->id }}" method="post">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Edit Foto</h3>
              </div>
              <div class="modal-body">
                <p>Yakin Mau Menghapus</p>
                <div class="modal-footer"></div>
                <a href="{{ url('galery/'.$galery->id) }}"  class="btn btn-primary" type="submit">Hapus</a>
                <button class="btn btn-scondary"  data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

         @endforeach
       
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <div class="modal fade" id="modalUpload" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title">upload foto</h3>
        </div>
      <form action="galery" method="POST" enctype="multipart/form-data">
        @csrf
          <div class="modal-body">
          <div class="form-group">
            <label for="judul">judul</label>
            <input type="judul" name="judul" class="form-control">
          </div>
            <div class="form-group">
              <label for="deskripsi">deskripsi</label>
              <input type="text" name="deskripsi" class="form-control">
            </div>
              <div class="form-group">
                <label for="foto">foto</label>
                <input type="file" name="foto" class="form-control">
              </div>
              <div class="modal-footer">
                <button class="btn btn-primary" type="submit">Upload</button>
                <button class="btn btn-secondary" data-toggle="modal" data-dismis="modal">close</button>
              </div>
          </div>
        </form>
    </div>
  </div>


  
      

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>


</body>
</html>
