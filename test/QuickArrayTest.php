<?php
namespace Alirezasalehizadeh\QuickArray\Test;

use Alirezasalehizadeh\QuickArray\QuickArray;
use PHPUnit\Framework\TestCase;

class QuickArrayTest extends TestCase
{

    /** @test */
    public function canPushNewElementToQuickArrayTest()
    {
        $arr = new QuickArray(1);

        $arr->push(0, 'foo');

        $this->assertSame([0 => 'foo'], $arr->toArray());
    }

    /** @test */
    public function canPushArrayToQuickArrayTest()
    {
        $arr = new QuickArray(2);

        $newArr = $arr->pushArray([0 => 'foo', 1 => 'bar']);

        $this->assertSame([0 => 'foo', 1 => 'bar'], $newArr->toArray());
    }

    /** @test */
    public function canGetQuickArraySizeAndResizeItTest()
    {
        $arr = new QuickArray(1);

        $arr->push(0, 'foo');

        $this->assertSame(1, $arr->size());

        $arr->resize(2);

        $this->assertSame(2, $arr->size());
    }

    /** @test */
    public function canGetValueTest()
    {
        $arr = new QuickArray(1);

        $arr->push(0, 'foo');

        $this->assertSame('foo', $arr->get(0));
    }

    /** @test */
    public function canSetValueTest()
    {
        $arr = new QuickArray(1);

        $arr->push(0, 'foo');

        $arr->set(0, 'bar');

        $this->assertSame('bar', $arr->get(0));
    }

    /** @test */
    public function canUnsetElementTest()
    {
        $arr = new QuickArray(2);

        $arr->push(0, 'foo');
        $arr->push(1, 'bar');

        $arr->unset(1);

        $this->assertSame([0 => 'foo', 1 => null], $arr->toArray());
    }

    /** @test */
    public function canCheckExistsElementTest()
    {
        $arr = new QuickArray(2);

        $arr->push(0, 'foo');
        $arr->push(1, 'bar');

        $this->assertTrue($arr->exists(1));
        $this->assertFalse($arr->exists(2));
    }
}
