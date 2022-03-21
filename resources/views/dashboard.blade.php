@extends('template')
@section('content')
<div class="container mt-5 mb-5">
<div class="card">
    <div class="card-body">
        <form action="/formulir/add-data" method="post">
            <form>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Posisi Dilamar</label>
                  <input type="text" class="form-control" placeholder="Input Posisi" name="position">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Nama :  </label>
                  <input type="text" class="form-control" placeholder="Nama" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1"> No. KTP :  </label>
                  <input type="text" class="form-control" placeholder="No KTP" name="number_ktp">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-6">
                            <label for="exampleInputEmail1"> Tempat :  </label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" name="place">
                        </div>
                        <div class="col-6">
                            <label for="exampleInputEmail1">Tanggal Lahir : </label>
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" name="birth_day">
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jenis Kelamin :</label>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary">
                          <input type="radio" id="option2" name="jk" value="laki-laki"> Laki-laki
                        </label>
                        <label class="btn btn-secondary">
                          <input type="radio" id="option3" name="jk" value="Perempuan"> Perempuan
                        </label>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Agama :  </label>
                    <input type="text" class="form-control" placeholder="Agama" name="religion">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> GOLONGAN DARAH :  </label>
                    <input type="text" class="form-control" placeholder="Golongan Darah" name="blood_type">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Status :  </label>
                    <input type="text" class="form-control" placeholder="Status" name="status">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1"> ALAMAT KTP :  </label>
                    <textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="">EMAIL : </label>
                      <input type="email" class="form-control" placeholder="Email" name="email">
                    </div>
                  <div class="form-group">
                      <label for="">NO. TELP : </label>
                      <input type="phone" class="form-control" placeholder="No Telp" name="phone">
                    </div>
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
                                <td><input type="text" class="form-control"  name="jenjang_pendidikan[]"></td>
                                <td><input type="text" class="form-control"  name="nama_institute[]"></td>
                                <td><input type="text" class="form-control"  name="jurusan[]"></td>
                                <td><input type="text" class="form-control"  name="tahun_lulus[]"></td>
                                <td><input type="text" class="form-control"  name="ipk[]"></td>
                              </tr>
                              <tr>
                                <td><input type="text" class="form-control"  name="jenjang_pendidikan[]"></td>
                                <td><input type="text" class="form-control"  name="nama_institute[]"></td>
                                <td><input type="text" class="form-control"  name="jurusan[]"></td>
                                <td><input type="text" class="form-control"  name="tahun_lulus[]"></td>
                                <td><input type="text" class="form-control"  name="ipk[]"></td>
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
                                <th scope="col">Sertifikat(YA/TIDAK)</th>
                                <th scope="col">Tahun</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="text" class="form-control"  name="nama_kursus[]"></td>
                                <td><input type="text" class="form-control"  name="sertifikat[]"></td>
                                <td><input type="text" class="form-control"  name="tahun[]"></td>
                              </tr>
                              <tr>
                                <td><input type="text" class="form-control"  name="nama_kursus[]"></td>
                                <td><input type="text" class="form-control"  name="sertifikat[]"></td>
                                <td><input type="text" class="form-control"  name="tahun[]"></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>

                    <div class="form-group">
                        <label for="">RIWAYAT PEKERJAAN </label>
                        <table class="table table-light">
                            <thead>
                              <tr>
                                <th scope="col">Nama PERUSAHAAN</th>
                                <th scope="col">Posisi Terakhir</th>
                                <th scope="col">Penempatan Terakhir</th>
                                <th scope="col">Pendapatan Terakhir</th>
                                <th scope="col">Tahun</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><input type="text" class="form-control"  name="nama_perusahaan[]"></td>
                                <td><input type="text" class="form-control"  name="posisi_terakhir[]"></td>
                                <td><input type="text" class="form-control"  name="penempatan_terakhir[]"></td>
                                <td><input type="text" class="form-control"  name="last_income[]"></td>
                                <td><input type="text" class="form-control"  name="year[]"></td>
                              </tr>
                              <tr>
                                <td><input type="text" class="form-control"  name="nama_perusahaan[]"></td>
                                <td><input type="text" class="form-control"  name="posisi_terakhir[]"></td>
                                <td><input type="text" class="form-control"  name="penempatan_terakhir[]"></td>
                                <td><input type="text" class="form-control"  name="last_income[]"></td>
                                <td><input type="text" class="form-control"  name="year[]"></td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>
@endsection