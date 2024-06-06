<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <h1 class="col-8 bg-fucsia mt-3 m-5 d-flex justify-content-center">PIANO PERSONALIZZATO</h1>
            <div class="col-12 text-center d-flex justify-content-center justify-content-space-around">
                <div class="card" style="width: 18rem;">
                    <img src="./image/keto.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Benefici</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestiae
                            animi necessitatibus tempore dolorem,
                            suscipit perferendis, sit quam blanditiis harum dignissimos. Nemo sint rem aliquam culpa
                            facilis odio debitis aut!</p>
                        <a href="#" class="btn btn-primary">Provala!</a>
                    </div>
                </div>
                <div class="card d-flex" style="width: 18rem;">
                    <img src="./image/protein.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Benefici</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestiae
                            animi necessitatibus tempore dolorem,
                            suscipit perferendis, sit quam blanditiis harum dignissimos. Nemo sint rem aliquam culpa
                            facilis odio debitis aut!</p>
                        <a href="#" class="btn btn-primary">Provala!</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <img src="./image/carb.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5>Benefici</h5>
                        <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestiae
                            animi necessitatibus tempore
                            dolorem,
                            suscipit perferendis, sit quam blanditiis harum dignissimos. Nemo sint rem aliquam culpa
                            facilis odio debitis aut!</p>
                        <a href="#" class="btn btn-primary">Provala!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="height:100px"></div>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <h1 class="col-8 bg-fucsiaa mt-3 m-5 text-white d-flex justify-content-center">PIANI CREATI DALLA COMMUNITY
                FREE</h1>
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 m-1 text-center d-flex justify-content-center justify-content-space-around">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">Pubblicato da:
                                <a
                                    href="{{ route('article.user', ['user' => $article->user]) }}">{{ $article->name }}</a>
                            </p>
                            {{-- <p>Pubblicato da {{$article->name}}</p> --}}
                            <p class="card-text">Descrizione: {{ $article->body }}</p>
                            <a href="{{ route('article.show', compact('article')) }}"
                                class="btn btn-primary">Provala!</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <div class="col-12 text-center d-flex justify-content-center justify-content-space-around"> --}}
    {{-- <div class="card" style="width: 18rem;"> --}}
    {{-- <img src="./image/keto.jpg" class="card-img-top" alt="..."> --}}
    {{-- <div class="card-body"> --}}
    {{-- <h5>Benefici</h5> --}}
    {{-- <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum molestiae animi necessitatibus tempore dolorem,  --}}
    {{-- suscipit perferendis, sit quam blanditiis harum dignissimos. Nemo sint rem aliquam culpa facilis odio debitis aut!</p> --}}
    {{-- <a href="#" class="btn btn-primary">Provala!</a> --}}
    {{-- </div> --}}
</x-layout>
