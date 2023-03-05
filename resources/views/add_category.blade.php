@extends('layouts.admin')
@section('content')
        <!-- partial -->
        <div class="main-panel">
          <div class=" content-wrapper">

            @if(Session::has('add'))
              <div class="alert alert-success" role="alert">
                {{ Session::get('add') }}
              </div>
              @endif
              @if(Session::has('delete'))
              <div class="alert alert-danger" role="alert">
                {{ Session::get('delete') }}
              </div>
              @endif
            <h1 class="text-center">Add Category</h1>
            <form action="{{ route('add-cat') }} " method="POST">
              @csrf
            <div class="input-group">
            <input id="pay" type="text" class="form-control @error('category') is-invalid @enderror" placeholder=" Add category..."
            name="category" 
           value="{{ old('category') }}" required autocomplete="category">
           @error('category')
               <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
           @enderror
              <button class="btn btn-outline-secondary " type="submit">Add</button>
            </div>
          </form>
      
          <table class="table table-bordered">
            <tr>
              <th>Category Name</th>
              <th>Action </th>
            </tr>
           @foreach ($adds as $add )
       
            <tr>
              <td>{{ $add->category }}</td>
              <td>
                <a onclick="return confirm('Are you sure you want to delete! this')" href="{{ route('delete',$add->id) }}" class="btn btn-danger">
                  Delete
                </a>
              </td>
            </tr>
            @endforeach

          </table>

          </div>
          <!-- content-wrapper ends -->
          @endsection