<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function uploadImages(Request $request)
    {
        // تحقق من وجود الملفات
        if ($request->hasFile('images')) {
            $uploadedImages = [];

            // رفع كل صورة على حدة
            foreach ($request->file('images') as $image) {
                $path = $image->store('uploads', 'public'); // تخزين الصورة في مجلد 'uploads'
                $uploadedImages[] = asset('storage/' . $path); // حفظ مسار الصورة
            }

            return response()->json(['success' => true, 'urls' => $uploadedImages]);
        }

        return response()->json(['success' => false, 'message' => 'لم يتم رفع أي صور.']);
    }
}
