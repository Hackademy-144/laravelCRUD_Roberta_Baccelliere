<x-layout>
  <div class="container-fluid mt-5">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
      </div>
      <div class="col-5 text-center flex-column d-flex justify-content-center">
        <h1 class="bg-fucsia mt-3">WELLNESS EVERYWHERE</h1>
      </div>
    </div>
  </div>
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-8 border rounded shadow">
        <form class="m-4" method="POST" action="{{route('contact.submit')}}">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label class="form-label">Parlaci di te!</label>
            <textarea name="body" id="" cols="30" rows="10" class="form-control" name="body"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</x-layout>