<?php

namespace App\Exceptions;

use Exception;
<<<<<<< HEAD
=======
use Illuminate\Auth\AuthenticationException;
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
<<<<<<< HEAD
     * A list of the exception types that are not reported.
=======
     * A list of the exception types that should not be reported.
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
     *
     * @var array
     */
    protected $dontReport = [
<<<<<<< HEAD
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
=======
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
    ];

    /**
     * Report or log an exception.
     *
<<<<<<< HEAD
=======
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
<<<<<<< HEAD
=======

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('login'));
    }
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
}
