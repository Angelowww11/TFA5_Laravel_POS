@extends('layouts.app')
@section('title', 'User Accounts')
@section('content')
<div class="page-heading"><h1>User Accounts</h1></div><section class="table-panel"><div class="table-heading"><h2>User Accounts</h2><span>{{ $users->count() }} records</span></div><div class="table-scroll"><table><thead><tr><th>Username</th><th>Full Name</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td>{{ $user->username }}</td><td>{{ $user->full_name }}</td></tr>
@endforeach
</tbody></table></div><div class="table-footer">Records retrieved through Eloquent</div></section>
@endsection