<!DOCTYPE html>
<html lang="en">
<head>

</head>
<doby>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{url('/')}}">Student Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="{{url('/home')}}">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="{{url('/create')}}">New Student</a>   
      <a class="nav-item nav-link active" href="{{url('/batch')}}" >Batch</a>
      <a class="nav-item nav-link active" href="{{url('/createbatch')}}" >New Batch</a>
       <a class="nav-item nav-link active" href="{{url('/login')}}" >Log out</a>



    </div>
  </div>
</nav>
</body>