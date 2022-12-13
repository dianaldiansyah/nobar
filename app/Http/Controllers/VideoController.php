<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Videos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadVideo(Request $request) {
        $video = new Videos;
        $video->name = $request->name;
        $video->description = $request->description;
        if ($request->hasFile('video'))
        {
            $path = $request->file('video')->store('', ['disk' => 'public-video']);
            $video->path = '/videos/' . $path;
        }
        $video->save();
        return redirect('/');
    }

    public function formUploadVideo() {
        return view('form', ['video' => null]);
    }

    public function getVideos(Request $request) {
        $data['latest'] = Videos::orderBy('created_at', 'DESC')->first();
        $data['others'] = Videos::orderBy('created_at', 'DESC')->get();
        
        return view('index', $data);
    }

    public function formEditVideo(Request $request, $id) {
        $video = Videos::find($id);
        return view('form', ['video' => $video]);
    }

    public function editVideo(Request $request, int $id) {
        $video = Videos::find($id);

        if ($request->name != "") {
            $video->name = $request->name;
        }

        if ($request->hasFile('video'))
        {
            $path = $request->file('video')->store('', ['disk' => 'public-video']);
            $video->path = '/videos/' . $path;
        }

        $video->save();

        return redirect('/');
    }

    public function deleteVideo(int $id) {
        $video = Videos::find($id);
        $file = Storage::delete(public_path() . '/videos/' . $video->path);
        $video->delete();
        return redirect('/');
    }
}
