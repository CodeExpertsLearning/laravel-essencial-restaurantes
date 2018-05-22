<?php

namespace App\Http\Controllers\Admin;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index()
    {
    	$restaurants = Auth::user()->restaurants()->select('id')->get()->toArray();
    	$menus = Menu::whereIn('restaurant_id', $restaurants)->get();

	    return view('admin.menus.index', compact('menus'));
    }

	public function new()
	{
		$restaurants = Auth::user()->restaurants;
		return view('admin.menus.store', compact('restaurants'));
	}

	public function store(MenuRequest $request)
	{
		$menuData = $request->all();
		$request->validated();

		$restaurant = Restaurant::find($menuData['restaurant_id']);
		$restaurant->menus()->create($menuData);

		flash('Menu criado com sucesso!')->success();
		return redirect()->route('menu.index');
	}

	public function edit(Menu $menu)
	{
		$restaurants = Auth::user()->restaurants;

		return view('admin.menus.edit', compact('menu', 'restaurants'));
	}

	public function update(MenuRequest $request, $id)
	{
		$menuData = $request->all();

		$request->validated();

		$menu = Menu::find($id);
		$menu->restaurant()->associate($menuData['restaurant_id']);
		$menu->update($menuData);

		flash('Menu atualizado com sucesso!')->success();
		return redirect()->route('menu.edit', ['menu' => $id]);
	}

	public function delete($id)
	{
		$menu = Menu::findOrFail($id);
		$menu->delete();

		flash('Menu removido com sucesso!')->success();
		return redirect()->route('menu.index');
	}
}
