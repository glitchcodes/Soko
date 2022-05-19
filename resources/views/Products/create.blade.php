@extends('layouts.app')

@section('content')
<div class="container">
    <form action = "/p" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
            <div class="row">
                <h1>Create New Product</h1>
            </div>
            <div class="row mb-4">
                            <label for="product_name" class="col-md-4 col-form-label text-md-end">Product Name</label>

                            <div class="col-md-6">
                                <input id="product_name" type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus>

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-md-4 col-form-label text-md-end">Category</label>

                            <div class="col-md-6">
                                
                                <select name="category" id="category">
                                    <option value = "wine">Wine</option>
                                    <option value = "whisky">Whisky</option>
                                    <option value = "brandy">Brandy</option>
                                    <option value = "scotch">Scotch</option>
                                    <option value = "spirit">Spirit</option>
                                    <option value = "gin">Gin</option>
                                    <option value = "vodka">Vodka</option>
                                    <option value = "beer">Beer</option>
                                    <option value = "rum">Rum</option>
                                    <option value = "mixer">Mixer</option>
                                    <option value = "bourbon">Bourbon</option>
                                    <option value = "cognac">Cognac</option>
                                    <option value = "other">Other</option>
                                </select>
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="volume" class="col-md-4 col-form-label text-md-end">Volume</label>

                            <div class="col-md-6">
                                
                                <select name="volume" id="volume">
                                    <option value = "5ltr">5ltr</option>
                                    <option value = "1ltr">1ltr</option>
                                    <option value = "750ml">750ml</option>
                                    <option value = "500ml">500ml</option>
                                    <option value = "250ml">250ml</option>
                                    <option value = "Other">Other</option>
                                </select>
                                
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="stock" class="col-md-4 col-form-label text-md-end">Stock status</label>

                            <div class="col-md-6">
                                
                                <select name="stock" id="stock">
                                    <option value = "In stock">In stock</option>
                                    <option value = "Out of stock">Out of Stock</option>
                                </select>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        < <div class="row mb-4">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Description</label> 

                            <div class="col-md-6">
                        
                            <input type="text" class="form-control" id="description" name="description">

                            </div>
                            
            
                         </div>

                        <div class="row">
                            <label for="image" class="col-md-4 col-form-label text-md-end">Product Image</label> 

                            <div class="col-md-6">
                        
                            <input type="file" class="form-control-file" id="image" name="image">
                            
            @error('image')
            
             <strong>{{ $message }}</strong>
                
             @enderror
            </div>

                        
            <div class="row pt-4">
                <button class="btn btn-primary">Add New Post</button>
            </div>
    

            </div>
        </div>

        </form>
</div>
@endsection