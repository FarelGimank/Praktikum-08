<?php
declare(strict_types=1);
/** PHP overloading: __call() menangani method yang TIDAK dideklarasikan. */
final class StudentPresenter {
    public function __call(string $method, array $args): string {
        if ($method !== 'showData') {
            throw new BadMethodCallException("Method tidak dikenal: $method");
        }
        if (count($args) !== 3 || !is_string($args[0]) || !is_string($args[1]) || !is_string($args[2])) {
            throw new InvalidArgumentException('showData(id, name, major) harus menerima tepat 3 argumen bertipe string.');
        }
        return 'NIM: ' . $args[0] . ', Nama: ' . $args[1] . ', Prodi: ' . $args[2];
    }
}