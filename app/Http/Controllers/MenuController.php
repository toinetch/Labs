<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Menu;

class MenuController extends Controller
{
    public function edit($id)
    {
        $menu = Menu::find(1);

        if($menu != null) {
            return view('admin/home');
        }
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
        $menu->logo = request('logo');
        $menu->lien1 = request('lien1');
        $menu->lien1 = request('lien2');
        $menu->lien1 = request('lien3');
        $menu->lien1 = request('lien4');

        $menu-save();

        return redirect()->route('admin');
    }
}
