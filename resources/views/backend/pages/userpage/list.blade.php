@extends('backend.pages.partials.dashboard')
@section('content')

<div class="col-12 p-5">
                        <div class="bg-secondary rounded h-100 p-4">
                           <center> <h2 class="mb-4">User Table</h2></center>
                            <div >
                            <a href="{{route('user.create')}}" class="btn btn-info" >Create</a>

                            </div>
                            
                                
                            <div class="table-responsive">
                                <table class="table mt-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">ZIP</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td>jhon@email.com</td>
                                            <td>USA</td>
                                            <td>USA</td>
                                            <td>USA</td>
                                            <td><a href="" class="btn btn-light">Edit</a></td>
                                            <td><a href="" class="btn btn-primary">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>mark@email.com</td>
                                            <td>UK</td>
                                            <td>UK</td>
                                            <td>UK</td>
                                            <td><a href="" class="btn btn-light">Edit</a></td>
                                            <td><a href="" class="btn btn-primary">Delete</a></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>jacob@email.com</td>
                                            <td>AU</td>
                                            <td>AU</td>
                                            <td>789</td>
                                            <td><a href="" class="btn btn-light">Edit</a></td>
                                            <td><a href="" class="btn btn-primary">Delete</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

 @endsection                    