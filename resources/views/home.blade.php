<x-app-layout>
    <header>
        <img src="./images/matanaUniversity.png" class="img-fluid gambarSertifikat" alt="...">
        <div class="containerSertifikat">
            <p class="text-break judulSertifikat">E - Sertifikasi</p>
            <p class="text-break isiSertifikat">E - Sertifikat ini dikeluarkan oleh Matana University untuk kegiatan yang ada dilingkungan internal dan eksternal.</p>
        </div>
        <div class="clear"></div>
    </header>

    <section class="container-fluid mainNico">
        <div class="row gy-4">
        @foreach ($event as $form)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card cardWrapper">
                    <img src="./images/{{$form->image_event}}" class="imgCard" alt="...">
                    <div class="card-body cardMainBody">
                        <div class="cardBorder">
                            <h5 class="cardTitle">{{$form->nama_event}}</h5>
                            <p class="cardDesc">Jenis Event: {{$form->jenis_event}}</p>
                            <p class="cardDesc">Tanggal: {{$form->tanggal_event}}</p>
                            <p class="cardDesc">Penyelenggara: {{$form->penyelenggara_event}}</p>
                            <p class="cardDesc">Peserta: {{$form->kapasitas_peserta}}</p>
                            <p class="cardDesc">E-Sertifikat</p>
                            <ul class="cardBlock">
                                <li class="cardList">
                                    <a href="{{URL::to('/ceksertipanitia/'.$form->id_event)}}" class="cardTag">
                                        Panitia
                                    </a>
                                </li>
                                <li class="cardList">
                                    <a href="{{URL::to('/cekserti/'.$form->id_event)}}" class="cardTag">
                                        Peserta
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer>
        <div class="containerFooter">Made With <i class="fas fa-heart"></i> By TeknikInformatika21</div>
    </footer>
</x-app-layout>