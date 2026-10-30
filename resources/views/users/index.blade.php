@extends('layouts.app')
@section('title', 'User Accounts')
@section('content')
<div class="page-heading"><div><p class="eyebrow">THE PEOPLE BEHIND YOUR STORE</p><h1>User Accounts</h1><p class="lead">Get to know your team and the roles they hold.</p></div><span class="outline-tag">{{ count($users) }} USER RECORDS</span></div>
<section class="table-panel" aria-labelledby="directory-title"><div class="table-heading"><div><h2 id="directory-title">Team directory</h2><p>Usernames, contact information, and roles</p></div><span class="table-note">Sample accounts</span></div><div class="table-scroll"><table><thead><tr><th scope="col">Team member</th><th scope="col">Username</th><th scope="col">Email address</th><th scope="col">Role</th><th scope="col">Status</th></tr></thead><tbody>
@foreach ($users as $user)
<tr><td><div class="identity"><span class="avatar tint-{{ $loop->index % 3 }}">{{ collect(explode(' ', $user['name']))->map(fn ($part) => substr($part, 0, 1))->take(2)->join('') }}</span><div><strong>{{ $user['name'] }}</strong><small>{{ $user['id'] }}</small></div></div></td><td>{{ $user['username'] }}</td><td>{{ $user['email'] }}</td><td><span class="role">{{ $user['role'] }}</span></td><td><span @class(['status', 'muted' => $user['status'] === 'Inactive'])><i></i>{{ $user['status'] }}</span></td></tr>
@endforeach
</tbody></table></div><div class="table-footer"><span>Showing {{ count($users) }} of {{ count($users) }} users</span><span>Team directory</span></div></section><p class="page-note">Sample records are provided for the Laravel foundations activity.</p>
@endsection
