
<div class="container">
    <div class="row justify-content">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3>Add Contact</h3>
                </div>
                <div class="card-body">
                    <form action="/contacts/{{$contact->id}}" method="post">
                        @csrf
                        @method("PATCH")
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Contact Name" value="{{$contact->name}}">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" @error('email') is-invalid @enderror  placeholder="Contact email" value="{{$contact->email}}">
                            @error('email') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="Contact phone" value="{{$contact->phone}}">
                            @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Update Contact" >
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

