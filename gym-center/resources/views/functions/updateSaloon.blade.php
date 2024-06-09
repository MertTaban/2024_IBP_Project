@extends('examples.admin_panel_layout')

@section('title', 'Salon Güncelle')

@section('form')
            <div class="card border-secondary shadow-lg">
                <form action="{{ route('updateSaloon.post') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Güncellenecek Salonun İsmi:</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="address" class="form-label">Adresi:</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="phone" class="form-label">Telefon Numarası:</label>
                            <input type="tel" name="phone" id="phone" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="form-label">E-Posta Adresi:</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="monthly_price" class="form-label">Ücret:</label>
                            <input type="number" step="0.01" name="monthly_price" id="monthly_price" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="active_member" class="form-label">Kapasite:</label>
                            <input type="number" name="active_member" id="active_member" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Açıklama:</label>
                            <textarea name="description" id="description" class="form-control" rows="2" required></textarea>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-success">Depoyu Güncelle</button>
                    </div>
                </form>
            </div>
@endsection
