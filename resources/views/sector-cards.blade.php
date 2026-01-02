<section class="section section-default py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h2 class="font-weight-bold mb-2">Sektörel Uygulamalar</h2>
                <p class="text-muted mb-0">Workcube ana ve alt sektörlerde geniş uygulamalar sunar.</p>
            </div>
        </div>

        <div class="row">
            @foreach ($sectors as $sector)
                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                    @php
                        $imagePath = $sector->image_path
                            ? asset('storage/' . $sector->image_path)
                            : asset('images/modules/all.jpg');
                    @endphp

                    <div class="card h-100 shadow-sm border-0 overflow-hidden">
                        <div class="position-relative"
                            style="height: 180px; background: center / cover no-repeat url('{{ $imagePath }}');">

                        </div>

                        <div class="card-body d-flex flex-column">
                            <h5 class="text-center">{{ $sector->name }}</h5>

                            <div class="mt-auto d-flex justify-content-center">
                                <a href="{{ route('sectors.show', $sector->slug) }}" class="btn btn-primary btn-sm">
                                    Devamını Oku
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
