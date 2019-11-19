<?php

/**
 * 
 */

declare(strict_types=1);

namespace B13\DesignPatterns;

interface CommandInterface
 {
    /** alias for __invoke() */
    public function execute();
    public function __invoke();
 }