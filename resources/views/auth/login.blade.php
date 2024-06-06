<x-layout>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
            </div>
            <div class="col-12 text-center flex-column d-flex justify-content-center">
                <h1 class="bg-fucsia mt-3">WELLNESS EVERYWHERE</h1>
                <h3 class="mt-4">Accedi</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-8 border shadow rounded">
                <form class="m-4" method="POST" action="
                {{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" 
                    name="email">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" 
                    name="password">
                </div>
                <div class='mb-2'>
                    <p class="small">Non sei già registrato? <a href="
                {{route('register')}}">Registrati</a></p>
                </div>
                    <button type="submit" class="btn 
                    btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>