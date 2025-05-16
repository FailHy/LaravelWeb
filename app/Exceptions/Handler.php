<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\HttpException;

class Handler extends ExceptionHandler
{
    public function render($request, Throwable $exception)
    {
        // Cek jika error adalah 505
        if ($exception instanceof HttpException && $exception->getStatusCode() == 505) {
            return response()->view('errors.505', [], 505);
        }

        return parent::render($request, $exception);
    }
}
