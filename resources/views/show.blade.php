{{--@extends('layout.app')--}}

{{--@section('content')--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <a href="/contacts/create">Contact</a>
                        <br>
                        <br>
                        @if(Session('contactAdded'))
                            <div class="message">{{Session('contactAdded')}}</div>
                        @endif

                        @if(count($contacts))
                            <table>
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td><a class="btn btn-warning" href=" contacts/{{$contact->id}}/edit">Edit</a></td>
                                        <td>
                                            <form method="post" action="/contacts/{{$contact->id}}">
                                                @csrf
                                                @method("DELETE")
                                                <input type="submit" value="Delete" name="Delete" >
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{$contacts->links()}}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--@endsection--}}
