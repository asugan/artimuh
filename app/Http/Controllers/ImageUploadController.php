<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Postimage;

class ImageUploadController extends Controller
{
        //Add image
        public function addImage(){
            return view('add_image');
        }
        //Store image
        public function storeImage(Request $request){
            $data= new Postimage([
                'baslik' => $request->baslik,
                'text' => $request->text,
            ]);
    
            if($request->file('basimage')){
                $file= $request->file('basimage');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image'), $filename);
                $data['basimage']= $filename;
            }
            if($request->file('image1')){
                $file= $request->file('image1');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image'), $filename);
                $data['image1']= $filename;
            }
            if($request->file('image2')){
                $file= $request->file('image2');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image'), $filename);
                $data['image2']= $filename;
            }
            if($request->file('image3')){
                $file= $request->file('image3');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image'), $filename);
                $data['image3']= $filename;
            }
            if($request->file('image4')){
                $file= $request->file('image4');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('Image'), $filename);
                $data['image4']= $filename;
            }
            $data->save();
            return redirect()->route('images.view');
           
        }
            //View image
        public function viewImage(){
             $postdata = Postimage::paginate(3);
             return view('calismalarimiz', compact('postdata'));
          }
        
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postsimage $postdata
     * @return \Illuminate\Http\Response
     */
    public function show(Postimage $postdata)
    {
        return view('article', [
            'post' => $postdata,
        ]);
    }
}