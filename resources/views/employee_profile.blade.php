@extends('components.app')
@section('page_name') Employee Profile @endsection
@section('page_body')
    <div class="page_body" style="padding-left: 250px;padding-top: 100px;overflow: auto">
        <div class="" style="padding-left: 20px;padding-right: 20px;">
            <div class="row">
                <div class="col l3 m4 s12">
                    <div class="card z-depth-0" style="border-radius: 8px;">
                        <div class="card-content" style="padding-left: 15px;padding-right: 15px;">
                            <div class="card-photo center-block z-depth-14"
                                 style="background-image: url({{asset('img/user_3.svg')}});height: 130px;width: 130px;border-radius: 130px;margin-top: 5px;margin-bottom: 5px;"></div>
                            <h4 class="roboto-bold grey-text center text-darken-4"
                                style="font-size: 18px;margin-bottom: 20px;letter-spacing: 0.5px;margin-top: 20px;">
                                Zaire Torff</h4>
                            <p class="grey-text text-darken-1 roboto center"
                               style="font-size: 15px;margin-top: -15px;margin-bottom: 10px;letter-spacing: 0.5px">GM.
                                Human Resource</p>
                            <div class="links" style="margin-top: 30px;max-height: 300px;overflow-y: auto;">
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#general_information">General Information</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#social_media">Social Media</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#summary">Summary</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#interest">Interest</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#permintaan_posisi_direktur">Permintaan Posisi Direktur</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#riwayat_jabatan">Riwayat Jabatan</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#organisasi">Organisasi</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#penghargaan">Penghargaan</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#riwayat_pendidikan_dan_pelatihan">Pendidikan &amp; Pelatihan</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#karya_tulis">Karya Tulis</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#pengalaman_sebagai_pembicara">Pengalaman Pembicara</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#referensi">Referensi</a>
                                <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                   href="#keterangan_keluarga">Keterangan Keluarga</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col l9 m8 s12">
                    <div class="card z-depth-0" style="border-radius: 8px;">
                        <div class="card-content" style="padding-left: 20px;padding-right: 20px;padding-top: 20px;">
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="general_information"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px">
                                General Information</h4>
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Nama
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Zaire Torff
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Gelar Akademik
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        SE. Ak, CA, MM
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        NIK
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        2312421233321222
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Tempat
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Medan
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Tanggal Lahir
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        04/04/1978
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Jenis Kelamin
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Perempuan
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Agama
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Islam
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Jabatan Terakhir
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        GM. Human Resource
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Alamat Rumah
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Jalan Menuju Sukses Bahagia Blok AB 1 No 2 RT 03 RW 01 Kelurahan Aman Sentosa
                                        Kecamatan Sejahtera
                                        Kota Makmur
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Handphone
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        081296711426
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Email
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        terberakberak@gmail.com
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 10px;letter-spacing: 0.5px">
                                        NPWP
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        8754558896554998
                                    </p>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="social_media"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Social Media</h4>
                            <div class="row">
                                <div class="col l3 m3 s6">
                                    <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                       style="font-size: 15px;"
                                       href="#"><i class="material-icons accent-color fab fa-linkedin"
                                                   style="margin-right: 10px;line-height: 20px;font-size: 20px;"></i>
                                        Linkedin</a>
                                </div>
                                <div class="col l3 m3 s6">
                                    <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                       style="font-size: 15px;"
                                       href="#"><i class="material-icons accent-color fab fa-facebook"
                                                   style="margin-right: 10px;line-height: 20px;font-size: 20px;"></i>
                                        Facebook</a>
                                </div>
                                <div class="col l3 m3 s6">
                                    <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                       style="font-size: 15px;"
                                       href="#"><i class="material-icons accent-color fab fa-instagram"
                                                   style="margin-right: 10px;line-height: 20px;font-size: 20px;"></i>
                                        Instagram</a>
                                </div>
                                <div class="col l3 m3 s6">
                                    <a class="grey-text text-darken-1 waves-effect waves-accent links-pill transisi"
                                       style="font-size: 15px;"
                                       href="#"><i class="material-icons accent-color fab fa-twitter"
                                                   style="margin-right: 10px;line-height: 20px;font-size: 20px;"></i>
                                        Twitter</a>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="summary"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Summary</h4>
                            <div class="row" style="margin-bottom: 10px;">
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Keahlian
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Human Capital, Keuangan, dan Investasi
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Value Pribadi
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Komitmen untuk senantiasa bekerja profesional dengan prinsip “DO The Best”
                                        terhadap setiap amanat yang diberikan
                                    </p>
                                </div>
                                <div class="col l3 m3 s3">
                                    <p class="grey-text roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Visi Pribadi
                                    </p>
                                </div>
                                <div class="col l9 m9 s9">
                                    <p class="grey-text text-darken-3 roboto"
                                       style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                        Menjadi pemimpin puncak perusahaan yang mampu mewujudkan”great leader create
                                        another great leaders”
                                    </p>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="interest"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Interest</h4>
                            <div class="row">
                                <ol>
                                    <li>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                            Keahlian terkait ekonomi bisnis, investasi, manajemen, strategi dan budaya
                                            korporasi
                                        </p>
                                    </li>
                                    <li>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                            Minat yang tinggi terkait Pengembangan People & Leadership terutama dalam
                                            hal pengembangan kapasitas kepemimpinan
                                        </p>
                                    </li>
                                    <li>
                                        <p class="grey-text text-darken-3 roboto"
                                           style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                            Membangun relasi dan jejaring sosial
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="permintaan_posisi_direktur"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Permintaan Posisi Direktur</h4>
                            <div class="row" style="padding-top: 10px;">
                                <div class="col l3 m3 s6">
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" checked disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Direktur Utama</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" checked disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Keuangan</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Commercial Banking</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Consumer Bank</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Digital Bank</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Treasury</label>
                                    </p>
                                </div>
                                <div class="col l3 m3 s6">
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Pemasaran</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Pengembangan</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Produksi</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Teknik</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Risiko Perusahaan</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" checked disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Human Capital (SDM)</label>
                                    </p>
                                </div>
                                <div class="col l3 m3 s6">
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Investasi</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Procurement</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Keamanan &amp;
                                            Keselamatan</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Logistik</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Strategic Portfolio</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Supply Chain
                                            Management</label>
                                    </p>
                                </div>
                                <div class="col l3 m3 s6">
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Teknologi Informasi</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Operasional</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" checked disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Manajemen Aset</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Pelayanan / Services</label>
                                    </p>
                                    <p style="margin-bottom: 20px;">
                                        <input type="checkbox" class="filled-in" disabled id="test1"/>
                                        <label for="test1" class="grey-text text-darken-1">Hukum / Legal</label>
                                    </p>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="riwayat_jabatan"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Riwayat Jabatan</h4>
                            <div class="row">
                                <div class="col s12">
                                    <div class="jabatan"
                                         style="padding-top: 20px;padding-bottom: 10px;padding-left: 15px;padding-right: 15px;border: 1px solid #ddd;border-radius: 8px;margin-bottom: 20px;">
                                        <h4 class="roboto-bold accent-color"
                                            style="font-size: 22px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                            Manager LC</h4>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Instansi
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    PT. Mantap Yeah Dar Der Dor
                                                </p>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Awal Menjabat
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    1/1/2018
                                                </p>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Akhir Menjabat
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Sampai Saat Ini
                                                </p>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Tupoksi
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <ol class="grey-text text-darken-3 roboto"
                                                    style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    <li>Bertanggungjawab terhadap jalannya perseroan</li>
                                                    <li>Membawahi Direktur Keuangan, Direktur SDM, dan Direktur Teknik</li>
                                                </ol>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Achievement
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    The Most Proved Institution of The Year
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jabatan"
                                         style="padding-top: 20px;padding-bottom: 10px;padding-left: 15px;padding-right: 15px;border: 1px solid #ddd;border-radius: 8px;margin-bottom: 20px;">
                                        <h4 class="roboto-bold accent-color"
                                            style="font-size: 22px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                            Manager Diklat</h4>
                                        <div class="row" style="margin-bottom: 10px;">
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Instansi
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    PT. Mantap Yeah Dar Der Dor
                                                </p>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Awal Menjabat
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    1/1/2018
                                                </p>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Akhir Menjabat
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Sampai Saat Ini
                                                </p>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Tupoksi
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <ol class="grey-text text-darken-3 roboto"
                                                    style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    <li>Bertanggungjawab terhadap jalannya perseroan</li>
                                                    <li>Membawahi Direktur Keuangan, Direktur SDM, dan Direktur Teknik</li>
                                                </ol>
                                            </div>
                                            <div class="col l3 m3 s3">
                                                <p class="grey-text roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    Achievement
                                                </p>
                                            </div>
                                            <div class="col l9 m9 s9">
                                                <p class="grey-text text-darken-3 roboto"
                                                   style="font-size: 14px;margin-top: -5px;margin-bottom: 15px;letter-spacing: 0.5px">
                                                    The Most Proved Institution of The Year
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="organisasi"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Organisasi</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="penghargaan"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Penghargaan</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="riwayat_pendidikan_dan_pelatihan"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Riwayat Pendidikan dan Pelatihan</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="karya_tulis"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Karya Tulis</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="pengalaman_sebagai_pembicara"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Pengalaman Sebagai Pembicara</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="referensi"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Referensi</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                            <div class="divider" style="margin-top: 20px;margin-bottom: 30px;"></div>
                            <h4 class="roboto-bold grey-text text-darken-4 scrollspy" id="keterangan_keluarga"
                                style="font-size: 20px;margin-bottom: 30px;margin-top: 0px;margin-left: 10px;">
                                Keterangan Keluarga</h4>
                            <p class="grey-text text-darken-1 center" style="margin-bottom: 30px">No Data</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js_custom')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.scrollspy').scrollSpy();
        });
    </script>
@endsection
