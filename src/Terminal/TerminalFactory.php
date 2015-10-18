<?php

namespace PhpSchool\CliMenu\Terminal;

/**
 * Class TerminalFactory
 *
 * @author Michael Woodward <mikeymike.mw@gmail.com>
 */
class TerminalFactory
{
    /**
     * @return TerminalInterface
     */
    public static function fromSystem()
    {
        if (DIRECTORY_SEPARATOR == '\\') {
            return new WindowsTerminal();
        }

        return new UnixTerminal();
    }
}

