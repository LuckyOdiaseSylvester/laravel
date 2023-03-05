<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <form action="{{ route('letsee') }} " enctype="multipart/form-data" method="POST">
        @csrf
        <div class="main-panel">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                <div class="card-body">
          
        <div class="row mb-3">
            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Product Title') }}</label>

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
              <input id="discount" type="text" class="form-control @error('discount') is-invalid @enderror" name="discount" value="{{ old('discount') }}"  autocomplete="discount" autofocus>

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
          <select id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>
             @foreach ($products as $product )
             <option  class="" value="{{ $product->category }}">{{ $product->category }}</option>
             @endforeach
          </select>

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
      <input id="image" type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" required autocomplete="email" autofocus>

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




</body>
</html>