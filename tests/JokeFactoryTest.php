<?php

namespace Ertuzio\ChuckNorrisJokes\Tests;

use Ertuzio\ChuckNorrisJokes\JokeFactory;
use PHPUnit\Framework\TestCase;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke(): void
    {
        $jokesArr = [
            'This is a joke',
        ];

        $jokes = new JokeFactory($jokesArr);
        $joke = $jokes->getRandomJoke();

        self::assertSame($jokesArr[0], $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke(): void
    {
        $jokesArr = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris does not wear a condom. Because there is no such thing as protection from Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        self::assertContains($joke, $jokesArr);
    }
}