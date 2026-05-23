@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <h2 class="mb-4">Perfil de Usuario</h2>

    @include('profile.partials.update-profile-information-form')

    <hr class="my-4">

    @include('profile.partials.update-password-form')

    <hr class="my-4">

    @include('profile.partials.delete-user-form')

</div>

@endsection