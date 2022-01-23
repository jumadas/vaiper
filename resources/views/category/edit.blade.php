@extends('layouts.app')
@section('breadcrumb')
<div class="page-title-box">
    <h4 class="page-title">Home </h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('category.index') }}">List  Category</a></li>

    </ol>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    Edit Category
                </div>

                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                         <div class="form-group">
                          <label >Status</label>
                           <select name="status" class="form-control">
                               <option value="show"{{ $category->status =='show'?'selected':''  }}>Show</option>
                               <option value="hide" {{ $category->status =='hide'?'selected':''  }}>Hide</option>
                           </select>
                        </div>

                        <div class="form-group">
                          <label >Category Name</label>
                          <input type="text" name="category_name" class="form-control"  placeholder="Enter Category Name" value="{{  $category->category_name }}">
                        </div>

                        <div class="form-group">
                            <label > Category Tagline </label>
                            <input type="text"  name="category_tagline" class="form-control" placeholder="Enter Category Tagline" value="{{  $category->category_tagline }}"></textarea>
                        </div>

                        <div class="form-group">
                            <label >Old Category Photo</label><br>
                            <img width="150" src="{{ asset('uploads/category_photos').'/'.$category->category_photo }}" alt="">
                          </div>
                        <div class="form-group">
                        <label >New Category Photo</label>
                        <input type="file" name="new_category_photo" class="form-control" >
                        </div>

                        <button type="submit" class="btn btn-primary"> Edit {{ $category->category_name }} Category</button>
                      </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


