@extends('Layout.AdminLayout')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Cards</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Courses</li>
          <li class="breadcrumb-item active">Basic Class</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row align-items-top">
        <div class="col-lg-4">
          <!-- Card with header and footer -->
          <div class="card">
            <div class="card-header">Batch(1)</div>
            <div class="card-body">
              <h5 class="card-title">Basic Class</h5>
              Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas.
            </div>
            <div class="card-footer">
              <button class="btn btn-outline-primary">Check</button>
            </div>
          </div><!-- End Card with header and footer -->
        </div>

        <div class="col-lg-4">
            <!-- Card with header and footer -->
            <div class="card">
              <div class="card-header">Batch(2)</div>
              <div class="card-body">
                <h5 class="card-title">Basic Class</h5>
                Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas.
              </div>
              <div class="card-footer">
                <button class="btn btn-outline-primary">Check</button>
              </div>
            </div><!-- End Card with header and footer -->
        </div>

        <div class="col-lg-4">
            <!-- Card with header and footer -->
            <div class="card">
              <div class="card-header">Batch(3)</div>
              <div class="card-body">
                <h5 class="card-title">Basic Class</h5>
                Ut in ea error laudantium quas omnis officia. Sit sed praesentium voluptas.
              </div>
              <div class="card-footer">
                <button class="btn btn-outline-primary">Check</button>
              </div>
            </div><!-- End Card with header and footer -->
          </div>

      </div>
    </section>

  </main><!-- End #main -->
@endsection
