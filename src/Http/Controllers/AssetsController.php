<?php

namespace Nuxtifyts\DashStackTheme\Http\Controllers;

use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Throwable;

readonly class AssetsController
{
    protected const CACHE_CONTROL = 'public, max-age=31536000';

    protected const NONCE_SECRET = 'qe0u8t9n3r4a5n6d7o8m9s0t1r2i3n4g5';

    protected const EXPIRES = '+1 year';

    public function __invoke(string $fileName): BinaryFileResponse
    {
        try {
            $filePath = __DIR__."/../../../resources/assets/{$fileName}";

            return response()
                ->file($filePath, headers: [
                    'Expires' => sprintf('%s GMT', gmdate('D, d M Y H:i:s', strtotime(static::EXPIRES))),
                    'Cache-Control' => static::CACHE_CONTROL,
                    'Last-Modified' => sprintf('%s GMT', gmdate('D, d M Y H:i:s', filemtime($filePath))),
                ]);
        } catch (Throwable) {
            abort(Response::HTTP_NOT_FOUND);
        }
    }
}
