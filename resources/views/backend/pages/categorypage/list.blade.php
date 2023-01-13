@extends('backend.pages.partials.dashboard')
@section('content')

<div class="col-12 p-5">
                        @if(session()->has('message'))
                                <p class="alert alert-success">
                                    {{session()->get('message')}}
                                </p>
                                @endif

                        @if(session()->has('update'))
                                <p class="alert alert-success">
                                    {{session()->get('update')}}
                                </p>
                                @endif
                        <div class="bg-secondary rounded h-100 p-4">
                           <center> <h2 class="mb-4">Category Table</h2></center>
                            <div >
                            <a href="{{route('category.create')}}" class="btn btn-success rounded-pill m-2" >Create</a>

                            </div>
                            
                                
                            <div class="table-responsive">
                                <table class="table mt-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Category Image</th>
                                            <th scope="col">Stock Status</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($categories as $category)
                                        <tr>
                                            <th scope="row">{{$category->id}}</th>
                                            <td>{{$category->category_name}}</td>
                                            <td><img width="70px" height="70px" class="rounded-circle shadow-4-strong" src="{{url('/uploads/Categoryimg/'.$category->category_image)}}" alt="img not found"></td>
                                            <td>{{$category->category_status}}</td>
                                            <td>{{$category->category_description}}</td>
                                            
                                            <td>
                                                <a href="{{route('category.edit',$category->id)}}" class="btn btn-light rounded-pill m-2">Edit</a>
                                            </td>
                                            <td>
                                            <a href="{{route('category.delete',$category->id)}}" class="btn btn-primary rounded-pill m-2">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

 @endsection                    