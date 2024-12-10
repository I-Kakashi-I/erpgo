<?php
/** @noinspection PhpUndefinedClassInspection */
/** @noinspection PhpFullyQualifiedNameUsageInspection */

namespace Illuminate\Database\Eloquent {

    /**
     * @method void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false)
     * @method void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     * @method void import(string $filename, string $disk = null, string $readerType = null)
     * @method void importAs(string $filename, callable $mapping, string $disk = null, string $readerType = null)
     */
    class Builder {}
}

namespace Illuminate\Http {

    /**
     * @method array validate(array $rules, ...$params)
     * @method array validateWithBag(string $errorBag, array $rules, ...$params)
     * @method bool hasValidSignature($absolute = true)
     * @method bool hasValidRelativeSignature()
     * @method bool hasValidSignatureWhileIgnoring($ignoreQuery = [], $absolute = true)
     * @method bool hasValidRelativeSignatureWhileIgnoring($ignoreQuery = [])
     */
    class Request {}
}

namespace Illuminate\Routing {

    /**
     * @method array|Route role($roles = [])
     * @method array|Route permission($permissions = [])
     */
    class Route {}
}

namespace Illuminate\Support {

    /**
     * @method $this debug()
     * @method void downloadExcel(string $fileName, string $writerType = null, $withHeadings = false, array $responseHeaders = [])
     * @method void storeExcel(string $filePath, string $disk = null, string $writerType = null, $withHeadings = false)
     */
    class Collection {}
}

namespace Illuminate\Support\Facades {

    /**
     * @method void emailVerification()
     * @method void auth($options = [])
     * @method void resetPassword()
     * @method void confirmPassword()
     */
    class Route {}
}
