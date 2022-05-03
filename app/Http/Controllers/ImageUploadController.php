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
                'category' => $request->category,
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
             $postdata = Postimage::paginate(6);
             return view('calismalarimiz', compact('postdata'));
          }
          public function anasayfa(){
            $postdata = Postimage::latest()->take(6)->get();;
            return view('index', compact('postdata'));
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

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postimage  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function edit(Postimage $postdata)
    {
        return view('edit', [
            'post' => $postdata,
            ]); //returns the edit view with the post
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postimage  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postimage $postdata)
    {
        $postdata->update([
            'baslik' => $request->baslik,
            'text' => $request->text,
            'category' => $request->category
        ]);

        return redirect('/' . $postdata->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postimage  $blogPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postimage $postdata)
    {
        $postdata->delete();

        return redirect('/calismalarimiz');
    }

    public function asansör(){

        $categoryid = 'asansör';
            
         $posts = Postimage::query() -> where('category', $categoryid) ->paginate(3);   

     return view('asansör', compact('posts'));
    }
    public function dogalgaz(){

        $categoryid = 'dogalgaz';
            
         $posts = Postimage::query() -> where('category', $categoryid) ->paginate(3);   

     return view('dogalgaz', compact('posts'));
    }
    public function insaat(){

        $categoryid = 'insaat';
            
         $posts = Postimage::query() -> where('category', $categoryid) ->paginate(3);   

     return view('insaat', compact('posts'));
    }
    public function mekanik(){

        $categoryid = 'mekanik';
            
         $posts = Postimage::query() -> where('category', $categoryid) ->paginate(3);   

     return view('mekanik', compact('posts'));
    }
    public function diger(){

        $categoryid = 'diger';
            
         $posts = Postimage::query() -> where('category', $categoryid) ->paginate(3);   

     return view('diger', compact('posts'));
    }
}