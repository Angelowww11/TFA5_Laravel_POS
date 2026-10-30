@extends('layouts.app')
@section('title', 'Customer Accounts')
@section('content')
<div class="page-heading"><h1>Customer Accounts</h1></div><section class="table-panel"><div class="table-heading"><h2>Customer Accounts</h2><span>{{ $customers->count() }} records</span></div><div class="table-scroll"><table><thead><tr><th>Full Name</th><th>Email</th><th>Phone</th></tr></thead><tbody>
@foreach ($customers as $customer)
<tr><td>{{ $customer->full_name }}</td><td>{{ $customer->email }}</td><td>{{ $customer->phone }}</td></tr>
@endforeach
</tbody></table></div><div class="table-footer">Records retrieved through Eloquent</div></section>
@endsection