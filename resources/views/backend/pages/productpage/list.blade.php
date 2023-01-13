@extends('backend.pages.partials.dashboard')
@section('content')

<div class="col-12 p-5">
                        <div class="bg-secondary rounded h-100 p-4">
                           <center> <h2 class="mb-4">Product Table</h2></center>
                            <div >
                            <a href="{{route('product.create')}}" class="btn btn-info" >Create</a>

                            </div>
                            
                                
                            <div class="table-responsive">
                                <table class="table mt-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Brand</th>
                                            <th scope="col">Stock status</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">SubCategory</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <th scope="row">{{$product->id}}</th>
                                            <td>{{$product->Product_name}}</td>
                                            <td>
                                            <img width="70px" src="{{asset('/uploads/Productimg/'.$product->Product_image)}}" alt="img not found">

                                            </td>
                                            <td>{{$product->Product_price}}</td>
                                            <td>{{$product->Product_size}}</td>
                                            <td>{{$product->brand}}</td>
                                            <td>{{$product->stock_status}}</td>
                                        <td>{{$product->cat_Relation->category_name}}</td>
                                <td>{{$product->subcat_Relation->subcat_name}}</td>
                                            <td>{{$product->product_description}}</td>
                                            <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-light">Edit</a></td>
                                            <td><a href="{{route('product.delete',$product->id)}}" class="btn btn-primary">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

 @endsection                    