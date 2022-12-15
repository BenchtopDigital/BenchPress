<?php

namespace Benchpress\Enums;

enum WordpressPageType {
    case UNSET;
    case ARCHIVE;
    case HOME;
    case PAGE;
    case POST;
    case NOT_FOUND;
}