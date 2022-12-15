<?php

namespace Benchpress\Enums;

enum WordpressArchiveType {
    case UNSET;
    case AUTHOR;
    case DATE;
    case CATEGORY;
    case TAG;
    case TAXONOMY;
    case CUSTOM;
}