<x-layout>

    <form action="{{ route('mail') }}" method="post">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="tuaemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="tuonome" class="form-control" id="name" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="surname" class="form-label">Surname</label>
            <input type="text" name="tuocognome" class="form-control" id="surname" aria-describedby="emailHelp">
          </div>
       
        <button type="submit" class="btn btn-primary">Invio</button>
      </form>





</x-layout>