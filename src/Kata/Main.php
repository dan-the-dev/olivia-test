<?php

namespace Kata;

class Main
{
    public function handle(array $list): array
    {
        $max = 0;
        $min = $list[0];

        foreach ($list as $num) {
            if ($num > $max) {
                $max = $num;
            }

            if ($num < $min) {
                $min = $num;
            }
        }

        $newList = [];
        for ($x = $min; $x <= $max; $x++) {
            if (in_array($x, $list)) {
                foreach ($list as $num) {
                    if ($num === $x) {
                        $newList[] = $x;
                    }
                }
            }
        }

        return $newList;
    }

    public function handle2(array $list): array
    {
        $max = 0;
        $min = $list[0];

        foreach ($list as $num) {
            if ($num > $max) {
                $max = $num;
            }

            if ($num < $min) {
                $min = $num;
            }
        }

        for ($x = $min; $x <= $max; $x++) {

        }

        return [];
    }
}
