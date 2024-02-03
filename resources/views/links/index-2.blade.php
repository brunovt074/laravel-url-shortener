<x-guest-layout>
    <x-slot name="header">
        <div class="navbar row">
            <div class="index-header">
                My Saved Links
              </div>
            <div class="">
                <a class="btn btn-dark" href="{{ route('short.url')  }}">Home</a>
            </div>        
        </div>
        
        <div class="table-div">
            {{-- <div class="table table-dark table-hover table-stripped">
                <thead class="">
                    <tr>
                      <th scope="col"
                       class="">Id</th>
                      <th scope="col"
                       class="">Original URL`</th>
                      <th scope="col"
                       class="">Short URL</th>                      
                  </thead>

            </div> --}}
        </div>
    </x-slot>
</x-guest-layout>