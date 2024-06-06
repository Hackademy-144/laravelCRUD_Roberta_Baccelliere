<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <h1 class="col-8 bg-fucsiaa mt-3 m-5 text-white d-flex justify-content-center">PIANI CREATI DALLA COMMUNITY FREE</h1>
        </div> 
    </div>
    
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 m-1 text-center d-flex justify-content-center justify-content-space-around">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">Descrizione: {{$article->subtitle}}</p>
                        <a href="{{route('home')}}" class="btn btn-primary">Torna alla home</a>
                        <a href="{{route('article.update', compact('article'))}}" class="btn btn-light bg-fucsiaa">Modifica</a>
                        <form method="POST" action="{{route('article.destroy', compact('article'))}}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mt-2">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>   
        </div>
    </div>
</x-layout>