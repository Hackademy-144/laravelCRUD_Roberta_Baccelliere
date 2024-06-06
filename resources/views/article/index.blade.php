<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
            </div>
            <div class="col-12 text-center flex-column d-flex 
            justify-content-center">
                <h1 class="bg-fucsiaa mt-3">TUTTI I PIANI</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-4 m-1 text-center d-flex justify-content-center justify-content-space-around">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">Pubblicato da: <a href="{{ route('article.user', ['user' => $article->user]) }}">{{ $article->name }}</a>
                            </p>
                            <p class="card-text">Descrizione:
                                {{ $article->body }}</p>
                            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Provala!</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
