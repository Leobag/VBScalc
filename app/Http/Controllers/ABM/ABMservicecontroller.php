<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\service;
use App\serviceBackground;
use App\serviceDescription;
use App\servicePhoto;

class ABMservicecontroller extends Controller
{

      public function index(){

        $services = service::all();
        $backgrounds = serviceBackground::all();

        return view('/ABM/services/mainServices', [
          'services' => $services,
          'backgrounds' => $backgrounds
        ]);
      }

      public function editServiceDirect($id){

        $service = service::find($id);
        $descriptions = $service->descriptions;
        $photos = $service->photos;

        return view('ABM.services.serviceTable.editService', [
          "service" => $service,
          "descriptions" => $descriptions,
          "photos" => $photos
        ]);
      }

      public function addService(request $request){

        $service = new service;
        $service->id = null;
        $service->title = $request->title;
        $service->description = $request->description;
        $service->save();

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

            $newphoto = new servicePhoto;
            $newphoto->id = null;
            $newphoto->name = $load;
            $newphoto->service_id = $service->id;
            $newphoto->save();
          }

          if($request->has('newDescription')){

            foreach ($request->get('newDescription') as $key => $description) {

              $newDesc = new serviceDescription;
              $newDesc->id = null;
              $newDesc->text1 = $description["text1"];
              $newDesc->text2 = $description["text2"];
              $newDesc->service_id = $service->id;
              $newDesc->save();

            }
          }

          return redirect('/ABM/service/mainService');
      }

      public function editService(request $request){

        if($request->file('photos')){


        $this->validate($request, [
                      'photos' => 'required',
                      'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'

              ]);




            foreach($request->file('photos') as $key => $image)
              {


                $imagename = Str::slug("$request->title");
                $extension = $image->getClientOriginalExtension();

                  $name = $imagename.($request->counter + $key). "." . $extension;
                  $image->move(public_path().'/storage/', $name);
                  $data[] = $name;
              }
            foreach($data as $one){
              $newphoto = new servicePhoto;
              $newphoto->id = null;
              $newphoto->name = $one;
              $newphoto->service_id = $request->id;
              $newphoto->save();
            }
          }

          if($request->has('descriptions')){

              foreach ($request->get('descriptions') as $key => $value) {

                $description = serviceDescription::find($key);

                $description->text1 = $value["text1"];
                $description->text2 = $value["text2"];
                $description->save();
              }
          }


          if($request->has('newDescription')){
            foreach ($request->get('newDescription') as $key => $description) {

              $newDesc = new serviceDescription;
              $newDesc->id = null;
              $newDesc->text1 = $description["text1"];
              $newDesc->text2 = $description["text2"];
              $newDesc->service_id = $request->id;
              $newDesc->save();

            }
          }

          if($request->has('edService')){

              foreach ($request->get('edService') as $key => $value) {

                  $service = service::find($key);
                  $service->title = $value["title"];
                  $service->description = $value["description"];
                  $service->save();
              }
          }

          return redirect()->back();

      }

      public function removeServicePhoto($id){

        $photo = servicePhoto::find($id);

        $file = $photo->name;
        $destination = public_path() . '/storage/' . $file;

        if(File::exists($destination)){
          File::delete($destination);
        }

        servicePhoto::destroy($id);

        return redirect()->back();

      }

      public function removeServiceDescription($id){

        serviceDescription::destroy($id);

        return redirect()->back();

      }

      public function removeService($id){

        $service = service::find($id);

        $descriptions = $service->descriptions;

        foreach ($descriptions as $key => $value) {
          serviceDescription::destroy($value->id);
        }

        $photos = $service->photos;

        foreach ($photos as $key => $photo) {

          $file = $photo->name;
          $destination = public_path() . '/storage/' . $file;
          if(File::exists($destination)){
            File::delete($destination);
          }

          servicePhoto::destroy($photo->id);

        }

        service::destroy($id);

        return redirect()->back();

      }

      public function addBackground(request $request){

        $background = new serviceBackground;

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

          return redirect('/ABM/service/mainService');

      }

      public function editBackgroundDirect($id){


          $background = serviceBackground::find($id);


        return view('ABM.services.serviceBackgroundTable.editBackground', [
          "background" => $background
        ]);
      }

      public function editBackground(request $request){

        $background = serviceBackground::find($request->id);

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

        $background = serviceBackground::find($id);

        $destination = public_path() . '/storage/' . $background->photoName;
        if(File::exists($destination)){
          File::delete($destination);
        }

        serviceBackground::destroy($id);

        return redirect()->back();
      }

      public function removeBackgroundPhoto($id){
        $background = serviceBackground::find($id);

        $destination = public_path() . '/storage/' . $background->photoName;
        if(File::exists($destination)){
          File::delete($destination);
        }

        return redirect()->back();
      }

}
