@extends('backend.pages.partials.dashboard')
@section('content')

<div class="col-sm-12 col-xl-6" style="margin-left:240px; margin-top:80px;">

<div class="bg-secondary rounded h-100 p-4">
                            <center><h2 class="mb-4">Product Create</h2></center>

                            <form action="{{route('product.update',$product_edit->id)}}" method="post" enctype="multipart/form-data">
                                @method('put')
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" value="{{$product_edit->Product_name}}" name="Product_name"
                                    >
                                <label for="floatingInput">Name</label>
                            </div>
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control bg-dark" name="Product_image" type="file" id="formFile">
                                <br>
                                <img width="100px" src="{{asset('/uploads/Productimg/'.$product_edit->Product_image)}}" alt="img not found">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="number" value="{{$product_edit->Product_price}}" name="Product_price" class="form-control" id="floatingInput">
                                <label for="floatingPassword">Price</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$product_edit->Product_size}}" name="Product_size" class="form-control" id="floatingInput"
                                    placeholder=" size">
                                <label for="floatingPassword">Size</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$product_edit->brand}}" name="brand" class="form-control" id="floatingInput"
                                    placeholder="Brand">
                                <label for="floatingPassword">Brand</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$product_edit->stock_status}}" name="stock_status" class="form-control" id="floatingInput"
                                    placeholder="Stock-status">
                                <label for="floatingInput">Stock status</label>
                            </div>
                                     <!-- Category -->
                            <div class="form-floating mb-3">
                                <select class="form-select" name="category_id" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select Category</option>
                                    @foreach($category as $cat)
                                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect"> selects</label>
                            </div>
                                        <!-- SubCategory -->
                            <div class="form-floating mb-3">
                                <select class="form-select" name="subcategory_id" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select SubCategory</option>
                                    @foreach($subcategory as $subcat)
                                    <option value="{{$subcat->id}}">{{$subcat->subcat_name}}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect"> selects</label>
                            </div>

                            <div class="form-floating">
                                <textarea class="form-control" value="{{$product_edit->Product_description}}" name="Product_description" placeholder="description here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                      <br>
                           <div>
                            <button class="btn btn-success" type="submit">Update</button>
                           </div>
                            </form>
                        </div>

</div>

@endsection