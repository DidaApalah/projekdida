@extends('layouts.admin')
@section('title','Data Siswa')

@section('content')
 <!-- Main Content -->
 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Siswa</h1>
          </div>
         
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <a href="{{route('data-siswa.create')}}" class="btn btn-primary"> Tambah Siswa</a>
                  </div>
                  <div class="card-body p-0">
                    INPUT DATA
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
@endsection

@push('addon-script')
@endpush