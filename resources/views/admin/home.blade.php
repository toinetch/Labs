@extends('adminlte::page')

@section('content')
    <div>
        <h1 class="text-center mb-5 pb-5">Page Home</h1>
        <div class="container">
            <h2 class="text-center">Menu</h2>
            
            <form action="{{route(menu.update)}}" method="POST" enctype="multipart/form-data"></form>
            @csrf
            <div class="row">
                <div class="col-2 form-group">
                    <label for="logo">logo</label>
                    <input name="logo" type='file' id="logo" cols="30" rows="10" class="form-control">{{!empty($menu) ?$menu->logo : ''}}</>
                </div>
          
                <div class="col-2 form-group">
                    <label for="lien1">lien1</label>
                    <textarea name="lien1" id="lien1" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien1 : ''}}</textarea>
                </div>
        
                <div class="col-2 form-group">
                    <label for="lien2">lien2</label>
                    <textarea name="lien2" id="lien2" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien2 : ''}}</textarea>
                </div>
        
                <div class="col-2 form-group">
                    <label for="lien3">lien3</label>
                    <textarea name="lien3" id="lien3" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien3 : ''}}</textarea>
                </div>    
        
                <div class="col-2 form-group">
                    <label for="lien4">lien4</label>
                    <textarea name="lien4" id="lien4" cols="30" rows="5" class="form-control">{{!empty($menu)?$menu->lien4 : ''}}</textarea>
                </div>    
            </div>

            <button type="submit" class="btn btn-primary d-block mx-auto mt-5">Modifier</button>
        </div>
    </div>
    
@endsection

