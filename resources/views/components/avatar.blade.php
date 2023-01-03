@php
    $avatar_url = $data->avatar ? asset('img/avatar/' . $data->avatar) : 'https://ui-avatars.com/api/?name=' . $data->username;
@endphp

<img src="{{ asset('img/avatar' . $data->avatar) }}" alt="foto profil {{ $data->username }}" width="150">
