<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cform;


class Cformcontroller extends Controller
{

//Store image
    public function Cform(Request $request){
        $data= new Cform([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
        $data->save();
        return redirect()->route('index')->withSuccess(['Mesajınız Başarıyla İletildi']);

    }
    public function viewCform(){
        $postdata = Cform::paginate(4);
        return view('mesajlar', compact('postdata'));
     }
}    