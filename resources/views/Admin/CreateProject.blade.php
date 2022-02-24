@extends('Layout.AdminLayout')
@section('content')
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Create Projects</h1>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">

      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Projects</h5>

            <!-- Vertical Form -->
            <form class="row g-3" action="{{route("admin.postProject")}}" method="POST">
              @csrf
              <div class="col-12">
                <label for="inputNanme4" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="inputNanme4" name="name">
              </div>
              <div class="col-12">
                <label for="inputEmail4" class="form-label">Course Fees</label>
                <input type="text" class="form-control" id="inputEmail4" name="fees">
              </div>
              <div class="col-12">
                <label for="inputAddress" class="form-label">Course Detail</label>
                <textarea name="detail" id="" cols="30" rows="10" class="form-control"></textarea>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form><!-- Vertical Form -->

          </div>
        </div>
      </div>
    </div>
  </section>

</main><!-- End #main -->
@endsection
