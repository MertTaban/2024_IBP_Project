@extends('examples.admin_panel_layout')

@section('title', 'Tüm Salonlar')

@section('form')
<div class="card-header">
    <h3 class="card-title">Oteller Listesi</h3>
</div>
<div class="card-body table-responsive p-0">
    <table class="table table-hover text-nowrap">
        <thead>
            <tr>
                <th>İsim</th>
                <th>Adres</th>
                <th>Telefon</th>
                <th>E-posta</th>
                <th>Aylık</th>
                <th>Aktif Üye</th>
                <th>Açıklama</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($saloons->sortBy('name') as $saloon)
                <tr>
                    <td>{{ $saloon->name }}</td>
                    <td>{{ $saloon->address }}</td>
                    <td>{{ $saloon->phone }}</td>
                    <td>{{ $saloon->email }}</td>
                    <td>{{ $saloon->monthly_price }}</td>
                    <td>{{ $saloon->active_member }}</td>
                    <td>{{ $saloon->description }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
