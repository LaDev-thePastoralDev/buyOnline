<?php

namespace App\Http\Controllers;

use Image;
use Illuminate\Http\Request;
use App\Phone;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$phones=Phone::get();
        $phones=DB::table('phones')->where('inStock','>','0')->get();
        return view('phones.allPhones',compact('phones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.createPhones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'phone' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'cost' => 'required'
        ]);


        if($request->hasFile('image')) {

            $image = $request->file('image')->getClientOriginalName();
            //$imageName = $image->getFilename();
            //$url= Storage::put('images/' . $image, file_get_contents($request->file('image')->getRealPath()));
            $request->image->storeAs('images', $image);


//            $url = Storage::url($image);
//            $url = Storage::url($image, getRealPath());
//            echo asset('storage/"' . $image . '"');
        }

//        if($request->hasFile('image')){
//            $image=$request->file('image');
//            $imageName=$image->getClientOriginalName();
//            $location=public_path('images/'.$imageName);
////            Image::make($image)->resize(800,200)->save($location);
//            Storage::put($location,$image);
//
//        }


        if($request->phoneId==''){

            $length=5;
            $keySpace='123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $str='';
            $max=mb_strlen($keySpace,'8bit')-1;

            for($i=0;$i<$length;$i++){
                $str.=$keySpace[random_int(0,$max)];
            }

            $phoneId=$str;

        }


        $phone = new Phone();

        $phone->phone = $request->phone;
        $phone->description = $request->description;
        $phone->phoneId=$phoneId;
        $phone->image = $image;
        $phone->cost = $request->cost;

//        return dd($request->all());
        $phone->save();
        return redirect(route('phones.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $phone=Phone::findOrFail($id);
        return view('phones.showPhone',compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $phone=Phone::findOrFail($id);
        return view('phones.editPhone',['phone'=>$phone]);
//        return view('phones.editPhone',compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'phone' => 'required|max:255',
            'description' => 'required|max:255',
            'image' => 'required',
            'cost' => 'required'
        ]);


        $phone=Phone::findOrFail($id);

        $phone->phone=$request->phone;
        $phone->description=$request->description;
        $phone->cost = $request->cost;

        if($request->hasFile('image')) {

            //add new photo
            $image = $request->file('image')->getClientOriginalName();
            $request->image->storeAs('images', $image);

            $oldImage=$phone->image;

            //update the database
            $phone->image = $image;

            //Delete the Old photo
            Storage::delete($oldImage);

        }

//        $phone->update($request->all());



        $phone->save();

        return redirect()->back()->with('Phone Details Updated successfully');

    }



    public function notInStock()
    {
        $phonesNotInStock=Phone::where('inStock','<','1')->get();
        return view('phones.notInStock',compact('phonesNotInStock'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $phone=Phone::findOrFail($id);

        $oldImage=$phone->image;

        Storage::delete($oldImage);

        $phone->delete();

        return redirect(route('phones.index'));
    }
}
