@extends('Layout.AdminLayout')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>User Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">User Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        
    <div class="table_responsive">
        <table>
        <thead>
            <tr>
            <th>No</th>
            <th>Profile Picture</th>
            <th>Name</th>
            <th>Email</th>
            <th>IsAdmin?</th>
            <th>Action</th>
            </tr>
        </thead>
    
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td><img src="{{asset('/image/profile/' . $user->image)}}" alt=""></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->isAdmin == '0'? "NO" : "YES"}}</td>
                <td>
                    <span class="action_btn">
                    <a href="#">Edit</a>
                    <a href="#">Remove</a>
                    </span>
                </td>
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
      </div><!-- End Left side columns -->

    </div>
  </section>

</main><!-- End #main -->
@endsection
