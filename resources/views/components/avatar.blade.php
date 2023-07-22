<?php
    $avatar_url = ($data->avatar) 
    ? asset('img/avatar/' . $data->avatar)    
     : "https://ui-avatars.com/api/?size=128&background=random&name=" . $data->username;
?>

<img src="{{ $avatar_url }}" class="rounded-circle mb-3" alt="foto profil {{ $data->username }}" width="96"  height="96">
