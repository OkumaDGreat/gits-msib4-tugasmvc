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

            <form method="POST" action="{{ url('/film/simpan_edit/') }}" >
              @csrf
              @method('PUT')
              <table style="widows: 70%;">
                <tr>
                  <td>
                    <input hidden type="text" name="id_film" value="{{ $id_film }}" id="id_film">
                  </td>
                </tr>
                <tr>
                  <td>Kode Film: </td>
                  <td>
                    <input readonly type="text" name="kode_film" value="{{ $kode_film }}" id="kode_film">
                  </td>
                </tr>
                <tr>
                  <td>Nama Film: </td>
                  <td>
                    <input required type="text" name="nama_film" value="{{ $nama_film }}" id="nama_film">
                  </td>
                </tr>
                <tr>
                <td>Waktu Tayang: </td>
                  <td>
                    <input required type="text" name="waktutayang" value="{{ $waktutayang }}" id="waktutayang">
                  </td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <button type="submit">
                      Update
                    </button>
                  </td>
                </tr>
              </table>
            </form>
            
        </center>
    </body>
</html>
