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
            <h1 class="text-center">Edit Product</h1>
            <form action="{{ route('add-pro') }} " enctype="multipart/form-data" method="POST">
              @csrf
              <div class="main-panel">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                      <div class="card-body">
                  
              <div class="row mb-3">
                  <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Product TitleProduct Title') }}</label>

                  <div class="col-md-6">
                      <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>

                      @error('title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                  <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Product Description ') }}</label>

                  <div class="col-md-6">
                      <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                      @error('description')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>
              {{-- value="{{ $products->description }}" --}}
              <div class="row mb-3">
                  <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Product Price') }}</label>

                  <div class="col-md-6">
                      <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" required autocomplete="price">

                      @error('price')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="row mb-3">
                <label for="discount" class="col-md-4 col-form-label text-md-end">{{ __('Discount Price') }}</label>

                <div class="col-md-6">
                    <input id="discount" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}" required autocomplete="discount" autofocus>

                    @error('discount')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
              <label for="quantity" class="col-md-4 col-form-label text-md-end">{{ __('Product Quantity') }}</label>

              <div class="col-md-6">
                  <input id="quantity" type="text" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete="quantity" autofocus>

                  @error('quantity')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="row mb-3">
            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Product Category') }}</label>

            <div class="col-md-6">
                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
          <label for="image" class="col-md-4 col-form-label text-md-end">{{ __('Product Image') }}</label>

          <div class="col-md-6">
              <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="name" autofocus>

              @error('image')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
      </div>
          

              <div class="row mb-0">
                  <div class="col-md-6 offset-md-4">

                    <button type="submit" class="btn btn-outline-secondary">
                          {{ __('Add Product') }}
                      </button>
                  </div>
              </div>
             </form>

                   </div>
                 </div>
              </div>
          </div>
   </div>
</div>

          <!-- content-wrapper ends -->
          @endsection


          