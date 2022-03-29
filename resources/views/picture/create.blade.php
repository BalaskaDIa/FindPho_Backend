@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-6">
                <form action="/pho" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="card-header">
                        <div class="col-8 offset-2">

                            <div class="row">
                                <h1 class="justify-content-center pb-3">Add your photo here!</h1>
                            </div>

                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="caption" class="row justify-content-center">Photo Caption</label>


                                    <input id="caption"
                                    type="text"
                                    name="caption"
                                    class="card-text form-control @error('caption') is-invalid @enderror mb-3 mt-3"
                                    value="{{ old('caption') }}" required autocomplete="caption" autofocus>

                                    @error('caption')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="categories_id" class="row justify-content-center">Photo Category</label>

                                    <select name="categories_id" class="form-select form-select-lg mt-3 mb-3" aria-label=".form-select-lg example">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3 justify-content-center">
                                    <label for="image" class="row justify-content-center col-form-label mb-3">Choose your photo</label>

                                    <input type="file" class="form-control-file" id="image" name="image">

                                    @error('image')
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>

                                <div class="row pt-4">
                                    <button class="btn btn-light">Add Photo</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection
