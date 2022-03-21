@extends('template')
@section('content')
<div class="container mt-5 mb-5">
<div class="card">
    <div class="card-body">
        <form action="/formulir/add-data" method="post">
                    <div class="form-group">
                        <label for="">PENDIDIKAN TERAKHIR : </label>
                        <table class="table table-light">
                            <thead>
                              <tr>
                                <th scope="col">Jenjang Pendidikan Terakhir</th>
                                <th scope="col">Nama Institusi Akademik</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Tahun Lulus</th>
                                <th scope="col">IPK</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                {{-- <th scope="row"><input type="email" class="form-control" name="email"></th> --}}
                                <td><input type="text" class="form-control"  name="jenjang_pendidikan"></td>
                                <td><input type="text" class="form-control"  name="jenjang_pendidikan"></td>
                                <td><input type="text" class="form-control"  name="text"></td>
                                <td><input type="text" class="form-control"  name="text"></td>
                                <td><input type="text" class="form-control"  name="text"></td>
                              </tr>
                              <tr>
                                <th scope="row"><input type="email" class="form-control" name="email"></th>
                                <td><input type="text" class="form-control"  name="text"></td>
                                <td><input type="text" class="form-control"  name="text"></td>
                                <td><input type="text" class="form-control"  name="text"></td>
                                <td><input type="text" class="form-control"  name="text"></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <div class="form-group">
                        <label for="">RIWAYAT PELATIHAN </label>
                        <table class="table table-light">
                            <thead>
                              <tr>
                                <th scope="col">Nama Kursus/Seminar</th>
                                <th scope="col">Sertifikat</th>
                                <th scope="col">Tahun</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="email" class="form-control"  name="email"></td>
                                <td><input type="email" class="form-control"  name="email"></td>
                                <td><input type="email" class="form-control"  name="email"></td>
                              </tr>
                              <tr>
                                <td><input type="email" class="form-control"  name="email"></td>
                                <td><input type="email" class="form-control"  name="email"></td>
                                <td><input type="email" class="form-control"  name="email"></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@endsection