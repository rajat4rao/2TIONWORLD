@extends('layouts.adm.admin2')

@section('content')

    <h2>Edit Program</h2>
    <div class="container">   
        <a href="/admin/programs" class="btn btn-default" style="background-color:orange; color:white; margin-top:20px" type="button">Back</a>
    </div> 

    <br>

    <div class="container">
        {{ Form::open(array('action' => ['AdminController@updateProgram', $program->id], 'method'=>'PUT', 'enctype'=>'multipart/form-data')) }}
                <div class="form-group">
                    {{form::label('name', 'Name')}}
                    {{form::text('name', $program->name, ['class'=>'form-control', 'placeholder'=>'Name'])}}
                </div>

                <div class="form-group">
                    {{form::label('description', 'Description')}}
                    {{form::textarea('description', $program->description, [ 'class'=>'form-control', 'placeholder'=>'Add Description'])}}
                </div>

                <div class="form-group">
                    <label for="price"><b>Price</b></label>
                    <input id="price" class="form-control" type="number" step="0.01" name="price" placeholder="Input Price" value="{{$program->price}}">
                </div>

                
                    {{form::submit('Update', ['class'=>'btn btn-primary'])}}
        
        {{ Form::close() }}
    </div>

    
@endsection