<x-app-layout>
    <div class="col-lg-8 mt-2 pt-4 pb-4">
        <div class="container input-div pt-4 pb-4 rounded">
            <h1 class="title text-center pt-4 pb-4">Insert here your Link</h1>
            <form class="card container col-10 col-lg-7 pt-4 pb-4 rounded" method="POST" action="{{ route('short.url') }}">
                @csrf
                <div class="card-body container d-inline-block justify-content-center rounded">
                    @if(session('success_message'))
                        <div class="alert alert-success pb-3" id="successMessage">
                            {!! session('success_message') !!}
                        </div>                            
                        @endif
                    <input class="col-12 rounded mt-2" type="url" name="original_url"/>
                    <button class="btn btn-dark mt-3 mb-2" type="submit">Short URL</button> 
                </div>
                <div class="alert-div">
                    @error('original_url')
                    <div class="alert alert-danger" id="badUrlMessage"> {{ $message }}</span>
                    @enderror
                </div>
            </form>
        </div>       
    </div>    
</x-app-layout>