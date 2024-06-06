<x-layout>
    <div class="container-fluid bg-fucsiaa text-white">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="m-5">Condividi un nuovo esercizio/piano alimentare con la community</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-8 border shadow rounded">
                <form method="POST"  action="{{route('article.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome piano allenamento/alimetare</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                        @error('title')
                        <div class="alert alert-danger">{{$message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea name="body" id="" cols='30' class="form-control @error('body') is-invalid 
                        @enderror" rows='10'>{{old('body')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Il tuo nome</label>
                        <input type="text" class="form-control 
                        @error('name') is-invalid @enderror" 
                        name="name" value="{{old('name')}}">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Img</label>
                            <input type="file" class="form-control" name="img">
                            @error('img')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </x-layout>