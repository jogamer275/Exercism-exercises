<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return substr(trim($name), 0, 1);
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . ".";
    }

    public function initials(string $name): string
    {
        $name = explode(" ", $name);

        return $this->initial($name[0]) . " " . $this->initial($name[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
         $left = $this->initials($sweetheart_a);
         $right = $this->initials($sweetheart_b);

    return
        "     ******       ******\n" .
        "   **      **   **      **\n" .
        " **         ** **         **\n" .
        "**            *            **\n" .
        "**                         **\n" .
        "**     {$left}  +  {$right}     **\n" .
        " **                       **\n" .
        "   **                   **\n" .
        "     **               **\n" .
        "       **           **\n" .
        "         **       **\n" .
        "           **   **\n" .
        "             ***\n" .
        "              *";
}
}
