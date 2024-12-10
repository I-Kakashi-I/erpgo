<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace Illuminate\Database\Eloquent {

    /**
     * @method static void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false)
     * @method static void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     * @method static void import(string $filename, string $disk = null, string $readerType = null)
     * @method static void importAs(string $filename, callable $mapping, string $disk = null, string $readerType = null)
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method static array validate(array $rules, ...$params)
     * @method static array validateWithBag(string $errorBag, array $rules, ...$params)
     * @method static bool hasValidSignature($absolute = true)
     * @method static bool hasValidRelativeSignature()
     * @method static bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method static bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     */
    class Request {}
}

namespace Illuminate\Routing {

    /**
     * @method static array|Route role($roles = [])
     * @method static array|Route permission($permissions = [])
     */
    class Route {}
}

namespace Illuminate\Support {

    /**
     * @method static $this debug()
     * @method static void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false, array $responseHeaders = [])
     * @method static void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     */
    class Collection {}
}

namespace Illuminate\Support\Facades {

    /**
     * @method static void emailVerification()
     * @method static void auth($options = [])
     * @method static void resetPassword()
     * @method static void confirmPassword()
     */
    class Route {}
}
