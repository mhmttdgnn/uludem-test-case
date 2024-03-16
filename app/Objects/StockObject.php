<?php

namespace App\Objects;

class StockObject
{
    public ?int $sqlsrv_id;
    public ?string $code;
    public ?string $name;

    public function setSqlsrvId(?int $sqlsrv_id)
    {
        $this->sqlsrv_id = $sqlsrv_id;
    }

    public function getSqlsrvId(): ?int
    {
        return $this->sqlsrv_id;
    }

    public function setCode(?string $code)
    {
        $this->code = $code;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setName(?string $name)
    {
        $this->name = $name;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}
