@extends('examples.admin_panel_layout')

@section('title', 'Salon Sil')

@section('form')
<div class="card border-dark shadow-lg">
    <div class="card-header bg-dark text-white d-flex align-items-center">
        <i class="fas fa-warehouse me-2"></i>&nbsp; &nbsp;
        <h3 class="card-title mb-0">Silinecek Salonun İsmi</h3>
    </div>
    <form action="{{ route('deleteSaloon.post') }}" method="post">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name" class="form-label">Salonun İsmi:</label>
                <input name="name" id="name" class="form-control" placeholder="Depo ismini giriniz" required>
            </div>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-danger"> Salonu Sil </button>
        </div>
    </form>
</div>
@endsection
