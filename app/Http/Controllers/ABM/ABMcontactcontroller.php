<?php

namespace App\Http\Controllers\ABM;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\contactBackground;

class ABMcontactcontroller extends Controller
{
  public function index(){

    $contacts = contactBackground::all();

    return view('/ABM/contact/mainContact', [
      'contacts' => $contacts
    ]);
  }

  public function addContact(request $request){

    $contact = new contactBackground;
    $contact->id = null;
    $contact->title = $request->title;
    $contact->text = $request->text;

    if($request->file('photo')){

      $this->validate($request, [
          'photo' => 'required',
          'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
      ]);

      $destination = public_path() . '/storage/' . $contact->photoName;

      if(File::exists($destination)){
        File::delete($destination);
      }

      $imagename = Str::slug("$request->title");

      $image = $request->file('photo');

          $extension = $image->getClientOriginalExtension();

            $name = $imagename . "." . $extension;
            $image->move(public_path().'/storage/', $name);

            $contact->photoName = $name;

    }

    $contact->save();

    return redirect('/ABM/contact/mainContact');

  }

  public function editContactDirect($id){

    $contact = contactBackground::find($id);

    return view('ABM.contact.editContact', [
      "contact" => $contact
    ]);

  }

  public function editContact(request $request){

    $contact = contactBackground::find($request->id);

    $contact->title = $request->title;
    $contact->text = $request->text;

    if($request->file('photo')){

      $this->validate($request, [
          'photo' => 'required',
          'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000'
      ]);

      $destination = public_path() . '/storage/' . $contact->photoName;

      if(File::exists($destination)){
        File::delete($destination);
      }


      $imagename = Str::slug("$request->title");

      $image = $request->file('photo');

          $extension = $image->getClientOriginalExtension();

            $name = $imagename . "." . $extension;
            $image->move(public_path().'/storage/', $name);

            $contact->photoName = $name;

    }

    $contact->save();

    return redirect()->back();


  }

  public function removePhoto($id){

    $contact = contactBackground::find($id);

    $destination = public_path() . '/storage/' . $contact->photoName;
    if(File::exists($destination)){
      File::delete($destination);
    }

    return redirect()->back();

  }

  public function removeContact($id){

    $contact = contactBackground::find($id);

    $destination = public_path() . '/storage/' . $contact->photoName;
    if(File::exists($destination)){
      File::delete($destination);
    }

    contactBackground::destroy($id);

    return redirect()->back();

  }

}
