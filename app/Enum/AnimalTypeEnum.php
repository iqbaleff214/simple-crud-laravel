<?php

namespace App\Enum;

enum AnimalTypeEnum: String
{
    case CAT = "kucing";
    case HAMSTER = "hamster";
    case BIRD = "burung";
    case RABBIT = "kelinci";
    case OTHER = "lainnya";
}
