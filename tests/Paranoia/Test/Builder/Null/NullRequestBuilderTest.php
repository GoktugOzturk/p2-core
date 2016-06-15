<?php
namespace Paranoia\Test\Builder\Null;

use Paranoia\Builder\Null\NullRequestBuilder;
use Paranoia\Configuration\NullConfiguration;
use Paranoia\Test\BaseTestCase;
use Paranoia\Transfer\Request\NullRequest;

class NullRequestBuilderTest extends BaseTestCase
{
    /** @var \Paranoia\Builder\Null\NullRequestBuilder  */
    private $builder;

    /** @var \Paranoia\Transfer\RequestInterface  */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->builder = new NullRequestBuilder(new NullConfiguration());
        $this->request = new NullRequest();
    }

    public function testBuild()
    {
        $this->assertTrue($this->builder->build($this->request));
    }
}