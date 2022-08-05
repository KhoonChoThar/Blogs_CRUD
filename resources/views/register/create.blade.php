<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <h3 class="text-primary text-center">Register Form</h3>
                <div class="card p-4 my-3 shadow-sm">
                    <form method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name"
                                aria-describedby="emailHelp" value={{old('name')}}>
                               @error('name')
                                 <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">User Name</label>
                            <input type="text" class="form-control" name="username" id="username"
                                aria-describedby="emailHelp" value={{old('username')}}>
                                @error('username')
                                 <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"
                                aria-describedby="emailHelp" value={{old('email')}}>
                                @error('email')
                                 <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                            @error('password')
                                 <p class="text-danger">{{$message}}</p>
                               @enderror
                        </div>
                        <button type="submit" class="btn btn-primary" >Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
