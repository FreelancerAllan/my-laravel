 {{-- connect header and footer contents is the key used in the page requiring header and footer--}}
  @extends('app')
   {{-- start header and footer connection --}}
  @section('contents')
  
  
  
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Album example</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          {{-- if condition to hide the buttons if true it will display if false it will not --}}
          @if (false)
          <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          @endif
            {{-- end if --}}
        </p>
      </div>
    </div>
  </section>
{{-- include other html content of other files--}}
@include("gallery")
{{-- end header and footer connection --}}
@endsection


