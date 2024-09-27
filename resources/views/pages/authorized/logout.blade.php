<?php
use Illuminate\Support\Facades\Auth;
use function Laravel\Folio\render;

render(function () {
    Auth::guard('web')->logout();
    return redirect()->route('login');
});

