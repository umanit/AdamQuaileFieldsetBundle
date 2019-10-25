<?php

namespace AdamQuaile\Bundle\FieldsetBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FieldsetCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        $templateToImport = '@AdamQuaileFieldset/Types/fieldset.html.twig';

        $formResources = $container->getParameter('twig.form.resources');

        if (is_array($formResources) && !in_array($templateToImport, $formResources)) {
            $formResources[] = $templateToImport;
            $container->setParameter('twig.form.resources', $formResources);
        }

    }
}
