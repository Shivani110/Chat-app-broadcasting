<!doctype html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <title>Register</title>
</head>
<body>
     <div class="container">
          <div class="content">
               <div class="form-head">
                    <h4>Register</h4>
               </div>
               @if ($message = Session::get('success'))
                    <div class="alert alert-success col-lg-6">
                         <p>{{ $message }}</p>
                    </div>
               @endif
               
               <div class="form-body">
                    <form action="{{ url('/user_register') }}" method="post">
                         @csrf()
                         <div class="col-lg-6 py-2">
                              <label for="name" class="form-label">Name</label>
                              <input type="text" id="name" name="name" value="" class="form-control">
                              @error('name')
                              <span class="text text-danger">{{ $message }}</span>
                              @enderror   
                         </div>
                         <div class="col-lg-6 py-2">
                              <label for="email" class="form-label">Email</label>
                              <input type="text" id="email" name="email" value="" class="form-control">     
                              @error('email')
                              <span class="text text-danger">{{ $message }}</span>
                              @enderror   
                         </div>
                         <div class="col-lg-6 py-2">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" id="password" name="password" value="" class="form-control">     
                              @error('password')
                              <span class="text text-danger">{{ $message }}</span>
                              @enderror   
                         </div>
                         <div class="col-sm-6 offset-sm-3">
                              <input type="submit" class="btn btn-primary" value="Register">
                         </div>
                    </form>
               </div>
          </div>
     </div>
</body>
</html>