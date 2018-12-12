@extends('layouts.dashboard')
@section('content')
<div class="content-wrapper">
  <section class="content">
      <div class="error-page" style="width: 50%">
        <h2 class="headline text-red">403</h2>
        <div class="error-content">
          </br>
          </br>
          <h3> <i class="fa fa-warning text-red"></i>&nbsp;{{ $exception->getMessage() }}</h3>
        </div>
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
</div>
@endsection