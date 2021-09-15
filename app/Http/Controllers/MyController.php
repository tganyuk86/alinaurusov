<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

use App\Gallery;

use App\Category;

use App\Workuser;

class MyController extends Controller
{
    public function saveForm(Request $request)
    {
        dd($request->all());
        return view('user.profile', [
            'user' => User::findOrFail($id),
        ]);
    }

    public function showContact()
    {
        
        return view('contact', [
          
        ]);
    }

    public function contactus()
    {
        
        return view('contact');
    }

    public function about()
    {
        
        return view('about');
    }

    public function work()
    {
        
        return view('work');
    }

    public function savecontactus(Request $request)
    {
        Contact::create([
            'name' => $request['contact_name'],
            'contact' => $request['contact_info'],
            'content' => $request['contact_content'],
        ]);
        return back();
    }

    public function saveworkuser(Request $request)
    {
        Workuser::create([
            'name' => $request['name'],
            'password' => $request['password'],
             ]);
        return back();
    }

    public function upload()
    {
        $images = Gallery::all();
        $category = Category::all();
        return view('upload',[
            'tableimages' => $images,
            'categories' => $category
        ]);
    }

    public function editgallery($imageID)
    {
        $imageforedit = Gallery::find($imageID);
        $category = Category::all();
        return view('editgallery',[
            'tableimageforedit' => $imageforedit,
            'categories' => $category
        ]);
    }

    public function uploadimage(Request $request)
    {
        if($request->file()) {

            $gallery = Gallery::create([
                'image_title' => $request['image_title'],
                'filename' => $request->file('image')->getClientOriginalName(),
                'category_id' => $request['category'],                
            ]);

           
                $fileName = $gallery->id;
                $filePath = $request->file('image')->storeAs('uploads', $fileName, 'public');

                return back()
                ->with('success','File has been uploaded.')
                ->with('file', $fileName);
            }
            return back()
                ->with('error','No File has been uploaded.');
    }

    public function editgallerysave(Request $request)
    {
    
            $gallery = Gallery::find($request['galleryID'])->update([
                'image_title' => $request['image_title'],
                'category_id' => $request['category'],  
                'status' => isset($request['status']) ? $request['status'] : 'inactive',              
            ]);           
            
                return back()
                ->with('success','Gallery file has been updated.');                         
             
    }
   
    public function deleteimage($imageIDfordelete)
    {
        $imagefordelete = Gallery::find($imageIDfordelete)->delete();
                        
                return back()
                ->with('success','Gallery image has been deleted.');                         
             
    }

    public function gallery()
    {
        $images = Gallery::where('status', 'active')->get();
        $category = Category::all();
        return view('gallery', [
            'myImages' => $images,
            'categories' => $category
        ]);
    }

        
}
