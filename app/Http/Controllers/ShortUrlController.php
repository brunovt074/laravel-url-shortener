<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ShortUrl;
use Illuminate\Http\Request;
use App\Http\Requests\ShortRequest;
use Illuminate\Support\Str;

class ShortUrlController extends Controller
{
    public function short(ShortRequest $request){
        
        if($request->original_url){

            if(auth()->user()){
                $new_url = auth()->user()->links()->create([
                    'original_url' => $request->original_url
                ]);
            
            } else {
                $new_url = ShortUrl::create([
                    'original_url' => $request->original_url
                ]);
            }           

            if($new_url){
                $uuid = $new_url->id;               
                $base64_encoded = base64_encode($uuid);               
                $short_url = base_convert($base64_encoded, 10, 36);
                
                $new_url->update([
                    'short_url'=> $short_url
                ]);

                return redirect()->back()->with('success_message', 
                    'Your Short URL is: <a class="text-green-500" href="'
                        . url($short_url) .'">'. url($short_url) .'</a>');
            }
        }

        return back();
    }

    public function show($code){
        
        $short_url = ShortUrl::where('short_url', $code)->first();

        if($short_url){
            return redirect()->to(url($short_url->original_url));
        }

        return redirect()->to(url('/'));

    }
}
