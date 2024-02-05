<x-app-layout>    
        
    <div class="container-fluid d-flex justify-content-center table-div pt-4 mt-4">
        <table class=" table table-dark table-hover table-stripped">
            <thead class="">
                <tr>
                    <th scope="col" class="">Id</th>
                    <th scope="col" class="">Original URL</th>
                    <th scope="col" class="">Short URL</th>
                </tr>                      
            </thead>
            <tbody>
                @foreach ($links as $link)
                    <tr>
                      <td class="">{{ $link->id }}</td>
                      <td class="">{{ $link->original_url }}</td>
                      <td class="">{{ $link->short_url }}</td>                      
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>    
</x-guest-layout>