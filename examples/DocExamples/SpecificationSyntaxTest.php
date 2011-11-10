<?php
/**
 * This file is part of PhpSpock.
 *
 * PhpSpock is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PhpSpock is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PhpSpock.  If not, see <http://www.gnu.org/licenses/>.
 *
 * Copyright 2011 Aleksandr Rudakov <ribozz@gmail.com>
 *
 **/

namespace DocExamples;

class SpecificationSyntaxTest extends \MyExamples\IntegrationExampleTestCase
{
    /**
     * @spec
     * @test
     */
    public function makeSureIAmStillGoodInMathematics()
    {
        then:
        2 + 2 == 4;
    }

    /**
     * @spec
     * @test
     */
    public function makeSureIAmStillGoodInMathematicsWithExcept()
    {
        expect:
        2 + 2 == 4;
    }

    /**
     * @spec
     * @test
     */
    public function assertionExamples()
    {
        expect:
        2 + 2 == 4;      // assertion - true, ignoring
        3 - 3;           // not an assertion - ignoring
        true;            // assertion - true, ignoring
        (bool) (2-2);    // assertion - expression is converted to boolean false, throwing an assertion exception
    }

}


