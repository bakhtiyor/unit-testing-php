<?php

function cutString(string $source, int $limit): string{
    $len = strlen($source);
    if($limit < 5) {
        throw new InvalidArgumentException(
            'The limit is too low');
    }
    if ($len <= $limit)
        return $source;
    return substr($source, 0, $limit-3) . '...';
}
