@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Serviços</h3>
        </div>
        <div class="card-body">

            <a class="btn btn-app" href="/requerimento">
                <i class="fa fa-file-alt"></i> Requerimento
            </a>
            <a class="btn btn-app" href="/aviso_ferias">
                <i class="fa fa-umbrella-beach"></i> Aviso de Férias
            </a>
            <a class="btn btn-app">
                <i class="fas fa-pause"></i> Pause
            </a>
            <a class="btn btn-app">
                <i class="fas fa-save"></i> Save
            </a>
            <a class="btn btn-app">
                <span class="badge bg-warning">3</span>
                <i class="fas fa-bullhorn"></i> Notifications
            </a>
            <a class="btn btn-app">
                <span class="badge bg-success">300</span>
                <i class="fas fa-barcode"></i> Products
            </a>
            <a class="btn btn-app">
                <span class="badge bg-purple">891</span>
                <i class="fas fa-users"></i> Users
            </a>
            <a class="btn btn-app">
                <span class="badge bg-teal">67</span>
                <i class="fas fa-inbox"></i> Orders
            </a>
            <a class="btn btn-app">
                <span class="badge bg-info">12</span>
                <i class="fas fa-envelope"></i> Inbox
            </a>
            <a class="btn btn-app">
                <span class="badge bg-danger">531</span>
                <i class="fas fa-heart"></i> Likes
            </a>
            <p>Application Buttons with Custom Colors</p>
            <a class="btn btn-app bg-secondary">
                <span class="badge bg-success">300</span>
                <i class="fas fa-barcode"></i> Products
            </a>
            <a class="btn btn-app bg-success">
                <span class="badge bg-purple">891</span>
                <i class="fas fa-users"></i> Users
            </a>
            <a class="btn btn-app bg-danger">
                <span class="badge bg-teal">67</span>
                <i class="fas fa-inbox"></i> Orders
            </a>
            <a class="btn btn-app bg-warning">
                <span class="badge bg-info">12</span>
                <i class="fas fa-envelope"></i> Inbox
            </a>
            <a class="btn btn-app bg-info">
                <span class="badge bg-danger">531</span>
                <i class="fas fa-heart"></i> Likes
            </a>
        </div>

    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
