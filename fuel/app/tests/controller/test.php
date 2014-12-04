<?php

/**
 * Tests for test
 *
 * @group App
 * @group Controller
 * @group test
 */
class Test_Controller_Test extends TestCase
{

    public function testのインデックスはウェルカムページを返すべき()
    {
        $controller = new Controller_Test(Request::forge());
        $actual = $controller->action_index();
        $expected = Response::forge(View::forge('welcome/index'));
        $this->assertEquals($expected, $actual);
    }

    public function testの下の404は404ページを返すべき()
    {
        $controller = new Controller_Test(Request::forge());
        $actual = $controller->action_404();
        $expected = Response::forge(Presenter::forge('welcome/404'), 404);
        $this->assertEquals($expected, $actual);
    }

}
