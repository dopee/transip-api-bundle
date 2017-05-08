<?php

namespace Dopee\TransipApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('transip_api');

        $rootNode
            ->children()
                ->scalarNode('login')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('private_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->booleanNode('read_only')
                    ->isRequired()
                ->end()
                ->scalarNode('endpoint')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('proxy')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
