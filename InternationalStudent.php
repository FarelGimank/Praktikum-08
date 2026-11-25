<?php
declare(strict_types=1);

class InternationalStudent extends Student {
    private float $internationalFee;

    public function __construct(
        string $id,
        string $name,
        string $major,
        float $baseFee,
        float $internationalFee = 2500000.0
    ) {
        parent::__construct($id, $name, $major, $baseFee);
        $this->internationalFee = $internationalFee;
    }

    public function calculateFee(): float {
        return $this->getBaseFee() + $this->internationalFee;
    }

    public function getType(): string {
        return 'international';
    }
}