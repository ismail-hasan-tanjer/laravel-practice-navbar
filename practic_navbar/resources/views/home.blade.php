@extends ('master')
@section('title')
    home
@endsection
@section('home')
    <section class="container">
        <h1 class="justify-content-center">Welcome to our School</h1>
    </section>
    @foreach ($products as $value)
        {{ $value['ptype'] }}
    @endforeach
    <h1 class="container" align="center">New Students Registration</h1>
    <section class="container py-5 form-control">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="username" class="form-control" id="name" aria-describedby="textHelp" placeholder="Your Name Type Here">
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Your Email Type Here">
            </div>

            <div class=" form-group">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
<br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>

@endsection
