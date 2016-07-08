@extends('layouts.admin')

@section('title', sprintf('Edit %s role', $role->name))
@section('description', sprintf('Edit %s role', $role->name))

@section('content')
    <h2 class="page-header">Edit role: {{ $role->name }}</h2>
    @include('admin.roles._form')
@endsection
