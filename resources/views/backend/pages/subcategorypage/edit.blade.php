@extends('backend.pages.partials.dashboard')
@section('content')

<div class="col-sm-12 col-xl-6" style="margin-left:240px; margin-top:80px;">

<div class="bg-secondary rounded h-100 p-4">
                            <center><h2 class="mb-4">SubCategory Update</h2></center>
                            
                            

                            <form action="{{route('Subcat.update',$subcats_edit->id)}}" method="post">
                                @method('PUT')
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$subcats_edit->subcat_name}}" required name="subcat_name" class="form-control" id="floatingInput"
                                    placeholder="your name">
                                <label for="floatingInput">Sub-Category Name</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="text" value="{{$subcats_edit->subcat_status}}" required name="subcat_status" class="form-control" id="floatingInput"
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

                            <div class="form-floating">
                                <textarea class="form-control" value="{{$subcats_edit->subcat_description}}" required name="subcat_description" placeholder="Leave a comment here"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                            <div class="form-floating">
                            <button class="btn btn-info rounded-pill m-2" type="submit">Send</button>

                            </div>
                            </form>
                        </div>

</div>

@endsection