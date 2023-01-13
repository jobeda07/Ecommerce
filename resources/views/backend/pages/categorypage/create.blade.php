@extends('backend.pages.partials.dashboard')
@section('content')

<div class="col-sm-12 col-xl-6" style="margin-left:240px; margin-top:80px;">

<div class="bg-secondary rounded h-100 p-4">
                            <center><h2 class="mb-4">Category Create</h2></center>
                            
                            

                            <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                            <div class="form-floating mb-3">
                                <input type="text" required name="category_name" class="form-control" id="floatingInput"
                                    placeholder="your name">
                                <label for="floatingInput">Category Name</label>
                            </div>
                            
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Category Image</label>
                                <input class="form-control bg-dark" required type="file" name="category_image" id="formFile">
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" required name="category_status" class="form-control" id="floatingInput"
                                    placeholder="Stock-status">
                                <label for="floatingInput">Stock status</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" required name="category_description" placeholder="Leave a comment here"
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