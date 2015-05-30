<?php

namespace spec\Port\Exception;

use PhpSpec\ObjectBehavior;

class DuplicateHeadersExceptionSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(['header1', 'header2']);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Port\Exception\DuplicateHeadersException');
    }

    function it_is_a_reader_exception()
    {
        $this->shouldHaveType('Port\Exception\ReaderException');
    }

    function it_has_a_message()
    {
        $this->getMessage()->shouldReturn('File contains duplicate headers: header1, header2');
    }
}
