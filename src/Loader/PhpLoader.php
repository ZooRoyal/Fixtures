<?php declare(strict_types=1);

namespace DavidBadura\Fixtures\Loader;

use DavidBadura\Fixtures\Fixture\FixtureCollection;

/**
 *
 * @author David Badura <d.badura@gmx.de>
 */
class PhpLoader implements LoaderInterface
{
    /**
     *
     * @param  mixed $path
     * @param array $options
     * @return FixtureCollection
     */
    public function load($path, array $options = [])
    {
        $data = include $path;

        return FixtureCollection::create($data);
    }
}
