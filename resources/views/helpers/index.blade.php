@extends('page')

@section('title', 'Helpee Admin')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-12" style="overflow:scroll">
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Job</th>
                                <th scope="col">Email</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Country</th>
                                <th scope="col">City</th>
                                <th scope="col">District</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($helpers as $h)
                                <tr>
                                    <td>{{$h->id}}</td>
                                    <td>{{$h->fname}}</td>
                                    <td>{{$h->lname}}</td>
                                    <td>{{$h->gender}}</td>
                                    <td>{{$h->job}}</td>
                                    <td>{{$h->mobileNumber}}</td>
                                    <td>{{$h->country}}</td>
                                    <td>{{$h->city}}</td>
                                    <td>{{$h->district}}</td>
                                    <td>
                                        <form action="{{ route('helperForm.destroy', $h->id)}}" method="post">
                                          @csrf
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                          </table>  
            </div>
        </div>
    </div>
@stop