<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * CSRFトークン検証から除外する URI のリスト
     *
     * @var array
     */
    protected $except = [
        'api/*'
    ];
}
