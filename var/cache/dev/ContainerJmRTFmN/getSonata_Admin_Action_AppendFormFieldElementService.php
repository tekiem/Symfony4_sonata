<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.admin.action.append_form_field_element' shared service.

include_once $this->targetDirs[3].'\\vendor\\sonata-project\\admin-bundle\\src\\Action\\AppendFormFieldElementAction.php';

return $this->services['sonata.admin.action.append_form_field_element'] = new \Sonata\AdminBundle\Action\AppendFormFieldElementAction(($this->services['twig'] ?? $this->getTwigService()), ($this->services['sonata.admin.pool'] ?? $this->getSonata_Admin_PoolService()), ($this->services['sonata.admin.helper'] ?? $this->load('getSonata_Admin_HelperService.php')));