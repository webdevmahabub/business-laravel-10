<?php

namespace App\Http\Controllers;

use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image As Image;


class HomeSliderController extends Controller{

    public function AllSlider(){
      $homeSlide = HomeSlide::latest()->get();
      return view('admin.home_slider.home_slide_all', compact('homeSlide'));
    } //End method





public function AddSlider(){


return view('admin.home_slider.home_slide_add');

}// End Method



public function StoreSlider(Request $request){
 
       $image = $request->file('home_slide');
       $name_gen = date('YmdHi').$image->getClientOriginalName();
       Image::make($image)->resize(1920,834)->save('upload/home_slide/'.$name_gen);
       $save_url = 'upload/home_slide/'.$name_gen;



       HomeSlide::insert([
        'title' => $request->title,
        'web_url' => $request->web_url,
        'home_slide' => $save_url,

    ]); 
    $notification = array(
    'message' => 'Home Slide Updated with Image Successfully', 
    'alert-type' => 'success'
);

return redirect()->route('all.slider')->with($notification);

} // End Method





public function EditSlide($id)
{

 $slider_edit = HomeSlide::findOrFail($id);
    return view('admin.home_slider.home_slide_eddit',compact('slider_edit'));
}



    public function UpdateSlider(Request $request){
      $slider_id = $request->id;
      $old_img = $request->old_image;

      if($request->file('home_slide')) {
       $image = $request->file('home_slide');
       $name_gen = date('YmdHi').$image->getClientOriginalName();
       Image::make($image)->resize(1920,834)->save('upload/home_slide/'.$name_gen);
       $save_url = 'upload/home_slide/'.$name_gen;

        if (file_exists($old_img)) {
                 unlink($old_img);
              }

       HomeSlide::findOrFail($slider_id)->update([
        'title' => $request->title,
        'web_url' => $request->web_url,
        'home_slide' => $save_url,

    ]); 
    $notification = array(
    'message' => 'Home Slide Updated with Image Successfully', 
    'alert-type' => 'success'
);

return redirect()->route('all.slider')->with($notification);

} else{
    
       HomeSlide::findOrFail($slider_id)->update([
        'title' => $request->title,
        'web_url' => $request->web_url,

    ]); 
    $notification = array(
    'message' => 'Home Slide Updated without Image Successfully', 
    'alert-type' => 'success'
);

return redirect()->route('all.slider')->with($notification);

} // end Else

} // End Method 


// public function SliderUsers(){
   
//     $allSlide = HomeSlide::all();
//     return view('frontend.index', compact('allSlide'));
// }




public function DeleteSlider($id){
  

  HomeSlide::findOrFail($id)->delete();


   $notification = array(
    'message' => 'Home Slide Updated without Image Successfully', 
    'alert-type' => 'success'
);
  return redirect()->back()->with($notification);

} // End Method


}
