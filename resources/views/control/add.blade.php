@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/control.css') }}" rel="stylesheet">
    <div class="container add control">
        <div class="title">
            <h4 class="form-title">Add product :</h4>
        </div>
        {{ Form::open( array('route' => 'control.postAdd', 'id'=>'edit-form', 'files' => true)) }}
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="imagepath">Image</label>
                            <input type="file" id="imagepath" name="imagepath" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" id="description" class="form-control" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="price">Price ($)</label>
                            <input type="number" id="price" class="form-control" name="price"  required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="catid">Category</label>
                            <select type="text" id="catid" class="form-control" name="catid" required>
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                {{csrf_field()}}
                <button type="submit" class="btn btn-success">
                    Submit Edit
                </button>
        {{ Form::close() }}
    </div>
@endsection
