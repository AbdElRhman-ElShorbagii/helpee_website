@extends('page')

@section('title', 'Helpee Admin')

@section('content_header')
@stop

@section('content')
<div class="container">
        <div class="row">
            <div class="col-lg-12">
                    <table class="table table-striped" style="overflow:scroll">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($messages as $m)
                                <tr>
                                    <td>{{$m->id}}</td>
                                    <td>{{$m->name}}</td>
                                    <td>{{$m->email}}</td>
                                    <td>{{$m->message}}</td>
                                    <td>
                                        <form action="{{ route('contactForm.destroy', $m->id)}}" method="post">
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