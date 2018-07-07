<?php

namespace App\Http\Controllers\Admin;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RestaurantPhotoController extends Controller
{
    public function index($id)
    {
    	$restaurant_id = $id;
    	return view('admin.restaurants.photos.index', compact('restaurant_id'));
    }

    public function save(Request $request, $id)
    {
		foreach($request->file('photos') as $photo) {
			$newName =  sha1($photo->getClientOriginalName()) . uniqid() . '.' . $photo->getClientOriginalExtension();
			$photo->move(public_path('images'), $newName);

			$restaurant = Restaurant::find($id);
			$restaurant->photos()->create([
				'photo' => $newName
			]);

			flash()->success('Upload de Fotos Realizado com Sucesso!');
			return redirect()->route('restaurant.photo', ['id' => $id]);
		}
    }
}
