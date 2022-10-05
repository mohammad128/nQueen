<?php

use JetBrains\PhpStorm\Pure;

class nQueen
{
    public array $board = [
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
        [null, null, null, null, null, null, null, null],
    ];
    public array $filled = [];
    public int $counter = 1;

    public function __construct(public int $startX, public int $startY)
    {}

    public function run(): static
    {
        $this->setQueen($this->startX, $this->startY);
        for ($y=0; $y<8; $y++) {
            for ($x=0; $x<8; $x++) {
                if ($this->canSetQueen($x, $y))
                    $this->setQueen($x, $y);
            }
        }

        return $this;
    }

    #[Pure]
    public function canSetQueen(int $xLoc, int $yLoc): bool
    {
        for ($i=0; $i<count($this->filled); $i++) {
            $current_fill = $this->filled[$i];
            $current_filled_x = $current_fill['x'];
            $current_filled_y = $current_fill['y'];
            // Check X
            if (
                $current_filled_x === $xLoc ||
                $current_filled_y == $yLoc ||
                abs($xLoc-$current_filled_x) === abs($yLoc-$current_filled_y)
            )
                return false;
        }
        return true;
    }

    public function setQueen(int $x, int $y)
    {
        $this->filled[] = ['x' => $x, 'y'=>$y];
        $this->board[$y][$x] = $this->counter++;
    }

    /**
     * @return null[][]
     */
    public function getBoard(): array
    {
        return $this->board;
    }

    public function printBoard()
    {
        $this->debug($this->board);
    }

    public function printFilled()
    {
        $this->debug($this->filled);
    }

    public function debug($var)
    {
        echo "\n<pre style=\"background: #FFFF99; font-size: 10px;\">\n";
        $var = print_r($var, true);
        echo $var . "\n</pre>\n";
    }
}