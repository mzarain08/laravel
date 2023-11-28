
    <div class="container">
        <div class="row justify-content">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Contact</h3>
                    </div>
                    <div class="card-body">
                        <form action="/contacts" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Contact Name" value="{{old('name')}}">
                                @error('name') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Contact email">
                                @error('email') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="form-control" placeholder="Contact phone">
                                @error('phone') <span class="text-danger">{{$message}}</span> @enderror
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Add Contact" >
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

