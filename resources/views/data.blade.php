<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{$judul}}</title>
    </head>
    <body>
        <center>
            <label><h2>{{$judul}}<h2></label>
            @if(session('pesan'))
              {{session('pesan')}}
            @endif 
            <p>
              <button type="button" onclick="window.location='/film/tambah'">
                Tambah
              </button>
            </p>
            <table style="width: 80%; border-collapse: 1; border:1px solid #000" border="1">
              <thead>
                  <th>No</th>
                  <th>Kode Film</th>
                  <th>Nama Film</th>
                  <th>Waktu Tayang</th>
                  <th>Aksi</th>
              </thead>
              <tbody>
                @foreach ( $dataFilm as $value )
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->kode_film }}</td>
                    <td>{{ $value->nama_film }}</td>
                    <td>{{ $value->waktutayang}}</td>
                    <td>
                      <button type="button" onclick="window.location='/film/edit/{{ $value->id_film }}'">
                        Edit
                      </button>

                      <form action="/film/hapus/{{ $value->id_film }}" method="post"
                        style="display: inline;"
                        onsubmit="return hapusData()">
  
                        @csrf
                        @method('DELETE')
  
                        <button type="submit">
                          Hapus
                        </button>
     
                      </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            <hr>
            <table style="width: 80%; border-collapse: 1; border:1px solid #000" border="1">
              <thead>
                  <th>No</th>
                  <th>Nama Genre</th>
              </thead>
              <tbody>
                @foreach ( $dataGenre as $value ) 
                <tr>
                  <td>
                    {{$value->id_genre}}
                  </td>
                  <td>
                    {{$value->nama_genre}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </center>

        <script>
          function hapusData() {  
            pesan = confirm("Yakin Data ini Dihapus?");
            if(pesan)
            return true; else return false;
          }
        </script>
    </body>
</html>


