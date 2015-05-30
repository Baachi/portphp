<?php

namespace spec\Port\Exception;

use PhpSpec\ObjectBehavior;

class SourceNotFoundExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Port\Exception\SourceNotFoundException');
    }

    function it_is_an_exception()
    {
        $this->shouldHaveType('Exception');
        $this->shouldImplement('Port\Exception');
    }
}
