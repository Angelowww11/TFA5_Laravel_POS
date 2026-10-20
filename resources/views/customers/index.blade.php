@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('content')
<div class="page-heading"><div><p class="eyebrow">THE PEOPLE YOU SERVE</p><h1>Customer Accounts</h1><p class="lead">A place for every customer and the details that keep you connected.</p></div><span class="outline-tag">{{ count($customers) }} CUSTOMER RECORDS</span></div>
<section class="table-panel" aria-labelledby="directory-title"><div class="table-heading"><div><h2 id="directory-title">Customer directory</h2><p>Contact information and account status</p></div><span class="table-note">Sample accounts</span></div><div class="table-scroll"><table><thead><tr><th scope="col">Customer</th><th scope="col">Email address</th><th scope="col">Phone number</th><th scope="col">City</th><th scope="col">Status</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td><div class="identity"><span class="avatar tint-{{ $loop->index % 3 }}">{{ collect(explode(' ', $customer['name']))->map(fn ($part) => substr($part, 0, 1))->take(2)->join('') }}</span><div><strong>{{ $customer['name'] }}</strong><small>{{ $customer['id'] }}</small></div></div></td><td>{{ $customer['email'] }}</td><td>{{ $customer['phone'] }}</td><td>{{ $customer['city'] }}</td><td><span @class(['status', 'muted' => $customer['status'] === 'Inactive'])><i></i>{{ $customer['status'] }}</span></td></tr>
@endforeach
</tbody></table></div><div class="table-footer"><span>Showing {{ count($customers) }} of {{ count($customers) }} customers</span><span>Customer directory</span></div></section><p class="page-note">Sample records are provided for the Laravel foundations activity.</p>
@endsection
