<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $attachments = auth()->user()->attachments;
      return response()->json(['data'=>$attachments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
        'attachment'  => 'image|max:5000',
      ]);
      
      $attachment = null;
      if( $request->hasFile('attachment') ){
        $request_attachment = $request->file('attachment');
        if( $path = $request_attachment->store('public/attachments') ){
          
          $allowedMimeTypes = ['jpeg','gif','png','bmp','svg'];
          $contentType = $request_attachment->extension();
          $sizes = [320,160,80];
          
          if(in_array($contentType, $allowedMimeTypes) ){
            foreach($sizes as $size){
              if( !Storage::exists( $folder = "public/$size" ) ){
                Storage::makeDirectory($folder);
              }
              $thumbnail = Image::make( storage_path("app/$path") )->resize($size, $size);
              $thumbnail->save( storage_path("app/public/$size") . basename($path) );
            }
          }
          
          $attachment = Attachment::create([
            'name'            => $request->name ?: '',
            'size'            => $request_attachment->getSize(),
            'type'            => $request_attachment->getType(),
            'path'            => $path,
            'url'             => str_replace('public','storage',$path),
            'extension'       => $request_attachment->extension()
          ]);
        }
      }
      return response()->json(['data'=>$attachment]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function show(Attachment $attachment)
    {
      return response()->json(['data'=>$attachment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attachment $attachment)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attachment  $attachment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attachment $attachment)
    {
      $attachment->delete();
      return response()->json(['data'=>"Attachment $attachment->id deleted successfully"]);
    }
}
