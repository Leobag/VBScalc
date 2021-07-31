<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\abouts;
use App\aboutPhoto;
use App\aboutDescription;
use App\aboutBackground;
use App\experience;
use App\experiencePhoto;
use App\experienceDescription;


class ABMaboutcontroller extends Controller
{


  public function  index(){

  $abouts = abouts::all();
  $backgrounds = aboutBackground::all();
  $experiences = experience::all();

  return view('/ABM/about/mainAbout', [
    'abouts' => $abouts,
    'backgrounds' => $backgrounds,
    'experiences' => $experiences
  ]);
}

    //ABOUT-TABLE

public function editAboutDirect($id){


  $about = abouts::find($id);
  $descriptions = $about->descriptions;
  $photos = $about->photos;

return view('ABM.about.aboutTable.editAbout', [
  "about" => $about,
  "descriptions" => $descriptions,
  "photos" => $photos
]);
}

public function addAbout(request $request){

  $about = new abouts;
  $about->id = null;
  $about->title = $request->title;
  $about->intro1 = $request->intro1;
  $about->intro2 = $request->intro2;
  $about->save();

  if($request->file('photos')){

    $this->validate($request, [
      'photos' => 'required',
      'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:10000'
    ]);



    foreach ($request->file('photos') as $key => $image) {
      $imagename = Str::slug("$request->title");
      $extension = $image->getClientOriginalExtension();

        $name = $imagename.($request->counter + $key). "." . $extension;
        $image->move(public_path().'/storage/', $name);
      $data[] = $name;

    }
  }

    foreach ($data as $key => $load) {

      $newphoto = new aboutPhoto;
      $newphoto->id = null;
      $newphoto->name = $load;
      $newphoto->about_id = $about->id;
      $newphoto->save();
    }

    if($request->has('newDescription')){

      foreach ($request->get('newDescription') as $key => $description) {

        $newDesc = new aboutDescription;
        $newDesc->id = null;
        $newDesc->text1 = $description["text1"];
        $newDesc->text2 = $description["text2"];
        $newDesc->about_id = $about->id;
        $newDesc->save();

      }

    }

    return redirect('/ABM/about/mainAbout');

}

public function editAbout(request $request){

  if($request->file('abPhotos')){


  $this->validate($request, [
                'abPhotos' => 'required',
                'abPhotos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

        ]);




      foreach($request->file('abPhotos') as $key => $image)
        {


          $imagename = Str::slug("$request->title");
          $extension = $image->getClientOriginalExtension();

            $name = $imagename.($request->counter + $key). "." . $extension;
            $image->move(public_path().'/storage/', $name);
            $data[] = $name;
        }
      foreach($data as $one){
        $newphoto = new aboutPhoto;
        $newphoto->id = null;
        $newphoto->name = $one;
        $newphoto->about_id = $request->id;
        $newphoto->save();
      }
}

  if($request->has('abDescriptions')){

      foreach ($request->get('abDescriptions') as $key => $value) {

        $description = aboutDescription::find($key);

        $description->text1 = $value["text1"];
        $description->text2 = $value["text2"];
        $description->save();
      }
  }

  if($request->has('newDescription')){
    foreach ($request->get('newDescription') as $key => $description) {

      $newDesc = new aboutDescription;
      $newDesc->id = null;
      $newDesc->text1 = $description["text1"];
      $newDesc->text2 = $description["text2"];
      $newDesc->about_id = $request->id;
      $newDesc->save();

    }
  }

  if($request->has('edAbouts')){

      foreach ($request->get('edAbouts') as $key => $value) {

          $about = abouts::find($key);
          $about->title = $value["title"];
          $about->intro1 = $value["intro1"];
          $about->intro2 = $value["intro2"];
          $about->save();

      }
  }



  return redirect()->back();

}

public function removeAboutPhoto($id){
  $photo = aboutPhoto::find($id);

  $file = $photo->name;
  $destination = public_path() . '/storage/' . $file;

  if(File::exists($destination)){
    File::delete($destination);
  }

  aboutPhoto::destroy($id);

  return redirect()->back();
}

public function removeAboutDescription($id){
  aboutDescription::destroy($id);

  return redirect()->back();
}

public function removeAbout($id){
  $about = abouts::find($id);

  $descriptions = $about->descriptions;

  foreach ($descriptions as $key => $value) {
    aboutDescription::destroy($value->id);
  }

  $photos = $about->photos;

  foreach ($photos as $key => $photo) {

    $file = $photo->name;
    $destination = public_path() . '/storage/' . $file;
    if(File::exists($destination)){
      File::delete($destination);
    }

    aboutPhoto::destroy($photo->id);

  }

  abouts::destroy($id);

  return redirect()->back();
}




public function addBackground(request $request){

  $background = new aboutBackground;

  $background->id = null;
  $background->title = $request->title;

  $this->validate($request, [
    'photo' => 'required',
    'photo' => 'image|mimes:jpeg,png,jpg|max:10000'
  ]);

  $imagename = Str::slug("$background->title");

  $photo = $request->photo;


    $extension = $photo->getClientOriginalExtension();

    $name = $imagename . "." . $extension;
    $photo->move(public_path() . '/storage/' , $name);

    $background->photoName = $name;

    $background->save();

    return redirect('/ABM/about/mainAbout');

}
public function editBackgroundDirect($id){


    $background = aboutBackground::find($id);


  return view('ABM.about.backgroundTable.editBackground', [
    "background" => $background
  ]);
}

public function editBackground(request $request){

  $background = aboutBackground::find($request->id);

  $background->title = $request->title;

  if($request->file('photo')){

    $this->validate($request, [
        'photo' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
    ]);

    $destination = public_path() . '/storage/' . $background->photoName;

    if(File::exists($destination)){
      File::delete($destination);
    }



    $imagename = Str::slug("$request->title");

    $image = $request->file('photo');

        $extension = $image->getClientOriginalExtension();

          $name = $imagename . "." . $extension;
          $image->move(public_path().'/storage/', $name);

          $background->photoName = $name;

  }

  $background->save();

  return redirect()->back();

}

public function removeBackground($id){

  $background = aboutBackground::find($id);

  $destination = public_path() . '/storage/' . $background->photoName;
  if(File::exists($destination)){
    File::delete($destination);
  }

  aboutBackground::destroy($id);

return redirect()->back();
}

public function removeBackgroundPhoto($id){
  $background = aboutBackground::find($id);

  $destination = public_path() . '/storage/' . $background->photoName;
  if(File::exists($destination)){
    File::delete($destination);
  }

  return redirect()->back();
}


public function editExperienceDirect($id){


  $experience = experience::find($id);
  $descriptions = $experience->descriptions;
  $photos = $experience->photos;

return view('ABM.about.experiencesTable.editExperience', [
  "experience" => $experience,
  "descriptions" => $descriptions,
  "photos" => $photos
]);
}


public function addExperience(request $request){

  $experience = new experience;
  $experience->id = null;
  $experience->company_name = $request->company_name;
  $experience->role = $request->role;
  $experience->years = $request->years;
  $experience->save();

  if($request->file('photos')){

    $this->validate($request, [
      'photos' => 'required',
      'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:10000'
    ]);

    $imagename = Str::slug("$experience->company_name");

    foreach ($request->file('photos') as $key => $image) {

      $extension = $image->getClientOriginalExtension();

      $name = $imagename . ($key + 1) . "." . $extension;
      $image->move(public_path() . '/storage/' , $name);
      $data[] = $name;

    }

    foreach ($data as $key => $load) {

      $newphoto = new experiencePhoto;
      $newphoto->id = null;
      $newphoto->name = $load;
      $newphoto->experience_id = $experience->id;
      $newphoto->save();
    }
  }

  if($request->has('newDescription')){

    foreach ($request->get('newDescription') as $key => $description) {

      $newDesc = new experienceDescription;
      $newDesc->id = null;
      $newDesc->text1 = $description["text1"];
      $newDesc->text2 = $description["text2"];
      $newDesc->experience_id = $experience->id;
      $newDesc->save();

    }

  }

  return redirect('/ABM/about/mainAbout');

}

public function editExperience(request $request){


  if($request->file('photos')){


    $this->validate($request, [
                  'photos' => 'required',
                  'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

          ]);

      $imagename = Str::slug("$request->company_name");

        foreach($request->file('photos') as $key => $image)
          {
            $extension = $image->getClientOriginalExtension();

              $name = $imagename.($request->counter + $key). "." . $extension;
              $image->move(public_path().'/storage/', $name);
              $data[] = $name;
          }
        foreach($data as $one){
          $newphoto = new experiencePhoto;
          $newphoto->id = null;
          $newphoto->name = $one;
          $newphoto->experience_id = $request->id;
          $newphoto->save();
        }
      }


      if($request->has('exDescriptions')){

          foreach ($request->get('exDescriptions') as $key => $value) {
            $description = experienceDescription::find($key);
            $description->text1 = $value["text1"];
            $description->text2 = $value["text2"];
            $description->save();
          }
      }

      if($request->has('newDescription')){
        foreach ($request->get('newDescription') as $key => $description) {

          $newDesc = new experienceDescription;
          $newDesc->id = null;
          $newDesc->text1 = $description["text1"];
          $newDesc->text2 = $description["text2"];
          $newDesc->experience_id = $request->id;
          $newDesc->save();

        }
      }

      if($request->has('edExperiences')){

          foreach ($request->get('edExperiences') as $key => $value) {

              $about = experience::find($key);
              $about->company_name = $value["company_name"];
              $about->role = $value["role"];
              $about->years = $value["years"];
              $about->save();

          }
      }

return redirect()->back();
}

public function removeExperienceDescription($id){
  experienceDescription::destroy($id);

  return redirect()->back();
}

public function removeExperiencePhoto($id){
  $photo = experiencePhoto::find($id);

  $file = $photo->name;
  $destination = public_path() . '/storage/' . $file;
  if(File::exists($destination)){
    File::delete($destination);
  }

  experiencePhoto::destroy($id);

  return redirect()->back();


}

public function removeExperience($id){
  $experience = experience::find($id);

  $descriptions = $experience->descriptions;
  $photos = $experience->photos;

  foreach ($photos as $key => $photo) {

    $file = $photo->name;
    $destination = public_path() . '/storage/' . $file;
    if(File::exists($destination)){
      File::delete($destination);
    }

    experiencePhoto::destroy($photo->id);

  }

  foreach ($descriptions as $key => $value) {
    experienceDescription::destroy($value->id);
  }

  experience::destroy($id);

  return redirect()->back();
}

}
