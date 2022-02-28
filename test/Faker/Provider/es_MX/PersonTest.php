<?php

namespace Faker\Test\Provider\es_MX;

use Faker\Provider\es_MX\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class PersonTest extends TestCase
{
    public function testRfc()
    {
        $regex = '/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])([A-Z0-9]{3})?$/';

        $rfc = $this->faker->rfc;
        $rfcWithHomoclave = $this->faker->rfc(true);

        self::assertMatchesRegularExpression($regex, $rfc);
        self::assertMatchesRegularExpression($regex, $rfcWithHomoclave);
    }

    public function testCurp()
    {
        $regex = '/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/';

        $curp = $this->faker->curp;

        self::assertMatchesRegularExpression($regex, $curp);
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
