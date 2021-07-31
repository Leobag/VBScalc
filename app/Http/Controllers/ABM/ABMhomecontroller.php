<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\tool;
use App\service_home;
use App\about_home;
use App\homeBackground;

class ABMhomecontroller extends Controller
{

  public function index(){

    $tools = tool::all();
    $services = service_home::all();
    $abouts = about_home::all();
    $backgrounds = homeBackground::all();

    return view('/ABM/home/mainHome', [
      'tools' => $tools,
      'services' => $services,
      'abouts' => $abouts,
      'backgrounds' => $backgrounds
    ]);
  }

  //ABOUT HOME

  public function addAbout(request $request){

    $about = new about_home;
    $about->id = null;
    $about->name = $request->name;
    $about->intro_p1 = $request->intro_p1;
    $about->intro_p2 = $request->intro_p2;

    if($request->file('photo')){

      $this->validate($request, [
          'photo' => 'required',
          'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
      ]);

      $destination = public_path() . '/storage/' . $about->photoName;

      if(File::exists($destination)){
        File::delete($destination);
      }



      $imagename = Str::slug("$request->name");

      $image = $request->file('photo');

          $extension = $image->getClientOriginalExtension();

            $name = $imagename . "." . $extension;
            $image->move(public_path().'/storage/', $name);

            $about->photoName = $name;

    }

    $about->save();

    return redirect('/ABM/home/mainHome');

  }

  public function editAboutDirect($id){

    $about = about_home::find($id);

    return view('ABM.home.about.editAbout', [
      "about" => $about
    ]);

  }

  public function editAbout(request $request){

    $about = about_home::find($request->id);

    $about->name = $request->name;
    $about->intro_p1 = $request->intro_p1;
    $about->intro_p2 = $request->intro_p2;

    if($request->file('photo')){

      $this->validate($request, [
          'photo' => 'required',
          'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
      ]);

      $destination = public_path() . '/storage/' . $about->photoName;

      if(File::exists($destination)){
        File::delete($destination);
      }


      $imagename = Str::slug("$request->name");

      $image = $request->file('photo');

          $extension = $image->getClientOriginalExtension();

            $name = $imagename . "." . $extension;
            $image->move(public_path().'/storage/', $name);

            $about->photoName = $name;

    }

    $about->save();

    return redirect()->back();


  }

  public function removeAboutPhoto($id){
    $about = about_home::find($id);

    $destination = public_path() . '/storage/' . $about->photoName;
    if(File::exists($destination)){
      File::delete($destination);
    }

    return redirect()->back();

  }

  public function removeAbout($id){

    $about = about_home::find($id);

    $destination = public_path() . '/storage/' . $about->photoName;
    if(File::exists($destination)){
      File::delete($destination);
    }

    about_home::destroy($id);

    return redirect()->back();
  }

  //SERVICES HOME

  public function addService(request $request){

    $service = new service_home;
    $service->id = null;
    $service->title = $request->title;
    $service->description = $request->description;
    $service->save();

    return redirect('ABM/home/mainHome');

  }

  public function editServiceDirect($id){

    $service = service_home::find($id);

    return view('ABM.home.services.editService', [
      "service" => $service
    ]);


  }

  public function editService(request $request){

    $service = service_home::find($request->id);

    $service->title = $request->title;
    $service->description = $request->description;

    $service->save();

    return redirect()->back();

  }

  public function removeService($id){

    service_home::destroy($id);

    return redirect()->back();


  }

  //BACKGROUND HOME

  public function addBackground(request $request){

    $background = new homeBackground;

    $background->id = null;
    $background->title = $request->title;
    $background->text = $request->text;

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

      return redirect('/ABM/home/mainHome');

  }

  public function editBackgroundDirect($id){

    $background = homeBackground::find($id);

    return view('ABM.home.background.editBackground', [
      "background" => $background
    ]);

  }

  public function editBackground(request $request){

    $background = homeBackground::find($request->id);

    $background->title = $request->title;
    $background->text = $request->text;

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

    $background = homeBackground::find($id);

    $destination = public_path() . '/storage/' . $background->photoName;
    if(File::exists($destination)){
      File::delete($destination);
    }

    homeBackground::destroy($id);

    return redirect()->back();
  }

  public function removeBackgroundPhoto($id){
    $background = homeBackground::find($id);

    $destination = public_path() . '/storage/' . $background->photoName;
    if(File::exists($destination)){
      File::delete($destination);
    }

    return redirect()->back();
  }


}
