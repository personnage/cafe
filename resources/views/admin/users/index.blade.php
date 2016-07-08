@extends('layouts.admin')

@section('title', 'Users')
@section('description', 'Users')

@section('content')
    @include('admin.users._list')
@endsection
