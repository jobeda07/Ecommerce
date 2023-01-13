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
                           <center> <h2 class="mb-4">SubCategory Table</h2></center>
                            <div >
                            <a href="{{route('Subcat.create')}}" class="btn btn-success rounded-pill m-2" >Create</a>

                            </div>
                            
                                
                            <div class="table-responsive">
                                <table class="table mt-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">SubCategory Name</th>
                                            <th scope="col">Stock Status</th>
                                            <th scope="col">Category Name </th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subcats as $subcat)
                                        <tr>
                                            <th scope="row">{{$subcat->id}}</th>
                                            <td>{{$subcat->subcat_name}}</td>
                                            <td>{{$subcat->subcat_status}}</td>
                                            <td>{{$subcat->categoryRelation->category_name}}</td>
                                            <td>{{$subcat->subcat_description}}</td>
                                            <td>
                                                <a href="{{route('Subcat.edit',$subcat->id)}}" class="btn btn-light rounded-pill m-2">Edit</a>
                                            </td>
                                            <td>
                                            <a href="{{route('Subcat.delete',$subcat->id)}}" class="btn btn-primary rounded-pill m-2">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

 @endsection                    