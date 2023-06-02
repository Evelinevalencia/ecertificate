<x-app-layout>
    <section class="container-fluid loginSectionCS">
        <div class="row">
            <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                <div class="login-wrapperCS text-center">
                    <div class="loginContentCS">
                        <p style="text-align:left ;" class="text-break judulSertifikat">E - Sertifikasi Matana University</p>
                        <p style="text-align:left ;" class="text-break isiSertifikat">Dapatkan E- Sertifikatmu Sekarang!</p>
                        <form method="POST" action="{{ route('cekserti') }}">
                            @csrf
                            <input type="text" style="opacity: 0;" name="id_event" value="{{$event->id_event}}">
                            <div style="text-align:left ;" class="isiSertifikat">Masukkan Nama Lengkap Kamu</div>
                            <div class="col-10">
                                <input type="text" name="nama_lengkap" class="form-control inputLoginCS" id="inputtext2" placeholder="Nama Lengkap Kamu">
                            </div>
                            <div class="col-auto">
                                <button id="buttonbiru" type="submit" class="btn mb-3 button">CARI</button>
                            </div>

                            <div class="col-10">
                                @if (session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                                @endif
                                @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                <div class="col-auto">
                                    <button id="buttonbiru" type="submit" class="btn mb-3 button"><a href="/images/sertifikat_matana.jpg" download>UNDUH</a></button>
                                </div>
                                @endif
                            </div>
                        </form>

                        <!-- <div style="text-align:left ;" class="isiSertifikat">Apakah Ini Nama Kamu ?</div>
                            <div class="col-10">
                                <input type="text" class="form-control inputLoginCS" id="inputtext2" placeholder="Kamu Tidak Terdaftar Pada Acara Ini">
                            </div> -->


                        <div style="padding-top:20px;" class="mb-3">
                            <p style="text-align:left; text-decoration:none;display:block;" class="isiSertifikat">E - Sertifikat mu akan diunduh sebagai file.jpg</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="containerFooter">Made With <i class="fas fa-heart"></i> By TeknikInformatika21</div>
    </footer>
</x-app-layout>