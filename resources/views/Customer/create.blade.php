@extends('Assets.header')

@section('container')
    <form action="{{route('customer.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">First Name</label>
            <input type="text" maxlength="50" class="form-control" id="name" name="first_name" placeholder="Your Name" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" maxlength="50" class="form-control" id="last_name" name="last_name" placeholder="Your Last Name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" maxlength="50" class="form-control" id="email" name="email" placeholder="Your email" required>
        </div>
        <div class="mb-3">
            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" class="form-control" id="birth_date" name="birth_date" placeholder="Your Birth Date" required>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Avatar</label>
            <input type="file" class="form-control" id="birth_date" name="avatar" placeholder="Upload your avatar or image" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
