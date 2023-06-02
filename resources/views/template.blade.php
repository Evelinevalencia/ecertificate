<x-app-layout>

    <section class="container-fluid mainNico">
        <div class="row">
            <div class="col-12 headRow">
                <h1 class="headMainTitle">Template</h1>
                <a href="{{URL::to('/template/create')}}" class="addButton">
                    <span class="addIcon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                    </span>
                    <span class="textButton">
                        Tambah
                    </span>
                </a>
            </div>
        </div>
        <div class="row gy-4">
        @foreach ($template as $form)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card cardWrapper">
                    <img src="./images/{{$form->image_template}}" class="imgCard" alt="...">
                    <div class="card-body cardMainBody">
                        <div class="cardBorder">
                            <h5 class="cardTitle">{{$form->id_template}} - {{$form->nama_template}}</h5>
                            <p class="cardDesc">Gaya Font: {{$form->font_Style}}</p>
                            <p class="cardDesc">Warna Font: {{$form->font_color}}</p>
                            <ul class="cardBlock">
                                <!-- <li class="cardList">
                                    <a href="#" class="cardTag">
                                        Panitia
                                    </a>
                                </li>
                                <li class="cardList">
                                    <a href="#" class="cardTag">
                                        Peserta
                                    </a>
                                </li> -->
                                <li class="cardList">
                                    <a href="{{URL::to('template/'.$form->id_template.'/edit')}}" class="cardTag">
                                        Edit
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
</x-app-layout>