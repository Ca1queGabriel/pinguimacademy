<?php

echo "hello, world!";

readonly class Animal {
    public function __construct(
        public string $som,
        public string $nome
    ){
    }
}
