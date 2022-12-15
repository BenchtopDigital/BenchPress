<?php

namespace Benchpress\Exceptions;

class ControllerNotFoundException extends \Exception {

    public function __construct(string $message = "No controller was found for the given context", int $code = 0, ?Throwable $previous = null) {
        parent::__construct(
            $message, $code, $previous
        );
    }

}