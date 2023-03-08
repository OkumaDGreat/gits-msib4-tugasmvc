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
            <p>
              <button type="button" onclick="window.location='/film/index'">
                Kembali
              </button>
            </p>

            @if(session('pesan'))
              {{session('pesan')}}
            @endif
            <form method="POST" action="{{ url('/film/simpan') }}" >
              @csrf
              <table style="widows: 70%;">
                <tr>
                  <td>Kode Film: </td>
                  <td>
                    <input required type="text" name="kode_film" id="kode_film">
                  </td>
                </tr>
                <tr>
                  <td>Nama Film: </td>
                  <td>
                    <input required type="text" name="nama_film" id="nama_film">
                  </td>
                </tr>
                <tr>
                <td>Waktu Tayang: </td>
                  <td>
                    <input required type="text" name="waktutayang" id="waktutayang">
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <button type="submit">
                      Simpan
                    </button>
                  </td>
                </tr>
              </table>
            </form>
            
        </center>
    </body>
</html>
