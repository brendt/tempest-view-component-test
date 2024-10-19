<?php

namespace App;

use Tempest\Http\Get;
use Tempest\View\View;
use function Tempest\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view(__DIR__ . '/home.view.php');
    }
}