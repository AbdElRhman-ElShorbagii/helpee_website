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
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($subscribes as $s)
                            <tr>
                                <td>{{$s->id}}</td>
                                <td>{{$s->email}}</td>
                                <td>
                                    <form action="{{ route('subscribeForm.destroy', $s->id)}}" method="post">
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