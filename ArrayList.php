<?php

class ArrayList
{
    function __construct(private array $arrayList = [])
    {
    }

    function add($obj): void
    {
        $this->arrayList[] = $obj;
    }

    function clear(): void
    {
        $this->arrayList = [];
    }

    function get($index)
    {
        if ($this->isInteger($index)) {
            if ($index < $this->size()) {
                return $this->arrayList[$index];
            } else {
                throw new Error("Index does not exist");
            }
        } else {
            throw new Error("Invalid index");
        }
    }

    function isInteger($index): bool
    {
        return preg_match("/^\d+$/", $index);
    }

    function size(): int
    {
        return count($this->arrayList);
    }

    function isEmpty(): bool
    {
        return count($this->arrayList) == 0;
    }

    function remove($index): void
    {
        if ($this->isInteger($index)) {
            if ($index < $this->size()) {
                array_splice($this->arrayList, $index, 1);
            } else {
                throw new Error("Index does not exist");
            }
        } else {
            throw new Error("ERROR in ArrayList.remove <br> Invalid index");
        }
    }

    function getList(): array
    {
        return $this->arrayList;
    }

}
