<?php // lint >= 7.4

namespace UninitializedProperty;

class Foo
{

	private int $foo;

	private int $bar;

	private int $baz;

	public function __construct()
	{
		$this->foo = 1;
	}

	public function setBaz()
	{
		$this->baz = 1;
	}

}

class Bar
{

	private int $foo;

	public function __construct()
	{
		$this->foo += 1;
		$this->foo = 2;
	}

}

class Baz
{

	private int $foo;

	public function __construct()
	{
		$this->foo = 2;
		$this->foo += 1;
	}

}
