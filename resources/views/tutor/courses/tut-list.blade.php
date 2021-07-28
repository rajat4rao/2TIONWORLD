@extends('layouts.tut.tut')

@section('content')
    <!-- Header Message -->
    @section('header-message')
        This is the list of your assigned courses 
    @endsection

    <form class="form-group" action="{{ action('TutorsDashboardController@storeCourse') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="container">
            <div>
                <label for="name"><b>Name</b></label>
                <input id="name" class="form-control" type="text" name="name" placeholder="Input course Name">
                <br>
                
                <label for="description"><b>Description</b></label>
                <textarea id="description" class="form-control" type="textarea" name="description" placeholder="Add Description"></textarea>
                <br>                   
            </div>
            <div>
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </div>
    </form>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        


        <table class="table table-light">
            <thead class="card-header">
                <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php $c=1; ?>
                @foreach($tutCourses as $tutCourse)
                <tr >
                    <td style="width: 10%"> {{$c++}}</td>
                    <td style="width: 25%"> {{$tutCourse->name}}</td>
                    <td style="width: 40%">{{$tutCourse->description}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
    
@endsection