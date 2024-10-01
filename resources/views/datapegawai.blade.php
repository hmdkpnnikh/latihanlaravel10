<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Laravel</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Tambah Data Pegawai</h1>

    
<div class="contaier " style="margin-inline: 100px;"  >  
    <a href="/tambahpegawai" style="margin-bottom: 20px;" class="btn btn-success">Tambah</a>

    <div class="row g-3 align-items-center mt-1">
      <div class="col-auto">
        <form action="/pegawai" method="GET">
        <input type="search" id="inputPassword6" name="search" class="form-control" aria-describedby="passwordHelpInline">
        </form>
      </div>

      <div class="col-auto">
        <a href="/exportpdf" style="margin-bottom: 20px;" class="btn btn-info">Export PDF</a>
      </div>
      

    </div>

    <div class="row">
      <!-- @if ($message = Session::get('success'))
        <div class="alert alert-success" style="margin-top: 10px;" role="alert">
        {{ $message }}
        </div>
      @endif -->
    <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Foto</th>
                <th scope="col">Kelamin</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Dibuat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $index => $row)
              <tr>
                <th scope="row">{{ $index + $data->firstitem() }}</th>
                <td>{{ $row->nama }}</td>
                <td>
                  <img src="{{asset('fotopegawai/'.$row->foto)}}" alt="" style="width: 40px;">
                </td>
                <td>{{ $row->jeniskelamin }}</td>
                <td>0{{ $row->notelpon }}</td>
                <td>{{ $row->created_at }}</td>
                <td>
                  <a href="/tampilkandata/{{ $row->id }}" class="btn btn-info">Edit</a>
                  <a href="#" class="btn btn-danger delete" data-id="{{ $row->id }}"  >Delete</a>
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
          {{ $data->links() }}
    </div>
</div>


    








    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
      
    </script>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  </body>
  <script>
    $('.delete').click(function(){
      var pegawaiid = $(this).attr('data-id');
      swal({
              title: "Yakin ?",
              text: "kamu akan menghapus data pegawai dengan id "+pegawaiid,
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                window.location = "/delete/"+pegawaiid,
                swal("Data berhasil dihapus", {
                  icon: "success",
                });
              } else {
                swal("Data Tidak jadi dihapus");
              }
      });
    });
       
  </script>
  <script>
    @if (Session::has('success'))
      toastr.success("{{ Session::get('success') }}")
    @endif
  </script>
</html>