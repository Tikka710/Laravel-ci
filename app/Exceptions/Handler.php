<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
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
    ];

    /**
     * Report or log an exception.
     *
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

    /**
     * 例外の型を変換する
     */
    protected function prepareException(Exception $e)
    {
        // これを追加
        if( $e instanceof \Illuminate\Auth\Access\AuthorizationException ) {
            $e = new \Illuminate\Auth\Access\AuthorizationException(
                '許可されていません',
                $e->getCode(),
                $e // $eがもともと持っていた情報を失わないように引き継ぐ
            );
        }

        // ↑ あえてデフォルトの動作の前に実行する
        $e = parent::prepareException($e);

        return $e;
    }

}
