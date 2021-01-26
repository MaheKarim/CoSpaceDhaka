<?php

namespace App\Http\Controllers;

use App\User;
use App\Schedule;
use App\SiteSettings;
use App\Teacher;
use Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\UploadTrait;
use App\Http\Controllers\Str;


class ScheduleController extends Controller
{


    function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        //
        $data = User::find(Auth::id());
        $details = Teacher::where('user_id', $data->id)->first();
        $details_user = User::where('id', $data->id)->first();
        $settings = SiteSettings::find(1);
        $schedules = Schedule::where('user_id', $data->id)->get();

        return view('backend.multi-dashboard.doctor._show_schedule' , compact('settings', 'data','details', 'details_user', 'schedules'));
    }


    public function store(Request $request)
    {
        //
        $request->validate([
            'space' => 'required|min:3|max:120',
        ]);

        $schedules = new Schedule();
        $schedules->space = $request->space;
        $schedules->user_id = auth()->user()->id;
        $schedules->space_size = $request->space_size;
        $schedules->price = $request->price;
        $schedules->area_name_id = $request->area_name_id;
        $schedules->category_name_id = $request->category_name_id;
        //$schedules->space_image = $request;

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/schedule', $filename);
            $schedules->image = $filename;
        } else {
            return $request;
            $schedules->image = '';
        }

        // if ($request->has('space_image')) {
        //     // Get image file
        //     $image = $request->file('space_image');
        //     // Make a image name based on user name and current timestamp
        //     $name = Str::slug($request->input('name')).'_'.time();
        //     // Define folder path
        //     $folder = '/uploads/images/';
        //     // Make a file path where image will be stored [ folder path + file name + file extension]
        //     $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
        //     // Upload image
        //     $this->uploadOne($image, $folder, 'public', $name);
        //     // Set user profile image path in database to filePath
        //     $schedules->space_image = $filePath;
        // }
        // Persist user record to database

        $schedules->save();

        session()->flash('success','Space Created Successfully!');
        return back();

    }


    public  function  delete($id)
    {
        $data = [ ];
        $data['schedules'] = Schedule::find($id);
        $data['schedules']->delete();
        session()->flash('success','Schedule Deleted Successfully!');
        return back();
    }

}
